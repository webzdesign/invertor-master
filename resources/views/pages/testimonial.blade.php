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
<section class="about spad">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}"  width="1100" height="500" alt="">
                        <div class="carousel-caption">
                           
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
                          <p>Skootz has Top-notch customer service! "They do care about their customers and they do go above and beyond.</p>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('assets/theme/img/testiicon.png') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>8.	Noah Anderson</h5>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>   
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                        <img src="{{ asset('assets/theme/img/white.jpg') }}" width="1100" height="500" alt="">
                        <div class="carousel-caption">
                          
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
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
                </div>
            <div class="col-lg-6 p-0">
                <div class="testimonial__pic set-bg" data-setbg="{{ asset('assets/theme/img/testi1.jpg') }}"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->


@endsection