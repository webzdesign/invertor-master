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
                                    <div class="form-check mb-3 p-0">
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
                                    <div class="form-check mb-3 p-0">
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
