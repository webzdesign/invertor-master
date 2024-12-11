@extends('layouts.master')

@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">Terms and Conditions</h2>
</section>

<section class="bg-slate-100 py-2 d-none d-md-block">
    <div class="container">
        <ul class="m-0 p-0 d-flex align-items-center gap-3">
            <li>
                <a href="{{ route('home') }}" class="text-decoration-none text-slate-900 text-xl font-inter-medium">Home</a>
            </li>
            <li>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13.5C1 13.5 6.99999 9.0811 7 7.5C7.00001 5.9188 1 1.5 1 1.5" fill="#292929"/>
                    <path d="M1 13.5C1 13.5 6.99999 9.0811 7 7.5C7.00001 5.9188 1 1.5 1 1.5" stroke="#F3F3F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li class="text-slate-900 text-xl font-inter-medium">Terms & Condition</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h3 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">Terms and Conditions</h3>
        <div class="mb-sm-5 mb-4">
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">We at Skootz Electric Scooters welcome you. Agreement with the following terms and conditions is made by access to our website and purchase of our products. Please read them carefully.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Acceptance of Terms</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">This site is a group of people and when you use this site you confirm that you have read, and agree with, the following terms and conditions. You may not use our website if you do not agree with any part of these terms.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Product Information</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Products available in our store are listed on our website first. Some product and price information may be error-free, however, we cannot guarantee all of our descriptions, prices or other content is error-free.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Warranty</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">A One-year warranty comes with all scooters purchased from Skootz. This warranty covers manufacturing defects but excludes parts subject to wear and tear, including:</p>
            <ol class="sz_ol_tag">
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Tires</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Brakes</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Chain</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Seat</li>
            </ol>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Ordering and Payment</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">If you place an order via our website, we assume that you agree to provide us with accurate and complete information. You need to pay at the time of purchase using one of the payment methods available on our site.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Delivery</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Our goal is to meet your estimated delivery time frame as specified at checkout. But we are not held responsible for any delay outside our control.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Returns and Refunds</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Please let us know within 14 days from the day of delivery, if you wish to return a product. An item must be unused and in its original packaging to be eligible for a return. After we receive your returned item we will process refunds in a reasonable timeframe.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Limitation of Liability</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Skootz Electric Scooters excludes itself from all liability for any loss or damage, whether direct, indirect, or consequential, resulting from the use of our products or services.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Changes to Terms</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">These terms and conditions are subject to change at any time, so we reserve the right to do so. They will be effective immediately when posted on this website. Use of the site after changes are made means that you&rsquo;ve agreed to accept the new terms.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Governing Law</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">The provisions of these terms shall be governed by and construed by the laws of the jurisdiction within which Skootz Electric Scooters operates.</p>
        </div>
        <div class="mb-sm-5 mb-4">
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Wherever there are questions about these terms and conditions, please write to us on our contact form on our website. We are glad that you chose Skootz Electric Scooters!</p>
        </div>
    </div>
</section>

{{-- <section class="get-in-touch py-5 bg-slate-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="text-slate-900 text-4xl-mob font-bebas mb-lg-0 text-center text-lg-start mb-3">get in touch</h2>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <input type="text" placeholder="enter your email" class="text-sm-mob font-hubot font-medium text-white text-2xl rounded-pill border-0 w-100">
                    <a href="javascript:;" class="button-light position-absolute translate-middle-y top-50">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection