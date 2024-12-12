@extends('layouts.master')

@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">Shipping Policy</h2>
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
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">Shipping policy</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h3 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">Shipping Policy</h3>
        <div>
            <h4 class="text-slate-900 text-2xl mt-4 font-hubot font-semibold">Delivery Options</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular list-disc"><span class="text-slate-900 font-inter-semibold">Standard Delivery:</span> 3–5 business days.</li>
                <li class="text-gray-500 text-lg font-inter-regular list-disc"><span class="text-slate-900 font-inter-semibold">Express Delivery:</span> 1–2 business days (additional fees apply).</li>
                <li class="text-gray-500 text-lg font-inter-regular list-disc"><span class="text-slate-900 font-inter-semibold">Cash on Delivery (COD):</span> Available across most UK regions.</li>
            </ul>
        </div>
        <div>
            <h4 class="text-slate-900 text-2xl mt-4 font-hubot font-semibold">Shipping Charges</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Free delivery on orders over £100.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">A small fee applies for orders below £100 or COD services.</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">Delivery Areas</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">We currently deliver across the UK. For COD availability in your region, check during checkout or contact us.</p>  
        </div>
    </div>
</section>

<section class="get-in-touch py-5 bg-slate-100">
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
</section>

@endsection