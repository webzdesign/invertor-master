@extends('layouts.master')

@section('content')

<section class="strore-banner blog-details-banner p-2">
    <div class="position-relative rounded-3xl overflow-hidden">
        <img src="{{ asset('assets/theme/img/blog/details/blog-details-1.jpg') }}" alt="banner" width="100%" class="d-none d-sm-block">
        <img src="{{ asset('assets/theme/img/blog/details/blog-details-1.jpg') }}" alt="banner" width="100%" class="d-sm-none h-100">
        <div class="position-absolute top-0 w-100 h-100 px-3 d-flex align-items-center flex-column justify-content-center z-1">
            <label class="text-xs font-inter-regular text-slate-100 bg-slate-900 px-2 py-1 rounded-pill mb-3">EcoFriendlyTravel</label>
            <h2 class="text-slate-50 font-bebas text-center mb-0">Discover Skootz Electric Scooters: Your Ultimate Destination for E-Scooters</h2>
            <span class="text-slate-50 text-xl mt-2 text-sm-mob">18 November 2024 | 5 min read</span>
        </div>
        <div class="banner-overlay"></div>
    </div>
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
            <li>
                <a href="{{ route('blog') }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">News</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">Discover Skootz Electric Scooters: Your Ultimate Destination for E-Scooters</li>
        </ul>
    </div>
</section>

<section class="blog-details mt-4 py-lg-5 mb-4 mb-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 pe-5">
                <div class="position-sticky leftNav d-none d-lg-block">
                    <nav class="navigation" id="mainNav">
                        <li class="links">
                            <a class="navigation__link position-relative active text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#1">Understanding Your E-Scooter Battery Basics</a>
                        </li>
                        <li class="links">
                            <a class="navigation__link position-relative text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#2">A Diverse Selection of Electric Scooters</a>
                        </li>
                        <li class="links">
                            <a class="navigation__link position-relative text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#3">Exceptional Customer Service</a>
                        </li>
                        <li class="links">
                            <a class="navigation__link position-relative text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#4">Innovative Products: Honeycomb Tyres</a>
                        </li>
                        <li class="links">
                            <a class="navigation__link position-relative text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#5">Why Choose Skootz?</a>
                        </li>
                    </nav>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="page-section" id="1">
                    <p class="text-gray-500 font-inter-regular text-sm">
                        The pace at which personal transport, electric scooters, has indeed become popular in the minds of people looking to commute in an eco-friendly way. UK-based Skootz Electric Scooters is one of the premier dealers of electric scooters and e-bikes with a concentration on customer satisfaction and innovative solutions that can change the game in urban mobility.
                    </p>
                </div>
                <div class="page-section" id="2">
                    <h3 class="text-2xl text-slate-900 font-inter-semibold mb-3">A Diverse Selection of Electric Scooters</h3>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Skootz Electric Scooters boasts an impressive inventory that caters to various needs and preferences. Whether you’re a teenager looking for your first scooter or an adult seeking a reliable commuting option, Skootz has something for everyone. Their collection includes:
                    </p>
                    <ul>
                        <li class="text-gray-500 text-sm font-inter-regular mb-0 list-disc">The Lightweight Electric Scooters: It would best suit the needs of people looking for portability without sacrificing performance.</li>
                        <li class="text-gray-500 text-sm font-inter-regular mb-0 list-disc">High-performance Models: For ride-and-reckon riders who want their ride to be faster and nimbler.</li>
                        <li class="text-gray-500 text-sm font-inter-regular mb-0 list-disc">Family-friendly Options: Scooters for kids and teens made with an emphasis on safety and fun.</li>
                    </ul>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Moreover, Skootz cautions people to research before buying an electric scooter. An insight into their blog will show you articles like “Top 5 Things You Should Know Before You Buy an Electric Scooter” which helps you decide whether to buy something based on the electric scooter from the factors of battery life, weight capacity and a lot more.
                    </p>
                </div>
                <div class="page-section" id="3">
                    <h3 class="text-2xl text-slate-900 font-inter-semibold mb-3">Exceptional Customer Service</h3>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Really, one of the hallmarks of Skootz is having a really good service to your customers. The team behind Skootz realizes that getting people to sell an electric scooter is just half of the battle, offering abundant post sales support with repairs and services for even the most expensive electric scooters. Customers’ testimonials reflected this zeal where mostly they expressed that the staff is easily ready and ready with speed.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Naturally, several customers have come out to tell their experiences with Skootz's repair services from its Edinburgh and Glasgow branches. From how their scooters got fixed in a minute to stories they were able to keep riders on the road.
                    </p>
                </div>
                <div class="page-section" id="4">
                    <h3 class="text-2xl text-slate-900 font-inter-semibold mb-3">Innovative Products: Honeycomb Tyres</h3>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        One glance at the products of Skootz catches your eye: they are aptly named honeycomb tires. They have puncture proof tires meaning you do not worry about flat tires. It’s a good way to breathe fresh air into a ride. Another example of the blog post title’s function, purpose, and what this particular innovation of electric scooters does to help the user avoid punctured tires forever is the title “Avoid Punctured Tyres Forever.” In essence, Skootz is going above and beyond safety, making it better — but also making the user's experience better.
                    </p>
                </div>
                <div class="page-section" id="5">
                    <h3 class="text-2xl text-slate-900 font-inter-semibold mb-3">Why Choose Skootz?</h3>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        A high quality reliability and excellent service, Skootz Electric Scooters. For anyone interested in an electric scooter, the company’s products are suitable for everyone of all ages and preferences, so it is a one stop shop. The company makes a unique shopping experience with the help of innovative technology like honeycomb tires, and excellent customer service that comes back time after time.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Skootz Electric Scooters not only provides the best products but also promotes education to the more active riders. If you're already familiar with using electric scooters or looking to upgrade from your current ride, Skootz is ready for you. Rest assured that while it strives to meet your needs, it will always ensure you safely and efficiently enjoy every journey. Check out their products today and be part of the future shift in sustainable urban transportation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection

@section('script')
<script>
$(document).ready(function(){
    $(document).on('click', '.blog-details .links', function(e){
        $('.navigation__link').removeClass('active');
        $(this).find('.navigation__link').addClass('active');
    });
});
</script>
@endsection