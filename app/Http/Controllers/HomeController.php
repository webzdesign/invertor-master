<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Gifts;
use App\Models\InformationPages;
use App\Models\Quotation;
use App\Models\Review;
use App\Models\Slider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;
use App\Models\UserRole;
use App\Models\ContactUs;
use Stripe\PaymentIntent;
use App\Models\AddressLog;
use App\Models\SalesOrder;
use App\Models\TriggerLog;
use App\Models\DeliverTemp;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\SalesOrderItem;
use App\Models\PaymentForDelivery;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use App\Helpers\{Helper, Distance};
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\ContactUsRequest;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categorys = Category::where('status',1)->get();

        $Products = Product::with('images')->orderByRaw("FIELD(id, 13) DESC")->where('status',1)->limit(value: 4)->get();

        $tuya_d8_url = '';
        if( !empty($Products) ){
            foreach ($Products as $product) {
                if( $product['unique_number'] == '012' ){
                    $tuya_d8_url = route('productDetail', $product->slug);
                }
            }
        }
        $sale_season_icon = $this->getSeasonSellIcon();

        $is_hot_products = Product::with('images')->where('status',1)->where('is_hot',1)->orderBy('id','DESC')->limit(4)->get();

        $sliders = Slider::with('product:id,slug,name,category_id')->where('status',1)->get()->map(function($slider) {
            return [
                'title' => $slider->title,
                'product_id' => $slider->product->id,
                'gift_banners' => Gifts::select(['id','category_id','gift_title','gift_images'])->where('status',1)->where('category_id',$slider->product->category_id)->get(),
                'banner' => $slider->main_image,
                'product_slug' => $slider->product->slug,
                'product_name' => $slider->product->name,
            ];
        });

        $information = InformationPages::where('slug','Promo')->first();


        $brands = Brands::where('status',1)->get();

        return view('home', compact('Products', 'tuya_d8_url', 'sale_season_icon','is_hot_products','sliders','information','categorys','brands'));
    }

    public function produtsDataList(Request $request)
    {
        try {
            $params = $request->input('params');

            $Products = Product::with('images')
                ->when(!empty($params['catid']), function ($query) use ($params) {
                    $query->where('category_id', $params['catid']);
                })
                ->when(!empty($params['brandid']), function ($query) use ($params) {
                    $query->where('brand_id', $params['brandid']);
                })
                ->where('status', 1)
                ->orderBy('id','DESC')
                ->limit(4)
                ->get()->map(function ($product) {
                    // $product->name = Str::limit($product->name,'25','...');
                    $product->id = encrypt($product->id);
                    $product->urlLink = route('productDetail', $product->slug);
                    return $product;
                });

            return response()->json(['success' => 1, 'data' => $Products]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => 0,
                'message' => 'Something went wrong while fetching product data.',
                'error' => $e->getMessage()
            ], 200);
        }
    }

    public function shop(Request $request)
    {

        /* // for shop page paginaion
        $perPage = 8;
        $page = 1;
        if (isset($request->page) && $request->page != '') {
            $page = $request->page;
        }
        if ($page == 1) {
            $skip = 0;
        } else {
            $skip = ($page - 1) * $perPage;
        }

        $products = Product::with('images')->active();
        $totalProducts = $products->count();
        $products = $products->skip($skip)->take($perPage);

        $products = $products->get();

        $totalPages = ceil($totalProducts / $perPage);

        return view('shop', compact('products', 'totalProducts', 'totalPages', 'page')); */
        $products = Product::with('images')->active();
        $products = $products->get();
        $categoryName = '';
        $sale_season_icon = $this->getSeasonSellIcon();
        return view('shop', compact( 'products', 'sale_season_icon','categoryName' ));

    }
    public function categoryshop(Request $request){
        $getCategory =  Category::where('slug',$request->slug)->first();

        $products = Product::with('images')->where('category_id',$getCategory->id)->active();
        $products = $products->get();
        $categoryName = $getCategory->name;
        $sale_season_icon = $this->getSeasonSellIcon();
        return view('shop', compact( 'products', 'sale_season_icon','categoryName'));

    }
    public function productDetail($slug)
    {
        $product = Product::with(['images','brand_info'])->where('slug', $slug)->firstOrFail();

        // $othersProducts = Product::with('images')->where('id', '!=', $product->id)->where('status',1)->limit(4)->get();
        $sale_season_icon = $this->getSeasonSellIcon();
        $getCategory =  Category::where('id',$product->category_id)->first();

        // $reviews = Review::where('product_id',$product->id)->where('status',1)->orderBy('id','DESC')->limit(4)->get();
        return view('productDetail', compact('product', 'sale_season_icon','getCategory'));
    }

    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);
        $sz_cart_reached_status = 0;
        $product = Product::with('images')->find(decrypt($request->productId));
        if (!$product) {
            return response()->json(['success' => false]);
        }

        if (isset($cart[$product->id])) {
            if( !empty($request->total_quantity) ){
                if( $request->total_quantity <= 10 ){
                    $cart[$product->id]['quantity'] = $request->total_quantity;
                } else {
                    $cart[$product->id]['quantity'] = 10;
                }
            } else {
                $total_p_quantity = $cart[$product->id]['quantity'] + $request->quantity;
                if( $total_p_quantity <= 10 ){
                    $cart[$product->id]['quantity'] += $request->quantity;
                } else {
                    $cart[$product->id]['quantity'] = 10;
                    $sz_cart_reached_status = 1;
                }
            }
        } else {
            $total_p_quantity = $request->quantity;
            if( $total_p_quantity > 10 ){
                $total_p_quantity = 10;
                $sz_cart_reached_status = 1;
            }
            $original_price = $product->web_sales_price;
            if( !empty($product->web_sales_old_price) ){
                $original_price = $product->web_sales_old_price;
            }
            $cart[$product->id] = [
                'quantity' => $total_p_quantity,
                'name' => $product->name,
                'price' => $product->web_sales_price,
                'original_price' => $original_price,
                'image' => isset($product->images[0]) ? env('APP_Image_URL').'storage/product-images/'.$product->images[0]->name : '',
                'url' => route('productDetail', $product->slug),
                'productId' => encrypt($product->id)
            ];
        }

        session()->put('cart', $cart);
        session()->save();

        $grand_total = $total_cart_count = $sub_total = $total_discount = 0;
        $sz_cart_popup_html = '';
        if( !empty($cart) ){
            foreach ( $cart as $cp_key => $cp_val ) {
                $sz_quantity = $cp_val['quantity'];
                if( $sz_quantity > 1 ){
                    $sz_quantity .= ' Items';
                } else {
                    $sz_quantity .= ' Item';
                }
                $sz_cart_popup_html .= '<li class="d-flex border-bottom border-gray-300 py-3 position-relative">
                    <div class="bg-white rounded-lg border border-slate-100 align-self-start">
                        <a href="' . $cp_val['url'] . '">
                            <img class="pro-img" src="' . $cp_val['image'] . '" alt="bike" width="92" height="92">
                        </a>
                    </div>
                    <div class="ms-3 w-100 d-flex flex-column justify-content-between">
                        <h3 class="text-slate-900 font-inter-medium text-lg text-base-mob pe-5">' . $cp_val['name'] . '</h3>
                        <div class="d-flex nowrap align-items-center justify-content-between">

                            <div class="quantityWrapper d-flex align-items-center gap-3 ms-auto">
                                <div>
                                    <div class="count font-inter-regular text-gray-500 text-end text-sm">x ' . $sz_quantity . '</div>
                                </div>
                                <div class="add-quantity-btn d-flex align-items-center justify-content-between py-1 px-2 text-slate-900 font-hubot font-semibold text-lg border border-slate-100 rounded-pill user-select-none" data-shared-id="' . encrypt($cp_key) . '">
                                    <span class="minus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-start text-base disabled">-</span>
                                    <span class="sz_product_quantity text-xs px-2">' . $cp_val['quantity'] . '</span>
                                    <span class="plus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-end text-base">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 me-4 position-absolute right-0">
                        <button type="button" class="bg-transparent border-0 ms-auto sz_remove_cart" data-pid="' . $cp_key . '">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.625 4.125L14.1602 11.6438C14.0414 13.5648 13.9821 14.5253 13.5006 15.2159C13.2625 15.5573 12.956 15.8455 12.6005 16.062C11.8816 16.5 10.9192 16.5 8.99452 16.5C7.06734 16.5 6.10372 16.5 5.38429 16.0612C5.0286 15.8443 4.722 15.5556 4.48401 15.2136C4.00266 14.5219 3.94459 13.5601 3.82846 11.6364L3.375 4.125" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M2.25 4.125H15.75M12.0418 4.125L11.5298 3.0688C11.1897 2.3672 11.0196 2.01639 10.7263 1.79761C10.6612 1.74908 10.5923 1.7059 10.5203 1.66852C10.1954 1.5 9.80558 1.5 9.02588 1.5C8.2266 1.5 7.827 1.5 7.49676 1.67559C7.42357 1.71451 7.35373 1.75943 7.28797 1.80988C6.99123 2.03753 6.82547 2.40116 6.49396 3.12844L6.03969 4.125" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M7.125 12.375V7.875" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M10.875 12.375V7.875" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </li>
                <input type="hidden" name="productId[]" value="'. $cp_val['productId'] .'" />
                <input type="hidden" name="quantity[]" value="'. $cp_val['quantity'] .'" />';
                $product_price = $cp_val['price'] * $cp_val['quantity'];
                $grand_total += $product_price;
                if( !empty($cp_val['original_price']) ){
                    $original_price = $cp_val['original_price'] * $cp_val['quantity'];
                }
                $sub_total += $original_price;
                $total_discount += $original_price - $product_price;
                $total_cart_count += $cp_val['quantity'];
            }
        }
        /*$sub_total = env( 'SZ_CURRENCY_SYMBOL' ) . ' ' . number_format($sub_total, 2);
        $total_discount = env( 'SZ_CURRENCY_SYMBOL' ) . ' ' . number_format($total_discount, 2);
        $total_tax = $delivery_cost = env( 'SZ_CURRENCY_SYMBOL' ) . ' 0.00';
        $sz_cart_price_html = '<div class="py-4 d-flex flex-column gap-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Subtotal</h4>
                    <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">' . $sub_total . '</h3>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Discount</h4>
                    <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">' . $total_discount . '</h3>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Tax</h4>
                    <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">' . $total_tax . '</h3>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Delivery Cost</h4>
                    <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">' . $delivery_cost . '</h3>
                </div>
            </div>';*/
        $sz_cart_price_html = '';
        $msg = 'Added to cart Successfully';
        if( $sz_cart_reached_status == 1 ){
            $msg = 'Sorry, you can’t add more of this product.';
        }
        $cart_total = env( 'SZ_CURRENCY_SYMBOL' ) . ' ' . number_format($grand_total, 2);

        return response()->json([ 'success' => true, 'message' => $msg, 'cart_reached_status' => $sz_cart_reached_status, 'cart_total' => $cart_total, 'total_cart_count' => $total_cart_count, 'sz_cart_popup_html' => $sz_cart_popup_html, 'sz_cart_price_html' => $sz_cart_price_html, 'grand_total' => $grand_total ]);
    }

    public function cartSync(Request $request)
    {
        $cart = session()->get('cart', []);

        $productArr = $request->productArr;
        foreach($productArr as $pk=>$pv){
           $productExtract = explode("-",$pv);
           $id = $productExtract[0];
           $qty = $productExtract[1];
           $product = Product::with('images')->find($id);
            if (!$product) {
                return response()->json(['success' => false]);
            }

            if ($qty == 0) {
                unset($cart[$id]);
            }

            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $qty;
            }

            session()->put('cart', $cart);
            session()->save();
        }


        $cartCount = count($cart);

        return response()->json(['success' => true, 'cart' => $cart, 'cartCount' => $cartCount]);
    }
    public function cartRemove(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->pid;
        unset($cart[$id]);
        session()->put('cart', $cart);
        session()->save();
        $cartCount = count($cart);
        if ($cartCount == 0) {
            return response()->json(['success' => false, 'cart' => $cart, 'cartCount' => $cartCount]);
        }
        return response()->json(['success' => true, 'cart' => $cart, 'cartCount' => $cartCount]);
    }
    public function cart(Request $request)
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }
    public function checkout(Request $request)
    {
        $cartItems = session()->get('cart', []);
        if (count($cartItems) == 0) {
            return redirect()->route('home');
        }
        $product_ids = array_keys($cartItems);
        $othersProducts = Product::with('images')->whereNotIn('id', $product_ids)->where('status',1)->limit(2)->get();

        $countries = Country::whereIn('id', [251, 252])->get();

        return view('checkout', compact('cartItems', 'othersProducts', 'countries'));
    }

    public function orderPlace(CheckoutRequest $request)
    {
        DB::beginTransaction();

        $sz_utm_source = '';
        if( $request->hasCookie('sz_utm_source') != false ){
            $sz_utm_source = $request->cookie('sz_utm_source');
            if( strlen($sz_utm_source) > 255 ){
                $sz_utm_source = substr($sz_utm_source, 0, 255);
            }
        }

        $salesOrder = SalesOrder::create(['date' => now(), 'delivery_date' => now(), 'customer_name' => $request->customer_name, 'customer_address_line_1' => ($request->house_no ?? ''), 'customer_address_line_2' => ($request->address ?? ''),  'customer_phone' => $request->phone, 'country_dial_code' => $request->country_dial_code, 'country_iso_code' => $request->country_iso_code, 'customer_postal_code' => $request->post_code, 'status' => 1, 'confirm_status' => 0, 'purchase_source' => $sz_utm_source, 'first_name' => ($request->first_name ?? ''), 'last_name' => ($request->last_name ?? ''), 'billing_email' => ($request->billing_email ?? ''), 'billing_address' => ($request->billing_address ?? ''), 'billing_postal_code' => ($request->billing_postal_code ?? ''), 'billing_city' => ($request->billing_city ?? ''), 'city' => ($request->city ?? ""), 'customer_country' => ($request->country ?? 0)]);

        $orderItems = [];
        $orderTotal = 0;
        if( !empty($request->productId) ){
            foreach ($request->productId as $pKey => $productId) {
                $product = Product::find(decrypt($productId));
                if ($product) {
                    SalesOrderItem::create(['so_id' => $salesOrder->id, 'category_id' => $product->category_id, 'product_id' => $product->id, 'price' => $product->web_sales_price, 'qty' => $request->quantity[$pKey], 'amount' => ($product->web_sales_price) * $request->quantity[$pKey], 'remarks' => '']);
                    $orderItems[] = $product->name . ' - ' . $request->quantity[$pKey];
                    $orderTotal += ($product->web_sales_price) * $request->quantity[$pKey];
                }
            }
        }

        /* update Order No */
        $orderNo = 'SO-'.date('Y').'-'.sprintf('%05d', $salesOrder->id);
        SalesOrder::find($salesOrder->id)->update(['order_no' => $orderNo]);

        TriggerLog::create([
            'trigger_id' => 0,
            'order_id' => $salesOrder->id,
            'watcher_id' => NULL,
            'next_status_id' => 1,
            'current_status_id' => 1,
            'type' => 2,
            'time_type' => 1,
            'main_type' => 2,
            'hour' => 0,
            'minute' => 0,
            'time' => '+0 seconds',
            'executed_at' => date('Y-m-d H:i:s'),
            'executed' => 1,
            'from_status' => null,
            'to_status' => [
                'name' => 'NEW',
                'color' => '#a9ebfc'
             ]
        ]);

        if ( !empty($request->range) ) {
            $driverrangeData = json_decode($request->range);
            if(!empty($driverrangeData)) {
                $driverNames = [];
                foreach($driverrangeData as $driverid => $range) {
                    $driverDetail = User::active()->find($driverid);
                    if(!empty($driverDetail)) {
                        DeliverTemp::create([
                            'user_id' => $driverid,
                            'so_id' => $salesOrder->id,
                            'added_by' => NULL,
                            'driver_lat' => $driverDetail->lat,
                            'driver_long' => $driverDetail->long,
                            'delivery_location_lat' => $request->lat,
                            'delivery_location_long' => $request->long,
                            'range' => $range
                        ]);
                        $driverNames[] = $driverDetail->name;
                    }
                }

                $operativeManagerIds = UserRole::where('role_id', 5)->pluck('user_id')->toArray();
                foreach ($operativeManagerIds as $operativeManagerId) {
                    Notification::create([
                        'user_id' => $operativeManagerId,
                        'so_id' => $salesOrder->id,
                        'title' => 'New Order',
                        'description' => 'New order received ('.$request->post_code.').',
                        'link' => 'sales-orders'
                    ]);

                    event(new \App\Events\OrderStatusEvent('order-allocation-info', ['users' => $operativeManagerId, 'user' => $operativeManagerId, 'content' => "New order received ('.$request->post_code.').", 'link' => url('sales-orders')]));
                }

                /* send msg operative director */
                $operativeManagers = UserRole::where('role_id', 5)->get();
                $operativeManagerPhoneNumber = [];
                foreach ($operativeManagers as $operativeManager) {
                    $operativeManagerPhoneNumber[$operativeManager->user_id] = $operativeManager->user->country_dial_code.$operativeManager->user->phone;
                }

                $newOrderReceivedSID = 'HX80aeaef361411b2f442b543b57187317';
                $contentVariables = json_encode([
                    "1" => $request->post_code,
                ]);
                Helper::sendTwilioMessage($operativeManagerPhoneNumber, $contentVariables, $newOrderReceivedSID, 3, 0, $salesOrder->id);

                $websiteNewOrderSID = 'HX7bffa98d373f81acb9dcd5718e105fe2';
                $contentVariables = json_encode([
                    "1" => $salesOrder->customer_name,
                    "2" => '+'.$salesOrder->country_dial_code.$salesOrder->customer_phone,
                    "3" => $salesOrder->customer_address_line_1.' '.$salesOrder->customer_address_line_2,
                    "4" => $salesOrder->customer_postal_code,
                    "5" => implode(', ', $orderItems),
                    "6" => '£'.number_format($orderTotal, 2).' with to home delivery'
                ]);
                Helper::sendTwilioMessage($operativeManagerPhoneNumber, $contentVariables, $websiteNewOrderSID, 3, 0, $salesOrder->id);
            }
        }

        DB::commit();
        session()->forget('cart');

        return redirect()->route('orderSuccess', encrypt($salesOrder->id));
    }

    public function orderSuccess($orderId)
    {
        $order = SalesOrder::with('items')->find(decrypt($orderId));
        if (!$order) {
            return redirect()->route('home');
        }

        return view('orderSuccess', compact('order'));
    }

    public function getAvailableDriver(Request $request) {

        $validated = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'postal_code' => 'required|max:8',
            // 'house_no' => 'required'
        ], [
            'postal_code.required' => 'Postal code is required.',
            'postal_code.max' => 'Maximum 8 characters allowed for postal code.',
            // 'house_no' => 'House No is required.'
        ]);

        if ($validated->fails()) {
            return response()->json([
                "status"    => false,
                "messages"  => $validated->messages()->toArray() ?? []
            ]);
        }

        $errorWhileSavingLatLong = true;
        $latFrom = $longFrom = $toLat = $toLong = $range = '';

        $users = User::whereHas('role', function ($builder) {
            $builder->where('roles.id', 3);
        })->whereNotNull('lat')->whereNotNull('long')
        ->active()
        ->select('id', 'lat', 'long')->get()->toArray();

        try {
            if (env('GEOLOCATION_API') == 'true') {
                $key = trim(Setting::first()?->geocode_key);
                $housenumber = ($request->house_no ?? '');
                $address = trim("{$housenumber} {$request->postal_code}");
                $address = str_replace(' ', '+', $address);
                $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$key}";

                $data = json_decode(file_get_contents($url), true);

                if ($data['status'] == "OK") {
                    $lat = $data['results'][0]['geometry']['location']['lat'];
                    $long = $data['results'][0]['geometry']['location']['lng'];

                    if (!empty($lat)) {
                        $latFrom = $lat;
                        $longFrom = $long;

                        $errorWhileSavingLatLong = false;
                    }

                    AddressLog::create([
                        'postal_code' => $request->postal_code,
                        'address' => $housenumber,
                        'lat' => $lat,
                        'long' => $long,
                        'added_by' => NULL,
                    ]);
                }
            } else {
                $latFrom = ['22.3011558', '50.383458', '54.495736', '50.953966', '51.043485'];
                $longFrom = ['70.7602854', '-3.585609', '-2.202220', '-3.755581', '-2.389790'];

                $latFrom = $latFrom[array_rand($latFrom)];
                $longFrom = $longFrom[array_rand($longFrom)];

                $errorWhileSavingLatLong = false;
            }

        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Please provide accurate address.']);
        }

        $thisProduct = $request->product;

        if ($errorWhileSavingLatLong === false) {

            if (!empty($latFrom) && !empty($longFrom)) {

                if (!empty($users)) {
                    $getAllDriversDistance = [];

                    foreach ($users as $row) {
                        $getAllDriversDistance[$row['id']] = Distance::measure($latFrom, $longFrom, $row['lat'], $row['long']);
                    }
                    asort($getAllDriversDistance);
                    $result = self::getDriver($getAllDriversDistance);

                    if ($result['exists']) {
                        $getNearbyDriver = $result['drivers'];
                        $driverids = array_keys($getNearbyDriver);
                    } else {
                        $isNotAvail = true;
                        $successdrivers = [];
                        foreach ($getAllDriversDistance as $tmpDriver => $tmpRange) {
                            if (PaymentForDelivery::where(fn ($b) => $b->whereNull('driver_id')->orWhere('driver_id', ''))->where('distance', '>=', $tmpRange)->exists()) {
                                $successdrivers[$tmpDriver] = $tmpRange;
                                $isNotAvail = false;
                            }
                        }

                        if(!empty($successdrivers)) {
                            $getNearbyDriver = $successdrivers;
                            $driverids = array_keys($getNearbyDriver);
                            $isNotAvail = false;
                        }
                        if ($isNotAvail) {
                            return response()->json(['status' => false, 'message' => 'We cannot accept your order because delivery location falls outside from the driver\'s delivery zone.']);
                        }
                    }

                    return response()->json(['status' => true , 'range' => json_encode($getNearbyDriver), 'lat' => $latFrom, 'long' => $longFrom]);

                } else {
                    return response()->json(['status' => false, 'message' => 'We cannot accept your order because delivery location falls outside from the driver\'s delivery zone.']);
                }

            } else {
                return response()->json(['status' => false, 'message' => 'Please provide accurate address.']);
            }

        } else {
            return response()->json(['status' => false, 'message' => 'Please provide accurate address.']);
        }
    }

    private static function getDriver($drivers) {
        if (empty($drivers)) {
            return ['exists' => false];
        } else {
            $successDrivers = [];
            foreach($drivers as $driverid=>$driverdetials) {
                $paymentForDelivery = PaymentForDelivery::where('driver_id', $driverid)->where('distance', '>=', $driverdetials);
                if($paymentForDelivery->exists()) {
                    $successDrivers[$driverid] = $driverdetials;
                } else {
                    $avaragepaymentForDelivery = PaymentForDelivery::where(fn ($b) => $b->whereNull('driver_id')->orWhere('driver_id', ''))->where('distance', '>=', $driverdetials);
                    if($avaragepaymentForDelivery->exists()){
                        $successDrivers[$driverid] = $driverdetials;
                    }
                }
            }
        }
        if(!empty($successDrivers)) {
            return ['exists' => true, 'drivers' => $successDrivers];
        } else {
            return ['exists' => false];
        }
    }

    public function contactUsStore(ContactUsRequest $request)
    {
        $name = $request->sz_firstname;
        if( !empty($request->sz_lastname) ){
            $name .= ' ' . $request->sz_lastname;
        }

        $cleanMessage = '';
        if(!empty($request->sz_message)) {
            $rawMessage = $request->sz_message;
            $cleanMessage = mb_convert_encoding($rawMessage, 'UTF-8', 'UTF-8');
            $cleanMessage = preg_replace('/[^\P{C}\n]+/u', '', $cleanMessage);
        }

        $contact = ContactUs::create([ 'name' => $name, 'email' => $request->sz_email, 'phone' => $request->sz_phone, 'message' => $cleanMessage, 'form' => $request->whichform, 'country_dial_code' => $request->country_dial_code, 'country_iso_code' => $request->country_iso_code ]);

        $this->sendContactEmailToAdmin($contact);

        return redirect()->back()->with('success', __('Thank you for contacting us!'));
    }

    protected function sendContactEmailToAdmin($contact)
    {
        $adminEmail = 'invertor.sales@gmail.com';

        if($contact->form == 'contact_us_form'){
            $subject = 'New Contact Us Message';
        } else {
            $subject = 'New Promo Message';
        }

        Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($adminEmail, $subject) {
            $message->to($adminEmail)->subject($subject);
        });
    }

    public static function generateProductXML()
    {
        if ( !file_exists(storage_path('xml')) ) {
            mkdir(storage_path('xml'), 0755, true);
        }
        $products = Product::with('images')->where('status', '1')->orderBy('id', 'desc')->get();
        $xml = new \SimpleXMLElement('<products/>');

        foreach ($products as $key => $product) {
            $product_name =  htmlspecialchars($product->name);
            $product_name = strlen($product_name) > 150 ? substr($product_name, 0, 150) : $product_name;
            // $description = htmlspecialchars(html_entity_decode(strip_tags($product->description)));
            // $description = strlen($description) > 5000 ? substr($description, 0, 5000) : $description;
            $product_link = route('productDetail', $product->slug);
            $product_main_img = !empty($product->images->first()->name) ? env( 'APP_Image_URL' ) . 'storage/product-images/' . $product->images->first()->name : '';
            $additional_image_link = !empty($product->images->get(1)->name) ? env( 'APP_Image_URL' ) . 'storage/product-images/' . $product->images->get(1)->name : '';
            // $price = !empty($product->web_sales_old_price) ? $product->web_sales_old_price : $product->web_sales_price;
            // $price .= ' POUND';
            // $sales_price = $product->web_sales_price . ' POUND';

            $product_details = $xml->addChild('product');
            $product_details->addChild('id', time() . $key);
            $product_details->addChild('title', $product_name);
            // $product_details->addChild('description', $description);
            $product_details->addChild('link', $product_link);
            $product_details->addChild('image_link', $product_main_img);
            $product_details->addChild('additional_image_link', $additional_image_link);
            // $product_details->addChild('availability', 'In Stock');
            // $product_details->addChild('price', $price);
            // $product_details->addChild('sales_price', $sales_price);
            // $product_details->addChild('brand', $product->brand);
            // $product_details->addChild('sku', $product->sku);
            // $product_details->addChild('gtin', $product->gtin);
            // $product_details->addChild('mpn', $product->mpn);
            // $product_details->addChild('condition', 'New');
            // $product_details->addChild('shipping', '0 POUND');
            // $product_details->addChild('tax', 'no');
        }

        $xmlContent = $xml->asXML();

        file_put_contents(base_path('products.xml'), $xmlContent);
    }

    public static function getSeasonSellIcon()
    {
        $date = now();
        $month = $date->month;

        if ( $month == 3 || $month == 4 || $month == 5) {
            return '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="25" height="25" rx="12.5" fill="#3DBD20"/><path d="M17.2213 6.76259C16.9235 6.84529 15.7322 7.01067 14.5816 7.11699C11.0077 7.47139 9.53218 7.92029 8.21907 9.05436C7.29854 9.85766 6.90596 10.6846 6.70291 12.1967C6.52692 13.508 6.62168 13.9096 7.08195 13.9096C7.43392 13.9096 7.46099 13.8624 7.42038 13.2008C7.3933 12.5629 7.67759 11.1926 7.96187 10.6373C8.34091 9.88129 9.34266 9.03074 10.2361 8.67634C11.2785 8.26288 12.375 8.06205 14.6628 7.82579C15.7052 7.73128 16.8017 7.61315 17.0859 7.56589L17.6139 7.49502L17.5191 8.62909C17.1672 13.1063 14.4597 16.036 10.6964 16.036C9.61341 16.036 8.65226 15.847 8.54397 15.6107C8.50335 15.528 8.74702 15.0201 9.05838 14.4766C9.50511 13.7206 9.92476 13.2481 10.8724 12.4211C11.5357 11.8423 12.4427 11.1689 12.8623 10.9563C13.7287 10.5074 13.8912 10.2948 13.5933 10.023C13.4038 9.86948 13.3361 9.88129 12.9029 10.0821C12.0501 10.472 10.3173 11.736 9.61341 12.4802C8.16492 13.9923 7.28501 15.8824 7.28501 17.4654C7.28501 18.0915 7.33915 18.3041 7.48806 18.3514C7.86711 18.4813 8.09724 18.1624 8.09724 17.5245C8.09724 17.1937 8.13785 16.8039 8.17846 16.6739C8.24615 16.4258 8.27322 16.4258 8.8824 16.5912C10.4663 17.0165 12.7405 16.7093 14.2431 15.8706C16.7475 14.453 18.1418 11.8895 18.3449 8.33376C18.4532 6.53814 18.372 6.44364 17.2213 6.76259Z" fill="white"/></svg>'; // spring
        } elseif ( $month == 6 || $month == 7 || $month == 8) {
            return '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="25" height="25" rx="12.5" fill="#FFD208"/><path d="M15.4163 12.5C15.4163 14.1109 14.1105 15.4167 12.4997 15.4167C10.8888 15.4167 9.58301 14.1109 9.58301 12.5C9.58301 10.8892 10.8888 9.58337 12.4997 9.58337C14.1105 9.58337 15.4163 10.8892 15.4163 12.5Z" stroke="white"/><path d="M12.5003 6.66663V7.54163M12.5003 17.4583V18.3333M16.625 16.6249L16.0062 16.0061M8.99406 8.99369L8.37534 8.37498M18.3337 12.5H17.4587M7.54199 12.5H6.66699M16.6253 8.37504L16.0065 8.99376M8.99435 16.0062L8.37563 16.6249" stroke="white" stroke-linecap="round"/></svg>'; // summer
        } elseif ( $month == 9 || $month == 10 || $month == 11) {
            return '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="25" height="25" rx="12.5" fill="#F17103"/><path d="M8.32382 10.8942L8.44524 10.7017C8.44524 10.7017 8.81298 10.9302 8.92255 11.0197C9.04565 11.1205 9.37555 11.4634 9.37555 11.4634L9.74772 10.8846C10.0228 11.204 10.2562 11.2314 10.4758 11.4802C10.8155 11.8653 10.8089 12.3551 10.9854 12.6269C11.0776 12.7689 11.4303 13.0203 11.4303 13.0203C11.4303 13.0203 11.4223 12.6502 11.3394 12.4999C11.1128 12.0898 10.7657 11.767 10.6616 11.55C10.5753 11.37 10.5481 11.3273 10.3462 10.9777L10.5323 10.8605C10.5323 10.8605 10.3474 10.6149 10.1844 10.216C9.97739 9.70919 9.8689 9.0525 9.8689 9.0525C9.8689 9.0525 10.4426 9.18669 10.7346 9.38729C11.0436 9.59979 11.4141 9.79741 11.4141 9.79741C11.4869 9.29523 11.3829 9.17083 11.3892 8.83666C11.3954 8.5093 11.4789 8.30387 11.4789 8.30387L11.9076 8.48328C11.9076 8.48328 11.9624 8.05283 12.0775 7.74667C12.1925 7.4405 12.571 6.90002 12.571 6.90002C12.571 6.90002 12.6201 7.37607 12.6843 7.73006C12.7483 8.08393 12.8737 8.28602 12.8737 8.28602L13.1615 8.06485C13.1609 8.08431 13.2219 8.26062 13.3662 8.5964C13.5013 8.91038 13.3536 9.32323 13.4931 9.44602C13.5677 9.51157 13.7841 9.24529 14.1565 9.05262C14.5772 8.83492 15.0707 8.45701 15.0707 8.45701C15.0707 8.45701 15.0302 9.29671 14.8846 9.82269C14.739 10.3488 14.278 10.6012 14.375 10.777C14.4091 10.8388 14.5407 10.8022 14.5407 10.8022C14.5407 10.8022 14.3086 11.4963 14.1889 11.706C14.1025 11.8572 13.8408 12.0958 13.7601 12.2502C13.6845 12.3948 13.5901 12.9617 13.5901 12.9617C13.5901 12.9617 13.7917 12.7482 14.0431 12.5C14.2454 12.3004 14.4072 11.6894 14.6664 11.4022C14.9857 11.0487 15.5721 10.5999 15.5721 10.5999C15.5721 10.5999 15.6802 11.3146 15.8471 11.2625C15.9671 11.225 15.8342 11.1887 16.2353 10.9347C16.6367 10.6806 16.8016 10.6501 16.8016 10.6501C16.8016 10.6501 16.8666 10.9522 16.9311 10.918C17.1172 10.8189 18.1004 10.6783 18.1004 10.6783C18.1004 10.6783 17.9238 11.1125 17.762 11.4411C17.6002 11.7697 17.3194 12.2238 17.3194 12.2238L17.7077 12.4414C17.7077 12.4414 17.5102 12.6275 17.1818 12.8195C16.8038 13.0405 16.7372 13.0265 16.7288 13.1878C16.7152 13.4496 17.5945 13.6469 17.5945 13.6469C17.5945 13.6469 16.9069 14.1098 16.5509 14.2425C16.2413 14.3579 15.6598 14.3329 15.3698 14.3681C15.0799 14.4031 14.9573 14.5941 14.9573 14.7351C14.9573 14.8761 15.8284 14.9983 16.2436 15.1549C16.6586 15.3117 17.6349 15.7995 17.6349 15.7995C17.6349 15.7995 16.7532 16.235 16.3487 16.2421C15.9442 16.2491 15.6449 16.0589 15.5722 16.1762C15.5357 16.2349 15.6531 16.4427 15.6531 16.4427C15.6531 16.4427 15.3296 16.5109 14.9088 16.5109C14.4881 16.5109 14.2644 16.2141 14.0836 16.3268C13.9865 16.3874 14.0513 16.7942 14.0513 16.7942C14.0513 16.7942 13.5254 16.7716 13.2343 16.5109C12.9432 16.2503 12.6638 15.7576 12.6638 15.7576L13.0157 18.1H12.7892L12.4656 15.4898C12.4656 15.4898 12.32 16.0422 11.5758 16.2251C11.0312 16.3589 10.8397 16.4775 10.8397 16.4775C10.8397 16.4775 10.8586 16.0867 10.7507 16.0172C10.5845 15.9104 10.3655 16.0926 10.0227 16.2084C9.67982 16.324 9.34082 16.2203 9.34082 16.2203C9.34082 16.2203 9.51014 16.0905 9.44859 16.0401C9.38944 15.9915 9.01511 16.097 8.67982 16.0912C8.31256 16.085 7.69287 15.9405 7.69287 15.9405C7.69287 15.9405 8.26813 15.4827 8.61684 15.205C8.96554 14.9276 9.92554 14.6179 9.92554 14.6179C9.92554 14.6179 9.87705 14.4435 9.55349 14.4338C9.22994 14.4241 8.55852 14.3109 8.10552 14.1506C7.65252 13.9902 7.40177 13.5131 7.40177 13.5131C7.41758 13.5055 7.5026 13.4021 7.71251 13.2941C7.88997 13.2028 8.11965 13.2187 8.18443 13.1088C8.23293 13.0264 7.85573 12.7518 7.74161 12.627C7.59348 12.4651 7.29256 11.9249 7.29256 11.9249C7.29256 11.9249 7.59815 11.9669 7.64449 11.8891C7.74448 11.7209 7.58714 11.7542 7.40991 11.2793C7.3419 11.0973 7.29531 10.8303 7.24011 10.6515C7.15114 10.3638 6.90039 10.1493 6.90039 10.1493C6.90039 10.1493 7.23269 10.1157 7.48344 10.2998C7.66629 10.4343 8.32382 10.8942 8.32382 10.8942ZM8.08121 11.3964C8.15402 11.5249 8.21868 11.6391 8.21868 11.6391L7.9841 11.7229L8.31579 11.7062L8.7203 12.1916C8.7203 12.1916 8.53014 12.3214 8.39674 12.3088C8.26322 12.2963 7.97152 12.2978 7.97152 12.2978C7.97152 12.2978 8.25508 12.4093 8.41291 12.401C8.57061 12.3927 8.81741 12.2755 8.81741 12.2755L9.23808 12.7025C9.23808 12.7025 8.99547 12.9033 8.87405 12.9452C8.75275 12.9871 8.502 12.9871 8.502 12.9871C8.502 12.9871 8.71227 13.0498 8.86603 13.0121C9.01978 12.9745 9.3595 12.7777 9.3595 12.7777L10.2008 13.5478C10.2008 13.5478 9.57792 13.7487 9.19773 13.7697C8.81753 13.7906 8.40093 13.6692 8.40093 13.6692C8.40093 13.6692 8.7852 13.87 9.23006 13.8491C9.67503 13.8282 10.3221 13.6147 10.3221 13.6147L10.9127 14.188C10.9127 14.188 10.7753 14.2677 10.4475 14.276C10.7185 14.4057 11.0048 14.2321 11.0048 14.2321C11.0048 14.2321 11.1686 14.373 11.4142 14.5521C11.6598 14.7313 12.1826 15.1129 12.1826 15.1129C12.1826 15.1129 11.6245 15.2594 11.3656 15.2552C11.1067 15.251 11.0096 15.1964 10.7427 15.1881C10.4758 15.1798 9.89333 15.2802 9.89333 15.2802C9.89333 15.2802 9.71539 15.1044 9.60211 15.0877C9.48883 15.0709 9.22191 15.1546 9.22191 15.1546C9.22191 15.1546 9.38776 15.1295 9.53733 15.1714C9.68701 15.2133 9.77191 15.3472 9.77191 15.3472L9.2946 15.481C9.2946 15.481 9.02361 15.5062 8.8416 15.5398C8.65958 15.5732 8.38453 15.7323 8.38453 15.7323C8.38453 15.7323 8.65779 15.6551 8.82771 15.6216C8.99763 15.5881 9.28251 15.5857 9.28251 15.5857C9.28251 15.5857 9.29328 15.7085 9.17198 15.784C9.39854 15.7548 9.38369 15.5648 9.38369 15.5648C9.38369 15.5648 9.70198 15.4569 9.85286 15.4309C10.0037 15.4048 10.1926 15.3723 10.1926 15.3723C10.1926 15.3723 10.1734 15.4065 10.1213 15.5497C10.0692 15.6927 9.94854 15.7391 9.94854 15.7391C9.94854 15.7391 10.1357 15.7544 10.2038 15.6204C10.2719 15.4864 10.3382 15.3555 10.3382 15.3555C10.3382 15.3555 10.5242 15.3158 10.7265 15.3304C10.9289 15.345 11.1157 15.3671 11.3494 15.3472C11.5832 15.3273 11.94 15.2969 11.94 15.2969C11.94 15.2969 11.9198 15.3347 11.8672 15.456C11.8147 15.5773 11.6003 15.8075 11.6003 15.8075C11.6003 15.8075 11.9333 15.603 11.9967 15.4979C12.06 15.3928 12.1585 15.23 12.1585 15.23L12.2799 15.2217C12.2799 15.2217 12.4227 15.2688 12.4537 15.307C12.4775 15.3358 12.4934 15.4533 12.4934 15.4533L12.6506 15.7116L12.594 15.3573L12.741 15.272C12.741 15.272 13.2384 15.4436 13.4286 15.4812C13.6188 15.519 13.8897 15.5063 13.8897 15.5063C13.8897 15.5063 13.9141 15.816 14.1891 15.9166C14.007 15.6445 14.0112 15.4812 14.0112 15.4812L15.1194 15.5817C15.1194 15.5817 15.2974 15.8245 15.4673 15.8161C15.3054 15.6738 15.265 15.5985 15.265 15.5985C15.265 15.5985 16.126 15.5975 16.3127 15.6111C16.4993 15.6245 16.8305 15.7196 16.8305 15.7196C16.8305 15.7196 16.5585 15.5519 16.2964 15.5358C16.0343 15.5197 15.4673 15.5568 15.4673 15.5568C15.4673 15.5568 15.5076 15.4228 15.6291 15.3559C15.7505 15.2889 16.0579 15.2721 16.0579 15.2721C16.0579 15.2721 15.6736 15.222 15.5564 15.2972C15.439 15.3725 15.338 15.4981 15.338 15.4981L14.432 15.4144C14.432 15.4144 14.3912 15.1485 14.5937 14.954C14.3389 15.0251 14.3511 15.3725 14.3511 15.3725C14.3511 15.3725 13.9386 15.4017 13.6069 15.3725C13.2752 15.3433 12.8304 15.1717 12.8304 15.1717L13.8901 14.2592C13.8901 14.2592 14.1327 14.41 14.2703 14.343C14.06 14.2678 13.9952 14.184 13.9952 14.184L14.5697 13.6484C14.5697 13.6484 14.8984 13.7979 15.3219 13.8409C15.8599 13.8952 16.3089 13.799 16.3089 13.799C16.3089 13.799 15.779 13.799 15.3988 13.7572C15.0185 13.7153 14.6594 13.5476 14.6594 13.5476L15.4837 12.9202C15.4837 12.9202 16.0418 13.1295 16.224 13.029C15.8317 12.9704 15.5484 12.845 15.5484 12.845L15.7749 12.619C15.7749 12.619 16.1633 12.6817 16.4625 12.6776C16.7619 12.6735 16.9897 12.5298 16.9897 12.5298C16.9897 12.5298 16.6828 12.5855 16.4363 12.5897C16.1895 12.5938 15.8275 12.5394 15.8275 12.5394C15.8275 12.5394 16.3332 12.0288 16.5434 11.807C16.7538 11.5852 17.5183 11.0788 17.5183 11.0788C17.5183 11.0788 16.6851 11.5266 16.4545 11.7653C16.224 12.0039 15.4918 12.7615 15.4918 12.7615L14.9175 13.1464C14.9175 13.1464 14.8787 12.6188 14.8932 12.3639C14.9094 12.0792 14.9566 11.805 15.2734 11.1962C15.2734 11.1962 14.8811 11.7445 14.8286 12.3346C14.7916 12.7493 14.8286 13.2386 14.8286 13.2386L14.3442 13.6364C14.3442 13.6364 14.3032 13.4602 14.3032 13.2091C14.3032 12.958 14.3511 12.5816 14.3511 12.5816C14.3511 12.5816 14.2258 12.9165 14.2217 13.1969C14.2177 13.4773 14.2541 13.7744 14.2541 13.7744L12.6032 15.1297L12.6112 13.3467C12.6112 13.3467 12.9186 13.2254 12.8943 13.0705C12.7102 13.2275 12.5789 13.2044 12.5789 13.2044V12.4344L12.6881 11.7229L13.315 11.0282C13.315 11.0282 14.035 11.0783 14.1078 10.8692C13.7155 10.9947 13.3959 10.9194 13.3959 10.9194C13.3959 10.9194 13.8773 10.2142 14.0593 9.95676C14.3344 9.56745 14.7064 9.22014 14.7064 9.22014C14.7064 9.22014 14.3383 9.45866 13.9622 9.92318C13.7762 10.1529 13.2179 10.9946 13.2179 10.9946L12.6516 11.5888L12.6353 10.5592L12.5545 9.4459C12.5545 9.4459 12.7283 9.26599 12.8295 9.11941C12.9307 8.97295 12.9508 8.80964 12.9508 8.80964C12.9508 8.80964 12.8792 8.94706 12.7688 9.08583C12.6452 9.2412 12.5383 9.31604 12.5383 9.31604C12.5383 9.31604 12.4233 8.93045 12.4088 8.76355C12.3944 8.59678 12.4008 8.11491 12.4008 8.11491C12.4008 8.11491 12.3238 8.60929 12.3442 8.78449C12.3645 8.95969 12.4493 9.41232 12.4493 9.41232C12.4493 9.41232 12.2795 9.32856 12.1338 9.21977C11.9882 9.11098 11.7454 8.78449 11.7454 8.78449C11.7454 8.78449 11.9113 9.16959 12.0771 9.30341C12.2432 9.43772 12.5003 9.57166 12.5003 9.57166V10.4672C12.5003 10.4672 12.2958 10.4757 11.9481 10.1911C12.1301 10.5677 12.5264 10.5929 12.5264 10.5929L12.5548 11.7145L12.4658 12.2168C12.4658 12.2168 11.9505 11.7712 11.6811 11.4133C11.4118 11.0552 10.5163 9.86469 10.5163 9.86469L11.4814 11.3472C11.4814 11.3472 11.4087 11.4305 11.0163 11.3091C11.3926 11.5476 11.5679 11.48 11.5679 11.48L12.4626 12.4003L12.4254 13.3467C12.4254 13.3467 12.2556 13.2881 12.1139 13.2106C11.9819 13.1384 11.8389 13.0056 11.8389 13.0056C11.8389 13.0056 11.975 13.2102 12.0937 13.2881C12.2123 13.3659 12.4254 13.5058 12.4254 13.5058L12.4658 15.1714C12.4658 15.1714 11.3899 14.3929 11.0502 14.1335C10.7105 13.8739 10.2655 13.3968 10.2655 13.3968C10.2655 13.3968 10.298 12.6729 10.2655 12.4259C10.2332 12.179 9.99236 11.6753 9.99236 11.6753C9.99236 11.6753 10.1604 12.1957 10.1927 12.4175C10.2251 12.6393 10.1927 13.3634 10.1927 13.3634L9.78819 12.995L9.30286 12.5513C9.30286 12.5513 9.35028 12.4002 9.35028 12.2118C9.35028 12.0234 9.26299 11.8333 9.26299 11.8333C9.3237 12.1681 9.28562 12.0866 9.28562 12.1852C9.28562 12.3274 9.21389 12.4718 9.21389 12.4718L8.84184 12.0994C8.84184 12.0994 8.84986 11.8524 8.84184 11.6473C8.83382 11.4422 8.72868 11.3273 8.72868 11.3273C8.72868 11.3273 8.77718 11.4548 8.78532 11.6139C8.79334 11.773 8.7367 12.0324 8.7367 12.0324C8.7367 12.0324 8.24478 11.4831 8.1624 11.3879C8.08001 11.2926 7.6027 10.7554 7.6027 10.7554C7.6027 10.7554 8.0084 11.2679 8.08121 11.3964Z" fill="white"/></svg>'; // autumn
        } else {
            return '<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="0.5" width="25" height="25" rx="12.5" fill="#1EADE9"/><path d="M17.75 14.3125L17.2652 13.9281C16.7134 13.4906 16.4375 13.2718 16.4375 13C16.4375 12.7282 16.7134 12.5094 17.2652 12.0719L17.75 11.6875M7.25 11.6875L7.73484 12.0719C8.28661 12.5094 8.5625 12.7282 8.5625 13C8.5625 13.2718 8.28661 13.4906 7.73484 13.9281L7.25 14.3125" stroke="white" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9999 18.25L14.0911 17.6324C14.195 16.9294 14.2468 16.578 14.4841 16.4408C14.7214 16.3037 15.0514 16.4344 15.7114 16.6959L16.2913 16.9256M10.9995 7.75L10.9082 8.36763C10.8044 9.07054 10.7525 9.422 10.5152 9.55914C10.2779 9.69629 9.94793 9.56557 9.28793 9.30412L8.70801 9.07439" stroke="white" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.41699 16.9268L9.04135 16.6969C9.75189 16.4352 10.1072 16.3043 10.3625 16.4413C10.6179 16.5783 10.6736 16.9297 10.785 17.6325L10.8829 18.25M16.5837 9.07315L15.9593 9.30312C15.2488 9.56484 14.8935 9.6957 14.6381 9.55868C14.3828 9.42166 14.3271 9.07028 14.2157 8.36751L14.1178 7.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.5837 13.0002H8.41699M14.542 16.4999L10.4587 9.5M14.542 9.50015L10.4587 16.5" stroke="white" stroke-linejoin="round"/></svg>'; // winter
        }
    }

    public function stripePayment(CheckoutRequest $request)
    {

        DB::beginTransaction();

        $sz_utm_source = '';
        if( $request->hasCookie('sz_utm_source') != false ){
            $sz_utm_source = $request->cookie('sz_utm_source');
            if( strlen($sz_utm_source) > 255 ){
                $sz_utm_source = substr($sz_utm_source, 0, 255);
            }
        }

        $salesOrder = SalesOrder::create(['date' => now(), 'delivery_date' => now(), 'customer_name' => $request->customer_name, 'customer_address_line_1' => $request->house_no, 'customer_address_line_2' => $request->address,  'customer_phone' => $request->phone, 'country_dial_code' => $request->country_dial_code, 'country_iso_code' => $request->country_iso_code, 'customer_postal_code' => $request->post_code, 'status' => 1, 'confirm_status' => 0, 'purchase_source' => $sz_utm_source, 'payment_type' => 'STRIPE', 'first_name' => $request->first_name, 'last_name' => $request->last_name, 'billing_email' => $request->billing_email, 'billing_address' => $request->billing_address, 'billing_postal_code' => $request->billing_postal_code, 'billing_city' => $request->billing_city, 'city' => $request->city, 'customer_country' => $request->country]);

        $orderItems = [];
        $orderTotal = 0;
        $onlineDiscount = 0;
        if( !empty($request->productId) ){
            foreach ($request->productId as $pKey => $productId) {
                $product = Product::find(decrypt($productId));
                if ($product) {
                    $discount = $request->quantity[$pKey] * 35;
                    $onlineDiscount += $discount;
                    $amount = ($product->web_sales_price) * $request->quantity[$pKey] - $discount;
                    SalesOrderItem::create(['so_id' => $salesOrder->id, 'category_id' => $product->category_id, 'product_id' => $product->id, 'price' => $product->web_sales_price, 'qty' => $request->quantity[$pKey], 'online_discount' => $discount, 'amount' => $amount, 'remarks' => '']);
                    $orderItems[] = $product->name . ' - ' . $request->quantity[$pKey];
                    $quantities[] = $request->quantity[$pKey];
                    $orderTotal += ($product->web_sales_price) * $request->quantity[$pKey];
                }
            }
        }

        $finalPaidAmount = $orderTotal - $onlineDiscount;

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $chargeResponse = Charge::create ([
                "amount" => $finalPaidAmount * 100,
                "currency" => "gbp",
                "source" => $request->stripeToken,
        ]);

        if($chargeResponse) {
            /* update Order No */
            $orderNo = 'SO-'.date('Y').'-'.sprintf('%05d', $salesOrder->id);
            SalesOrder::find($salesOrder->id)->update(['order_no' => $orderNo, 'payment_id' => $chargeResponse->id]);

            TriggerLog::create([
                'trigger_id' => 0,
                'order_id' => $salesOrder->id,
                'watcher_id' => NULL,
                'next_status_id' => 1,
                'current_status_id' => 1,
                'type' => 2,
                'time_type' => 1,
                'main_type' => 2,
                'hour' => 0,
                'minute' => 0,
                'time' => '+0 seconds',
                'executed_at' => date('Y-m-d H:i:s'),
                'executed' => 1,
                'from_status' => null,
                'to_status' => [
                    'name' => 'NEW',
                    'color' => '#a9ebfc'
                 ]
            ]);

            if ( !empty($request->range) ) {
                $driverrangeData = json_decode($request->range);
                if(!empty($driverrangeData)) {
                    $driverNames = [];
                    foreach($driverrangeData as $driverid => $range) {
                        $driverDetail = User::active()->find($driverid);
                        if(!empty($driverDetail)) {
                            DeliverTemp::create([
                                'user_id' => $driverid,
                                'so_id' => $salesOrder->id,
                                'added_by' => NULL,
                                'driver_lat' => $driverDetail->lat,
                                'driver_long' => $driverDetail->long,
                                'delivery_location_lat' => $request->lat,
                                'delivery_location_long' => $request->long,
                                'range' => $range
                            ]);
                            $driverNames[] = $driverDetail->name;
                        }
                    }

                    $operativeManagerIds = UserRole::where('role_id', 5)->pluck('user_id')->toArray();
                    foreach ($operativeManagerIds as $operativeManagerId) {
                        Notification::create([
                            'user_id' => $operativeManagerId,
                            'so_id' => $salesOrder->id,
                            'title' => 'New Order',
                            'description' => 'New order received ('.$request->post_code.').',
                            'link' => 'sales-orders'
                        ]);

                        event(new \App\Events\OrderStatusEvent('order-allocation-info', ['users' => $operativeManagerId, 'user' => $operativeManagerId, 'content' => "New order received ('.$request->post_code.').", 'link' => url('sales-orders')]));
                    }

                    /* send msg operative director */
                    $operativeManagers = UserRole::where('role_id', 5)->get();
                    $operativeManagerPhoneNumber = [];
                    foreach ($operativeManagers as $operativeManager) {
                        $operativeManagerPhoneNumber[$operativeManager->user_id] = $operativeManager->user->country_dial_code.$operativeManager->user->phone;
                    }

                    $newOrderReceivedSID = 'HX80aeaef361411b2f442b543b57187317';
                    $contentVariables = json_encode([
                        "1" => $request->post_code,
                    ]);
                    Helper::sendTwilioMessage($operativeManagerPhoneNumber, $contentVariables, $newOrderReceivedSID, 3, 0, $salesOrder->id);

                    $websiteNewOrderSID = 'HX7bffa98d373f81acb9dcd5718e105fe2';
                    $contentVariables = json_encode([
                        "1" => $salesOrder->customer_name,
                        "2" => '+'.$salesOrder->country_dial_code.$salesOrder->customer_phone,
                        "3" => $salesOrder->customer_address_line_1.' '.$salesOrder->customer_address_line_2,
                        "4" => $salesOrder->customer_postal_code,
                        "5" => implode(', ', $orderItems),
                        "6" => '£'.number_format($orderTotal, 2).' with to home delivery'
                    ]);
                    Helper::sendTwilioMessage($operativeManagerPhoneNumber, $contentVariables, $websiteNewOrderSID, 3, 0, $salesOrder->id);
                }
            }

            DB::commit();
            session()->forget('cart');

            return redirect()->route('orderSuccess', encrypt($salesOrder->id));
        }

        return back();
    }

    public static function generateSitemap()
    {
        $sitemap = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
        </urlset>');

        /* home page */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(url('/')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '1.00');

        /* about-us */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('about-us')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* shop */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('shop')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* contact-us */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('contact-us')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* products */
        $products = Product::with(['images','category:id,slug'])->where('status', '1')->orderBy('id', 'desc')->get();
        foreach ($products as $product) {
            $url = $sitemap->addChild('url');
            $url->addChild('loc', htmlspecialchars(route('productDetail', $product->slug)));
            $url->addChild('lastmod', now()->toAtomString());
            $url->addChild('priority', '0.80');
        }

        /* category wise products */
        $categories = Helper::getCategories();
        foreach ($categories as $category) {
            $url = $sitemap->addChild('url');
            $url->addChild('loc', htmlspecialchars(route('shopCategory',$category->slug)));
            $url->addChild('lastmod', now()->toAtomString());
            $url->addChild('priority', '0.80');
        }

        /* terms-conditions */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('terms-conditions')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* privacy-policy */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('privacy-policy')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* shipping-policy */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('shipping-policy')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* refund-policy */
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars(route('refund-policy')));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '0.80');

        /* social media linkis */
        $links = Helper::getsocialLink();
        foreach ($links->toArray() as $link) {
            if(!empty($link)){
                $url = $sitemap->addChild('url');
                $url->addChild('loc', htmlspecialchars($link));
                $url->addChild('lastmod', now()->toAtomString());
                $url->addChild('priority', '0.80');
            }
        }

        /* blogs - 'Discover-Skootz-Electric-Scooters-Your-Ultimate-Destination-for-E-Scooters' */
        // $url = $sitemap->addChild('url');
        // $url->addChild('loc', htmlspecialchars(route('blogDetail', 'Discover-Skootz-Electric-Scooters-Your-Ultimate-Destination-for-E-Scooters')));
        // $url->addChild('lastmod', now()->toAtomString());
        // $url->addChild('priority', '0.80');

        /* blogs - 'Unveiling-the-Advantages-of-Electric-Scooters-A-Comprehensive-Guide' */
        // $url = $sitemap->addChild('url');
        // $url->addChild('loc', htmlspecialchars(route('blogDetail', 'Unveiling-the-Advantages-of-Electric-Scooters-A-Comprehensive-Guide')));
        // $url->addChild('lastmod', now()->toAtomString());
        // $url->addChild('priority', '0.80');

        /* blog */
        // $url = $sitemap->addChild('url');
        // $url->addChild('loc', htmlspecialchars(route('blog')));
        // $url->addChild('lastmod', now()->toAtomString());
        // $url->addChild('priority', '0.80');



        $xmlContent = $sitemap->asXML();

        file_put_contents(base_path('sitemap.xml'), $xmlContent);
    }


    public function storeQuotationRequest(CheckoutRequest $request)
    {
        DB::beginTransaction();
        try {
            $token = $request->g_recaptcha_response;
            $requestIP = $request->ip();

            if (empty($token)) {
                return response()->json([
                    'success' => 0, 
                    'token' => 'Token not found!!',
                    'message' => 'recaptcha.error'
                ]);
            }

            $recaptcha = Helper::verifyGoogleRecaptchaV2($token, $requestIP);

            if (!$recaptcha['success']) {
                return response()->json([
                    'success' => 0,
                    'message' => $recaptcha['message']
                ]);
            }

            if ($request->filled('is_scammers')) {
                return response()->json([
                    'success' => false,
                    'message' => 'quotation.error'
                ]);
            }
            $purchase_source = '';
            if( $request->hasCookie('sz_utm_source') != false ){
                $purchase_source = $request->cookie('sz_utm_source');
                if( strlen($purchase_source) > 255 ){
                    $purchase_source = substr($purchase_source, 0, 255);
                }
            }

            $quotation_types = !empty($request->quotation_types) ? $request->quotation_types : 1;

            $quotation = Quotation::create([
                "customer_name" => $request->customer_name,
                "post_code" => $request->post_code,
                "phone" => $request->phone,
                "country_dial_code" => $request->country_dial_code ?? null,
                "country_iso_code" => $request->country_iso_code ?? null,
                "purchase_source" => $purchase_source,
                "quotation_date" => now()->toDateTimeString(),
                "quotation_types" => $quotation_types 
            ]);

            Quotation::updateQuotationNumber($quotation->id);

            if( !empty($request->productId) && $request->productId != '0') {
                foreach ($request->productId as $key => $productId) {
                    if(decrypt($productId) != 0) {
                        $product = Product::find(decrypt($productId));

                        $quotation->items()->create([
                            "product_id" => $product->id,
                            "category_id" => $product->category_id,
                            "name" => $product->name,
                            "quantity" => $request->quantity[$key] ?? 1,
                        ]);
                    }
                }
            }

            DB::commit();
            session()->forget('cart');

            Artisan::call('quotation:add-to-google-sheet', ['ids' => $quotation->id]);


            return response()->json([
                'success' => true,
                'quotation_id' => encrypt($quotation->id),
                // 'redirect_url' => route('quotation.successfully-requested',['id' => encrypt($quotation->id)]),
                'message' => 'quotation.success'
            ]);


        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
        }

        return response()->json([
            'success' => false,
            'message' => 'quotation.error'
        ]);

    }

    public function quotationSuccessfullyRequested($quotationId)
    {
        $quotation = Quotation::with('items')->find(decrypt($quotationId));

        if ($quotation) {
            return view('quotation.successfully-requested', compact('quotation'));
        }

        return redirect()->route('home');
    }

    public function storeReview(Request $request) {

        try {
            if(!empty($request->is_scammers)) {
                abort(404);
            }

            $review = new Review();
            $review->product_id = decrypt($request->product_id);
            $review->customer_name = $request->customer_name;
            $review->review_title = $request->review_title;
            $review->review_description = $request->review_description;
            $review->rating = $request->rating;
            $review->recommend_product = (isset($request->recommend_product) && $request->recommend_product == 1 ? 1 : 0) ;
            $review->status = 1;

            if($review->save()) {
                return response()->json([
                    'success' => true,
                    'message' => 'review.success'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'review.error'
                ]);
            }
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'review.error'
            ]);
        }

    }

    public function reviewListing(Request $request){
        $productId = decrypt($request->product_id);
        $page = $request->get('page', 1);
        $limit = $page * 2;
        $reviews = Review::where('product_id', $productId)
            ->where('status', 1)
            ->orderBy('id', 'DESC');

        $reviewTotal = $reviews->count();
        $reviews = $reviews->limit($limit)->get();

        $html = '';
        foreach ($reviews as $review) {

            $html .= '<div class="review-card py-3 border-bottom border-gray-300">
                        <div class="d-flex align-items-center gap-1">
                            <div class="leading-0">';
                            for ($i=0; $i < 5 ; $i++) {
                                if ($i <= $review->rating) {
                                    $color = '#F7B408';
                                } else {
                                    $color = '#E0E0E0';
                                }
                                $html .= '<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M8 0.195312L10.6333 4.57092L15.6085 5.72318L12.2607 9.57971L12.7023 14.6674L8 12.6753L3.29772 14.6674L3.73927 9.57971L0.391548 5.72318L5.36672 4.57092L8 0.195312Z"
                                        fill="'.$color.'" />
                                        </svg>';
                                }

                                $dayCount = $review->created_at->format('M d');
                                if($review->created_at->diffInDays(now()) > 1) {
                                    $dayCount .= ' - ' .(int)$review->created_at->diffInDays(now()) .' '. __('days ago') ;
                                }

                    $html .='</div>
                            <p class="m-0 text-sm text-gray-500 font-inter-regular">'.$dayCount.'</p>
                        </div>
                        <div class="my-2 d-flex align-items-center gap-3">
                            <h3 class="m-0 text-slate-900 text-2xl text-xl-mob font-medium flex-wrap">'.$review->customer_name.'</h3>
                            <label class="m-0 bg-purple-300 px-3 py-2 rounded-full d-flex align-items-center gap-1">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.46158 2.0939L9.45158 2.4839C9.80473 2.62293 10.1974 2.62293 10.5506 2.4839L11.5406 2.0939C12.1234 1.86468 12.7724 1.87053 13.351 2.1102C13.9296 2.34988 14.3926 2.80469 14.6426 3.3789L15.0666 4.3539C15.218 4.70186 15.4956 4.9795 15.8436 5.1309L16.8186 5.5549C17.393 5.80489 17.848 6.26808 18.0877 6.8469C18.3274 7.42571 18.3331 8.07497 18.1036 8.6579L17.7136 9.6479C17.5748 10.0007 17.5748 10.3931 17.7136 10.7459L18.1036 11.7359C18.3328 12.3187 18.327 12.9677 18.0873 13.5463C17.8476 14.1249 17.3928 14.5879 16.8186 14.8379L15.8436 15.2619C15.4956 15.4132 15.2179 15.6909 15.0666 16.0389L14.6426 17.0139C14.3926 17.5883 13.9294 18.0433 13.3506 18.283C12.7718 18.5227 12.1225 18.5284 11.5396 18.2989L10.5496 17.9089C10.1967 17.7701 9.80443 17.7701 9.45158 17.9089L8.46158 18.2989C7.87878 18.5281 7.22977 18.5223 6.65118 18.2826C6.0726 18.0429 5.60958 17.5881 5.35958 17.0139L4.93558 16.0389C4.78419 15.6909 4.50654 15.4133 4.15858 15.2619L3.18358 14.8379C2.60914 14.5879 2.15415 14.1247 1.91445 13.5459C1.67475 12.9671 1.66907 12.3178 1.89858 11.7349L2.28858 10.7449C2.42735 10.3921 2.42735 9.99974 2.28858 9.6469L1.89858 8.6569C1.66937 8.07409 1.67521 7.42508 1.91489 6.8465C2.15457 6.26791 2.60938 5.80489 3.18358 5.5549L4.15858 5.1309C4.50654 4.9795 4.78419 4.70186 4.93558 4.3539L5.35958 3.3789C5.60958 2.80445 6.07277 2.34946 6.65159 2.10976C7.2304 1.87007 7.87966 1.86438 8.46258 2.0939H8.46158ZM12.6276 7.8639L8.97958 11.9679L7.35458 10.3429C7.26028 10.2518 7.13398 10.2014 7.00288 10.2026C6.87179 10.2037 6.74638 10.2563 6.65367 10.349C6.56097 10.4417 6.50839 10.5671 6.50725 10.6982C6.50611 10.8293 6.5565 10.9556 6.64758 11.0499L8.64758 13.0499C8.69573 13.0981 8.75321 13.1359 8.8165 13.161C8.87978 13.1862 8.94754 13.1981 9.01561 13.1962C9.08368 13.1942 9.15064 13.1784 9.21237 13.1496C9.27409 13.1208 9.3293 13.0798 9.37458 13.0289L13.3746 8.5289C13.4628 8.42984 13.508 8.29981 13.5003 8.16741C13.4926 8.035 13.4326 7.91108 13.3336 7.8229C13.2345 7.73471 13.1045 7.68949 12.9721 7.69718C12.8397 7.70487 12.7158 7.76484 12.6276 7.8639Z"
                                        fill="#460BF4" />
                                </svg>
                                <span class="text-slate-900 text-sm font-inter-regular">'.__('Verified Purchase').'</span>
                            </label>
                        </div>
                        <h3 class="m-0 text-slate-900 text-2xl text-xl-mob font-medium">“'.$review->review_title.'”</h3>
                        <p class="mt-2 text-slate-900 text-sm font-inter-regular"> “'.$review->review_description.'”</p>
                        <div class="d-flex align-items-center gap-2">
                            <div class="text-gray-500 text-sm font-inter-regular">'.__('Recommends this product').':</div>
                            <div class="d-flex align-items-center gap-1">';
                                if($review->recommend_product == 1) {
                                    $html .= '<svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M14.6795 1.00917C14.4752 0.808204 14.1983 0.695312 13.9097 0.695312C13.6209 0.695312 13.344 0.808207 13.1397 1.00917L5.05191 8.97618C5.01783 9.01011 4.97135 9.0292 4.92296 9.0292C4.87458 9.0292 4.82809 9.01011 4.79402 8.97618L1.85411 6.07912C1.57836 5.81154 1.17913 5.70826 0.805317 5.80768C0.431539 5.90722 0.139442 6.1945 0.03811 6.56238C-0.0633487 6.93036 0.0410231 7.3237 0.312466 7.59562L4.1511 11.3815C4.35541 11.5824 4.6323 11.6953 4.92109 11.6953C5.20976 11.6953 5.48664 11.5824 5.69096 11.3815L14.6795 2.52922C14.8847 2.32788 15 2.05445 15 1.76914C15 1.48398 14.8847 1.21055 14.6795 1.0092L14.6795 1.00917Z"
                                              fill="#460BF4" />
                                      </svg>
                                      <span class="text-blue-500 text-sm font-inter-regular">'.__('Yes').'</span>';
                                } else {
                                    $html .= '<svg width="10" height="10" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.313811 0.313811C0.732237 -0.104604 1.41062 -0.104604 1.82905 0.313811L7.50001 5.9848L13.171 0.313811C13.5894 -0.104604 14.2678 -0.104604 14.6862 0.313811C15.1046 0.732237 15.1046 1.41062 14.6862 1.82905L9.01523 7.50001L14.6862 13.171C15.1046 13.5894 15.1046 14.2678 14.6862 14.6862C14.2678 15.1046 13.5894 15.1046 13.171 14.6862L7.50001 9.01523L1.82905 14.6862C1.41062 15.1046 0.732237 15.1046 0.313811 14.6862C-0.104604 14.2678 -0.104604 13.5894 0.313811 13.171L5.9848 7.50001L0.313811 1.82905C-0.104604 1.41062 -0.104604 0.732237 0.313811 0.313811Z" fill="#dc3545"></path>
                                            </svg>
                                            <span class="font-inter-regular text-danger text-sm">'.__('No').'</span>';
                                }

                            $html .= '</div>
                        </div>
                    </div>';
        }
        return response()->json(['html' => $html, 'review_count' => (!empty($reviews) ? count($reviews) : 0), 'total_review' => $reviewTotal]);
    }

    public function showBrands(Request $request){

        $brands = Brands::where('status',1)->get();

        if(!empty($brands)) {
            return response()->json([
                'success' => 1,
                'brands' => $brands
            ]);
        } else {
            return response()->json([
                'success' => 0,
                'message' => "something went wrong!!"
            ]);
        }
    }

}
