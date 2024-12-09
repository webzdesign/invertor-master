@extends('layouts.master')

@section('content')

<section class="strore-banner blog-details-banner p-2">
    <div class="position-relative">
        <img src="{{ asset('assets/theme/img/blog/details/blog-details-2.jpg') }}" alt="banner" width="100%" class="rounded-3xl d-none d-sm-block">
        <img src="{{ asset('assets/theme/img/blog/details/blog-details-2.jpg') }}" alt="banner" width="100%" class="d-sm-none h-100">
        <div class="position-absolute top-0 w-100 h-100 px-3 d-flex align-items-center flex-column justify-content-center">
            <label class="text-xs font-inter-regular text-slate-100 bg-slate-900 px-2 py-1 rounded-pill mb-3">EcoFriendlyTravel</label>
            <h2 class="text-slate-50 font-bebas text-center mb-0">Unveiling the Advantages of Electric Scooters: A Comprehensive Guide</h2>
            <span class="text-slate-50 text-xl mt-2 text-sm-mob">18 November 2024 | 5 min read</span>
        </div>
    </div>
</section>

<section class="breadcrumb mb-0 bg-gray-500 py-3 d-none d-lg-block">
    <div class="container">
        <ul class="p-0 m-0 d-flex align-items-center flex-wrap gap-3">
            <li>
                <a href="{{ route('home') }}" class="text-slate-100 font-inter-medium text-xl text-decoration-none">Home</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#F3F3F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li>
                <a href="{{ route('blog') }}" class="text-slate-100 font-inter-medium text-xl text-decoration-none">News</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#F3F3F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-100">
                Unveiling the Advantages of Electric Scooters: A Comprehensive Guide
            </li>
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
                    <div class="mt-5">
                        <h3 class="text-slate-900 font-hubot font-medium text-lg">Categories</h3>
                        <ul class="m-0 p-0">
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">All categories (23)</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">Skootz eScooters (05)</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">eBike Vs eScooter (01)</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">D8 Pro Mi Pro H7 (10)</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">Ride Safe Tips (07)</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-slate-900 font-hubot font-medium text-lg">Tags</h3>
                        <ul class="m-0 p-0">
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">BeginnerFriendlyScooters</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">FlexiblePaymentPlans</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">SmartCommuting</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">EcoCommutersUnite</li>
                            <li class="text-gray-500 text-sm font-inter-regular mb-2">GreenCityLiving</li>
                        </ul>
                    </div>
                    <div class="ad-banner mt-5 d-flex align-items-center justify-content-center bg-slate-100 rounded-lg font-bebas text-2xl text-slate-900">
                        Ad Banner
                    </div>
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
                <div class="mt-5 d-flex align-items-center justify-content-between bg-slate-100 rounded-lg px-4 py-3">
                    <h3 class="text-slate-900 font-inter-semibold text-xl mb-0"><span class="font-inter-regular">By</span> Skootz</h3>
                    <ul class="m-0 p-0 d-flex gap-2">
                        <li>
                            <a href="javascript:;">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5C0 5.87258 5.37258 0.5 12 0.5C18.6274 0.5 24 5.87258 24 12.5C24 19.1274 18.6274 24.5 12 24.5C5.37258 24.5 0 19.1274 0 12.5ZM12 6.5C15.3 6.5 18 9.2 18 12.5C18 15.5 15.825 18.05 12.825 18.5V14.225H14.25L14.55 12.5H12.9V11.375C12.9 10.925 13.125 10.475 13.875 10.475H14.625V8.975C14.625 8.975 13.95 8.825 13.275 8.825C11.925 8.825 11.025 9.65 11.025 11.15V12.5H9.525V14.225H11.025V18.425C8.175 17.975 6 15.5 6 12.5C6 9.2 8.7 6.5 12 6.5Z" fill="#292929"/>
                                </svg>                                        
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5C0 5.87258 5.37258 0.5 12 0.5C18.6274 0.5 24 5.87258 24 12.5C24 19.1274 18.6274 24.5 12 24.5C5.37258 24.5 0 19.1274 0 12.5ZM16.575 9.125C17.1 9.05 17.55 8.975 18 8.75C17.7 9.275 17.25 9.725 16.725 10.025C16.875 13.55 14.325 17.375 9.75 17.375C8.4 17.375 7.125 16.925 6 16.25C7.275 16.4 8.625 16.025 9.525 15.35C8.4 15.35 7.5 14.6 7.2 13.625C7.575 13.7 7.95 13.625 8.325 13.55C7.2 13.25 6.375 12.2 6.375 11.075C6.75 11.225 7.125 11.375 7.5 11.375C6.45 10.625 6.075 9.2 6.75 8.075C8.025 9.575 9.825 10.55 11.85 10.625C11.475 9.125 12.675 7.625 14.25 7.625C14.925 7.625 15.6 7.925 16.05 8.375C16.65 8.225 17.175 8.075 17.625 7.775C17.475 8.375 17.1 8.825 16.575 9.125Z" fill="#292929"/>
                                </svg>                                       
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 14.6C10.875 14.6 9.9 13.7 9.9 12.5C9.9 11.375 10.8 10.4 12 10.4C13.125 10.4 14.1 11.3 14.1 12.5C14.1 13.625 13.125 14.6 12 14.6Z" fill="#292929"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.55 7.4H9.45C8.85 7.475 8.55 7.55 8.325 7.625C8.025 7.7 7.8 7.85 7.575 8.075C7.39696 8.25304 7.31284 8.43108 7.21116 8.64628C7.18437 8.70299 7.15628 8.76244 7.125 8.825C7.1134 8.85981 7.1 8.89641 7.08564 8.93564C7.00718 9.15 6.9 9.44282 6.9 9.95V15.05C6.975 15.65 7.05 15.95 7.125 16.175C7.2 16.475 7.35 16.7 7.575 16.925C7.75304 17.103 7.93108 17.1872 8.14628 17.2888C8.20304 17.3157 8.26239 17.3437 8.325 17.375C8.35981 17.3866 8.39641 17.4 8.43564 17.4144C8.65 17.4928 8.94282 17.6 9.45 17.6H14.55C15.15 17.525 15.45 17.45 15.675 17.375C15.975 17.3 16.2 17.15 16.425 16.925C16.603 16.747 16.6872 16.5689 16.7888 16.3537C16.8156 16.297 16.8437 16.2376 16.875 16.175C16.8866 16.1402 16.9 16.1036 16.9144 16.0644C16.9928 15.85 17.1 15.5572 17.1 15.05V9.95C17.025 9.35 16.95 9.05 16.875 8.825C16.8 8.525 16.65 8.3 16.425 8.075C16.247 7.89696 16.0689 7.81284 15.8537 7.71116C15.797 7.68439 15.7375 7.65625 15.675 7.625C15.6402 7.6134 15.6036 7.6 15.5644 7.58564C15.35 7.50718 15.0572 7.4 14.55 7.4ZM12 9.275C10.2 9.275 8.775 10.7 8.775 12.5C8.775 14.3 10.2 15.725 12 15.725C13.8 15.725 15.225 14.3 15.225 12.5C15.225 10.7 13.8 9.275 12 9.275ZM16.05 9.2C16.05 9.61421 15.7142 9.95 15.3 9.95C14.8858 9.95 14.55 9.61421 14.55 9.2C14.55 8.78578 14.8858 8.45 15.3 8.45C15.7142 8.45 16.05 8.78578 16.05 9.2Z" fill="#292929"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5C0 5.87258 5.37258 0.5 12 0.5C18.6274 0.5 24 5.87258 24 12.5C24 19.1274 18.6274 24.5 12 24.5C5.37258 24.5 0 19.1274 0 12.5ZM9.45 6.275H14.55C15.225 6.35 15.675 6.425 16.05 6.575C16.5 6.8 16.8 6.95 17.175 7.325C17.55 7.7 17.775 8.075 17.925 8.45C18.075 8.825 18.225 9.275 18.225 9.95V15.05C18.15 15.725 18.075 16.175 17.925 16.55C17.7 17 17.55 17.3 17.175 17.675C16.8 18.05 16.425 18.275 16.05 18.425C15.675 18.575 15.225 18.725 14.55 18.725H9.45C8.775 18.65 8.325 18.575 7.95 18.425C7.5 18.2 7.2 18.05 6.825 17.675C6.45 17.3 6.225 16.925 6.075 16.55C5.925 16.175 5.775 15.725 5.775 15.05V9.95C5.85 9.275 5.925 8.825 6.075 8.45C6.3 8 6.45 7.7 6.825 7.325C7.2 6.95 7.575 6.725 7.95 6.575C8.325 6.425 8.775 6.275 9.45 6.275Z" fill="#292929"/>
                                </svg>                                      
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.95 12.5L10.8 10.7V14.3L13.95 12.5Z" fill="#292929"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5C0 5.87258 5.37258 0.5 12 0.5C18.6274 0.5 24 5.87258 24 12.5C24 19.1274 18.6274 24.5 12 24.5C5.37258 24.5 0 19.1274 0 12.5ZM16.65 8.525C17.175 8.675 17.55 9.05 17.7 9.575C18 10.55 18 12.5 18 12.5C18 12.5 18 14.45 17.775 15.425C17.625 15.95 17.25 16.325 16.725 16.475C15.75 16.7 12 16.7 12 16.7C12 16.7 8.175 16.7 7.275 16.475C6.75 16.325 6.375 15.95 6.225 15.425C6 14.45 6 12.5 6 12.5C6 12.5 6 10.55 6.15 9.575C6.3 9.05 6.675 8.675 7.2 8.525C8.175 8.3 11.925 8.3 11.925 8.3C11.925 8.3 15.75 8.3 16.65 8.525Z" fill="#292929"/>
                                </svg>                                      
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none">
                    <div class="row mt-3">
                        <div class="col-6">
                            <h3 class="text-slate-900 font-hubot font-medium text-lg">Categories</h3>
                            <ul class="m-0 p-0">
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">All categories (23)</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">Skootz eScooters (05)</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">eBike Vs eScooter (01)</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">D8 Pro Mi Pro H7 (10)</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">Ride Safe Tips (07)</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h3 class="text-slate-900 font-hubot font-medium text-lg">Tags</h3>
                            <ul class="m-0 p-0">
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">BeginnerFriendlyScooters</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">FlexiblePaymentPlans</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">SmartCommuting</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">EcoCommutersUnite</li>
                                <li class="text-gray-500 text-sm font-inter-regular mb-2">GreenCityLiving</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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