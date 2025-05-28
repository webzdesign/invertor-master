@extends('layouts.master')
@section('title') Terms & Conditions | {{ config('app.name') }} @endsection
@section('description')Read Skootz’s terms and conditions for policies on orders, warranties, and customer support for electric scooters and e-bikes.@endsection
@section('conversion')
<script>
    gtag('event', 'conversion', {'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-'});
  </script>
@endsection
@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">Terms and Conditions</h2>
</section>

<section class="breadcrumb mb-0 bg-slate-100 py-3 d-none d-md-block">
    <div class="container">
        <ul class="p-0 m-0 d-flex align-items-center flex-wrap gap-3">
            <li>
                <a href="{{ route('home') }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">Home</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">Terms & Condition</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h3 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">Terms and Conditions</h3>
        <div class="mb-sm-5 mb-4">
            <span class="fw-bold">Last Updated:&nbsp;&nbsp;28/05/2025</span>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Welcome to <strong>Invertor Lux</strong>. By accessing our website <a href="https://invertor.md/" class="text-decoration-none">(https://invertor.md/)</a>, submitting a service request, or engaging with our company for consultation, delivery, or installation of air conditioning units, you agree to be bound by the following terms and conditions.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">1. Scope of Services</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Invertor Lux specializes in the sale and professional installation of residential and commercial air conditioning systems throughout Moldova. All our products are provided by consultation only — pricing and availability are determined after a personalized assessment of your needs.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">2. Order Process</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Users submit a request through our website form or by phone.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Our team will contact the customer directly to assess their needs and provide a customized offer.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">No pricing is displayed online; all quotes are tailored and shared during the consultation call.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Orders are confirmed only after the customer agrees to the quoted price and terms via verbal or written confirmation.</li>
            </ul>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">3. Delivery & Installation</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">After confirmation, we arrange for delivery and installation typically within 1–2 working days, depending on product availability.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">We provide professional, on-site installation included with the purchase.</li>
            </ul>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">4. Service Eligibility</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">We reserve the right to:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Decline service in locations that pose safety risks or where technical conditions make installation unfeasible.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Adjust delivery timelines based on stock or regional logistics.</li>
            </ul>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">5. Liability Disclaimer</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">While we ensure the highest service standards, Invertor Lux shall not be liable for:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Delays caused by supply chain issues or force majeure events.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Faults resulting from improper use of the installed product by the customer.</li>
            </ul>
        </div>
    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection
