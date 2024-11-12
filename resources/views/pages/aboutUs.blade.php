@extends('layouts.master')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>About Us</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('assets/theme/img/about/aboutus.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Who We Are ?</h4>
                        <p>Vehicle Solutions Limited otherwise known as Skootz is a UK based Company of high-quality e-scooters and e-bikes. It aims to encourage emission-free travel while delivering exceptional customer service</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>What is Skootz's mission? </h4>
                        <p>Skootz is on a mission to boost emission-free travel through high quality e-scooters and e-bikes. Urban transportation is revolutionized and provides a more sustainable means by which to get around.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>What support Skootz offer? </h4>
                        <p>Skootz offers a range of support services, including:<br>
                         - Maintenance and repair expert technical support.<br>
                         - Klarna and Laybuy as convenient payment options.<br>
                        - Products of different select and range.<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-4 col-sm-6">
                    <div class="blog__details__quote">
                     
                        <h6>From where to get our products? </h6>
                        <p>You can find different products at our physical stores in Edinburgh and Glasgow, as well as get Skootz products online on our website.</p><br>

                        <h6>What’s special about Skootz compared to other e-scooter retailers? </h6>
                        <p>What sets Skootz apart is its unique combination of high quality products and excellent customer service, as well as extremely convenient payment options. What differentiates other retailers in the market is their commitment to sustainability and their team.</p>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- About Section End -->

  

@endsection