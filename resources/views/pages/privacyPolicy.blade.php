@extends('layouts.master')

@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">Privacy Policy</h2>
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
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">Privacy policy</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <p class="text-gray-500 text-lg font-inter-regular mb-0">Effective December 10, 2024</p>
        <p class="text-gray-500 text-lg font-inter-regular">Our privacy policy has been updated.</p>
        <h3 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">Privacy Policy</h3>
        <div>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Privacy protection is our top priority at Skootz. The information contained in this Privacy Policy explains how we collect, use and discloses your information on the website including any other media form or mobile application made available by us.</p>
        </div>
        <div>
            <h4 class="text-slate-900 text-2xl mt-4 font-hubot font-semibold">Information We Collect</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">We may collect personal information from you in various ways, including when you:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Register on our site</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Place an order</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Fill out a form</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">The types of information we may collect include:</h4>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Name</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Email address</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Phone number</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Shipping and billing address</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Account related details (Name, Email, Phone, PayPal address, Credit Card number, Expiry date, State, Address)</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">How We Use Your Information</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">We use the information we collect for the following purposes:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">It is necessary to process transactions and manage orders.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">For improving its customer service to answer inquiries</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">For purposes of sending periodic emails about your order or other products and services;</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">We use it to personalize user experience and improve our site as a whole.</li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">Data Protection</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">There are different security steps that we take in order to keep your personal information secure. All your data is stored on secure servers and only accessible through authorized personnel.</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">Cookies</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">Cookies are used on our website to improve user experience. Through your browser settings, you can have your computer warn you each time a cookie is being sent, or you can turn off all cookies.</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">Third-Party Disclosure</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">In addition, we do not sell, trade, or transfer your personal information to outside parties without your consent (unless necessary to provide our services, e.g., payment processors).</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">Your Rights</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">You should have the right of access to, correct or delete your personal information. If you wish to exercise these rights, please give notice to us by contacting us at <a href="mailto:runmaxlimited@gmail.com" class="font-inter-semibold text-decoration-none text-slate-900">runmaxlimited@gmail.com</a> or <a href="mailto:support@skotz.co.uk" class="font-inter-semibold text-decoration-none text-slate-900">support@skotz.co.uk</a>.</p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl mt-sm-5 mt-4 font-hubot font-semibold">Changes to This Policy</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0 mt-3">It may be that we update this Privacy Policy from time to time. We will notify you by way of a notice to the email address you have provided to us or a notice on our Site, of any significant changes in the manner in which we will treat your personal information.</p>
            <p>&nbsp;</p>
        </div>
        <h4 class="text-xl text-slate-900 font-inter-regular">Please forward any questions regarding this policy to <a href="mailto:runmaxlimited@gmail.com" class="font-inter-semibold text-decoration-none text-slate-900">runmaxlimited@gmail.com</a> or  <a href="mailto:support@skotz.co.uk" class="font-inter-semibold text-decoration-none text-slate-900">support@skotz.co.uk</a></h4>
    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection