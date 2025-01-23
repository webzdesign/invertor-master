@extends('layouts.master')

@section('content')

<section class="checkout pb-5">
    <div class="paginationSec px-4 border-bottom border-top border-slate-100">
        <div class="container">
            <div class="d-flex overflow-auto gap-3 align-items-center justify-content-start justify-content-md-center py-3">
                <div class="pageTab active d-flex align-items-center gap-3">
                    <div class="count bg-slate-100 text-slate-900 d-flex align-items-center justify-content-center rounded-pill font-inter-semibold text-sm">1</div>
                    <h6 class="whitespace-nowrap text-gray-500 font-hubot mb-0">Personal Details</h6>
                </div>
                <hr class="hrLine min-w-100 bg-slate-100">
                <div class="pageTab active d-flex align-items-center gap-3">
                    <div class="count bg-slate-100 text-slate-900 d-flex align-items-center justify-content-center rounded-pill font-inter-semibold text-sm">2</div>
                    <h6 class="whitespace-nowrap text-gray-500 font-hubot mb-0">Place Order</h6>
                </div>
                <hr class="hrLine min-w-100 bg-slate-100">
                <div class="pageTab d-flex align-items-center gap-3">
                    <div class="count bg-slate-100 text-slate-900 d-flex align-items-center justify-content-center rounded-pill font-inter-semibold text-sm">3</div>
                    <h6 class="whitespace-nowrap text-gray-500 font-hubot mb-0">Complete</h6>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('orderPlace') }}" method="POST" id="addOrder" enctype="multipart/form-data"> @csrf
        <div class="container">
            <div class="row mt-sm-5 mt-4">
                <div class="col-xl-7 mb-4">
                    <div class="cardCheckout bg-slate-50 border border-slate-100 p-4 rounded-lg">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="text-3xl text-slate-900 font-hubot font-semibold mb-0">Checkout</h3>
                            {{-- <a href="javascript:;" class="text-blue-500 font-inter-semibold text-sm">Create an account</a> --}}
                        </div>
                        <div class="border-top border-gray-300 mt-4">
                            <h4 class="text-2xl text-slate-900 font-inter-regular my-4">Billing Details</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check mb-3 p-0">
                                        <label class="text-slate-900 font-hubot text-sm d-block mb-2" for="first_name">Fist Name</label>
                                        <input type="text" class="form-control sz_rmv_special_character" name="first_name" id="first_name" value="{{ old('first_name') }}">
                                        @if ( $errors->has( 'first_name' ) )
                                            <span class="text-danger error">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check mb-3 p-0">
                                        <label class="text-slate-900 font-hubot text-sm d-block mb-2" for="last_name">Last Name</label>
                                        <input type="text" class="form-control sz_rmv_special_character" name="last_name" id="last_name" value="{{ old('last_name') }}">
                                        @if ( $errors->has( 'last_name' ) )
                                            <span class="text-danger error">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-3 p-0">
                                <label class="text-slate-900 font-hubot text-sm d-block mb-2" for="address">Address</label>
                                <input type="text" class="form-control sz_rmv_special_character" name="address" id="address" value="{{ old('address') }}">
                                @if ( $errors->has('address') )
                                    <span class="text-danger error">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-check mb-3 p-0">
                                <label class="text-slate-900 font-hubot text-sm d-block mb-2" for="house_no">House Number</label>
                                <input type="text" class="form-control sz_rmv_special_character" name="house_no" id="house_no" value="{{ old('house_no') }}">
                                @if ( $errors->has('house_no') )
                                    <span class="text-danger error">{{ $errors->first('house_no') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check p-0">
                                        <label class="text-slate-900 font-hubot text-sm d-block mb-2" for="post_code">Postcode / ZIP</label>
                                        <input type="hidden" id="lat" name="lat">
                                        <input type="hidden" id="long" name="long">
                                        <input type="hidden" id="range" name="range">
                                        <input type="text" class="form-control sz_rmv_special_character" name="post_code" id="post_code" value="{{ old('post_code') }}">
                                        <span id="post_code_custom_error" class="error" style=""></span>
                                        @if ( $errors->has('post_code') )
                                            <span class="text-danger error">{{ $errors->first('post_code') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check p-0">
                                        <label class="text-slate-900 font-hubot text-sm d-block mb-2" for="phone">Phone Number</label>
                                        <input type="hidden" name="country_dial_code" id="country_dial_code">
                                        <input type="hidden" name="country_iso_code" id="country_iso_code">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                                        <label id="phone-error" class="error" for="phone"></label>
                                        @if ( $errors->has('phone') )
                                            <span class="text-danger error">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input shadow-none border-slate-200" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label mt-6px text-slate-900 font-urbanist-regular text-xs cursor-pointer ms-2" for="flexRadioDefault1">
                                    Save this address to my profile
                                </label>
                            </div>
                        </div>
                        <div class="border-top border-gray-300 mt-4">
                            <div class="d-flex flex-wrap align-items-center justify-content-between my-4">
                                <h4 class="text-2xl text-slate-900 font-inter-regular mb-0">Shipping Details</h4>
                                <div class="form-check">
                                    <input class="form-check-input shadow-none border-slate-200" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label mt-6px text-slate-900 font-urbanist-regular text-xs cursor-pointer ms-2" for="flexRadioDefault2">
                                        Same as personal details
                                    </label>
                                </div>
                            </div>
                            <div class="form-check mb-3 p-0">
                                <label class="text-slate-900 font-hubot text-sm d-block mb-2">Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-check mb-3 p-0">
                                <label class="text-slate-900 font-hubot text-sm d-block mb-2">Address</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check mb-3 p-0">
                                        <label class="text-slate-900 font-hubot text-sm d-block mb-2">Postal Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check mb-3 p-0">
                                        <label class="text-slate-900 font-hubot text-sm d-block mb-2">City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-3 p-0">
                                <label class="text-slate-900 font-hubot text-sm d-block mb-2">Country</label>
                                <div class="position-relative">
                                    <select>
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                    </select>
                                    <svg class="position-absolute translate-middle-y top-50 right-0 me-3 pointer-event-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $cart_products = session()->get('cart', []);
                    $grand_total = $sub_total = $total_discount = 0;
                @endphp
                <div class="col-xl-5">
                    <div class="cardCheckout order-history bg-slate-50 border border-slate-100 p-4 rounded-lg">
                        <div class="px-0 pb-3 pb-sm-4">
                            <h5 class="text-slate-900 mb-0 font-hubot font-semibold text-2xl text-xl-mob">Order Summary</h5>
                        </div>
                        <div class="offcanvas-body p-0 border-top border-gray-300">
                            <ul class="p-0 m-0 sz_card_popup_products">
                                @if( !empty( $cart_products ) )
                                    @foreach( $cart_products as $cp_key => $cp_val )
                                        <li class="d-flex border-bottom border-gray-300 py-3 position-relative">
                                            <div class="bg-white rounded-lg border border-slate-100 align-self-start">
                                                <a href="{{ $cp_val['url'] }}">
                                                    <img class="pro-img" src="{{ $cp_val['image'] }}" alt="bike" width="92" height="92">
                                                </a>
                                            </div>
                                            <div class="ms-3 w-100 d-flex flex-column justify-content-between">
                                                <h3 class="text-slate-900 font-inter-medium text-lg text-base-mob pe-5">{{ $cp_val['name'] }}</h3>
                                                <div class="d-flex nowrap align-items-center justify-content-between">
                                                    <p class="mb-0 text-slate-900 text-xl font-inter-medium text-lg-mob">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($cp_val['price'], 2) }}</p>
                                                    <div class="quantityWrapper d-flex align-items-center gap-3">
                                                        <div>
                                                            @php
                                                                $sz_quantity = $cp_val['quantity'];
                                                                if( $sz_quantity > 1 ){
                                                                    $sz_quantity .= ' Items';
                                                                } else {
                                                                    $sz_quantity .= ' Item';
                                                                }
                                                            @endphp
                                                            <div class="count font-inter-regular text-gray-500 text-end text-sm">x {{ $sz_quantity }}</div>
                                                        </div>
                                                        <div class="add-quantity-btn d-flex align-items-center justify-content-between py-1 px-2 text-slate-900 font-hubot font-semibold text-lg border border-slate-100 rounded-pill user-select-none" data-shared-id="{{ encrypt($cp_key) }}">
                                                            <span class="minus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-start text-base disabled">-</span>
                                                            <span class="sz_product_quantity text-xs px-2">{{ $cp_val['quantity'] }}</span>
                                                            <span class="plus-btn cursor-pointer w-4 d-inline-flex align-items-center justify-content-end text-base">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-1 me-4 position-absolute right-0">
                                                <button type="button" class="bg-transparent border-0 ms-auto sz_remove_cart" data-pid="{{ $cp_key }}">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.625 4.125L14.1602 11.6438C14.0414 13.5648 13.9821 14.5253 13.5006 15.2159C13.2625 15.5573 12.956 15.8455 12.6005 16.062C11.8816 16.5 10.9192 16.5 8.99452 16.5C7.06734 16.5 6.10372 16.5 5.38429 16.0612C5.0286 15.8443 4.722 15.5556 4.48401 15.2136C4.00266 14.5219 3.94459 13.5601 3.82846 11.6364L3.375 4.125" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                                        <path d="M2.25 4.125H15.75M12.0418 4.125L11.5298 3.0688C11.1897 2.3672 11.0196 2.01639 10.7263 1.79761C10.6612 1.74908 10.5923 1.7059 10.5203 1.66852C10.1954 1.5 9.80558 1.5 9.02588 1.5C8.2266 1.5 7.827 1.5 7.49676 1.67559C7.42357 1.71451 7.35373 1.75943 7.28797 1.80988C6.99123 2.03753 6.82547 2.40116 6.49396 3.12844L6.03969 4.125" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                                        <path d="M7.125 12.375V7.875" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                                        <path d="M10.875 12.375V7.875" stroke="#FF0000" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </li>
                                        @php
                                            $product_price = $cp_val['price'] * $cp_val['quantity'];
                                            $grand_total += $product_price;
                                            if( !empty($cp_val['original_price']) ){
                                                $original_price = $cp_val['original_price'] * $cp_val['quantity'];
                                            }
                                            $sub_total += $original_price;
                                            $total_discount += $original_price - $product_price;
                                        @endphp
                                        <input type="hidden" name="productId[]" value="{{ $cp_val['productId'] }}" />
                                        <input type="hidden" name="quantity[]" value="{{ $cp_val['quantity'] }}" />
                                    @endforeach
                                @endif
                            </ul>
                            @php
                                $sub_total = env( 'SZ_CURRENCY_SYMBOL' ) . ' ' . number_format($sub_total, 2);
                                $total_discount = env( 'SZ_CURRENCY_SYMBOL' ) . ' ' . number_format($total_discount, 2);
                                $total_tax = $delivery_cost = env( 'SZ_CURRENCY_SYMBOL' ) . ' 0.00';
                            @endphp
                            <div class="border-bottom border-gray-300">
                                <h4 class="text-slate-900 text-lg font-inter-semibold my-4">Price Details</h4>
                            </div>
                            <div class="sz_cart_price_details">
                                <div class="py-4 d-flex flex-column gap-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Subtotal</h4>
                                        <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">{{ $sub_total }}</h3>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Discount</h4>
                                        <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">{{ $total_discount }}</h3>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Tax</h4>
                                        <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">{{ $total_tax }}</h3>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Delivery Cost</h4>
                                        <h3 class="text-slate-900 text-xl text-xl-mob font-inter-medium mb-0">{{ $delivery_cost }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-slate-100 d-flex align-items-center justify-content-between pt-4">
                                <h4 class="text-slate-900 text-lg font-inter-semibold mb-0">Total</h4>
                                <h4 class="text-slate-900 text-xl font-inter-medium mb-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.41 13.41L10.58 20.58C10.7657 20.766 10.9863 20.9135 11.2291 21.0141C11.4719 21.1148 11.7322 21.1666 11.995 21.1666C12.2578 21.1666 12.5181 21.1148 12.7609 21.0141C13.0037 20.9135 13.2243 20.766 13.41 20.58L22 12V2H12L3.41 10.59C3.0375 10.9647 2.82841 11.4716 2.82841 12C2.82841 12.5284 3.0375 13.0353 3.41 13.41Z" fill="#FFA800" stroke="#FFA800" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 7H16.99" stroke="#F3F3F3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="sz_cart_total">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($grand_total, 2) }}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="cardCheckout paymentMethod order-history bg-slate-50 border border-slate-100 p-4 rounded-lg mt-4">
                        <h5 class="text-slate-900 font-hubot font-semibold text-2xl text-xl-mob mb-3 d-inline-flex align-items-center gap-1">
                            Payment Method
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#141B34" stroke-width="1.5"/>
                                <path d="M11.9922 15H12.0001" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 12V8" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </h5>
                        <div class="text-slate-900 text-sm font-inter-semibold bg-gray-700 p-2 rounded-lg w-100 mb-4">
                            🎁&nbsp;&nbsp; Save £35 now with online payment!
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check p-0 paymentSelect position-relative">
                                    <input class="form-check-input shadow-none position-absolute right-0 cursor-pointer" type="radio" name="flexRadioDefault" id="radio1">
                                    <label class="form-check-label border border-slate-900 text-sm text-slate-900 font-inter-regular w-100" for="radio1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 12C2.5 7.77027 2.5 5.6554 3.69797 4.25276C3.86808 4.05358 4.05358 3.86808 4.25276 3.69797C5.6554 2.5 7.77027 2.5 12 2.5C16.2297 2.5 18.3446 2.5 19.7472 3.69797C19.9464 3.86808 20.1319 4.05358 20.302 4.25276C21.5 5.6554 21.5 7.77027 21.5 12C21.5 16.2297 21.5 18.3446 20.302 19.7472C20.1319 19.9464 19.9464 20.1319 19.7472 20.302C18.3446 21.5 16.2297 21.5 12 21.5C7.77027 21.5 5.6554 21.5 4.25276 20.302C4.05358 20.1319 3.86808 19.9464 3.69797 19.7472C2.5 18.3446 2.5 16.2297 2.5 12Z" stroke="#141B34" stroke-width="1.5"/>
                                            <path d="M14.7102 10.063C14.6111 9.30039 13.7354 8.06817 12.1608 8.06814C10.3312 8.06811 9.56136 9.08141 9.40515 9.58806C9.16145 10.2657 9.21019 11.659 11.3547 11.8109C14.0354 12.0009 15.1093 12.3174 14.9727 13.958C14.836 15.5985 13.3417 15.953 12.1608 15.9149C10.9798 15.877 9.04764 15.3344 8.97266 13.8752M11.9734 7V8.07177M11.9734 15.9051V16.9999" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                        <span class="d-block mt-2">Cash on Delivery</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check p-0 paymentSelect position-relative">
                                    <input class="form-check-input shadow-none position-absolute right-0 cursor-pointer" type="radio" name="flexRadioDefault" id="radio2">
                                    <label class="form-check-label border-slate-900 border text-sm text-slate-900 font-inter-regular w-100" for="radio2">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 12C2.5 8.46252 2.5 6.69377 3.5528 5.5129C3.72119 5.32403 3.90678 5.14935 4.10746 4.99087C5.36213 4 7.24142 4 11 4H14C17.7586 4 19.6379 4 20.8925 4.99087C21.0932 5.14935 21.2788 5.32403 21.4472 5.5129C22.5 6.69377 22.5 8.46252 22.5 12C22.5 15.5375 22.5 17.3062 21.4472 18.4871C21.2788 18.676 21.0932 18.8506 20.8925 19.0091C19.6379 20 17.7586 20 14 20H11C7.24142 20 5.36213 20 4.10746 19.0091C3.90678 18.8506 3.72119 18.676 3.5528 18.4871C2.5 17.3062 2.5 15.5375 2.5 12Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.5 16H12" stroke="#141B34" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 16H18.5" stroke="#141B34" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.5 9H22.5" stroke="#141B34" stroke-width="1.5" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="d-block mt-2">Credit / Debit Card</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 py-4">
                        <div class="form-check mb-3 p-0">
                            <label class="text-gray-500 font-inter-medium text-sm d-block mb-2">Email</label>
                            <input type="text" class="form-control border-slate-700">
                        </div>
                        <div class="form-check mb-3 p-0">
                            <label class="text-gray-500 font-inter-medium text-sm d-block mb-2">Card information</label>
                            <div class="card-information overflow-hidden border border-slate-700 rounded-lg">
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="text" class="w-100 textInput border-slate-700 border-0" placeholder="Enter text">
                                    <div class="me-3">
                                        <svg width="150" height="24" viewBox="0 0 105 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_681_126528)">
                                            <path d="M22 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H22C23.1046 16 24 15.1046 24 14V2C24 0.89543 23.1046 0 22 0Z" fill="#252525"/>
                                            <path d="M9 13C11.7614 13 14 10.7614 14 8C14 5.23858 11.7614 3 9 3C6.23858 3 4 5.23858 4 8C4 10.7614 6.23858 13 9 13Z" fill="#EB001B"/>
                                            <path d="M15 13C17.7614 13 20 10.7614 20 8C20 5.23858 17.7614 3 15 3C12.2386 3 10 5.23858 10 8C10 10.7614 12.2386 13 15 13Z" fill="#F79E1B"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C13.2144 4.91221 14 6.36455 14 8.00037C14 9.63618 13.2144 11.0885 12 12.0007C10.7856 11.0885 10 9.63618 10 8.00037C10 6.36455 10.7856 4.91221 12 4Z" fill="#FF5F00"/>
                                            </g>
                                            <g clip-path="url(#clip1_681_126528)">
                                            <path d="M48.75 0.25H29.25C28.1454 0.25 27.25 1.14543 27.25 2.25V13.75C27.25 14.8546 28.1454 15.75 29.25 15.75H48.75C49.8546 15.75 50.75 14.8546 50.75 13.75V2.25C50.75 1.14543 49.8546 0.25 48.75 0.25Z" fill="white" stroke="black" stroke-opacity="0.2" stroke-width="0.5"/>
                                            <path d="M29.7877 5.91444C29.2646 5.62751 28.6675 5.39674 28 5.23659L28.028 5.11188H30.765C31.136 5.12489 31.437 5.23651 31.5349 5.63071L32.1298 8.46659L32.312 9.32073L33.978 5.11188H35.7768L33.1029 11.2775H31.304L29.7877 5.91444ZM37.1 11.2841H35.3988L36.4628 5.11188H38.1639L37.1 11.2841ZM43.2668 5.26277L43.0354 6.59559L42.8816 6.53004C42.5737 6.40525 42.1674 6.28054 41.6144 6.29371C40.9427 6.29371 40.6415 6.56277 40.6345 6.82546C40.6345 7.11441 40.9989 7.30484 41.5939 7.58725C42.574 8.02719 43.0286 8.56557 43.0218 9.26819C43.0081 10.5486 41.846 11.3761 40.0611 11.3761C39.2979 11.3694 38.5628 11.2181 38.1638 11.0476L38.4019 9.66205L38.6259 9.76066C39.1789 9.99071 39.5428 10.089 40.222 10.089C40.7118 10.089 41.2369 9.89838 41.2436 9.48488C41.2436 9.21565 41.0199 9.01851 40.3617 8.71646C39.7178 8.42087 38.8568 7.92848 38.8708 7.04198C38.8781 5.84042 40.0611 5 41.741 5C42.399 5 42.9312 5.13789 43.2668 5.26277ZM45.5278 9.09749H46.9417C46.8718 8.78889 46.5496 7.31147 46.5496 7.31147L46.4307 6.77964C46.3467 7.00943 46.1999 7.38373 46.2069 7.37056C46.2069 7.37056 45.6678 8.7429 45.5278 9.09749ZM47.6276 5.11188L49 11.284H47.4249C47.4249 11.284 47.2708 10.5748 47.2219 10.3581H45.0378C44.9746 10.5222 44.6808 11.284 44.6808 11.284H42.8958L45.4226 5.62399C45.5977 5.22342 45.906 5.11188 46.3118 5.11188H47.6276Z" fill="#1434CB"/>
                                            </g>
                                            <g clip-path="url(#clip2_681_126528)">
                                            <path d="M76 0H56C54.8954 0 54 0.89543 54 2V14C54 15.1046 54.8954 16 56 16H76C77.1046 16 78 15.1046 78 14V2C78 0.89543 77.1046 0 76 0Z" fill="#016FD0"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M67.7637 13.3928V7.69141L77.9112 7.70051V9.27541L76.7383 10.5288L77.9112 11.7937V13.402H76.0386L75.0434 12.3038L74.0553 13.4061L67.7637 13.3928Z" fill="#FFFFFE"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M68.4414 12.7692V8.32031H72.2137V9.3452H69.6628V10.0409H72.1529V11.0487H69.6628V11.732H72.2137V12.7692H68.4414Z" fill="#016FD0"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M72.1954 12.7691L74.2827 10.5421L72.1953 8.32031H73.811L75.0865 9.73035L76.3656 8.32031H77.9117V8.35532L75.8689 10.5421L77.9117 12.706V12.7691H76.35L75.0519 11.3449L73.7671 12.7691H72.1954Z" fill="#016FD0"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M68.2369 2.63281H70.6829L71.5421 4.58366V2.63281H74.5619L75.0827 4.09438L75.6052 2.63281H77.9111V8.3342H65.7246L68.2369 2.63281Z" fill="#FFFFFE"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M68.7006 3.25L66.7266 7.69517H68.0805L68.4529 6.80501H70.4708L70.843 7.69517H72.2306L70.2648 3.25H68.7006ZM68.8702 5.80744L69.4622 4.39236L70.0538 5.80744H68.8702Z" fill="#016FD0"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M72.2129 7.69508V3.25L74.116 3.25654L75.0953 5.98927L76.0809 3.25H77.9125V7.69508L76.7339 7.70551V4.65217L75.6213 7.69508H74.5455L73.4099 4.64174V7.69508H72.2129Z" fill="#016FD0"/>
                                            </g>
                                            <g clip-path="url(#clip3_681_126528)">
                                            <path d="M102.997 15.7499L102.999 15.7499C103.954 15.7581 104.738 14.9773 104.75 14.0042L104.75 2.0063C104.746 1.53569 104.559 1.08617 104.23 0.756802C103.901 0.428269 103.459 0.246149 102.997 0.250071L83.0006 0.250062C82.5411 0.246149 82.0986 0.428269 81.7703 0.756802C81.4411 1.08617 81.2538 1.53569 81.25 2.00426L81.25 13.9937C81.2538 14.4643 81.4411 14.9138 81.7703 15.2432C82.0986 15.5717 82.5411 15.7538 83.0028 15.7499H102.997ZM102.996 16.2499C102.996 16.2499 102.995 16.2499 102.995 16.2499L102.997 16.2499H102.996Z" fill="white" stroke="black" stroke-opacity="0.2" stroke-width="0.5"/>
                                            <path d="M93.6133 16.0002H102.998C103.525 16.0046 104.032 15.7995 104.407 15.4301C104.783 15.0607 104.996 14.5573 105.001 14.0305V11.6719C101.457 13.7062 97.6137 15.167 93.6133 16.0002Z" fill="#F27712"/>
                                            <path d="M104.173 9.2979H103.321L102.361 8.03169H102.27V9.2979H101.574V6.15307H102.601C103.403 6.15307 103.867 6.48411 103.867 7.07997C103.867 7.56824 103.577 7.88273 103.056 7.98204L104.173 9.2979ZM103.147 7.10479C103.147 6.79859 102.915 6.64135 102.485 6.64135H102.27V7.59307H102.468C102.915 7.59307 103.147 7.42755 103.147 7.10479ZM99.1412 6.15307H101.111V6.68273H99.8364V7.38617H101.061V7.92411H99.8364V8.77652H101.111V9.30617H99.1412V6.15307ZM96.9067 9.38066L95.4005 6.14479H96.1619L97.1136 8.26342L98.0736 6.14479H98.8185L97.2957 9.38066H96.9233H96.9067ZM90.6088 9.37238C89.5495 9.37238 88.7219 8.65238 88.7219 7.71721C88.7219 6.80686 89.5661 6.07031 90.6254 6.07031C90.9233 6.07031 91.1716 6.12824 91.4778 6.26066V6.98893C91.2459 6.76111 90.9339 6.63334 90.6088 6.63307C89.9467 6.63307 89.4419 7.11307 89.4419 7.71721C89.4419 8.35445 89.9385 8.80962 90.6419 8.80962C90.9564 8.80962 91.1964 8.71031 91.4778 8.46204V9.19031C91.1633 9.32273 90.8985 9.37238 90.6088 9.37238ZM88.5067 8.3379C88.5067 8.95031 88.0019 9.37238 87.2736 9.37238C86.744 9.37238 86.3633 9.19031 86.0405 8.77652L86.4957 8.38755C86.653 8.66893 86.9178 8.80962 87.2488 8.80962C87.5633 8.80962 87.7867 8.61928 87.7867 8.371C87.7867 8.23031 87.7205 8.12273 87.5798 8.03997C87.4256 7.96511 87.265 7.90418 87.0998 7.8579C86.4461 7.651 86.2226 7.42755 86.2226 6.98893C86.2226 6.47583 86.7026 6.08686 87.3316 6.08686C87.7288 6.08686 88.0847 6.211 88.3826 6.44273L88.0185 6.85652C87.8741 6.6983 87.6699 6.60817 87.4557 6.60824C87.1578 6.60824 86.9426 6.75721 86.9426 6.95583C86.9426 7.12135 87.0667 7.21238 87.4805 7.35307C88.275 7.60135 88.5067 7.83307 88.5067 8.34617V8.3379ZM85.0888 6.15307H85.784V9.30617H85.0888V6.15307ZM82.8543 9.30617H81.8281V6.15307H82.8543C83.9798 6.15307 84.7578 6.79859 84.7578 7.72548C84.7578 8.19721 84.5261 8.64411 84.1205 8.94204C83.773 9.19031 83.384 9.30617 82.8461 9.30617H82.8543ZM83.6654 6.93928C83.4336 6.75721 83.1688 6.691 82.7136 6.691H82.5233V8.77652H82.7136C83.1605 8.77652 83.4419 8.69376 83.6654 8.52824C83.9054 8.32962 84.0461 8.03169 84.0461 7.72548C84.0461 7.41928 83.9054 7.12962 83.6654 6.93928Z" fill="black"/>
                                            <path d="M93.413 6.07031C92.5026 6.07031 91.7578 6.79859 91.7578 7.70066C91.7578 8.66066 92.4695 9.38066 93.413 9.38066C94.3399 9.38066 95.0682 8.65238 95.0682 7.72548C95.0682 6.79859 94.3482 6.07031 93.413 6.07031Z" fill="#F27712"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_681_126528">
                                            <rect width="24" height="16" fill="white"/>
                                            </clipPath>
                                            <clipPath id="clip1_681_126528">
                                            <rect width="24" height="16" fill="white" transform="translate(27)"/>
                                            </clipPath>
                                            <clipPath id="clip2_681_126528">
                                            <rect width="24" height="16" fill="white" transform="translate(54)"/>
                                            </clipPath>
                                            <clipPath id="clip3_681_126528">
                                            <rect width="24" height="16" fill="white" transform="translate(81)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="row border-top border-slate-700">
                                    <div class="col-6">
                                        <input type="text" class="w-100 textInput border-slate-700 border-0" placeholder="MM / YY">
                                    </div>
                                    <div class="col-6 border-start border-slate-700 position-relative">
                                        <input type="text" class="w-100 textInput border-slate-700 border-0 ps-1" placeholder="CVC">
                                        <div class="position-absolute right-0 top-50 translate-middle-y me-4">
                                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M15.337 4C14.6146 4.50713 14.025 5.18088 13.6182 5.9642C13.2114 6.74753 12.9993 7.61734 13 8.5C13 9.83 13.472 11.05 14.257 12H4C3.73478 12 3.48043 12.1054 3.29289 12.2929C3.10536 12.4804 3 12.7348 3 13V14C3 14.2652 3.10536 14.5196 3.29289 14.7071C3.48043 14.8946 3.73478 15 4 15H20C20.2652 15 20.5196 14.8946 20.7071 14.7071C20.8946 14.5196 21 14.2652 21 14V13.4C21.7976 12.9917 22.484 12.3956 23 11.663V18C23 18.5304 22.7893 19.0391 22.4142 19.4142C22.0391 19.7893 21.5304 20 21 20H3C2.46957 20 1.96086 19.7893 1.58579 19.4142C1.21071 19.0391 1 18.5304 1 18V6C1 5.46957 1.21071 4.96086 1.58579 4.58579C1.96086 4.21071 2.46957 4 3 4H15.337ZM22.044 4.293C22.283 4.495 22.504 4.717 22.706 4.956C22.5406 4.68594 22.3138 4.45877 22.044 4.293Z" fill="#77787D"/>
                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M13.6 6C13.1267 6.92493 12.9262 7.96542 13.022 9H1V6H13.6Z" fill="#77787D"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 14C17.0413 14 15.6424 13.4205 14.6109 12.3891C13.5795 11.3576 13 9.95869 13 8.5C13 7.04131 13.5795 5.64236 14.6109 4.61091C15.6424 3.57946 17.0413 3 18.5 3C19.9587 3 21.3576 3.57946 22.3891 4.61091C23.4205 5.64236 24 7.04131 24 8.5C24 9.95869 23.4205 11.3576 22.3891 12.3891C21.3576 13.4205 19.9587 14 18.5 14ZM16.316 6.221H15.695L14.179 6.991V7.777L15.381 7.149V10.779H16.324V6.22H16.316V6.221ZM18.123 6.85C18.571 6.85 18.885 7.101 18.885 7.463C18.885 7.856 18.515 8.131 17.981 8.131H17.746V8.799H18.029C18.594 8.799 18.979 9.081 18.979 9.49C18.979 9.883 18.602 10.15 18.068 10.15C17.675 10.15 17.282 10.024 16.874 9.78V10.566C17.314 10.755 17.754 10.857 18.186 10.857C19.215 10.857 19.922 10.331 19.922 9.569C19.922 9.034 19.592 8.602 19.042 8.429C19.514 8.272 19.82 7.856 19.82 7.384C19.82 6.646 19.168 6.143 18.225 6.143C17.7998 6.14762 17.38 6.23845 16.991 6.41V7.18C17.369 6.968 17.754 6.85 18.123 6.85ZM21.517 8.563C22.091 8.563 22.491 8.901 22.491 9.341C22.491 9.804 22.091 10.126 21.517 10.126C21.171 10.126 20.81 10.016 20.441 9.789V10.598C20.826 10.771 21.219 10.858 21.604 10.858C21.808 10.858 21.996 10.826 22.177 10.778C22.5971 10.0982 22.82 9.3151 22.821 8.516L22.806 8.186C22.5138 8.01277 22.1786 7.92543 21.839 7.934C21.6891 7.93346 21.5393 7.94415 21.391 7.966V6.944H22.523C22.4247 6.69245 22.3035 6.45044 22.161 6.221H20.574V8.696C20.8817 8.61331 21.1984 8.56864 21.517 8.563Z" fill="#77787D"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mb-3 p-0">
                            <label class="text-gray-500 font-inter-medium text-sm d-block mb-2">Cardholder name</label>
                            <input type="text" class="form-control border-slate-700" placeholder="Full name on card">
                        </div>
                        <div class="form-check mb-3 p-0">
                            <label class="text-gray-500 font-inter-medium text-sm d-block mb-2">Country or region</label>
                            <div class="overflow-hidden border border-slate-700 rounded-lg">
                                <div class="position-relative">
                                    <select class="border-0 h-40">
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                    </select>
                                    <div class="position-absolute translate-middle-y top-50 right-0 pointer-event-none me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="text" class="border-0 border-slate-700 px-3 h-40 w-100 border-top border-slate-700" placeholder="Address line 1">
                                <input type="text" class="border-0 border-slate-700 px-3 h-40 w-100 border-top border-slate-700" placeholder="Address line 2">
                                <input type="text" class="border-0 border-slate-700 px-3 h-40 w-100 border-top border-slate-700" placeholder="Suburb">
                                <div class="row border-top border-slate-700">
                                    <div class="col-6">
                                        <input type="text" class="border-0 border-slate-700 px-3 h-40 w-100" placeholder="City">
                                    </div>
                                    <div class="col-6 border-start border-slate-700">
                                        <input type="text" class="border-0 border-slate-700 px-3 h-40 w-100 ps-2" placeholder="Postal code">
                                    </div>
                                </div>
                                <div class="position-relative border-top border-slate-700">
                                    <select class="border-0 h-40">
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                        <option value="">Item 1</option>
                                    </select>
                                    <div class="position-absolute translate-middle-y top-50 right-0 pointer-event-none me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden border border-slate-700 rounded-lg p-3">
                            <div class="form-check">
                                <input class="form-check-input shadow-none cursor-pointer border-slate-200" type="checkbox" id="checkbox1">
                                <label class="form-check-label font-inter-regular text-sm text-gray-500 cursor-pointer ms-2" for="checkbox1">
                                    Save my info for 1-click checkout with Link
                                    <span class="d-block text-xs">Securely pay on Powdur and everywhere Link is accepted.</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="button-dark font-inter-semibold w-100 mt-md-3 text-center rounded-lg">
                            Pay <span>£ 671.00</span>
                        </button>
                        <div class="text-gray-400 text-sm mt-4 mx-auto text-center w-100" style="max-width:260px">
                            By clicking Pay, you agree to the Link <span class="font-inter-semibold">Terms</span> and <span class="font-inter-semibold">Privacy Policy</span>.
                        </div>
                    </div>
                    <div class="cardCheckout order-history bg-slate-50 border border-slate-100 p-4 rounded-lg mt-4">
                        <div class="form-check">
                            <input name="terms_and_condtion" class="form-check-input shadow-none cursor-pointer border-slate-200" type="checkbox" value="" id="terms_and_condtion">
                            <label class="form-check-label font-inter-regular text-sm text-slate-900 cursor-pointer ms-2 mt-1" for="terms_and_condtion">
                                By clicking this, I agree to Skootz <a href="{{ route('terms-conditions') }}" target="_blank" class="text-blue-500 font-inter-semibold text-decoration-none">Terms &
                                Conditions</a> and <a href="{{ route('privacy-policy') }}" target="_blank" class="text-blue-500 font-inter-semibold text-decoration-none">Privacy Policy</a>
                            </label>
                        </div>
                        <button type="submit" class="button-dark w-100 mt-3 text-center" id="sz_submit_btn" disabled>
                            Order &nbsp;&nbsp;&nbsp; <span class="sz_cart_total">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($grand_total, 2) }}</span>
                        </button>
                       
                        <hr>
                        <div class="form-check">
                            <input name="online_payment" class="form-check-input shadow-none cursor-pointer border-slate-200" type="checkbox" value="" id="online_payment">
                            <label class="form-check-label font-inter-regular text-sm text-slate-900 cursor-pointer ms-2 mt-1" for="online_payment">Online Pay</label>
                        </div>
                        <input type='hidden' name='stripeToken' id='stripe-token-id'>
                        <div id="card-element" class="form-control p-3"></div>
                        <span class="text-danger card-msg-error"></span>
                        <button id='checkout-button' class="button-dark w-100 mt-3 text-center" style="background-color: #675dff;" type="button" onclick="createToken()" disabled>Pay {{ env( 'SZ_CURRENCY_SYMBOL' ) }} <span id="online_paid_amount">{{ number_format($grand_total, 2) }}</span> </button>
                    </div>
                    @if( $othersProducts->isNotEmpty() )
                        <div class="cardCheckout likeProuctCard order-history bg-slate-50 border border-slate-100 p-4 rounded-lg mt-4">
                            <div class="px-0 pb-3 pb-sm-4">
                                <h5 class="text-slate-900 mb-0 font-hubot font-semibold text-2xl text-xl-mob">You may also like</h5>
                            </div>
                            <div class="offcanvas-body overflow-hidden p-0">
                                <ul class="p-0 m-0">
                                    @foreach( $othersProducts as $o_product )
                                        @php
                                            $first_img = !empty($o_product->images->first()->name) ? $o_product->images->first()->name : '';
                                        @endphp
                                        <li class="d-xl-flex justify-content-between align-items-start border-top border-gray-300 py-3">
                                            <div class="d-flex align-items-start">
                                                <div class="bg-white rounded-lg border border-slate-100 w-fit">
                                                    <a href="{{ route('productDetail', $o_product->slug) }}">
                                                        <img class="pro-img" src="{{ env( 'APP_Image_URL' ) . 'storage/product-images/' . $first_img }}" alt="{{ $o_product->name }}" alt="bike" width="92" height="92">
                                                    </a>
                                                </div>
                                                <div class="ms-3 w-100">
                                                    <h3 class="text-slate-900 font-inter-medium text-lg text-base-mob">{{ $o_product->name }}</h3>
                                                    <p class="mb-0 text-slate-900 text-xl font-inter-medium text-lg-mob">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($o_product->web_sales_price, 2) }}</p>
                                                </div>
                                            </div>
                                            <div class="ps-2 likeProuct mt-xl-0 mt-3">
                                                <button class="button-dark text-base AddToCartBtn d-flex align-items-center gap-2" data-pid="{{ encrypt( $o_product->id ) }}">
                                                    Add to cart
                                                    <span class="sz_add_to_cart_circle {{ empty($cart_products[$o_product->id]) ? 'd-none' : '' }}">
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M22.8125 12C22.8125 6.47715 18.3353 2 12.8125 2C7.28965 2 2.8125 6.47715 2.8125 12C2.8125 17.5228 7.28965 22 12.8125 22C18.3353 22 22.8125 17.5228 22.8125 12Z" stroke="white" stroke-width="1.5"/>
                                                            <path d="M8.8125 12.5L11.3125 15L16.8125 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
</section>

@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
<script src="{{ asset('assets/js/intel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>
<script src="https://js.stripe.com/v3/"></script>

<script>
//stripe card genrate
var stripe = Stripe('{{ env('STRIPE_KEY') }}')
var elements = stripe.elements();
var cardElement = elements.create('card', {
    disabled: true, // Disables the Card Element by default
});
cardElement.mount('#card-element');

$(document).ready(function(){

    const input = document.querySelector('#phone');
    const errorMap = ["Phone number is invalid.", "Invalid country code", "Too short", "Too long"];
    const grandTotal = '{{$grand_total}}';

    const iti = window.intlTelInput(input, {
        initialCountry: "gb",
        preferredCountries: ['gb', 'pk'],
        separateDialCode:true,
        nationalMode:false,
        utilsScript: "{{ asset('assets/js/intel2.js') }}"
    });

    $.validator.addMethod('inttel', function (value, element) {
        if (value.trim() == '' || iti.isValidNumber()) {
            return true;
        }
        return false;
    }, function (result, element) {
            return errorMap[iti.getValidationError()] || errorMap[0];
    });

    input.addEventListener('keyup', () => {
        if (iti.isValidNumber()) {
            $('#country_dial_code').val(iti.s.dialCode);
            $('#country_iso_code').val(iti.j);
        }
    });
    input.addEventListener("countrychange", function() {
        if (iti.isValidNumber()) {
            $('#country_dial_code').val(iti.s.dialCode);
            $('#country_iso_code').val(iti.j);
        }
    });

    var submitStatus = 0;
    $('body').on('change', '#post_code, #house_no', function(e){
        var post_code = $('#post_code').val();
        var house_no = $('#house_no').val();
        if (post_code != '' && house_no != '' && post_code.length <= 8) {
            submitStatus = 0;
            $.ajax({
                url: '{{ route("getAvailableDriver") }}',
                type: 'POST',
                data: {
                    postal_code: post_code,
                    house_no: house_no,
                },
                success: function(response) {
                    if (response.status) {
                        $('body').find('#lat').val(response.lat);
                        $('body').find('#long').val(response.long);
                        $('body').find('#range').val(response.range);

                        submitStatus = 1;
                        $('#post_code_custom_error').text('');
                    } else {
                        submitStatus = 0;
                        $('body').find('#lat, #long, #range').val('');
                        $('#post_code_custom_error').text(response.message);
                    }
                }
            });
        }
    });
    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[\w\s]+$/i.test(value);
    }, "Please use only alphanumeric or alphabetic characters");

    $("#addOrder").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
                maxlength: 30,
                alphanumeric: true,
            },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 30,
                alphanumeric: true,
            },
            address: {
                required: true,
                alphanumeric: true,
            },
            house_no: {
                required: true,
                number: true,
                alphanumeric: true,
            },
            post_code: {
                required: true,
                maxlength:8,
                alphanumeric: true,
            },
            phone: {
                required: true,
                inttel: true,
            },
            terms_and_condtion: {
                required: true,
            },
        },
        messages: {
            first_name: {
                required: "First name is required."
            },
            last_name: {
                required: "Last name is required."
            },
            address: {
                required: "Address is required."
            },
            house_no: {
                required: "House Number is required.",
            },
            post_code: {
                required: "Post code is required.",
                maxlength: "Maximum 8 characters allowed for postal code.",
            },
            phone: {
                required: "Phone is required.",
            },
            terms_and_condtion: {
                required: "Terms & Conditions is required.",
            },
        },
        errorPlacement: function(error, element) {
            error.appendTo(element.parent("div"));
        },
        submitHandler:function(form) {
            if(!this.beenSubmitted && submitStatus == 1) {
                this.beenSubmitted = true;
                $('button[type="submit"]').attr('disabled', true);
                form.submit();
            }
        }
    });
    $(document).on('input', '.sz_rmv_special_character', function() {
        $(this).val(function(_, value) {
            return value.replace(/[^a-zA-Z0-9\s]/g, '');
        });
    });
    $(document).on('change', '#terms_and_condtion', function() {
        if( $(this).is(':checked') ){
            $('#sz_submit_btn').prop('disabled', false);
        } else {
            $('#sz_submit_btn').prop('disabled', true);
        }

        if($('#online_payment').prop('checked')) {
            $('#sz_submit_btn').prop('disabled', true);
        } else {
            $('#sz_submit_btn').prop('disabled', false);
        }
    });

    var quantity = [];
    $('input[name="quantity[]"]').each(function(){
        quantity.push($(this).val());
    });
    const sum = quantity.map(Number).reduce((acc, num) => acc + num, 0);
    const paidAmount = grandTotal - (sum * 35);

    $("#online_paid_amount").html(paidAmount);

    $("body").on('click', '#online_payment', function(e){
        if($(this).prop('checked')) {
            $("#sz_submit_btn").attr('disabled', 'disabled');
            $("#checkout-button").removeAttr('disabled');

            cardElement.update({ disabled: false });
        } else {
            $("#sz_submit_btn").removeAttr('disabled');
            $("#checkout-button").attr('disabled', 'disabled');
            $(".card-msg-error").text('');
            cardElement.update({ disabled: true });
        }
    });
});

//Create Token Code
function createToken() {
    document.getElementById("checkout-button").disabled = true;
    stripe.createToken(cardElement).then(function(result) {
        var form = $('#addOrder');
        $(".card-msg-error").text('');
        if(typeof result.error != 'undefined') {
            document.getElementById("checkout-button").disabled = false;
            // alert(result.error.message);
            $(".card-msg-error").text(result.error.message);
        }

        if(form.valid()) {
            /* creating token success */
            if(typeof result.token != 'undefined') {
                document.getElementById("stripe-token-id").value = result.token.id;
                // var form = document.getElementById('addOrder');

                form.attr('action', "{{route('stripePayment')}}");
                form.submit();
            }
        } else {
            document.getElementById("checkout-button").disabled = false;
        }
    });
}
</script>

</script>
@endsection
