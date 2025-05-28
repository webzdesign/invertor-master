@extends('layouts.master')
@section('title', 'Refund & Cancellation Policy | '.config('app.name').' Lux')
@section('description', 'Invertor Lux offers fair and transparent refund terms for defective units or unfulfilled orders. Learn more about your consumer rights.')
@section('url', '/refund-and-return-policy')

@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-'});
  </script>
@endsection
@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-3xl-mob">{{ __('Refund & Cancellation Policy')}}</h2>
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
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">{{ __('Refund & Cancellation Policy')}}</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h1 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">{{ __('Refund & Cancellation Terms')}}</h1>
        <div class="mb-4">

            <p class="text-gray-500 text-lg font-inter-regular mb-0">{{ __('We strive for 100% customer satisfaction. As we provide custom air conditioning solutions, our refund policy is designed to balance flexibility with operational realities.')}}</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">1. {{ __('Order Cancellation')}}</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Orders can be cancelled <strong>before confirmation</strong>, with no charges.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('If installation is already scheduled or completed, cancellation may not be accepted unless the unit is defective.')}}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">2. {{ __('Refund Eligibility')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">{{ __('You may request a refund if')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('The product is found defective upon installation.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('The service was not delivered as promised.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('The product was unavailable and no alternative was accepted.')}}</li>
            </ul>
            <p>{!! __('Refunds are <strong>not available</strong> for') !!}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('Change of mind after installation.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('Issues caused by incorrect use or damage by the customer.')}}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">3. {{__('Process')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">{{ __('To initiate a refund')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Contact our support team within <strong>48 hours of installation or missed delivery</strong>.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('We will evaluate the claim, and if approved, refunds will be processed within <strong>7–10 business days</strong> via your original payment method or bank transfer.') !!}</li>
            </ul>

        </div>

    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection
