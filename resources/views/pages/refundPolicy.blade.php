@extends('layouts.master')

@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">Refund Policy</h2>
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
            <li class="text-slate-900 text-xl font-inter-medium">Refund policy</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h3 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">Refund Policy</h3>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-4 font-hubot font-semibold">Hassle-Free Returns</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">We want you to be completely satisfied with your Skootz purchase.</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Eligibility for Refunds</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Items must be returned within 30 days of delivery.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Products must be in their original condition, unused, and with all packaging intact.</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Refund Process</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Contact us at <a href="mailto:hello@runmax.co.uk" class="font-inter-semibold text-decoration-none text-slate-900">hello@runmax.co.uk</a> to initiate the return.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Once we receive and inspect the item, a refund will be processed within 7 business days.</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Non-Refundable Items</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Customized products or items damaged by misuse.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Sale items, unless proven defective.</li>
            </ul>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">For full details, visit our website or contact our support team.</p>
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