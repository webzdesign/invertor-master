@extends('layouts.master')
@section('title')Contact {{ config('app.name') }} | Get Support for Electric Scooters & E-Bikes @endsection
@section('description')Need help? Contact Skootz for product inquiries, order support, or technical assistance with your electric scooter or e-bike.@endsection

@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-'});
  </script>
@endsection
@section('content')

<section class="strore-banner p-2 position-relative">
    <img src="{{ asset('assets/images/contact_us-banner.png') }}" alt="banner" width="100%" class="rounded-3xl d-none d-sm-block">
    <img src="{{ asset('assets/images/contact_us-banner-mob.png') }}" alt="banner" width="100%" class="d-sm-none">
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">Contact Us</h2>
</section>

<section class="contactUs pt-sm-5 pt-4">
    <div class="container">
        <h2 class="text-6xl text-4xl-mob text-slate-900 font-bebas text-center">Contact Us</h2>
        <p class="text-gray-500 mt-3 text-xl text-base-mob font-inter-regular text-center">At Skootz Electric Scooters, we're here to help you find the perfect scooter for your lifestyle and answer any questions you may have. Whether you're curious about our products, need assistance with your order, or want advice on choosing the best scooter for your needs, our team is ready to assist!</p>
        <p class="text-gray-500 mt-4 mb-0 text-xl text-lg-mob font-inter-regular text-center">Feel free to contact us anytime—we look forward to hearing from you!</p>
        <div class="row mt-4">
            <div class="col-lg-7 col-xl-8">
                <div class="contact-card leftCard border border-slate-100">
                    @if (session()->has('success'))
                        <div class="text-center mb-3 fs-4" style="color: green;">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('contactUs.store') }}" id="contactUs" method="post">
                        @csrf
                        <h4 class="text-slate-900 text-lg font-medium font-hubot text-center text-lg-start">You can reach us anytime</h4>
                        <div class="row mt-3">
                            <div class="col-6 pe-xl-4 mb-4">
                                <label class="font-inter-regular text-sm d-block mb-1" for="sz_firstname">First name<span class="text-rose-500">*</span></label>
                                <input name="sz_firstname" id="sz_firstname" class="input-control w-100" type="text" placeholder="First name" value="{{ old('sz_firstname') }}">
                                @if ( $errors->has('sz_firstname') )
                                    <span class="text-danger d-block">{{ $errors->first('sz_firstname') }}</span>
                                @endif
                            </div>
                            <div class="col-6 ps-xl-4 mb-4">
                                <label class="font-inter-regular text-sm d-block mb-1" for="sz_lastname">Last name<span class="text-rose-500">*</span></label>
                                <input name="sz_lastname" id="sz_lastname" class="input-control w-100" type="text" placeholder="Last name" value="{{ old('sz_lastname') }}">
                                @if ( $errors->has('sz_lastname') )
                                    <span class="text-danger d-block">{{ $errors->first('sz_lastname') }}</span>
                                @endif
                            </div>
                            <div class="col-12 mb-4">
                                <label class="font-inter-regular text-sm d-block mb-1" for="sz_email">Email<span class="text-rose-500">*</span></label>
                                <input name="sz_email" id="sz_email" class="input-control w-100" type="text" placeholder="you@company.com" value="{{ old('sz_email') }}">
                                @if ( $errors->has('sz_email') )
                                    <span class="text-danger d-block">{{ $errors->first('sz_email') }}</span>
                                @endif
                            </div>
                            <div class="col-12 mb-4">
                                <label class="font-inter-regular text-sm d-block mb-1" for="phone">Phone number<span class="text-rose-500">*</span></label>
                                <input type="hidden" name="country_dial_code" id="country_dial_code">
                                <input type="hidden" name="country_iso_code" id="country_iso_code">
                                <input type="text" class="input-control w-100" name="sz_phone" id="phone" value="{{ old('sz_phone') }}">
                                <label id="phone-error" class="error" for="phone"></label>
                                @if ( $errors->has('sz_phone') )
                                    <span class="text-danger error">{{ $errors->first('sz_phone') }}</span>
                                @endif
                            </div>
                            <div class="col-12 mb-4">
                                <label class="font-inter-regular text-sm d-block mb-1" for="sz_message">Message</label>
                                <textarea name="sz_message" id="sz_message" class="input-control w-100 py-3 h-100" rows="3" cols="40">{{ old('sz_message') }}</textarea>
                            </div>
                            <div class="col-12 mt-4 mt-md-5">
                                <button type="submit" class="button-dark w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact-card border border-slate-100 mt-4 mt-lg-0">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3">Get in Touch</h3>
                    <div class="d-flex mb-3">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Tel.</div>
                        <a href="tel:79315994" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">79315994</a>
                    </div>
                    {{--<div class="d-flex mb-3">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Email</div>
                        <a href="mailto:runmaxlimited@gmail.com" class="text-slate-900 font-inter-semibold text-sm">runmaxlimited@gmail.com</a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Support</div>
                        <a href="mailto:support@skotz.co.uk" class="text-slate-900 font-inter-semibold text-sm">support@skotz.co.uk</a>
                    </div>--}}
                    <div class="d-flex">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Address</div>
                        <div class="text-decoration-none text-slate-900 font-inter-regular text-sm">
                            <b>"INVERTOR LUX" SRL</b></br>
                            Adresa juridică: MD-2002, mun. Chișinău, Republica Moldova,<br/>
                            str. Muncesti 400/1<br/>
                            c/f 1018600028767<br>
                        </div>
                    </div>
                </div>
                <div class="contact-card border border-slate-100 mt-4">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3">Customer Support Hours</h3>
                    <div class="text-slate-900 text-sm font-inter-semibold mb-3">Monday – Friday: <span class="font-inter-regular">9:00 AM – 6:00 PM</span></div>
                    <div class="text-slate-900 text-sm font-inter-semibold mb-0">Saturday: <span class="font-inter-regular">10:00 AM – 4:00 PM</span></div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="map rounded-lg overflow-hidden mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1244.506621191682!2d-1.073473880294042!3d50.80952089028293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRUNMAX%20LIMITED%20129%20Toronto%20Road!5e0!3m2!1sen!2sin!4v1736745812749!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
<script src="{{ asset('assets/js/intel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>

<script>
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
    $(document).ready(function(){
        $("#contactUs").validate({
            rules: {
                sz_firstname: {
                    required: true,
                },
                sz_lastname: {
                    required: true,
                },
                sz_email: {
                    email: true,
                    required: true,
                },
                sz_phone: {
                    required: true,
                    inttel: true,
                },
            },
            messages: {
                sz_firstname: {
                    required: "First name is required."
                },
                sz_lastname: {
                    required: "Last name is required."
                },
                sz_email: {
                    required: "Email is required."
                },
                sz_phone: {
                    required: "Phone is required.",
                },
            },
            errorPlacement: function(error, element) {
                error.appendTo(element.parent("div"));
            },
            submitHandler:function(form) {
                if(!this.beenSubmitted) {
                    this.beenSubmitted = true;
                    $('button[type="submit"]').attr('disabled', true);
                    form.submit();
                }
            }
        });
    });
</script>
@endsection
