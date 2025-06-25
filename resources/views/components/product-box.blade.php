@foreach ($products as $product)
    @php
        $sz_discount_flag = 0;
        if( !empty($product->web_sales_old_price) && $product->web_sales_old_price > $product->web_sales_price ){
            $sz_discount_flag = 1;
            $sz_discount_pr = ( $product->web_sales_old_price - $product->web_sales_price ) / $product->web_sales_old_price * 100;
            $sz_discount_pr = number_format($sz_discount_pr, 2);
            $sz_save_price = $product->web_sales_old_price - $product->web_sales_price;
        }
        $first_img = !empty($product->images->first()->name) ? $product->images->first()->name : '';
    @endphp
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mb-sm-5">
        <a class="text-decoration-none text-slate-900" href="{{ route('productDetail', $product->slug) }}">
            <div class="product-card border text-center border-slate-200 rounded-3xl overflow-hidden position-relative">
                <img class="pro-img sz_product_image mw-100" src="{{ env('APP_Image_URL').'storage/product-images/'. $first_img }}" alt="{{ $product->name }}">
            </div>
        </a>
        <div class="text-lg-start text-center">
            <h2 class="text-lg text-gray-950 font-inter-semibold mb-0 mt-4"><a class="line-clamp-1 text-gray-950 text-decoration-none" title="{{ $product->name }}" href="{{ route('productDetail', $product->slug) }}">{{ $product->name }}</a></h2>
            <button class="button-dark AddToCartBtn_ mt-3 d-flex align-items-center gap-2 mx-auto mx-lg-0 getPriceModalBtn" data-pid="{{ encrypt( $product->id ) }}">
                {{ __('Get Price')}}
                <span class="sz_add_to_cart_circle align-text-top ms-1 {{ empty($cart_products[$product->id]) ? 'd-none' : '' }}">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.8125 12C22.8125 6.47715 18.3353 2 12.8125 2C7.28965 2 2.8125 6.47715 2.8125 12C2.8125 17.5228 7.28965 22 12.8125 22C18.3353 22 22.8125 17.5228 22.8125 12Z" stroke="white" stroke-width="1.5"/>
                        <path d="M8.8125 12.5L11.3125 15L16.8125 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>
        </div>
    </div>
@endforeach