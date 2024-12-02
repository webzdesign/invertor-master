@extends('layouts.master')

@section('content')

<section class="strore-banner p-2 position-relative">
    <img src="{{ asset( 'assets/images/store-banner.png' ) }}" alt="banner" width="100%" class="rounded-3xl d-none d-sm-block">
    <img src="{{ asset( 'assets/images/store-banner-mob.png' ) }}" alt="banner" width="100%" class="d-sm-none h-100">
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">Our Store</h2>
</section>

<section class="store-product">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <div class="position-relative">
                <input type="text" placeholder="Search products" class="bg-slate-100 rounded-pill border-0 text-gray-900 font-inter-regular pe-4">
                <svg class="search-icon position-absolute top-50 translate-middle-y left-0 ms-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66634 14.0007C11.1641 14.0007 13.9997 11.1651 13.9997 7.66732C13.9997 4.16951 11.1641 1.33398 7.66634 1.33398C4.16854 1.33398 1.33301 4.16951 1.33301 7.66732C1.33301 11.1651 4.16854 14.0007 7.66634 14.0007Z" stroke="#0D163A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.6663 14.6673L13.333 13.334" stroke="#0D163A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                        
            </div>
            <div class="filter-menu d-flex gap-3">
                <button type="button" class="border-0 bg-slate-100 rounded-pill d-flex align-items-center justify-content-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18H3V16H15V18ZM21 13H3V11H21V13ZM15 8H3V6H15V8Z" fill="#1C2531"/>
                    </svg>
                </button>
                <button type="button" class="border-0 bg-slate-100 rounded-pill d-flex align-items-center justify-content-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 6H19.425C19.05 4.275 17.55 3 15.75 3C13.95 3 12.45 4.275 12.075 6H1.5V7.5H12.075C12.45 9.225 13.95 10.5 15.75 10.5C17.55 10.5 19.05 9.225 19.425 7.5H22.5V6ZM15.75 9C14.475 9 13.5 8.025 13.5 6.75C13.5 5.475 14.475 4.5 15.75 4.5C17.025 4.5 18 5.475 18 6.75C18 8.025 17.025 9 15.75 9ZM1.5 18H4.575C4.95 19.725 6.45 21 8.25 21C10.05 21 11.55 19.725 11.925 18H22.5V16.5H11.925C11.55 14.775 10.05 13.5 8.25 13.5C6.45 13.5 4.95 14.775 4.575 16.5H1.5V18ZM8.25 15C9.525 15 10.5 15.975 10.5 17.25C10.5 18.525 9.525 19.5 8.25 19.5C6.975 19.5 6 18.525 6 17.25C6 15.975 6.975 15 8.25 15Z" fill="#1C2531"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="product mt-0">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6 mb-4 mb-sm-5">
                    <div class="product-card border text-center p-4 border-slate-200 rounded-3xl">
                        <a class="text-decoration-none text-slate-900" href="{{ route('productDetail', $product->slug) }}">
                            <img class="pro-img sz_product_image mw-100" src="{{ env('APP_Image_URL').'storage/product-images/'.$product->images->first()->name}}" alt="{{ $product->name }}">
                        </a>
                    </div>
                    <div class="text-md-start text-center">
                        <h2 class="text-lg text-gray-950 font-inter-semibold mb-0 mt-4"><a class="text-gray-950 text-decoration-none" href="{{ route('productDetail', $product->slug) }}">{{ $product->name }}</a></h2>
                        <h2 class="text-lg text-gray-950 font-inter-semibold mt-0">{{ env( 'SZ_CURRENCY_SYMBOL' ) . number_format($product->web_sales_price, 2) }}</h2>
                        <a href="javascript:void(0);" class="button-dark mt-3 AddToCartBtn" data-pid="{{ encrypt( $product->id ) }}">Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($totalProducts > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__pagination">
                        @if ($page > 1)
                            <a href="{{ route('shop', ['page' => $page-1]) }}"><<</a>
                        @endif
                        @for ($p=1; $p<=$totalPages; $p++)
                            @if ($page == $p)
                                <a class="active" href="#">{{ $p }}</a>
                            @else
                                <a href="{{ route('shop', ['page' => $p]) }}">{{ $p }}</a>
                            @endif
                        @endfor
                        @if ($totalPages != $page)
                            <a href="{{ route('shop', ['page' => $page+1]) }}">>></a>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>

<section class="latest bg-gray-50">
    <div class="container">
        <h2 class="font-bebas">Check out the latest electric scooter review. Compare how it delivers the ultimate riding experience tailored just for you!</h2>
        <div class="latest-video position-relative mt-sm-5 mt-4">
            <img class="cover-img" src="{{ asset( 'assets/images/pro6.png' ) }}" alt="pro" width="100%">
            <div class="position-absolute top-50 left-50 translate-middle cursor-pointer" data-bs-toggle="modal" data-bs-target="#videoModal">
                <svg width="116" height="115" viewBox="0 0 116 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_67_17706)">
                    <rect x="0.523438" y="0.337891" width="115.008" height="114.662" rx="57.3309" fill="black" fill-opacity="0.25"/>
                    <path d="M58.0273 97.668C35.9353 97.668 18.0273 79.76 18.0273 57.668C18.0273 35.576 35.9353 17.668 58.0273 17.668C80.1193 17.668 98.0273 35.576 98.0273 57.668C98.0273 79.76 80.1193 97.668 58.0273 97.668ZM52.5153 43.328C52.2746 43.1674 51.9948 43.075 51.7058 43.0609C51.4167 43.0467 51.1292 43.1111 50.8739 43.2474C50.6186 43.3837 50.4051 43.5867 50.256 43.8347C50.1069 44.0827 50.0279 44.3666 50.0273 44.656V70.68C50.0279 70.9694 50.1069 71.2532 50.256 71.5012C50.4051 71.7493 50.6186 71.9523 50.8739 72.0885C51.1292 72.2248 51.4167 72.2893 51.7058 72.2751C51.9948 72.2609 52.2746 72.1686 52.5153 72.008L72.0313 59C72.2508 58.8539 72.4308 58.6559 72.5553 58.4235C72.6798 58.1911 72.7449 57.9316 72.7449 57.668C72.7449 57.4043 72.6798 57.1448 72.5553 56.9124C72.4308 56.68 72.2508 56.482 72.0313 56.336L52.5113 43.328H52.5153Z" fill="#FEFEFE"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_67_17706">
                    <rect x="0.523438" y="0.337891" width="115.008" height="114.662" rx="57.3309" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>                        
            </div>
        </div>
    </div>
</section>

<section class="customer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 mb-4 mb-lg-0">
                <h2 class="font-bebas text-slate-900">What our customer are saying</h2>
            </div>
            <div class="col-xl-9 col-lg-8 position-relative">
                <div class="owl-carousel clientSlider position-relative">
                    <div>
                        <div class="text-center text-md-start">
                            <svg class="quote" width="113" height="94" viewBox="0 0 113 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M113 15.389C96.0751 23.4111 87.6128 32.837 87.6128 43.6668C94.8267 44.469 100.792 47.3102 105.509 52.1903C110.225 57.0704 112.584 62.7192 112.584 69.1369C112.584 75.9557 110.295 81.7049 105.717 86.3844C101.139 91.064 95.3816 93.4038 88.4452 93.4038C80.6764 93.4038 73.9482 90.3621 68.2603 84.2786C62.5725 78.1952 59.7286 70.8083 59.7286 62.1176C59.7286 36.0457 74.8497 15.6564 105.093 0.949219L113 15.389ZM53.2714 15.389C36.2078 23.4111 27.6762 32.837 27.6762 43.6668C35.0288 44.469 41.0634 47.3102 45.7801 52.1903C50.4969 57.0704 52.8552 62.7192 52.8552 69.1369C52.8552 75.9557 50.5316 81.7049 45.8842 86.3844C41.2368 91.064 35.445 93.4038 28.5085 93.4038C20.7397 93.4038 14.0462 90.3621 8.42771 84.2786C2.80921 78.1952 0 70.8083 0 62.1176C0 36.0457 15.0518 15.6564 45.1559 0.949219L53.2714 15.389Z" fill="#1F2937"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 text-2xl font-inter-medium mt-lg-5 mt-4">Skootz is an incredible team! Turning to a professional helped my puncture repair run quickly and professionally.</p>
                        <div class="d-flex gap-4 mt-lg-5 mt-4">
                            <img class="avatar" src="{{ asset( 'assets/images/Avater.png' ) }}" alt="Avatar">
                            <div class="my-auto">
                                <h3 class="text-gray-800 font-hubot font-medium mb-1">Oliver Wilson</h3>
                                <p class="text-gray-800 font-inter-regular mb-0">Customer</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-center text-md-start">
                            <svg class="quote" width="113" height="94" viewBox="0 0 113 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M113 15.389C96.0751 23.4111 87.6128 32.837 87.6128 43.6668C94.8267 44.469 100.792 47.3102 105.509 52.1903C110.225 57.0704 112.584 62.7192 112.584 69.1369C112.584 75.9557 110.295 81.7049 105.717 86.3844C101.139 91.064 95.3816 93.4038 88.4452 93.4038C80.6764 93.4038 73.9482 90.3621 68.2603 84.2786C62.5725 78.1952 59.7286 70.8083 59.7286 62.1176C59.7286 36.0457 74.8497 15.6564 105.093 0.949219L113 15.389ZM53.2714 15.389C36.2078 23.4111 27.6762 32.837 27.6762 43.6668C35.0288 44.469 41.0634 47.3102 45.7801 52.1903C50.4969 57.0704 52.8552 62.7192 52.8552 69.1369C52.8552 75.9557 50.5316 81.7049 45.8842 86.3844C41.2368 91.064 35.445 93.4038 28.5085 93.4038C20.7397 93.4038 14.0462 90.3621 8.42771 84.2786C2.80921 78.1952 0 70.8083 0 62.1176C0 36.0457 15.0518 15.6564 45.1559 0.949219L53.2714 15.389Z" fill="#1F2937"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 text-2xl font-inter-medium mt-lg-5 mt-4">Skootz is an incredible team! Turning to a professional helped my puncture repair run quickly and professionally.</p>
                        <div class="d-flex gap-4 mt-lg-5 mt-4">
                            <img class="avatar" src="{{ asset( 'assets/images/Avater.png' ) }}" alt="Avatar">
                            <div class="my-auto">
                                <h3 class="text-gray-800 font-hubot font-medium mb-1">John Deo</h3>
                                <p class="text-gray-800 font-inter-regular mb-0">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls d-flex align-items-center gap-3 position-absolute bottom-0 right-0">
                    <span id="prev-slide" class="arrow_left cursor-pointer">
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.646446 3.64645C0.451184 3.84171 0.451184 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976311 4.7308 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM14 3.5L1 3.5V4.5L14 4.5V3.5Z" fill="#FEFEFE"/></svg>
                    </span>
                    <span class="owl-pagination text-center">
                        <span id="current-slide"></span><span class="text-gray-500">/</span><span id="total-slides" class="text-gray-500"></span>
                    </span>
                    <span id="next-slide" class="arrow_right cursor-pointer">
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3536 4.35355C13.5488 4.15829 13.5488 3.84171 13.3536 3.64645L10.1716 0.464466C9.97631 0.269204 9.65973 0.269204 9.46447 0.464466C9.2692 0.659728 9.2692 0.976311 9.46447 1.17157L12.2929 4L9.46447 6.82843C9.2692 7.02369 9.2692 7.34027 9.46447 7.53553C9.65973 7.7308 9.97631 7.7308 10.1716 7.53553L13.3536 4.35355ZM0 4.5H13V3.5H0V4.5Z" fill="#F3F3F3"/></svg>
                    </sp>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-slate-200">
            <div class="modal-body">
                <iframe class="aspect-video" width="100%" height="100%" src="https://www.youtube.com/embed/UPxjonwXHZs?si=AR7IaE6wssaUoDW7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    function updateControls(event) {
        const total = event.item.count;
        const current = event.item.index;

        $("#current-slide").text((current + 1).toString().padStart(2, "0"));
        $("#total-slides").text(total.toString().padStart(2, "0"));

        if (current === 0) {
            $("#prev-slide").addClass("disabled");
        } else {
            $("#prev-slide").removeClass("disabled");
        }

        if (current === total - 1) {
            $("#next-slide").addClass("disabled");
        } else {
            $("#next-slide").removeClass("disabled");
        }
    }
    $(document).ready(function(){
        const owl = $(".owl-carousel");
        $(".clientSlider").owlCarousel({
            margin: 20,
            items: 1,
            dots: false,
            nav: false,
            touchDrag: false,
            mouseDrag: false,
            smartSpeed: 1200,
            autoHeight: false,
            autoplay: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            onInitialized: updateControls,
            onChanged: updateControls
        });

        $("#prev-slide").click(function () {
            if (!$(this).hasClass("disabled")) {
                owl.trigger("prev.owl.carousel");
            }
        });

        $("#next-slide").click(function () {
            if (!$(this).hasClass("disabled")) {
                owl.trigger("next.owl.carousel");
            }
        });
    });
</script>
@endsection