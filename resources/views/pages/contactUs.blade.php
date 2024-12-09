@extends('layouts.master')

@section('content')

<section class="strore-banner p-2 position-relative">
    <img src="{{ asset('assets/images/blog-banner.png') }}" alt="banner" width="100%" class="rounded-3xl d-none d-sm-block">
    <img src="{{ asset('assets/images/blog-banner-mob.png') }}" alt="banner" width="100%" class="d-sm-none h-100">
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">Contact Us</h2>
</section>

<section class="contactUs pt-sm-5 pt-4">
    <div class="container">
        <h2 class="text-6xl text-4xl-mob text-slate-900 font-bebas text-center">Contact Us</h2>
        <p class="text-gray-500 mt-3 text-xl text-base-mob font-inter-regular text-center">At Skootz Electric Scooters, we're here to help you find the perfect scooter for your lifestyle and answer any questions you may have. Whether you're curious about our products, need assistance with your order, or want advice on choosing the best scooter for your needs, our team is ready to assist!</p>
        <div class="mt-4">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3 text-center text-sm-start">Get in Touch</h3>
                    <div class="d-sm-flex mb-3 text-center text-sm-start">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Phone</div>
                        <a href="tel:+44 7418356616" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">+44 7418356616</a>
                    </div>
                    <div class="d-sm-flex mb-3 text-center text-sm-start">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Email</div>
                        <a href="mailto:hello@runmax.com" class="text-decoration-none text-slate-900 font-inter-semibold text-sm">hello@runmax.com</a>
                    </div>
                    <div class="d-sm-flex text-center text-sm-start">
                        <div class="text-gray-500 text-sm font-inter-regular min-w-80 mb-2 mb-sm-0">Address</div>
                        <div class="addressTitle text-decoration-none text-slate-900 font-inter-regular text-sm">Visit our showroom at Edinburgh and Glasgow for a firsthand look at our range of scooters.</div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6 ps-sm-5 mt-sm-0 mt-4">
                    <h3 class="text-lg text-slate-900 font-hubot font-medium mb-3 text-center text-sm-start">Customer Support Hours</h3>
                    <div class="text-gray-500 text-sm font-inter-regular mb-3 text-center text-sm-start">Monday – Friday: 9:00 AM – 6:00 PM</div>
                    <div class="text-gray-500 text-sm font-inter-regular mb-3 text-center text-sm-start">Saturday: 10:00 AM – 4:00 PM</div>
                </div>
            </div>
        </div>
        <p class="text-gray-500 mt-4 text-xl text-lg-mob font-inter-regular text-center">Feel free to contact us anytime—we look forward to hearing from you!</p>
    </div>
</section>

<section class="map rounded-lg overflow-hidden mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.579562164561!2d-1.8864894877387377!3d52.522947471945436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870a31269ba69b1%3A0x24dd7c798f3d76b2!2sTop%20Cloud%20Logistics%20Limited!5e0!3m2!1sen!2sin!4v1730976289471!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection