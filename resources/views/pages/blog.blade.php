@extends('layouts.master')

@section('content')
<section class="breadcrumb-blog set-bg" data-setbg="{{ asset('assets/theme/img/breadcrumb-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Blog</h2>
            </div>
        </div>
    </div>
</section>

<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('assets/theme/img/blog/blog-1.jpeg') }}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('assets/theme/img/icon/calendar.png') }}" alt=""> 18 November 2024</span>
                        <h5>Discover Skootz Electric Scooters: Your Ultimate Destination for E-Scooters</h5>
                        <a href="{{ route('blogDetail', 'Discover-Skootz-Electric-Scooters-Your-Ultimate-Destination-for-E-Scooters') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('assets/theme/img/blog/blog-2.png') }}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('assets/theme/img/icon/calendar.png') }}" alt=""> 18 November 2024</span>
                        <h5>Unveiling the Advantages of Electric Scooters: A Comprehensive Guide</h5>
                        <a href="{{ route('blogDetail', 'Unveiling-the-Advantages-of-Electric-Scooters-A-Comprehensive-Guide') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection