@extends('layouts.master')

@section('content')

<section class="strore-banner blog-details-banner p-2">
    <div class="position-relative overflow-hidden rounded-3xl">
        <img src="{{ asset('assets/theme/img/blog/details/blog-details-2.jpg') }}" alt="banner" width="100%" class="d-none d-sm-block">
        <img src="{{ asset('assets/theme/img/blog/details/blog-details-2.jpg') }}" alt="banner" width="100%" class="d-sm-none h-100">
        <div class="position-absolute top-0 w-100 h-100 px-3 d-flex align-items-center flex-column justify-content-center z-1">
            <label class="text-xs font-inter-regular text-slate-100 bg-slate-900 px-2 py-1 rounded-pill mb-3">EcoFriendlyTravel</label>
            <h2 class="text-slate-50 font-bebas text-center mb-0">Unveiling the Advantages of Electric Scooters: A Comprehensive Guide</h2>
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
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">Unveiling the Advantages of Electric Scooters: A Comprehensive Guide</li>
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
                            <a class="navigation__link position-relative text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#2">Why Choose Electric Scooters?</a>
                        </li>
                        <li class="links">
                            <a class="navigation__link position-relative text-decoration-none ps-2 d-block font-hubot text-gray-500" href="#3">Skootz: Your One-Stop Shop for Electric Scooters</a>
                        </li>
                    </nav>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="page-section" id="1">
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Electric scooters are a relatively new type of transport that has innovated the transport system in cities. They confer a great number of benefits, which make them perfect for both working individuals and tourism.
                    </p>
                </div>
                <div class="page-section" id="2">
                    <h3 class="text-2xl text-slate-900 font-inter-semibold mb-3">Why Choose Electric Scooters?</h3>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Electric scooters are a comfortable, environmentally friendly, and economical means of getting around your city. EV charging allows you to travel to work, ride around your locality or visit new places in a fun and exciting way as electric scooters facilitate.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        The following are the main advantages of selecting electric scooters:
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Environmentally Friendly: In addition to being a viable sustainable transportation alternative, electric scooters could be zero emissions. If you buy an electric scooter you can decide to reduce your carbon and contribute your part to our environment.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●    Cost-Effective: Running an electric scooter is much cheaper than the cost of running a gasoline powered vehicle. Second, you’ll spend a ton less on gas, maintenance and parking.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Convenient and Portable: Electric scooters aren't too lightweight or bulky when out of use, but when parked shouldn't be so bulky that they hinder crowded streets and stores.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Time-Saving: Wherever you live, but particularly in urban areas, electric scooters can be instrumental in getting you to your destination very fast as you beat traffic and chop minutes off a commute.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Fun and Enjoyable: Riding an electric scooter is fun and it’s a nice way to get around. It also helps us explore its surroundings in a different way, and it makes us excited just to take our daily commute.
                    </p>
                </div>
                <div class="page-section" id="3">
                    <h3 class="text-2xl text-slate-900 font-inter-semibold mb-3">Skootz: Your One-Stop Shop for Electric Scooters</h3>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Electric scooters are a leading high quality electric scooter option and Skootz is a motivating provider of such providers. Whether this is your first time, or a lifetime on a scooter, Skootz has the best electric scooter for you to get rolling.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Here's a glimpse of the electric scooters available at Skootz:
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Skootz NEW M4 Pro S+ 2024 Electric Scooter: With a maximum speed of 31 mph and a range of up to 62 miles per charge, this is a powerful scooter that’s great for long commutes.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Skootz ES60 Electric Scooter: The shock absorbers and its wide brakes make for a comfortable ride and these features make this feature packed scooter worth the cash.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Skootz Protron Pro3X v2 - Hydraulic Brakes 2024: Equipped with hydraulic brakes for best stopping power, this high performance scooter makes for a safe and controlled ride.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm" style="padding-left:40px;">
                        ●	Aovo Pro 2 Electric Scooter: This is the perfect slick and stylish scooter to cruise downtown.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Not only does Skootz supply electric scooters, but it also has electric bikes and will provide your electric scooter with repairs and maintenance to keep it working smoothly.
                    </p>
                    <p class="text-gray-500 font-inter-regular text-sm">
                        Then, if you are in search of an entertaining, green, and hassle-free way to get around, check out Skootz today and see what they offer in terms of electric scooters!
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