@extends('layouts.master')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Testimonial</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <span>Testimonial</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="testimonial__text">
                    <span class="icon_quotations"></span>
                    <p>“Going out after work? Take your butane curling iron with you to the office, heat it up,
                        style your hair before you leave the office and you won’t have to make a trip back home.”
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__pic">
                            <img src="{{ asset('assets/theme/img/about/testimonial-author.jpg') }}" alt="">
                        </div>
                        <div class="testimonial__author__text">
                            <h5>Augusta Schultz</h5>
                            <p>Fashion Design</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="testimonial__pic set-bg" data-setbg="{{ asset('assets/theme/img/about/testimonial-pic.jpg') }}"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->


@endsection