@extends('layouts.master')

@section('content')

@php
    $cart_products = session()->get('cart', []);
@endphp

<section class="strore-banner p-2 position-relative">
    <img src="{{ asset( 'assets/images/store-banner.png' ) }}" alt="banner" width="100%" class="rounded-3xl d-none d-sm-block">
    <img src="{{ asset( 'assets/images/store-banner-mob.png' ) }}" alt="banner" width="100%" class="d-sm-none">
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">Our Store</h2>
</section>

{{-- <section class="store-product">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <div class="position-relative">
                <input type="text" placeholder="Search products" class="bg-slate-100 rounded-pill border-0 text-gray-900 font-inter-regular pe-4">
                <svg class="search-icon position-absolute top-50 translate-middle-y left-0 ms-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#0D163A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.6663 14.6673L13.333 13.334" stroke="#0D163A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                        
            </div>
            <div class="filter-menu d-flex gap-3">
                <button type="button" class="border-0 bg-slate-100 rounded-pill d-flex align-items-center justify-content-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18H3V16H15V18ZM21 13H3V11H21V13ZM15 8H3V6H15V8Z" fill="#1C2531"/>
                    </svg>
                </button>
                <button type="button" class="border-0 bg-slate-100 rounded-pill d-flex align-items-center justify-content-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 6H19.425C19.05 4.275 17.55 3 15.75 3C13.95 3 12.45 4.275 12.075 6H1.5V7.5H12.075C12.45 9.225 13.95 10.5 15.75 10.5C17.55 10.5 19.05 9.225 19.425 7.5H22.5V6ZM15.75 9C14.475 9 13.5 8.025 13.5 6.75C13.5 5.475 14.475 4.5 15.75 4.5C17.025 4.5 18 5.475 18 6.75C18 8.025 17.025 9 15.75 9ZM1.5 18H4.575C4.95 19.725 6.45 21 8.25 21C10.05 21 11.55 19.725 11.925 18H22.5V16.5H11.925C11.55 14.775 10.05 13.5 8.25 13.5C6.45 13.5 4.95 14.775 4.575 16.5H1.5V18ZM8.25 15C9.525 15 10.5 15.975 10.5 17.25C10.5 18.525 9.525 19.5 8.25 19.5C6.975 19.5 6 18.525 6 17.25C6 15.975 6.975 15 8.25 15Z" fill="#1C2531"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section> --}}

<section class="product">
    <div class="container">
        <div class="row">
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
                <div class="col-lg-6 mb-4 mb-sm-5">
                    <a class="text-decoration-none text-slate-900" href="{{ route('productDetail', $product->slug) }}">
                        <div class="product-card border text-center border-slate-200 rounded-3xl overflow-hidden position-relative">
                            <img class="pro-img sz_product_image mw-100" src="{{ env('APP_Image_URL').'storage/product-images/'. $first_img }}" alt="{{ $product->name }}" height="100%" width="100%">
                            <div class="ws_sec position-absolute">
                                <label class="warrantyLabel mb-0 text-white text-sm py-1 pointer-event-none rounded-pill">1-year warranty</label>
                                @if( $sz_discount_flag == '1' )
                                    <label class="saleLbl bg-violet-500 w-50 ms-auto mt-2 d-block mb-0 text-white text-sm py-1 pointer-event-none rounded-pill">Sale 🔥</label>
                                @endif
                            </div>
                        </div>
                    </a>
                    <div class="text-lg-start text-center">
                        <h2 class="text-lg text-gray-950 font-inter-semibold mb-0 mt-4"><a class="text-gray-950 text-decoration-none" href="{{ route('productDetail', $product->slug) }}">{{ $product->name }}</a></h2>
                        <div class="d-sm-flex align-items-center gap-3 justify-content-lg-start justify-content-center">
                            <div class="d-flex align-items-center gap-3 justify-content-lg-start justify-content-center">
                                <h2 class="text-lg mb-0 text-gray-950 font-inter-semibold mt-0">{{ env( 'SZ_CURRENCY_SYMBOL' ) . number_format($product->web_sales_price, 2) }}</h2>
                                @if( $sz_discount_flag == '1' )
                                    <h6 class="text-base text-gray-400 mb-0 font-inter-regular text-decoration-line-through">{{ env( 'SZ_CURRENCY_SYMBOL' ) }}{{ number_format($product->web_sales_old_price, 2) }}</h6>
                                @endif
                                <div>
                                    @if( $sz_discount_flag == '1' )
                                        {!! $sale_season_icon !!}
                                    @endif
                                </div>
                            </div>
                            @if( $sz_discount_flag == '1' )
                                <label class="mt-sm-0 mt-2 rounded-pill text-slate-50 text-sm mb-0 font-hubot bg-blue-500 py-1 px-2 text-center">You save {{ $sz_discount_pr }}% ({{ env( 'SZ_CURRENCY_SYMBOL' ) . $sz_save_price }})</label>
                            @endif
                        </div>
                        <button class="button-dark AddToCartBtn mt-3 d-flex align-items-center gap-2 mx-auto mx-lg-0" data-pid="{{ encrypt( $product->id ) }}">
                            Add to cart
                            <span class="sz_add_to_cart_circle align-text-top ms-1 {{ empty($cart_products[$product->id]) ? 'd-none' : '' }}">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8125 12C22.8125 6.47715 18.3353 2 12.8125 2C7.28965 2 2.8125 6.47715 2.8125 12C2.8125 17.5228 7.28965 22 12.8125 22C18.3353 22 22.8125 17.5228 22.8125 12Z" stroke="white" stroke-width="1.5"/>
                                    <path d="M8.8125 12.5L11.3125 15L16.8125 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </button>
                        <div class="font-semibold text-lg m-0 mt-2">Cash on delivery</div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- @if ($totalProducts > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__pagination">
                        @if ($page > 1)
                            <a href="{{ route('shop', ['page' => $page-1]) }}"><<</a>
                        @endif
                        @for ($p=1; $p<=$totalPages; $p++)
                            @if ($page == $p)
                                <a class="active" href="#">{{ $p }}</a>
                            @else
                                <a href="{{ route('shop', ['page' => $p]) }}">{{ $p }}</a>
                            @endif
                        @endfor
                        @if ($totalPages != $page)
                            <a href="{{ route('shop', ['page' => $page+1]) }}">>></a>
                        @endif
                    </div>
                </div>
            </div>
        @endif --}}
    </div>
</section>

@include('latestScooter')

@include('customerReview')

@endsection