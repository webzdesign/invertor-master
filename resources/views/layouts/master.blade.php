<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Electric Scooters - Buy E-Scooters Online</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
   
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <!--<a href="#">Sign in</a>-->
                <!--<a href="#">FAQs</a>-->
            </div>
            <div class="offcanvas__top__hover">
                <!--<span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>-->
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{ asset('assets/theme/img/icon/search.png') }}" alt=""></a>
            <!--<a href="#"><img src="{{ asset('assets/theme/img/icon/heart.png') }}" alt=""></a>-->
            <a href="#"><img src="{{ asset('assets/theme/img/icon/cart.png') }}" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <!--<div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>-->
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <!--<div class="header__top__left">
                            <p>Contact Us : +44 7418356616</p>
                        </div>-->
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <div class="header__top__left">
                                    <p>Contact Us : +44 7418356616</p>
                                </div>
                               <!-- <a href="#">Sign in</a> -->
                                <!--<a href="#">FAQs</a>-->
                            </div>
                            <div class="header__top__hover">
                                <div class="header__top__left">
                                    <p>Email : hello@runmax.com</p>
                                </div>
                                <!--<span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/theme/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                            <li class="{{ request()->is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Shop</a></li>
                            <li class="{{ request()->is('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">About Us</a></li>
                           <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>-->
                            <!--<li class="{{ request()->is('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>-->
                            <li class="{{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                @php
                    $cart = session()->get('cart', []);
                    $cartCount = count($cart);
                @endphp
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                      <!--<a href="#" class="search-switch"><img src="{{ asset('assets/theme/img/icon/search.png') }}" alt=""></a>-->
                       <!-- <a href="#"><img src="{{ asset('assets/theme/img/icon/heart.png') }}" alt=""></a>-->
                        <a href="{{ route('cart') }}" class="cart-link"><img src="{{ asset('assets/theme/img/icon/cart.png') }}" alt=""> <span>0</span></a>
                        <div class="price cartCount">{{$cartCount}}</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')


     <!-- Footer Section Begin -->
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/theme/img/footer-logo.png') }}" alt=""></a>
                        </div>
                        <p>Skootz is unique combination of high quality products and excellent customer service.</p>
                        <!--<a href="#"><img src="{{ asset('assets/theme/img/payment.png') }}" alt=""></a>-->
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('term-conditions') }}">Terms and Condition</a></li>
                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Visit Us Today!</h6>
                        <div class="footer__newslatter">
                            <p>Let’s find your perfect ride! Come and try one of ours out in our stores in Edinburgh or Glasgow and get expert advice. You may also browse our online store for easy shopping from home. Next day delivery is available, so your new scooter could be just a click away!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    
    <!-- Js Plugins -->
    <script src="{{ asset('assets/js/jquery3-6-0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/theme/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/main.js') }}"></script>
   
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            function numberFormat(number, decimals) {
                number = parseFloat(number);

                const formatted = number.toLocaleString(undefined, {
                    minimumFractionDigits: decimals,
                    maximumFractionDigits: decimals
                });

                return formatted;
            }

        });
    </script>
    @yield('script')
</body>

</html>