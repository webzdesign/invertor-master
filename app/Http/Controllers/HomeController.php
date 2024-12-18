<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SalesOrder;
use App\Models\SalesOrderItem;
use App\Models\TriggerLog;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DeliverTemp;
use App\Models\UserRole;
use App\Models\Notification;
use App\Models\PaymentForDelivery;
use App\Models\Setting;
use App\Models\AddressLog;
use App\Models\ContactUs;
use App\Helpers\{Helper, Distance};
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $Products = Product::with('images')->orderByRaw("FIELD(id, 13) DESC")->limit(2)->get();
        $tuya_d8_url = '';
        if( !empty($Products) ){
            foreach ($Products as $product) {
                if( $product['unique_number'] == '012' ){
                    $tuya_d8_url = route('productDetail', $product->slug);
                }
            }
        }
        return view('home', compact('Products', 'tuya_d8_url'));
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

        return view('shop', compact('products'));
        
    }
    public function productDetail($slug)
    {
        $product = Product::with('images')->where('slug', $slug)->first();
        if (!$product) {
            abort(404);
        }
        $othersProducts = Product::with('images')->where('id', '!=', $product->id)->limit(2)->get();

        return view('productDetail', compact('product', 'othersProducts'));
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
            $cart[$product->id] = [
                'quantity' => $total_p_quantity,
                'name' => $product->name,
                'price' => $product->web_sales_price,
                'image' => isset($product->images[0]) ? env('APP_Image_URL').'storage/product-images/'.$product->images[0]->name : '',
                'url' => route('productDetail', $product->slug),
                'productId' => encrypt($product->id)
            ];
        }

        session()->put('cart', $cart);
        session()->save();

        $subtotal = $total_cart_count = 0;
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
                            <p class="mb-0 text-slate-900 text-xl font-inter-medium text-lg-mob">' . env( 'SZ_CURRENCY_SYMBOL' ) .' ' . number_format($cp_val['price'], 2) .'</p>
                            <div class="quantityWrapper d-flex align-items-center gap-3">
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
                $total = $cp_val['price'] * $cp_val['quantity'];
                $subtotal = $subtotal + $total;
                $total_cart_count += $cp_val['quantity'];
            }
        }
        $msg = 'Added to cart Successfully';
        if( $sz_cart_reached_status == 1 ){
            $msg = 'Sorry, you can’t add more of this product.';
        }
        $cart_total = env( 'SZ_CURRENCY_SYMBOL' ) . ' ' . number_format($subtotal, 2);

        return response()->json([ 'success' => true, 'message' => $msg, 'cart_reached_status' => $sz_cart_reached_status, 'cart_total' => $cart_total, 'total_cart_count' => $total_cart_count, 'sz_cart_popup_html' => $sz_cart_popup_html ]);
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
        $othersProducts = Product::with('images')->whereNotIn('id', $product_ids)->limit(2)->get();

        return view('checkout', compact('cartItems', 'othersProducts'));
    }

    public function orderPlace(CheckoutRequest $request)
    {
        DB::beginTransaction();

        $salesOrder = SalesOrder::create(['date' => now(), 'delivery_date' => now(), 'customer_name' => $request->first_name.' '.$request->last_name, 'customer_address_line_1' => $request->house_no, 'customer_address_line_2' => $request->address,  'customer_phone' => $request->phone, 'country_dial_code' => $request->country_dial_code, 'country_iso_code' => $request->country_iso_code, 'customer_postal_code' => $request->post_code, 'status' => 1, 'confirm_status' => 0]);
        
        $orderItems = [];
        $orderTotal = 0;
        if( !empty($request->productId) ){
            foreach ($request->productId as $pKey => $productId) {
                $product = Product::find(decrypt($productId));
                if ($product) {
                    SalesOrderItem::create(['so_id' => $salesOrder->id, 'category_id' => $product->category_id, 'product_id' => $product->id, 'price' => $product->web_sales_price, 'qty' => $request->quantity[$pKey], 'amount' => ($product->web_sales_price) * $request->quantity[$pKey], 'remarks' => '']);
                    $orderItems[] = $product->name;
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
            'house_no' => 'required'
        ], [
            'postal_code.required' => 'Postal code is required.',
            'postal_code.max' => 'Maximum 8 characters allowed for postal code.',
            'house_no' => 'House No is required.'
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

                $address = trim("{$request->house_no} {$request->postal_code}");
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
                        'address' => $request->house_no,
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
        $contact = ContactUs::create(['name' => $request->name, 'email' => $request->email, 'message' => strip_tags($request->message)]);

        $this->sendContactEmailToAdmin($contact);

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }

    protected function sendContactEmailToAdmin($contact)
    {
        $adminEmail = 'hello@runmax.co.uk';

        Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($adminEmail) {
            $message->to($adminEmail)->subject('New Contact Us Message');
        });
    }
}
