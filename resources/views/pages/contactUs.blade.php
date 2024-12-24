@extends('layouts.master')

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
        <!-- <div class="mt-4">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3 text-center text-sm-start">Get in Touch</h3>
                    <div class="d-sm-flex mb-3 text-center text-sm-start">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Phone</div>
                        <a href="tel:+44 7418356616" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">+44 7418356616</a>
                    </div>
                    <div class="d-sm-flex mb-3 text-center text-sm-start">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Email</div>
                        <a href="mailto:hello@runmax.co.uk" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">hello@runmax.co.uk</a>
                    </div>
                    <div class="d-sm-flex text-center text-sm-start">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Address</div>
                        <div class="addressTitle text-decoration-none text-slate-900 font-inter-regular text-sm">Visit our showroom at Edinburgh and Glasgow for a firsthand look at our range of scooters.</div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6 ps-sm-5 mt-sm-0 mt-4">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3 text-center text-sm-start">Customer Support Hours</h3>
                    <div class="text-slate-900 text-sm font-inter-regular mb-3 text-center text-sm-start">Monday – Friday: 9:00 AM – 6:00 PM</div>
                    <div class="text-slate-900 text-sm font-inter-regular mb-3 text-center text-sm-start">Saturday: 10:00 AM – 4:00 PM</div>
                </div>
            </div>
        </div> -->
        <p class="text-gray-500 mt-4 mb-0 text-xl text-lg-mob font-inter-regular text-center">Feel free to contact us anytime—we look forward to hearing from you!</p>
        <div class="row mt-4">
            <div class="col-lg-7 col-xl-8">
                <div class="contact-card leftCard border border-slate-100">
                    <h4 class="text-slate-900 text-lg font-medium font-hubot text-center text-lg-start">You can reach us anytime</h4>
                    <div class="row mt-3">
                        <div class="col-6 pe-xl-4 mb-4">
                            <label class="font-inter-regular text-sm d-block mb-1">First name<span class="text-rose-500">*</span></label>
                            <input class="input-control w-100" type="text" placeholder="First name">
                        </div>
                        <div class="col-6 ps-xl-4 mb-4">
                            <label class="font-inter-regular text-sm d-block mb-1">Last name<span class="text-rose-500">*</span></label>
                            <input class="input-control w-100" type="text" placeholder="Last name">
                        </div>
                        <div class="col-12 mb-4">
                            <label class="font-inter-regular text-sm d-block mb-1">Email<span class="text-rose-500">*</span></label>
                            <input class="input-control w-100" type="text" placeholder="you@company.com">
                        </div>
                        <div class="col-12 mb-4">
                            <label class="font-inter-regular text-sm d-block mb-1">Phone number<span class="text-rose-500">*</span></label>
                            <input type="hidden" name="country_dial_code" id="country_dial_code">
                            <input type="hidden" name="country_iso_code" id="country_iso_code">
                            <input type="text" class="input-control w-100" name="phone" id="phone" value="{{ old('phone') }}">
                            <label id="phone-error" class="error" for="phone"></label>
                            @if ( $errors->has('phone') )
                                <span class="text-danger error">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-12 mb-4">
                            <label class="font-inter-regular text-sm d-block mb-1">Message<span class="text-rose-500">*</span></label>
                            <textarea class="input-control w-100 py-3 h-100" rows="3" cols="40"></textarea>
                        </div>
                        <div class="col-12 mt-4 mt-md-5">
                            <button class="button-dark w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact-card border border-slate-100 mt-4 mt-lg-0">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3">Get in Touch</h3>
                    <div class="d-flex mb-3">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Phone</div>
                        <a href="tel:+44 7418356616" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">+44 7418356616</a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Email</div>
                        <a href="mailto:hello@runmax.co.uk" class="text-slate-900 font-inter-semibold text-sm">hello@runmax.co.uk</a>
                    </div>
                    <div class="d-flex">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Address</div>
                        <div class="text-decoration-none text-slate-900 font-inter-regular text-sm">
                            129 Toronto Rd</br>
                            Portsmouth PO2 7QD, UK
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.579562164561!2d-1.8864894877387377!3d52.522947471945436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870a31269ba69b1%3A0x24dd7c798f3d76b2!2sTop%20Cloud%20Logistics%20Limited!5e0!3m2!1sen!2sin!4v1730976289471!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
<script src="{{ asset('assets/js/intel.min.js') }}"></script>

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
</script>
@endsection