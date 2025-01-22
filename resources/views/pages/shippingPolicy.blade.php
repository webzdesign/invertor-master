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
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Delivery Options</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular list-disc"><span class="text-slate-500 font-inter-semibold">Standard Delivery:</span>  Delivered within 3–5 business days</li>
                <li class="text-gray-500 text-lg font-inter-regular list-disc"><span class="text-slate-500 font-inter-semibold">Cash on Delivery (COD):</span> Available across most countries. 
                </li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Processing Time
            </h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular list-disc">Orders are processed within 1 business day after payment confirmation. Orders placed on weekends or public holidays will be processed the next business day.</li>
                
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Shipping Charges</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Free Delivery:</b> Available for orders over £100.
                </li>
               
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Delivery Areas</h4>
            <ul><li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">We currently deliver across the UK.</li><li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"> For COD availability in your region, check during checkout or contact us.</li>  </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Tracking Information</h4>
           <ul> <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Once your order is shipped, you will receive a tracking number via email to monitor your delivery status.
        </li></ul>
        </div>

        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Potential Delays
            </h4>
           <ul> <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Please note that delivery timelines may be extended during public holidays or periods of high demand.
            </li><li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">In the event of delays, our team will inform you via email or phone.</li></ul>
        </div>

        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Contact Us for Support

            </h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">For any questions or assistance regarding your return, feel free to reach out:</p>

            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Email: </b> <a href="mailto:runmaxlimited@gmail.com" class="font-inter-semibold text-decoration-none text-slate-900">runmaxlimited@gmail.com</a>
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Phone:</b> +44 7918816728

                </li>
              
            </ul>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">Our team is available during support hours to assist you promptly.</p>
        </div>

    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection