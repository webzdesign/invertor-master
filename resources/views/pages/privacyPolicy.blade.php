@extends('layouts.master')
@section('title' , 'Privacy Policy | How '.config('app.name').' Lux Protects Your Data')
@section('description', 'Learn how Invertor Lux collects, uses, and protects your personal information. Fully GDPR compliant and committed to your privacy.')
@section('url','/privacy-policy')

@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-'});
  </script>
@endsection
@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">{{ __('Privacy policy')}}</h2>
</section>

<section class="breadcrumb mb-0 bg-slate-100 py-3 d-none d-md-block">
    <div class="container">
        <ul class="p-0 m-0 d-flex align-items-center flex-wrap gap-3">
            <li>
                <a href="{{ route('home') }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">{{__('Home')}}</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">{{__('Privacy policy')}}</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h1 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">{{__('Our Commitment to Privacy – GDPR Compliant')}}</h1>
        <div>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{!! __('<strong>Invertor Lux</strong> is committed to protecting your personal data. Our privacy practices are aligned with the <strong>General Data Protection Regulation (GDPR - EU 2016/679)</strong> and applicable local laws.') !!}</p>
        </div>
        <div>
            <h4 class="text-slate-900 text-2xl mt-4 font-hubot font-semibold">1. {{__('Data We Collect')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{{ __('We collect')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('<strong>Personal Identification Information</strong> Name, phone number, and address.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('<strong>Service Preferences</strong> Type of location (residential/business), air conditioner requirements.') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('<strong>Communication History</strong> Notes from our support calls and any installation details.') !!}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">2. {{__('How We Use Your Data')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{{__('We use your data exclusively to')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Contact you and understand your needs.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Provide a personalized quote and schedule installation.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Offer after-sales support.')}}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">3. {{__('Legal Grounds')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{{__('We process your personal data')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Based on your <strong>consent</strong> (when you submit a form or call us).') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('As part of fulfilling a <strong>contract</strong> (installing your purchased unit).') !!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('To meet <strong>legal obligations</strong>, such as warranty and taxation records.') !!}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">4. {{ __('Data Storage & Security')}}</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{!! __('Your data is stored securely and <strong>never sold or shared</strong> with third parties without your explicit consent.')!!}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Data is only accessible to authorized staff for the purpose of service delivery.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('We use industry-standard safeguards (e.g., HTTPS encryption, secure servers).')}}</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">5. {{ __('Your Rights')}}</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">{{__('Under GDPR, you may')}}:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Request access to or deletion of your data.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Correct inaccurate information.')}}</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">{{__('Withdraw consent at any time by contacting us at')}}: <strong>+373 79315994 or info@invertor.md</strong></li>
            </ul>
        </div>
    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection
