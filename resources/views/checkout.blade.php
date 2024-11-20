@extends('layouts.master')

@section('content')
<style>
.error{
    color:red;
}
.iti--allow-dropdown{
    width: 100%;
}
</style>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('shop') }}">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="{{ route('orderPlace') }}" method="POST" id="addOrder" enctype="multipart/form-data"> @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                       <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                        here</a> to enter your code</h6>-->
                        <input type="hidden" id="lat" name="lat">
                        <input type="hidden" id="long" name="long">
                        <input type="hidden" id="range" name="range">
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" placeholder="First Name" name="first_name" id="first_name" value="{{ old('first_name') }}">
                                    <label id="first_name-error" class="error" for="first_name"></label>
                                    @if ($errors->has('first_name'))
                                        <span class="text-danger error">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" placeholder="Last Name" name="last_name" id="last_name" value="{{ old('last_name') }}">
                                    <label id="last_name-error" class="error" for="last_name"></label>
                                    @if ($errors->has('last_name'))
                                        <span class="text-danger error">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                      
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" placeholder="Address" class="checkout__input__add mb-2" name="address" id="address" value="{{ old('address') }}">
                            <label id="address-error" class="error" for="address"></label>
                            @if ($errors->has('address'))
                                <span class="text-danger error">{{ $errors->first('address') }}</span>
                            @endif

                            <input type="text" placeholder="House Number" name="house_no" id="house_no" value="{{ old('house_no') }}">
                            <label id="house_no-error" class="error" for="house_no"></label>
                            @if ($errors->has('house_no'))
                                <span class="text-danger error">{{ $errors->first('house_no') }}</span>
                            @endif
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Postcode / ZIP<span>*</span></p>
                                    <input type="text" placeholder="Postcode / ZIP" name="post_code" id="post_code">
                                    <label id="post_code-error" class="error" for="post_code"></label>
                                    <span id="post_code_custom_error" class="error" style=""></span>
                                    @if ($errors->has('post_code'))
                                        <span class="text-danger error">{{ $errors->first('post_code') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="hidden" name="country_dial_code" id="country_dial_code">
                                    <input type="hidden" name="country_iso_code" id="country_iso_code">
                                    <input type="text" name="phone" id="phone">
                                    <label id="phone-error" class="error" for="phone"></label>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger error">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <div class="checkout__order__products">Product <span>Total</span></div>
                            <ul class="checkout__total__products">
                                @php
                                    $subtotal = 0;
                                    $int = 1;
                                @endphp
                                @foreach($cartItems as $ck=>$cv)
                                    <li>0{{$int++}}. {{$cv['name']}} <span><b>£{{ number_format($cv['price'], 2) }}</b></span></li>
                                    @php
                                        $total = $cv['price'] * $cv['quantity'];
                                        $subtotal = $subtotal + $total;
                                    @endphp
                                    <input type="hidden" name="productId[]" value="{{ $cv['productId'] }}" />
                                    <input type="hidden" name="quantity[]" value="{{ $cv['quantity'] }}" />
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                <li>Total <span>£{{ number_format($subtotal, 2) }}</span></li>
                                <!--<li>Total <span>$750.99</span></li>-->
                            </ul>
                            <!--<div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    Create an account?
                                    <input type="checkbox" id="acc-or">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Check Payment
                                    <input type="checkbox" id="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Paypal
                                    <input type="checkbox" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>-->
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
<script src="{{ asset('assets/js/intel.min.js') }}"></script>
@section('script')
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
    $('body').on('change', '#post_code', function(e){
        var post_code = $('#post_code').val();
        var house_no = $('#post_code').val();
        if (post_code != '' && house_no != '' && post_code.length <= 8) {
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

    $("#addOrder").validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            address: {
                required: true,
            },
            house_no: {
                required: true,
            },
            post_code: {
                required: true,
                maxlength:8,
            },
            phone: {
                required: true,
                inttel: true,
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
                required: "House No is required.",
            },
            post_code: {
                required: "Post code is required.",
                maxlength: "Maximum 8 characters allowed for postal code.",
            },
            phone: {
                required: "Phone is required.",
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
});
</script>
@endsection