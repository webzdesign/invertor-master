@extends('layouts.master')
@section('title', 'Promo' . ' ' . config('app.name') . ' Lux | Moldova’s Trusted Air Conditioner Experts')
@section('description','Founded in 2024, Invertor Lux provides customized AC sales and installation services across Moldova. Discover our story, mission, and commitment to customer comfort')
@section('url','/about')
@section('conversion')
    <script>
        gtag('event', 'conversion', { 'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-' });
    </script>
@endsection

@section('content')

    <section class="strore-banner p-2 position-relative">
        {{-- @if (!empty($information->page_banner))
            <img src="{{ url('admin/storage/app/public/information-images/'.$information->page_banner) }}" alt="{{ $information->page_title }} Banner" width="100%">
        @else
            <img src="{{ asset('assets/images/inv-our-store-banner-mob.png') }}" alt="Invertor Lux team" width="100%" class="d-sm-none">
        @endif --}}
        <img src="{{ asset('assets/images/promo-banner.png') }}" alt="Promo" width="100%">
        <!-- <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">
            {{ __('About')}} {{ config('app.name') }}
        </h2> -->
    </section>

    <section class="promo-content">
        <div class="container">
            <div>
                <h2>{{__('Special offer')}}</h2>
                <p>{{__('Enjoy comfort in any season - summer-winter air conditioners, now at 20% discount and with the possibility of paying in quick installments')}}!</p>
            </div>
            <div class="mt-sm-5 mt-4">
                <h3>{{__('Your advantages')}} </h3>
                <ul>
                    <li>
                        ✅ {{__('Limited discount: 20% on the entire product range, valid only in installments with fast payment')}}
                    </li>
                    <li>
                        ✅ {{__('Buy now, pay in installments later, no additional costs')}}
                    </li>
                    <li>
                        ✅ {{__('Works all year round – cools efficiently in summer and heats quickly in winter')}}
                    </li>
                    <li>
                        ✅ {{__('Extended warranty and low energy consumption')}}
                    </li>
                    <li>
                        ✅ {{__('Modern design, quiet, easy to install')}}
                    </li>
                    <li>
                        ✅ {{__('Zero stress – you choose, we deliver and install')}}
                    </li>
                </ul>
            </div>
            <div class="mt-sm-5 mt-4">
                <h3>{{__('Pay in quick installments – super simple')}}!</h3>
                <ul>
                    <li>
                        ✅ {{__('Fast approval, in a few minutes, just with your ID card')}}
                    </li>
                    <li>
                        ✅ {{__('ZERO costs, no down payment, no commissions')}}
                    </li>
                    <li>
                        ✅ {{__('Sign the contract directly in the app')}}
                    </li>
                    <li>
                        ✅ {{__('You pay in 4, 6 or 12 installments, adapted to your budget')}}.
                    </li>
                </ul>
            </div>
            <div class="mt-sm-5 mt-4">
                <h2>{{__('How do you place an order')}} ?</h2>
                <p>{{__('Fill out the form below with your details. A consultant will contact you shortly to help you choose the best option and guide you through the application process for installment payments with iute. Once you have chosen the model and received approval from iute, we take care of delivery and installation')}} .</p>
            </div>
            <div class="mt-sm-5 mt-4">
                <h2>{{__('Do you have any questions? Contact us')}}!</h2>
                <div>
                    <div class="text-lg text-base-mob text-gray-500">
                        <span class="font-inter-semibold">📍 {{__('Address')}}:</span>
                        <span class="font-inter-regular">{{__('400 Muncesti Road, Chisinau, MD2002, Moldova')}} </span>
                    </div>
                    <div class="text-lg text-base-mob text-gray-500">
                        <span class="font-inter-semibold">📞 {{__('Phone')}}:</span>
                        <span class="font-inter-regular"></span>
                        <a href="tel:373 793 15 994" target="_blank" class="font-inter-regular text-gray-500 text-decoration-none">
                            373 793 15 994
                        </a>
                    </div>
                    <div class="text-lg text-base-mob text-gray-500">
                        <span class="font-inter-semibold">🌐 {{__('Website')}}:</span>
                        <a href="https://www.invertor.md/" target="_blank" class="font-inter-regular text-gray-500">
                            www.invertor.md
                        </a>
                    </div>
                    <div class="text-lg text-base-mob text-gray-500">
                        <span class="font-inter-semibold">📩 {{__('Email')}}:</span>
                        <a href="mailto:info@invertor.md" target="_blank" class="font-inter-regular text-gray-500">
                            info@invertor.md
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-sm-5 mt-4">
                <button type="button" class="button-dark mx-auto d-table getPriceModalBtn" data-pid="{{encrypt(0)}}">{{__('Get price')}}</button>
            </div>
        </div>
    </section>

    {{-- @if (!empty($information->page_description))
        {!! $information->page_description !!}
    @endif --}}

    <section class="contactUs promo-contact">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-7 col-xl-8">
                    <div class="contact-card leftCard border border-slate-100 bg-white">
                        @if (session()->has('success'))
                            <div class="text-center mb-3 fs-4" style="color: green;">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('contactUs.store') }}" id="promoForm" method="post">
                            @csrf
                            <h4 class="text-slate-900 text-lg font-medium font-hubot text-center text-lg-start">{{ __('You can reach us anytime')}}</h4>
                            <div class="row mt-3">
                                <div class="col-6 pe-xl-4 mb-4">
                                    <input type="hidden" name="whichform" value="promo_form">
                                    <label class="font-inter-regular text-sm d-block mb-1" for="sz_firstname">{{ __('First name')}}<span class="text-rose-500">*</span></label>
                                    <input name="sz_firstname" id="sz_firstname" class="input-control w-100" type="text" placeholder="{{ __('First name')}}" value="{{ old('sz_firstname') }}">
                                    @if ( $errors->has('sz_firstname') )
                                        <span class="text-danger d-block">{{ $errors->first('sz_firstname') }}</span>
                                    @endif
                                </div>
                                <div class="col-6 ps-xl-4 mb-4">
                                    <label class="font-inter-regular text-sm d-block mb-1" for="sz_lastname">{{ __('Last name')}}<span class="text-rose-500">*</span></label>
                                    <input name="sz_lastname" id="sz_lastname" class="input-control w-100" type="text" placeholder="{{ __('Last name')}}" value="{{ old('sz_lastname') }}">
                                    @if ( $errors->has('sz_lastname') )
                                        <span class="text-danger d-block">{{ $errors->first('sz_lastname') }}</span>
                                    @endif
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="font-inter-regular text-sm d-block mb-1" for="sz_email">{{ __('Email')}}<span class="text-rose-500">*</span></label>
                                    <input name="sz_email" id="sz_email" class="input-control w-100" type="text" placeholder="you@company.com" value="{{ old('sz_email') }}">
                                    @if ( $errors->has('sz_email') )
                                        <span class="text-danger d-block">{{ $errors->first('sz_email') }}</span>
                                    @endif
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="font-inter-regular text-sm d-block mb-1" for="phone">{{ __('Phone number')}}<span class="text-rose-500">*</span></label>
                                    <input type="hidden" name="country_dial_code" id="country_dial_code">
                                    <input type="hidden" name="country_iso_code" id="country_iso_code">
                                    <input type="text" class="input-control w-100" name="sz_phone" id="phone" value="{{ old('sz_phone') }}">
                                    <label id="phone-error" class="error d-none" for="phone"></label>
                                    @if ( $errors->has('sz_phone') )
                                        <span class="text-danger error">{{ $errors->first('sz_phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="font-inter-regular text-sm d-block mb-1" for="sz_message">{{ __('Message')}}</label>
                                    <textarea name="sz_message" id="sz_message" class="input-control w-100 py-3 h-100" rows="3" cols="40">{{ old('sz_message') }}</textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label text-sm font-inter-regular text-slate-900" for="flexCheckDefault">
                                            {{__('Note')}}: {{__('By submitting this form, you consent to the processing of your personal data')}} <a href="javascript:;" class="font-inter-semibold text-neutrino-blue-400 text-decoration-none">{{__('See more')}}</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 mt-md-5">
                                    <button type="submit" class="button-dark w-100">{{__('Send Message')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="contact-card border border-slate-100 bg-white mt-4 mt-lg-0">
                        <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3">{{ __('Get in Touch')}}</h3>
                        <div class="d-flex mb-3">
                            <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">{{ __('Tel')}}.</div>
                            <a href="{{ __('tel')}}:79315994" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">79315994</a>
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
                            <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">{{ __('Address')}}</div>
                            <div class="text-decoration-none text-slate-900 font-inter-regular text-sm">
                                <b>{{ __('"INVERTOR LUX" SRL')}}</b></br>
                                {!! __('Legal address: MD-2002, Chisinau municipality, Republic of Moldova,<br/>Muncesti str. 400/1<br/>c/f 1018600028767<br>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="contact-card border border-slate-100 bg-white mt-4">
                        <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3">{{ __('Customer Support Hours')}}</h3>
                        <div class="text-slate-900 text-sm font-inter-semibold mb-3">{{ __('Monday – Friday')}}: <span class="font-inter-regular">9:00 AM – 6:00 PM</span></div>
                        <div class="text-slate-900 text-sm font-inter-semibold mb-0">{{ __('Saturday')}}: <span class="font-inter-regular">10:00 AM – 4:00 PM</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('customerReview')

    @include('latestScooter')

@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
<script src="{{ asset('assets/js/intel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>

<script>
    const input = document.querySelector('#phone');
    const errorMap = ["Phone number is invalid.", "Invalid country code", "Too short", "Too long"];

    const iti = window.intlTelInput(input, {
        initialCountry: "md",
        preferredCountries: ['md','gb', 'pk'],
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
        $("#promoForm").validate({
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
                error.addClass('text-danger').appendTo(element.parent("div"));
                var phoneError = $("#phone-error");
                phoneError.removeClass('d-none');
                phoneError.addClass('text-danger');
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