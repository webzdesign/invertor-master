@extends('layouts.master')
@section('title') {{$product->slider_title}} | {{ config('app.name') }} @endsection
@section('description') {{$product->slider_content}} @endsection
@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/BGUeCOmh4ZcaEKT6w9o-'});
  </script>
@endsection

@php
    $cart_products = session()->get('cart', []);
    $sz_p_encrypt_id = encrypt( $product->id );
    $first_image = !empty($product->images->first()->name) ? $product->images->first()->name : '';
@endphp
@section('ogimage')
@if($first_image != '')
 <meta property="og:image" content="{{ env('APP_Image_URL') . 'storage/product-images/' . $product->images->first()->name }}">
@else
    <meta property="og:image" content="{{ asset( 'assets/images/Skootz_Logo.svg' ) }}">
@endif
 @endsection
@section('content')
<style>
    footer{
        padding-bottom: 130px;
    }
    @media (max-width:991px) {
        footer{
            padding-bottom: 160px;
        }
    }
</style>

<section class="breadcrumb mb-0 bg-slate-100 py-3 d-none d-md-block">
    <div class="container">
        <ul class="p-0 m-0 d-flex align-items-center flex-wrap gap-3">
            <li>
                <a href="{{ route( 'home' ) }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">Home</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li>
                <a href="{{ route('shopCategory',$getCategory->slug) }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">{{$getCategory->name}}</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">{{ $product->name }}</li>
        </ul>
    </div>
</section>

<section class="product-detail py-md-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pe-lg-4 pe-xl-5">
                <div class="stickyProductImage d-flex flex-column">
                    <div class="position-relative">
                        <div class="slider slider-for">
                            @foreach ($product->images as $imageKey => $image)
                                <div>
                                    <img class="pro-img" src="{{ env('APP_Image_URL') . 'storage/product-images/' . $image->name }}" alt="product">
                                </div>
                            @endforeach
                        </div>
                        <div class="position-absolute top-0 right-0 d-flex gap-3">
                            <button id="zoomBtn" class="zoom-btn d-flex align-items-center justify-content-center border-0 bg-slate-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#imgZoomModal">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 17.5L22 22" stroke="#5D5D5D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="#5D5D5D" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M7.5 11H14.5M11 7.5V14.5" stroke="#5D5D5D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            {{-- <button class="zoom-btn d-flex align-items-center justify-content-center border-0 bg-slate-100 rounded-pill">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 8.7998C3 6.03838 5.23858 3.7998 8 3.7998C9.40389 3.7998 10.6726 4.74712 11.5808 5.78333C11.8003 6.03375 12.1997 6.03375 12.4192 5.78333C13.3274 4.74712 14.5961 3.7998 16 3.7998C18.7614 3.7998 21 6.03838 21 8.7998C21 12.8817 15.9642 17.5713 13.4264 19.6755C12.5922 20.3672 11.4078 20.3672 10.5736 19.6755C8.03577 17.5713 3 12.8817 3 8.7998Z" stroke="#5D5D5D" stroke-width="1.5"/>
                                </svg>
                            </button> --}}
                        </div>
                    </div>
                    <div class="slider slider-nav">
                        @foreach ($product->images as $imageKey => $image)
                            <div>
                                <img class="thumb-img" src="{{ env('APP_Image_URL') . 'storage/product-images/' . $image->name }}" alt="product">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-4 ps-xl-5">
                @php
                    $sz_discount_flag = 0;
                    if( !empty($product->web_sales_old_price) && $product->web_sales_old_price > $product->web_sales_price ){
                        $sz_discount_flag = 1;
                        $sz_discount_pr = ( $product->web_sales_old_price - $product->web_sales_price ) / $product->web_sales_old_price * 100;
                        $sz_discount_pr = number_format($sz_discount_pr, 2);
                        $sz_save_price = $product->web_sales_old_price - $product->web_sales_price;
                    }
                @endphp
                @if( $sz_discount_flag == '1' )
                    <label class="saleLbl bg-violet-500 w-fit px-2 d-block mb-2 text-white text-sm py-1 pointer-event-none rounded-pill mt-lg-0 mt-4">Sale 🔥</label>
                @endif
                <h2 class="text-slate-900 font-bebas text-6xl text-4xl-mob {{ $sz_discount_flag != '1' ? 'mt-lg-0 mt-3' : '' }}">{{ $product->name }}</h2>
                {{--<div class="d-flex align-items-center gap-3 mb-2">
                    <h3 class="text-4xl text-3xl-laptop mb-0 text-blue-500 font-bebas">{{ env( 'SZ_CURRENCY_SYMBOL' ) . number_format($product->web_sales_price, 2) }}</h3>
                    @if( $sz_discount_flag == '1' )
                        <h4 class="text-2xl mx-0 mb-0 text-gray-500 font-bebas text-gray-600 text-decoration-line-through">{{ env( 'SZ_CURRENCY_SYMBOL' ) }}{{ number_format($product->web_sales_old_price, 2) }}</h4>
                        <div>
                            @if( $sz_discount_flag == '1' )
                                {!! $sale_season_icon !!}
                            @endif
                        </div>
                        <label class="whitespace-nowrap rounded-pill text-slate-50 text-sm mb-0 font-hubot bg-blue-500 py-1 px-2 text-center d-sm-block d-none">You save {{ $sz_discount_pr }}% ({{ env( 'SZ_CURRENCY_SYMBOL' ) . $sz_save_price }})</label>
                        <label class="rounded-pill text-slate-50 text-sm mb-0 font-hubot bg-blue-500 py-1 px-2 text-center d-sm-none whitespace-nowrap">SAVE {{ $sz_discount_pr }}%</label>
                    @endif
                </div>--}}
                <p class="text-gray-500 font-inter-regular text-xl text-base-mob">{{ $product->slider_content }}</p>
                <div class="d-flex align-items-center gap-2">
                    <div>

                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6787 16.8257C14.0789 17.2529 10.2304 14.5448 9.49335 14.5388C8.75627 14.5329 4.86444 17.1787 4.27165 16.7419C3.67886 16.3051 5.07248 11.8185 4.85039 11.1177C4.6283 10.4169 0.902108 7.54362 1.13552 6.84646C1.36898 6.14929 6.07879 6.08454 6.67858 5.65732C7.27836 5.23015 8.86732 0.808558 9.60445 0.814459C10.3415 0.820411 11.8586 5.26699 12.4514 5.70381C13.0442 6.14057 17.7524 6.28116 17.9746 6.98197C18.1967 7.68278 14.4245 10.4957 14.1911 11.1929C13.9576 11.89 15.2785 16.3985 14.6787 16.8257Z" fill="white" stroke="#ffd53f" stroke-width="2" />
                        </svg>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6787 16.8257C14.0789 17.2529 10.2304 14.5448 9.49335 14.5388C8.75627 14.5329 4.86444 17.1787 4.27165 16.7419C3.67886 16.3051 5.07248 11.8185 4.85039 11.1177C4.6283 10.4169 0.902108 7.54362 1.13552 6.84646C1.36898 6.14929 6.07879 6.08454 6.67858 5.65732C7.27836 5.23015 8.86732 0.808558 9.60445 0.814459C10.3415 0.820411 11.8586 5.26699 12.4514 5.70381C13.0442 6.14057 17.7524 6.28116 17.9746 6.98197C18.1967 7.68278 14.4245 10.4957 14.1911 11.1929C13.9576 11.89 15.2785 16.3985 14.6787 16.8257Z" fill="white" stroke="#ffd53f" stroke-width="2" />
                        </svg>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6787 16.8257C14.0789 17.2529 10.2304 14.5448 9.49335 14.5388C8.75627 14.5329 4.86444 17.1787 4.27165 16.7419C3.67886 16.3051 5.07248 11.8185 4.85039 11.1177C4.6283 10.4169 0.902108 7.54362 1.13552 6.84646C1.36898 6.14929 6.07879 6.08454 6.67858 5.65732C7.27836 5.23015 8.86732 0.808558 9.60445 0.814459C10.3415 0.820411 11.8586 5.26699 12.4514 5.70381C13.0442 6.14057 17.7524 6.28116 17.9746 6.98197C18.1967 7.68278 14.4245 10.4957 14.1911 11.1929C13.9576 11.89 15.2785 16.3985 14.6787 16.8257Z" fill="white" stroke="#ffd53f" stroke-width="2" />
                        </svg>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6787 16.8257C14.0789 17.2529 10.2304 14.5448 9.49335 14.5388C8.75627 14.5329 4.86444 17.1787 4.27165 16.7419C3.67886 16.3051 5.07248 11.8185 4.85039 11.1177C4.6283 10.4169 0.902108 7.54362 1.13552 6.84646C1.36898 6.14929 6.07879 6.08454 6.67858 5.65732C7.27836 5.23015 8.86732 0.808558 9.60445 0.814459C10.3415 0.820411 11.8586 5.26699 12.4514 5.70381C13.0442 6.14057 17.7524 6.28116 17.9746 6.98197C18.1967 7.68278 14.4245 10.4957 14.1911 11.1929C13.9576 11.89 15.2785 16.3985 14.6787 16.8257Z" fill="white" stroke="#ffd53f" stroke-width="2" />
                        </svg>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6787 16.8257C14.0789 17.2529 10.2304 14.5448 9.49335 14.5388C8.75627 14.5329 4.86444 17.1787 4.27165 16.7419C3.67886 16.3051 5.07248 11.8185 4.85039 11.1177C4.6283 10.4169 0.902108 7.54362 1.13552 6.84646C1.36898 6.14929 6.07879 6.08454 6.67858 5.65732C7.27836 5.23015 8.86732 0.808558 9.60445 0.814459C10.3415 0.820411 11.8586 5.26699 12.4514 5.70381C13.0442 6.14057 17.7524 6.28116 17.9746 6.98197C18.1967 7.68278 14.4245 10.4957 14.1911 11.1929C13.9576 11.89 15.2785 16.3985 14.6787 16.8257Z" fill="white" stroke="#ffd53f" stroke-width="2" />
                        </svg>
                    </div>
                    <h6 class="mb-0 text-slate-900 font-inter-semibold">0 In review</h6>
                    {{-- <span class="text-gray-400">|</span>
                    <h6 class="mb-0 text-slate-900 font-inter-semibold">5 questions</h6> --}}
                </div>
                <div>
                    <div class="d-flex align-items-center my-3">
                        <h6 class="min-w-100 mb-0 text-gray-500 font-inter-regular">Availability</h6>
                        <h6 class="mb-0 text-slate-900 font-inter-semibold">In Stock</h6>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <h6 class="min-w-100 mb-0 text-gray-500 font-inter-regular">SKU</h6>
                        <h6 class="mb-0 text-slate-900 font-inter-semibold">{{ $product->sku }}</h6>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <h6 class="min-w-100 mb-0 text-gray-500 font-inter-regular">Brand</h6>
                        <h6 class="mb-0 text-slate-900 font-inter-semibold">{{ $product->brand }}</h6>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="min-w-100 mb-0 text-gray-500 font-inter-regular">Condition</h6>
                        <h6 class="mb-0 text-slate-900 font-inter-semibold">NEW</h6>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <h6 class="min-w-100 mb-0 text-gray-500 font-inter-regular">Warranty</h6>
                        <h6 class="mb-0 text-slate-900 font-inter-semibold">1 Year</h6>
                    </div>
                    {{-- <div class="d-flex align-items-center mb-2">
                        <h6 class="min-w-100 mb-0 text-gray-500 font-inter-regular">Color</h6>
                        <div class="d-flex gap-1">
                            <div class="form-check">
                                <input class="form-check-input cursor-pointer shadow-none border-0 w-5" type="radio" name="radio" id="radio1" style="background-color: red;" checked>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input cursor-pointer shadow-none border-0 w-5" type="radio" name="radio" id="radio2" style="background-color: black;">
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="d-flex gap-4 mt-4 sz_add_to_cart-sec">
                    <div class="add-quantity-btn-product d-flex align-items-center justify-content-between px-3 text-slate-900 font-hubot font-semibold text-lg border border-slate-100 rounded-pill user-select-none" data-shared-id="sz_qty_btn">
                        <span class="minus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-start text-2xl">-</span>
                        <span class="sz_product_quantity">1</span>
                        <span class="plus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-end text-2xl">+</span>
                    </div>

                    <button class="button-dark AddToCartBtn d-flex align-items-center gap-2" data-pid="{{ $sz_p_encrypt_id }}">
                        Get Price
                        <span class="sz_add_to_cart_circle {{ empty($cart_products[$product->id]) ? 'd-none' : '' }}">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.8125 12C22.8125 6.47715 18.3353 2 12.8125 2C7.28965 2 2.8125 6.47715 2.8125 12C2.8125 17.5228 7.28965 22 12.8125 22C18.3353 22 22.8125 17.5228 22.8125 12Z" stroke="white" stroke-width="1.5"/>
                                <path d="M8.8125 12.5L11.3125 15L16.8125 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                </div>

                <div class="accordion mt-4" id="accordionExample">
                    <div class="accordion-item border-0 border-top border-slate-100 rounded-0 py-sm-4 py-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-transparent shadow-none text-slate-800 font-hubot font-medium p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5ZM4 17C4 16.4477 4.44772 16 5 16H12C12.5523 16 13 16.4477 13 17C13 17.5523 12.5523 18 12 18H5C4.44772 18 4 17.5523 4 17ZM12 12C11.4477 12 11 12.4477 11 13C11 13.5523 11.4477 14 12 14H19C19.5523 14 20 13.5523 20 13C20 12.4477 19.5523 12 19 12H12ZM15 17C15 16.4477 15.4477 16 16 16H19C19.5523 16 20 16.4477 20 17C20 17.5523 19.5523 18 19 18H16C15.4477 18 15 17.5523 15 17ZM5 12C4.44772 12 4 12.4477 4 13C4 13.5523 4.44772 14 5 14H8C8.55228 14 9 13.5523 9 13C9 12.4477 8.55228 12 8 12H5Z" fill="#292929"/>
                                        </svg>
                                    </div>
                                    About this item
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">{!! $product->description !!}</div>
                        </div>
                    </div>
                    {{-- <div class="accordion-item border-0 border-top border-slate-100 rounded-0 py-sm-4 py-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-transparent shadow-none text-slate-800 font-hubot font-medium p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 6H21" stroke="#282930" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M11 12H21" stroke="#282930" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M11 18H21" stroke="#282930" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M3 7.39286C3 7.39286 4 8.04466 4.5 9C4.5 9 6 5.25 8 4" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3 18.3929C3 18.3929 4 19.0447 4.5 20C4.5 20 6 16.25 8 15" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    Specifications
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                Specifications
                            </div>
                        </div>
                    </div> --}}
                    {{--@if( !empty($product->shipping_and_payment) )
                        <div class="accordion-item border-0 border-top border-slate-100 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-transparent shadow-none text-slate-800 font-hubot font-medium p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C15.8954 16 15 16.8954 15 18C15 19.1046 15.8954 20 17 20Z" stroke="#282930" stroke-width="1.5"/>
                                                <path d="M7 20C8.10457 20 9 19.1046 9 18C9 16.8954 8.10457 16 7 16C5.89543 16 5 16.8954 5 18C5 19.1046 5.89543 20 7 20Z" stroke="#282930" stroke-width="1.5"/>
                                                <path d="M5 17.9724C3.90328 17.9178 3.2191 17.7546 2.73223 17.2678C2.24536 16.7809 2.08222 16.0967 2.02755 15M9 18H15M19 17.9724C20.0967 17.9178 20.7809 17.7546 21.2678 17.2678C22 16.5355 22 15.357 22 13V11H17.3C16.5555 11 16.1832 11 15.882 10.9021C15.2731 10.7043 14.7957 10.2269 14.5979 9.61803C14.5 9.31677 14.5 8.94451 14.5 8.2C14.5 7.08323 14.5 6.52485 14.3532 6.07295C14.0564 5.15964 13.3404 4.44358 12.4271 4.14683C11.9752 4 11.4168 4 10.3 4H2" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2 8H8" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2 11H6" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14.5 6H16.3212C17.7766 6 18.5042 6 19.0964 6.35371C19.6886 6.70742 20.0336 7.34811 20.7236 8.6295L22 11" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        Shipping & Payment
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p class="font-inter-regular">{!! $product->shipping_and_payment !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif--}}
                    {{-- <div class="accordion-item border-0 border-top border-slate-100 rounded-0 py-sm-4 py-3">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed bg-transparent shadow-none text-slate-800 font-hubot font-medium p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C15.8954 16 15 16.8954 15 18C15 19.1046 15.8954 20 17 20Z" stroke="#282930" stroke-width="1.5"/>
                                            <path d="M7 20C8.10457 20 9 19.1046 9 18C9 16.8954 8.10457 16 7 16C5.89543 16 5 16.8954 5 18C5 19.1046 5.89543 20 7 20Z" stroke="#282930" stroke-width="1.5"/>
                                            <path d="M5 17.9724C3.90328 17.9178 3.2191 17.7546 2.73223 17.2678C2.24536 16.7809 2.08222 16.0967 2.02755 15M9 18H15M19 17.9724C20.0967 17.9178 20.7809 17.7546 21.2678 17.2678C22 16.5355 22 15.357 22 13V11H17.3C16.5555 11 16.1832 11 15.882 10.9021C15.2731 10.7043 14.7957 10.2269 14.5979 9.61803C14.5 9.31677 14.5 8.94451 14.5 8.2C14.5 7.08323 14.5 6.52485 14.3532 6.07295C14.0564 5.15964 13.3404 4.44358 12.4271 4.14683C11.9752 4 11.4168 4 10.3 4H2" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2 8H8" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2 11H6" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.5 6H16.3212C17.7766 6 18.5042 6 19.0964 6.35371C19.6886 6.70742 20.0336 7.34811 20.7236 8.6295L22 11" stroke="#282930" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    What's in the Box?
                                </div>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                What's in the Box?
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@php
    $yt_url = 'https://www.youtube.com/embed/T3VUFXetSCk?si=1VVOASVR3t5kgaHm';
    if( $product->unique_number == '012' ){
        $first_img = asset('/assets/images/pro7.png');
        $second_img = asset('/assets/images/pro8.png');
        $last_img = asset('/assets/images/pro9.png');
    } else if( $product->unique_number == '013' ){
        $first_img = asset('/assets/images/pro10.png');
        $second_img = asset('/assets/images/pro11.png');
        $last_img = asset('/assets/images/pro12.png');
        $yt_url = 'https://www.youtube.com/embed/QgJkwPvnpQg?si=4j3hgX6dNsNhtjEs';
    } else {
        $first_img = !empty($product->images[1]->name) ? env('APP_Image_URL') . 'storage/product-images/' . $product->images[1]->name : '';
        $second_img = !empty($product->images[2]->name) ? env('APP_Image_URL') . 'storage/product-images/' . $product->images[2]->name : '';
        $last_img = !empty($product->images[3]->name) ? env('APP_Image_URL') . 'storage/product-images/' . $product->images[3]->name : '';
    }
@endphp
@if( !empty($first_img) || !empty($second_img) || !empty($last_img) )
    <section class="why-choose-product bg-gray-50">
        <h2 class="text-6xl text-4xl-mob font-bebas text-slate-900 mb-sm-5 mb-3 px-3 px-sm-0">Why Choose the {{ $product->name }}?</h2>
        <div class="row m-0">
            @if( !empty($first_img) )
                <div class="col-sm-6 mb-4">
                    <img class="sz_banner_img" src="{{ $first_img }}" alt="bike">
                </div>
            @endif
            @if( !empty($second_img) )
                <div class="col-sm-6 mb-4">
                    <img class="sz_banner_img" src="{{ $second_img }}" alt="bike">
                </div>
            @endif
            @if( !empty($last_img) )
                <div class="col-12 mb-4">
                    <div class="position-relative">
                        <img class="sz_banner_img" src="{{ $last_img }}" alt="bike">
                        <div class="position-absolute top-50 left-50 translate-middle cursor-pointer sz_youtube_video_btn" data-youtubeUrl="{{ $yt_url }}">
                            <svg class="icon-play" width="116" height="115" viewBox="0 0 116 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_67_17706)">
                                <rect x="0.523438" y="0.337891" width="115.008" height="114.662" rx="57.3309" fill="black" fill-opacity="0.25"></rect>
                                <path d="M58.0273 97.668C35.9353 97.668 18.0273 79.76 18.0273 57.668C18.0273 35.576 35.9353 17.668 58.0273 17.668C80.1193 17.668 98.0273 35.576 98.0273 57.668C98.0273 79.76 80.1193 97.668 58.0273 97.668ZM52.5153 43.328C52.2746 43.1674 51.9948 43.075 51.7058 43.0609C51.4167 43.0467 51.1292 43.1111 50.8739 43.2474C50.6186 43.3837 50.4051 43.5867 50.256 43.8347C50.1069 44.0827 50.0279 44.3666 50.0273 44.656V70.68C50.0279 70.9694 50.1069 71.2532 50.256 71.5012C50.4051 71.7493 50.6186 71.9523 50.8739 72.0885C51.1292 72.2248 51.4167 72.2893 51.7058 72.2751C51.9948 72.2609 52.2746 72.1686 52.5153 72.008L72.0313 59C72.2508 58.8539 72.4308 58.6559 72.5553 58.4235C72.6798 58.1911 72.7449 57.9316 72.7449 57.668C72.7449 57.4043 72.6798 57.1448 72.5553 56.9124C72.4308 56.68 72.2508 56.482 72.0313 56.336L52.5113 43.328H52.5153Z" fill="#FEFEFE"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_67_17706">
                                <rect x="0.523438" y="0.337891" width="115.008" height="114.662" rx="57.3309" fill="white"></rect>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endif
{{-- <section class="customer-review bg-gray-500 py-5">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-between">
            <h2 class="text-slate-50 text-4xl font-bebas mb-md-0 text-center text-md-start mb-3">CUSTOMER REVIEWS</h2>
            <div class="d-flex gap-3 justify-content-center justify-content-lg-end">
                <a href="javascript:;" class="button-dark">Write a review</a>
                <a href="javascript:;" class="button-light">Ask a question</a>
            </div>
        </div>
    </div>
</section>--}}

<section class="product">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <h2 class="font-bebas text-4xl-mob">Related Product</h2>
        </div>
        <div class="row mt-sm-5 mt-3">
            @foreach ($othersProducts as $o_product)
                @php
                    $sz_o_discount_flag = 0;
                    if( !empty($o_product->web_sales_old_price) && $o_product->web_sales_old_price > $o_product->web_sales_price ){
                        $sz_o_discount_flag = 1;
                        $sz_o_discount_pr = ( $o_product->web_sales_old_price - $o_product->web_sales_price ) / $o_product->web_sales_old_price * 100;
                        $sz_o_discount_pr = number_format($sz_o_discount_pr, 2);
                        $sz_o_save_price = $o_product->web_sales_old_price - $o_product->web_sales_price;
                    }
                    $o_product_img = !empty($o_product->images->first()->name) ? $o_product->images->first()->name : '';
                @endphp
                <div class="col-lg-6 mb-5">
                    <a href="{{ route('productDetail', $o_product->slug) }}">
                        <div class="product-card border text-center border-slate-200 rounded-3xl overflow-hidden position-relative">
                            <img class="sz_product_image" src="{{ env( 'APP_Image_URL' ) . 'storage/product-images/' . $o_product_img }}" alt="{{ $o_product->name }}">
                            <div class="ws_sec position-absolute">
                                <label class="warrantyLabel mb-0 text-white text-sm py-1 pointer-event-none rounded-pill">1-year warranty</label>
                                @if( $sz_o_discount_flag == '1' )
                                    <label class="saleLbl bg-violet-500 w-50 ms-auto mt-2 d-block mb-0 text-white text-sm py-1 pointer-event-none rounded-pill">Sale 🔥</label>
                                @endif
                            </div>
                        </div>
                    </a>
                    <div class="text-lg-start text-center">
                        <h2 class="text-lg text-gray-950 font-inter-semibold mb-0 mt-4">{{ $o_product->name }}</h2>
                        {{--<div class="d-sm-flex align-items-center gap-3 justify-content-lg-start justify-content-center">
                            <div class="d-flex align-items-center gap-3 justify-content-lg-start justify-content-center">
                                <h2 class="text-lg mb-0 text-gray-950 font-inter-semibold mt-0">{{ env( 'SZ_CURRENCY_SYMBOL' ) }}{{ number_format($o_product->web_sales_price, 2) }}</h2>
                                @if( $sz_o_discount_flag == '1' )
                                    <h6 class="text-base text-gray-400 mb-0 font-inter-regular text-decoration-line-through">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($o_product->web_sales_old_price, 2) }}</h6>
                                @endif
                                <div>
                                    @if( $sz_o_discount_flag == '1' )
                                        {!! $sale_season_icon !!}
                                    @endif
                                </div>
                            </div>
                            @if( $sz_o_discount_flag == '1' )
                                <label class="mt-sm-0 mt-2 rounded-pill text-slate-50 text-sm mb-0 font-hubot bg-blue-500 py-1 px-2 text-center">You save {{ $sz_o_discount_pr }}% ({{ env( 'SZ_CURRENCY_SYMBOL' ) . $sz_o_save_price }})</label>
                            @endif
                        </div>--}}

                        <button class="button-dark mt-3 AddToCartBtn d-flex align-items-center gap-2 mx-auto mx-lg-0" data-pid="{{ encrypt( $o_product->id ) }}">
                            Get Price
                            <span class="sz_add_to_cart_circle {{ empty($cart_products[$o_product->id]) ? 'd-none' : '' }}">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8125 12C22.8125 6.47715 18.3353 2 12.8125 2C7.28965 2 2.8125 6.47715 2.8125 12C2.8125 17.5228 7.28965 22 12.8125 22C18.3353 22 22.8125 17.5228 22.8125 12Z" stroke="white" stroke-width="1.5"/>
                                    <path d="M8.8125 12.5L11.3125 15L16.8125 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </button>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="fixed-add-to-cart">
    <div class="row w-100 align-items-center">
        <div class="col-lg-6">
            <div class="d-flex align-items-center gap-3">
                <div class="img-pro bg-white rounded-lg border border-slate-100">
                    <img src="{{ env( 'APP_Image_URL' ) . 'storage/product-images/' . $first_image }}" alt="product" width="70" height="70" class="object-fit-contain">
                </div>
                <div>
                    <h3 class="text-slate-900 text-3xl text-2xl-mob font-bebas mb-0">{{ $product->name }}</h3>
                    {{--<div class="d-flex align-items-center gap-sm-3 gap-2 mb-2">
                        <h4 class="whitespace-nowrap text-blue-500 mb-0 font-bebas text-2xl mb-0">{{ env( 'SZ_CURRENCY_SYMBOL' ) . number_format($product->web_sales_price, 2) }}</h4>
                        @if( $sz_discount_flag == '1' )
                            <h4 class="whitespace-nowrap text-2xl text-xl-mob mx-0 mb-0 text-gray-500 font-bebas text-gray-600 text-decoration-line-through">{{ env( 'SZ_CURRENCY_SYMBOL' ) }}{{ number_format($product->web_sales_old_price, 2) }}</h4>
                            <div>
                                @if( $sz_discount_flag == '1' )
                                    {!! $sale_season_icon !!}
                                @endif
                            </div>
                            <label class="rounded-pill text-slate-50 text-sm mb-0 font-hubot bg-blue-500 py-1 px-2 text-center d-sm-block d-none">You save {{ $sz_discount_pr }}% ({{ env( 'SZ_CURRENCY_SYMBOL' ) . $sz_save_price }})</label>
                            <label class="rounded-pill text-xs-mob text-slate-50 text-sm mb-0 font-hubot bg-blue-500 py-1 px-2 text-center d-sm-none whitespace-nowrap">SAVE {{ $sz_discount_pr }}%</label>
                        @endif
                    </div>--}}
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-3">
            <div class="d-flex align-items-center justify-content-center gap-5">
                <h4 class="mb-0 text-gray-500 font-inter-semibold text-lg">Select Color</h4>
                <div class="d-flex gap-1">
                    <div class="form-check">
                        <input class="form-check-input cursor-pointer shadow-none border-0 w-5" type="radio" name="radio" id="radio1" style="background-color: red;" checked="">
                        </div>
                    <div class="form-check">
                        <input class="form-check-input cursor-pointer shadow-none border-0 w-5" type="radio" name="radio" id="radio2" style="background-color: black;">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-6 mt-lg-0 mt-2">
            <div class="d-flex gap-md-4 gap-3 justify-content-start justify-content-lg-end sz_add_to_cart-sec">
                <div class="add-quantity-btn-product d-flex align-items-center justify-content-between px-3 text-slate-900 font-hubot font-semibold text-lg border border-slate-100 rounded-pill user-select-none sz_add_quantity_floating" data-shared-id="sz_qty_btn">
                    <span class="minus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-start text-2xl">-</span>
                    <span class="sz_product_quantity">1</span>
                    <span class="plus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-end text-2xl">+</span>
                </div>

                <button class="button-dark AddToCartBtn d-flex align-items-center gap-2" data-pid="{{ $sz_p_encrypt_id }}">
                    Get price
                    <span class="sz_add_to_cart_circle {{ empty($cart_products[$product->id]) ? 'd-none' : '' }}">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.8125 12C22.8125 6.47715 18.3353 2 12.8125 2C7.28965 2 2.8125 6.47715 2.8125 12C2.8125 17.5228 7.28965 22 12.8125 22C18.3353 22 22.8125 17.5228 22.8125 12Z" stroke="white" stroke-width="1.5"/>
                            <path d="M8.8125 12.5L11.3125 15L16.8125 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- @include('newsLetter') --}}

<div class="modal fade" id="imgZoomModal" tabindex="-1" aria-labelledby="imgZoomModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-slate-200">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="{{ asset('/assets/images/pro1.png') }}" alt="bike">
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            infinite: false,
            draggable: false,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            draggable: true,
            swipeToSlide: true,
            responsive: [
                {
                    breakpoint: 1266,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        draggable: true,
                    }
                }
            ],
            infinite: false,
            asNavFor: '.slider-for',
            focusOnSelect: true,
            prevArrow: '<div class="custom-prev-arrow d-md-block d-none cursor-pointer"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 6C15 6 9.00001 10.4189 9 12C8.99999 13.5812 15 18 15 18" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
            nextArrow: '<div class="custom-next-arrow d-md-block d-none cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
        });

        $('#zoomBtn').on('click', function () {
            const imgSrc = $('.slick-current img').attr('src');
            $('#imgZoomModal img').attr('src', imgSrc);
        });

        $('.add-quantity-btn-product').each(function () {
            let container = $(this);

            // Function to update the disable class for both buttons
            function updateDisableClass(sharedId) {
                $('.add-quantity-btn-product[data-shared-id="' + sharedId + '"]').each(function () {
                    let currentContainer = $(this);
                    let quantitySpan = currentContainer.find('span').eq(1); // Select the middle span
                    let quantity = parseInt(quantitySpan.text());
                    let minusButton = currentContainer.find('.minus-btn');
                    let plusButton = currentContainer.find('.plus-btn');

                    if (quantity <= 1) {
                        minusButton.addClass('disabled').css('opacity', '0.5');
                    } else {
                        minusButton.removeClass('disabled').css('opacity', '1');
                    }
                    if (quantity >= 10) {
                        plusButton.addClass('disabled').css('opacity', '0.5');
                    } else {
                        plusButton.removeClass('disabled').css('opacity', '1');
                    }
                });
            }

            // Shared identifier to link two buttons
            let sharedId = container.data('shared-id');

            // Initial update of the disable class
            updateDisableClass(sharedId);

            // Handle plus button click
            container.find('.plus-btn').click(function () {
                $('.add-quantity-btn-product[data-shared-id="' + sharedId + '"]').each(function () {
                    let relatedContainer = $(this);
                    let quantitySpan = relatedContainer.find('span').eq(1); // Select the middle span
                    let quantity = parseInt(quantitySpan.text());
                    if (quantity < 10) {
                        quantitySpan.text(quantity + 1); // Increment and update quantity
                        updateDisableClass(sharedId); // Update disable class
                    }
                });
            });

            // Handle minus button click
            container.find('.minus-btn').click(function () {
                $('.add-quantity-btn-product[data-shared-id="' + sharedId + '"]').each(function () {
                    let relatedContainer = $(this);
                    let quantitySpan = relatedContainer.find('span').eq(1); // Select the middle span
                    let quantity = parseInt(quantitySpan.text());
                    if (quantity > 1) {
                        quantitySpan.text(quantity - 1); // Decrement and update quantity
                        updateDisableClass(sharedId); // Update disable class
                    }
                });
            });
        });

        function toggleHeaderClass() {
            if ($(window).scrollTop() >= 500) {
                $(".fixed-add-to-cart").addClass("active");
            } else {
                $(".fixed-add-to-cart").removeClass("active");
            }
        }
        toggleHeaderClass();
        $(window).on("scroll", function () {
            toggleHeaderClass();
        });

    });
</script>
@endsection
