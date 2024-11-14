@extends('layouts.master')

@section('content')
<style>
    .filter__controls {
    text-align: center;
    margin-bottom: 20px;
}
</style>
 <!-- Hero Section Begin -->
 <section class="hero">
    <div class="hero__slider owl-carousel" style="background-image: url({{ asset('assets/theme/img/hero/bg.png') }});background-size: cover;background-repeat: no-repeat;background-position: center;">
        <div class="hero__items">
            <div class="container h-100">
                <div class="d-flex h-100 align-items-center hero_row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero__text">
                            <!--<h6>Summer Collection</h6>-->
                            <h2>Pure Advance Black</h2>
                            <p>Dominate Your Commute - The Ultimate Urban E-Scooter.</p>
                            <a href="{{ route('shop') }}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <!--<div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <img class="hero_items_product_img" src="{{ asset('assets/theme/img/hero/bike-pure.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items">
            <div class="container h-100">
                <div class="d-flex h-100 align-items-center hero_row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero__text">
                            <!--<h6>Summer Collection</h6>-->
                            <h2>The iX6</h2>
                            <p>Off-Road Ready, Urban Approved.</p>
                            <a href="{{ route('shop') }}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <!--<div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <img class="hero_items_product_img" src="{{ asset('assets/theme/img/hero/bike-slider.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->



<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Your Premier Electric Scooter Destination </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 offset-xl-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="{{ asset('assets/theme/img/banner/banner-1.png') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Your Journey, Reimagined</h2>
                        <p class="max-w-200">Check Out Our Line of Cutting Edge E-Scooters</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="{{ asset('assets/theme/img/banner/banner-2.png') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Experience the Thrill of Sustainable Ridings</h2>
                        <p>Skootz Electric Scooters are the first choice</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="{{ asset('assets/theme/img/banner/banner3.jpg') }}" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Elevate Your Commute</h2>
                        <p class="max-w-200">Get to know the Future of Urban Mobility with Skootz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Explore Our Products</li>
                    <!--<li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>-->
                </ul>
                
                <div class="testimonial__text">
                    <p>Head over to our electric scooters online collection of scooters for comfort and style. They each model with cutting edge technology, long lasting batteries, powerful motors with new and improved designs that improve the riding experience. </p>
                </div>
            </div>
            
        </div>
        <div class="row product__filter">
            @foreach ($Products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                   
                        <a  href="{{ route('productDetail', $product->slug) }}"><div class="product__item__pic set-bg" data-setbg="{{ env('APP_Image_URL').'storage/product-images/'.$product->images->first()->name }}"></div></a>
                       
                    <div class="product__item__text">
                        <h6>{{ $product->name }}</h6>
                        <a href="#" class="add-cart AddToCartBtn" data-pid="{{encrypt($product->id)}}">Add To Cart</a>
                        <h5>£{{ number_format($product->web_sales_price, 2) }}</h5>
                    
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->

{{-- <section class="about spad py-0">
    <div class="container">
        <div class="blog__details__quote">
            <i class="fa fa-quote-left"></i>
            <h6>Customer Satisfaction</h6>
            <p>Head over to our electric scooters online collection of scooters for comfort and style. They each model with cutting edge technology, long lasting batteries, powerful motors with new and improved designs that improve the riding experience. </p>
            
        </div>
    </div>
</section> --}}

<!-- Categories Section End -->

<!-- Testimonial Section Begin -->
<section class="about spad py-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- <ul class="carousel-indicators position-static">
                      <li data-target="#demo" data-slide-to="0" class="active bg-dark"></li>
                      <li data-target="#demo" data-slide-to="1" class="bg-dark"></li>
                      <li data-target="#demo" data-slide-to="2" class="bg-dark"></li>
                    </ul> -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="text-center">
                                <p>I had an amazing time at Skootz! They took the time to assist me select the ideal scooter for my everyday journey, and the staff was really helpful. Their familiarity with the various models and features amazed me. I felt secure with my purchase as I walked out!</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Emily Johnson</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>Amazing service! I dropped my daughter’s scooter off at a repair shop and they fixed it in five minutes. Finally, the technician explained what had gone wrong and what to do if it happened to you again. I would like to commend their honesty and turnaround time.
                                </p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>James Smith</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>The collection of electric scooters at Skootz is really cool. The staff were very knowledgeable, I found exactly what I was looking for.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Sophie Brown</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>Skootz is an incredible team! Turning to a professional helped my puncture repair run quickly and professionally.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Oliver Wilson</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>I picked an electric scooter from Skootz and it's become awesome for my daily commute. Staff has helped me find a model which suits me perfectly and I love how easy to use it is. I couldn't go back to public transport now!.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Chloe Davis</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>I love my new scooter! They guided me through the options and I found the right one; the staff at Skootz.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Liam Taylor</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>I couldn't thank Mike and his team enough for their quick service when my son's scooter had a flat tire!" They were so nice and told me everything and my son in turn felt confident about it again</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Mia Thompson</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>Skootz has Top-notch customer service! "They do care about their customers and they do go above and beyond.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Noah Anderson</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>We highly recommend anyone wanting to buy or repair an electric scooter to go to Skootz. Their expertise is unmatched! Plenty of people give you a pat on the back, everything they did was just to give me support through the whole process: choosing to and then aftercare, it made all the difference.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Olivia Martin</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <p>Buying my first electric scooter with Skootz was so easy! I left the store, answered all my questions patiently and even showed me how to use it. This commitment to the satisfaction of customers is taken on us.</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Jack White</h5>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a class="carousel-control-prev position-static bg-dark mr-2 py-2 rounded-lg opacity-1" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next position-static bg-dark py-2 rounded-lg opacity-1" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="testimonial__pic set-bg" data-setbg="{{ asset('assets/theme/img/testi1.jpg') }}"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

@endsection
@section('script')
<script>
$(document).ready(function(){
    $('.carousel').carousel()
    $('body').on('click', '.AddToCartBtn', function(e){
       
        e.preventDefault();
        var pid = $(this).data("pid");
        var quantity = 1;
       
        $.ajax({
            url: '{{ route("cart.add") }}',
            type: 'POST',
            data: {
                productId: pid,
                quantity: quantity,
            },
            success: function(response) {
                if (response.success) {
                  
                    $('body').find('.cartCount').text(response.cartCount);
                    var href = $('body').find('.cart-link').attr('href');
                    window.location.href = href;
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
               
            }
        });
        
    });


});
</script>
@endsection
