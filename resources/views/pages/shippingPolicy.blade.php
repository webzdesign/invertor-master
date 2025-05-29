@extends('layouts.master')
@section('title', 'Shipping & Delivery Policy | '.config('app.name').' Lux')
@section('description', 'Fast delivery and professional installation of air conditioners across Moldova. Learn how we manage logistics, delivery timelines, and regional coverage.')
@section('url', '/shipping-policy')

@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-'});
  </script>
@endsection
@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-2xl-mob">{{ __('Shipping & Installation Policy')}}</h2>
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
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">{{ __('Shipping & Installation Policy')}}</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h1 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">{{ __('Delivery & Installation Policy – Across Moldova')}}</h1>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">1. {{ __('Geographic Scope')}}</h4>
            <p>{!! __('We deliver and install across all regions of the <strong>Republic of Moldova</strong>') !!}.</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">2. {{ __('Delivery Timing')}}</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular list-disc">{!! __('Orders are fulfilled within <strong>1–2 business days</strong>, depending on') !!}:</li>
                <ul>
                    <li class="text-gray-500 text-lg font-inter-regular list-disc">{{ __('Customer location')}}</li>
                    <li class="text-gray-500 text-lg font-inter-regular list-disc">{{ __('Product availability in our warehouse')}}</li>
                </ul>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">3. {{ __('Process')}}</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('After quote acceptance, we coordinate directly with the customer to schedule delivery and installation.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('All installations are carried out by trained professionals.')}}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">4. {{ __('No Online Checkout')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Because each customer has unique requirements, we <strong>do not offer online checkout</strong>. All orders are confirmed after personalized consultation.') !!}</p> 
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">5. {{ __('Delivery Delays')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{ __('Any potential delays due to product unavailability, weather, or regional logistics will be communicated proactively.')}}</p>
        </div>
    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection
