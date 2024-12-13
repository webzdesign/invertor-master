@extends('layouts.master')

@section('content')

@php
    $blogs_arr = array(
        array(
            'title' => 'Discover Skootz Electric Scooters: Your Ultimate Destination for E-Scooters',
            'image' => asset('assets/images/blog/blog-1.jpg'),
            'link'  => route('blogDetail', 'Discover-Skootz-Electric-Scooters-Your-Ultimate-Destination-for-E-Scooters'),
            'date'  => '18 November 2024',
        ),
        array(
            'title' => 'Unveiling the Advantages of Electric Scooters: A Comprehensive Guide',
            'image' => asset('assets/images/blog/blog-2.jpg'),
            'link'  => route('blogDetail', 'Unveiling-the-Advantages-of-Electric-Scooters-A-Comprehensive-Guide'),
            'date'  => '18 November 2024',
        ),
    );
@endphp

<section class="strore-banner p-2 position-relative">
    <img src="{{ asset('assets/images/blog-banner.png') }}" alt="banner" width="100%" class="rounded-3xl d-none d-sm-block">
    <img src="{{ asset('assets/images/blog-banner-mob.png') }}" alt="banner" width="100%" class="d-sm-none">
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">blog</h2>
</section>

<section class="blog py-5">
    <div class="container">
        <h2 class="text-slate-900 text-6xl text-4xl-mob mb-5 font-bebas">Stay Ahead with Skootz: Tips, News, and Stories</h2>
        <div class="row">
            @foreach( $blogs_arr as $blog )
                <div class="col-lg-4 mb-4">
                    <a href="{{ $blog['link'] }}"><img src="{{ $blog['image'] }}" alt="blog" class="rounded-2xl w-100"></a>
                    <div class="mt-3 d-flex align-items-center flex-wrap gap-2">
                        <label class="text-slate-800 font-inter-medium bg-slate-100 px-2 py-1 rounded-pill text-xs">EcoFriendlyTravel</label>
                        <span class="text-gray-500 font-inter-medium text-xs">{{ $blog['date'] }}</span>
                        <span class="text-gray-500 font-inter-medium text-xs">5 min. read</span>
                    </div>
                    <h3 class="text-2xl text-slate-900 font-hubot font-semibold mt-3">{{ $blog['title'] }}</h3>
                </div>
            @endforeach
        </div>
        {{-- <button class="loadMoreBtn mx-auto d-table mt-md-5 mt-2 border bg-transparent rounded-pill font-hubot font-semibold py-2 px-4 border-slate-900 text-slate-900 text-lg">Load More</button> --}}
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