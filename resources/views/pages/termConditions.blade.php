@extends('layouts.master')
@section('title', 'Terms & Conditions | '.config('app.name').' Lux Moldova')
@section('description', 'Review our service terms and policies for purchasing and installing air conditioners with Invertor Lux. Transparent, fair, and EU-compliant.')
@section('url', '/terms-conditions')

@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-'});
  </script>
@endsection
@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-2xl-mob">{{ __('Terms and Conditions')}}</h2>
</section>

<section class="breadcrumb mb-0 bg-slate-100 py-3 d-none d-md-block">
    <div class="container">
        <ul class="p-0 m-0 d-flex align-items-center flex-wrap gap-3">
            <li>
                <a href="{{ route('home') }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">{{ __('Home')}}</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">{{ __('Terms and Conditions')}}</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h1 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">{{ __('Terms & Conditions of Sale and Installation')}}</h1>
        <div class="mb-sm-5 mb-4">
            <span class="fw-bold">{{ __('Last Updated')}}:&nbsp;&nbsp;28/05/2025</span>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{!! __('Welcome to <strong>Invertor Lux</strong>. By accessing our website <a href="https://invertor.md/" class="text-decoration-none">(https://invertor.md/)</a>, submitting a service request, or engaging with our company for consultation, delivery, or installation of air conditioning units, you agree to be bound by the following terms and conditions.') !!}</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">1. {{ __('Scope of Services')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{!! __('Invertor Lux specializes in the <strong>sale and professional installation</strong> of residential and commercial air conditioning systems throughout <strong>Moldova</strong>. All our products are provided <strong>by consultation only</strong> — pricing and availability are determined after a personalized assessment of your needs.') !!}</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">2. {{ __('Order Process')}}</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('Users submit a request through our website form or by phone.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Our team will <strong>contact the customer directly</strong> to assess their needs and provide a <strong>customized offer</strong>.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('No pricing is displayed online; all quotes are tailored and shared during the consultation call.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Orders are confirmed <strong>only after the customer agrees to the quoted price and terms</strong> via verbal or written confirmation.') !!}</li>
            </ul>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">3. {{ __('Delivery & Installation')}}</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('After confirmation, we arrange for delivery and installation typically within <strong>1–2 working days</strong>, depending on product availability.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('We provide professional, on-site installation included with the purchase.')}}</li>
            </ul>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">4. {{__('Service Eligibility')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{{__('We reserve the right to')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Decline service in locations that pose <strong>safety risks</strong> or where <strong>technical conditions</strong> make installation unfeasible.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('Adjust delivery timelines based on stock or regional logistics.')}}</li>
            </ul>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">5. {{ __('Liability Disclaimer')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{{ __('While we ensure the highest service standards, Invertor Lux shall not be liable for')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Delays caused by supply chain issues or force majeure events.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Faults resulting from improper use of the installed product by the customer.')}}</li>
            </ul>
        </div>
    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection
