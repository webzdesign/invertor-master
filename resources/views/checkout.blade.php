@extends('layouts.master')

@section('content')

<section class="checkout pb-5">
    <div class="paginationSec px-4 py-3 border-bottom border-top border-slate-100">
        <div class="container">
            <div class="d-flex overflow-auto gap-3 align-items-center justify-content-start justify-content-md-center">
                <div class="pageTab active d-flex align-items-center gap-3">
                    <div class="count bg-slate-100 text-slate-900 d-flex align-items-center justify-content-center rounded-pill font-inter-semibold text-sm">1</div>
                    <h6 class="whitespace-nowrap text-gray-500 font-hubot mb-0">Personal Details</h6>
                </div>
                <hr class="hrLine min-w-100 bg-slate-100">
                <div class="pageTab active d-flex align-items-center gap-3">
                    <div class="count bg-slate-100 text-slate-900 d-flex align-items-center justify-content-center rounded-pill font-inter-semibold text-sm">2</div>
                    <h6 class="whitespace-nowrap text-gray-500 font-hubot mb-0">Payment</h6>
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
                <div class="col-lg-8 mb-4">
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
                    $subtotal = 0;
                @endphp
                <div class="col-lg-4">
                    <div class="cardCheckout order-history bg-slate-50 border border-slate-100 p-4 rounded-lg">
                        <div class="px-0 pb-3 pb-sm-4">
                            <h5 class="text-slate-900 mb-0 font-hubot font-semibold text-2xl text-xl-mob">Order Summary</h5>
                        </div>
                        <div class="offcanvas-body p-0 border-top border-gray-300">
                            <ul class="p-0 m-0">
                                @if( !empty( $cart_products ) )
                                    @foreach( $cart_products as $cp_key => $cp_val )
                                        <li class="d-flex border-bottom border-gray-300 py-3">
                                            <div class="bg-white rounded-lg">
                                                <a href="{{ $cp_val['url'] }}">
                                                    <img class="pro-img" src="{{ $cp_val['image'] }}" alt="bike" width="92" height="92">
                                                </a>
                                            </div>
                                            <div class="ms-3 w-100">
                                                <h3 class="text-slate-900 font-inter-medium text-lg text-base-mob">{{ $cp_val['name'] }}</h3>
                                                <p class="mb-0 text-slate-900 text-xl font-inter-medium text-lg-mob">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($cp_val['price'], 2) }}</p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-between">
                                                <button type="button" class="bg-transparent border-0 ms-auto sz_remove_cart" data-pid="{{ $cp_key }}">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.5 1L7.5 7M7.5 7L1.5 13M7.5 7L13.5 13M7.5 7L1.5 1" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </button>
                                                <div class="count font-inter-regular text-gray-500 text-end text-sm">x {{ $cp_val['quantity'] }} Item(s)</div>
                                            </div>
                                        </li>
                                        @php
                                            $total = $cp_val['price'] * $cp_val['quantity'];
                                            $subtotal = $subtotal + $total;
                                        @endphp
                                        <input type="hidden" name="productId[]" value="{{ $cp_val['productId'] }}" />
                                        <input type="hidden" name="quantity[]" value="{{ $cp_val['quantity'] }}" />
                                    @endforeach
                                @endif
                            </ul>
                            <div class="border-bottom border-gray-300">
                                <h4 class="text-slate-900 text-lg font-inter-semibold my-4">Price Details</h4>
                            </div>
                            {{-- <div class="py-4 d-flex flex-column gap-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Subtotal</h4>
                                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">£ 456.00</h3>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Discount</h4>
                                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">0</h3>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Tax</h4>
                                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">£ 100</h3>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Delivery Cost</h4>
                                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">£ 150</h3>
                                </div>
                            </div> --}}
                            <div class="border-top border-slate-100 d-flex align-items-center justify-content-between pt-4">
                                <h4 class="text-slate-900 text-lg font-inter-semibold mb-0">Total</h4>
                                <h4 class="text-slate-900 text-xl font-inter-medium mb-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.41 13.41L10.58 20.58C10.7657 20.766 10.9863 20.9135 11.2291 21.0141C11.4719 21.1148 11.7322 21.1666 11.995 21.1666C12.2578 21.1666 12.5181 21.1148 12.7609 21.0141C13.0037 20.9135 13.2243 20.766 13.41 20.58L22 12V2H12L3.41 10.59C3.0375 10.9647 2.82841 11.4716 2.82841 12C2.82841 12.5284 3.0375 13.0353 3.41 13.41Z" fill="#FFA800" stroke="#FFA800" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 7H16.99" stroke="#F3F3F3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    {{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($subtotal, 2) }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="cardCheckout order-history bg-slate-50 border border-slate-100 p-4 rounded-lg mt-4">
                        <h5 class="text-slate-900 font-hubot font-semibold text-2xl text-xl-mob mb-3">Payment Method</h5>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="form-check p-0 paymentSelect position-relative">
                                    <input class="form-check-input shadow-none position-absolute translate-middle-y mt-0 top-50 right-0 cursor-pointer" type="radio" name="flexRadioDefault" id="radio1">
                                    <label class="form-check-label text-sm text-slate-900 font-inter-regular w-100" for="radio1">
                                        <span class="">Cash on Delivery</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-check p-0 paymentSelect position-relative">
                                    <input class="form-check-input shadow-none position-absolute translate-middle-y mt-0 top-50 right-0 cursor-pointer" type="radio" name="flexRadioDefault" id="radio2">
                                    <label class="form-check-label text-sm text-slate-900 font-inter-regular w-100" for="radio2">
                                        <svg width="48" height="20" viewBox="0 0 48 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.41651 2.57812C9.96338 1.875 10.354 0.9375 10.2368 0C9.41651 0.0390625 8.43994 0.546875 7.85401 1.21094C7.34619 1.79688 6.87744 2.77344 6.99463 3.67187C7.93213 3.78906 8.83057 3.28125 9.41651 2.57812ZM10.2368 3.90625C8.90869 3.82812 7.77588 4.64844 7.15088 4.64844C6.52588 4.64844 5.54932 3.94531 4.49463 3.94531C3.12744 3.98438 1.87744 4.72656 1.17432 5.97656C-0.23193 8.4375 0.783695 12.0703 2.18994 14.0625C2.85401 15.0391 3.67432 16.1328 4.72901 16.0938C5.74463 16.0547 6.13526 15.4297 7.34619 15.4297C8.55713 15.4297 8.90869 16.0938 10.0024 16.0547C11.0962 16.0156 11.7993 15.0781 12.4634 14.0625C13.2446 12.9297 13.5571 11.8359 13.5571 11.7969C13.5181 11.7578 11.4087 10.9766 11.4087 8.55469C11.3696 6.52344 13.0493 5.54688 13.1274 5.50781C12.229 4.10156 10.7446 3.94531 10.2368 3.90625Z" fill="black"/>
                                            <path d="M21.7207 1.13281C24.6113 1.13281 26.6035 3.125 26.6035 5.97656C26.6035 8.86719 24.5723 10.8594 21.6426 10.8594H18.4785V15.8984H16.1738V1.13281H21.7207ZM18.4785 8.94531H21.0957C23.0879 8.94531 24.2207 7.85156 24.2207 6.01562C24.2207 4.14062 23.0879 3.08594 21.0957 3.08594H18.4395V8.94531H18.4785ZM27.1895 12.8906C27.1895 11.0156 28.6348 9.84375 31.2129 9.6875L34.1816 9.53125V8.71094C34.1816 7.5 33.3613 6.79687 32.0332 6.79687C30.7441 6.79687 29.9629 7.42187 29.7676 8.35937H27.6582C27.7754 6.40625 29.4551 4.96094 32.1113 4.96094C34.7285 4.96094 36.4082 6.32812 36.4082 8.51562V15.9375H34.2988V14.1797H34.2598C33.6348 15.3906 32.2676 16.1328 30.8613 16.1328C28.6738 16.1328 27.1895 14.8047 27.1895 12.8906ZM34.1816 11.9141V11.0547L31.5254 11.2109C30.1973 11.2891 29.4551 11.875 29.4551 12.8125C29.4551 13.75 30.2363 14.375 31.4082 14.375C32.9707 14.375 34.1816 13.3203 34.1816 11.9141ZM38.3613 19.9219V18.125C38.5176 18.1641 38.9082 18.1641 39.0645 18.1641C40.0801 18.1641 40.627 17.7344 40.9785 16.6406C40.9785 16.6016 41.1738 15.9766 41.1738 15.9766L37.2676 5.19531H39.6504L42.3848 13.9844H42.4238L45.1582 5.19531H47.502L43.4785 16.5625C42.541 19.1797 41.4863 20 39.2598 20C39.1035 19.9609 38.5566 19.9609 38.3613 19.9219Z" fill="black"/>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check p-0 paymentSelect position-relative">
                                    <input class="form-check-input shadow-none position-absolute translate-middle-y mt-0 top-50 right-0 cursor-pointer" type="radio" name="flexRadioDefault" id="radio3">
                                    <label class="form-check-label text-sm text-slate-900 font-inter-regular w-100 d-flex gap-1 align-items-center" for="radio3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 12C2 8.46252 2 6.69377 3.0528 5.5129C3.22119 5.32403 3.40678 5.14935 3.60746 4.99087C4.86213 4 6.74142 4 10.5 4H13.5C17.2586 4 19.1379 4 20.3925 4.99087C20.5932 5.14935 20.7788 5.32403 20.9472 5.5129C22 6.69377 22 8.46252 22 12C22 15.5375 22 17.3062 20.9472 18.4871C20.7788 18.676 20.5932 18.8506 20.3925 19.0091C19.1379 20 17.2586 20 13.5 20H10.5C6.74142 20 4.86213 20 3.60746 19.0091C3.40678 18.8506 3.22119 18.676 3.0528 18.4871C2 17.3062 2 15.5375 2 12Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 16H11.5" stroke="#141B34" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.5 16H18" stroke="#141B34" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2 9H22" stroke="#141B34" stroke-width="1.5" stroke-linejoin="round"/>
                                        </svg>
                                        Credit Card
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check p-0 paymentSelect position-relative">
                                    <input class="form-check-input shadow-none position-absolute translate-middle-y mt-0 top-50 right-0 cursor-pointer" type="radio" name="flexRadioDefault" id="radio4">
                                    <label class="form-check-label text-sm text-slate-900 font-inter-regular w-100 d-flex gap-1 align-items-center" for="radio4">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.79358 4.83499L4.66511 17.6712C4.48586 18.7522 4.39623 19.2927 4.69427 19.6464C4.99231 20 5.53749 20 6.62785 20H7.03027C7.85308 20 8.26448 20 8.54501 19.7555C8.82554 19.5109 8.88372 19.1016 9.00008 18.2828L9.46761 14.9934C9.50457 14.7333 9.52305 14.6033 9.55213 14.492C9.76041 13.6948 10.4339 13.1077 11.2485 13.0132C11.3622 13 11.4929 13 11.7543 13H12.9163C16.0113 13 18.6943 10.8473 19.3803 7.81384C20.0536 4.83576 17.8016 2 14.7631 2H10.1231C9.0093 2 8.45239 2 8.01383 2.2348C7.76304 2.36907 7.54377 2.55577 7.37077 2.78235C7.06824 3.17856 6.97669 3.7307 6.79358 4.83499Z" stroke="#141B34" stroke-width="1.5"/>
                                            <path d="M8.74315 19.5008L8.51451 20.8335C8.40978 21.4439 8.88532 22.0008 9.51128 22.0008H11.5018C11.9961 22.0008 12.4179 21.6474 12.4991 21.1652L13.2285 16.8364C13.3098 16.3543 13.7316 16.0008 14.2258 16.0008H16.0289C18.61 16.0008 20.8448 14.2277 21.4047 11.7355C21.7967 9.99101 20.9437 8.3109 19.5 7.50195" stroke="#141B34" stroke-width="1.5"/>
                                        </svg>
                                        PayPal
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="cardCheckout order-history bg-slate-50 border border-slate-100 p-4 rounded-lg mt-4">
                        <div class="form-check">
                            <input name="terms_and_condtion" class="form-check-input shadow-none cursor-pointer border-slate-200" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label font-inter-regular text-sm text-slate-900 cursor-pointer ms-2 mt-1" for="flexCheckDefault">
                                By clicking this, I agree to Skootz <a href="{{ route('terms-conditions') }}" target="_blank" class="text-blue-500 font-inter-semibold text-decoration-none">Terms & 
                                Conditions</a> and <a href="{{ route('privacy-policy') }}" target="_blank" class="text-blue-500 font-inter-semibold text-decoration-none">Privacy Policy</a>
                            </label>
                        </div>
                        <button type="submit" class="button-dark w-100 mt-3 text-center">
                            Order &nbsp;&nbsp;&nbsp; {{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($subtotal, 2) }}
                        </button>
                        <div class="font-semibold text-lg m-0 mt-2 text-center">Cash on delivery</div>
                    </div>
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
<script>
$(document).ready(function(){
    
    const input = document.querySelector('#phone');
    const errorMap = ["Phone number is invalid.", "Invalid country code", "Too short", "Too long"];

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
});
</script>
@endsection