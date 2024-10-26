@extends('layouts.master')

@section('content')
<div class="container cf">
    <div id="shopify-section-template--16718811922674__main" class="shopify-section">
        <div data-section-id="template--16718811922674__main" data-section-type="collection-template" data-ajax-filtering="true" data-filter-section-id="template--16718811922674__main" data-components="accordion,modal,price-range" data-cc-animate="" class="cc-animate-init -in cc-animate-complete">
            <div class="container container--no-max">
                <div class="utility-bar" data-ajax-container="" data-ajax-scroll-to="">
                    <div class="utility-bar__left">
                        <a href="#" class="toggle-btn utility-bar__item toggle-btn--revealed-desktop" data-toggle-filters="">
                            <span class="button-icon">
                                <svg width="23" height="19" viewBox="0 0 20 20" stroke-width="1.25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1" y1="6" x2="19" y2="6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                    <line x1="1" y1="14" x2="19" y2="14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                    <circle cx="7" cy="6" r="3" fill="none" stroke="currentColor"></circle>
                                    <circle cx="13" cy="14" r="3" fill="none" stroke="currentColor"></circle>
                                </svg>
                            </span>
                            <span>Filter</span>
                            <span class="toggle-btn__chevron ltr-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <title>Right</title>
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="utility-bar__centre">
                        <div class="utility-bar__item">{{ $totalProducts }} products</div>
                    </div>
                    <div class="utility-bar__right">
                        <span class="utility-bar__item desktop-only">
                            <div class="link-dropdown link-dropdown--right-aligned">
                                <div class="visually-hidden" id="sort-dropdown-heading">Sort by</div>
                                <button class="link-dropdown__button notabutton" aria-expanded="false" aria-controls="sort-dropdown-options" aria-describedby="sort-dropdown-heading">
                                    @php 
                                        $sortNames = ['title-asc' => 'Alphabetically, A-Z', 'title-desc' => 'Alphabetically, Z-A', 'price-asc' => 'Price, low to high', 'price-desc' => 'Price, high to low', 'created-asc' => 'Date, old to new', 'created-desc' => 'Date, new to old'];
                                    @endphp
                                    <span class="link-dropdown__button-text">{{ $sortNames[$sortBy] ?? $sortNames['title-asc'] }}</span>
                                    <span class="link-dropdown__button-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </button>
                                <div class="link-dropdown__options" id="sort-dropdown-options">
                                    <a href="{{ route('home', ['sort_by' => 'title-asc']) }}" class="link-dropdown__link link-dropdown__link--active">Alphabetically, A-Z</a>
                                    <a href="{{ route('home', ['sort_by' => 'title-desc']) }}" class="link-dropdown__link">Alphabetically, Z-A</a>
                                    <a href="{{ route('home', ['sort_by' => 'price-asc']) }}" class="link-dropdown__link">Price, low to high</a>
                                    <a href="{{ route('home', ['sort_by' => 'price-desc']) }}" class="link-dropdown__link">Price, high to low</a>
                                    <a href="{{ route('home', ['sort_by' => 'created-asc']) }}" class="link-dropdown__link">Date, old to new</a>
                                    <a href="{{ route('home', ['sort_by' => 'created-desc']) }}" class="link-dropdown__link">Date, new to old</a>
                                </div>
                            </div>
                        </span>
                        <span class="utility-bar__item mobile-only">
                            <div class="layout-switchers">
                                <a class="layout-switch layout-switch--two-columns layout-switch--active" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="2 2 10 2 10 10 2 10 2 2"></polyline>
                                        <polyline points="14 2 22 2 22 10 14 10 14 2"></polyline>
                                        <polyline points="14 14 22 14 22 22 14 22 14 14"></polyline>
                                        <polyline points="2 14 10 14 10 22 2 22 2 14"></polyline>
                                    </svg>
                                </a>
                                <a class="layout-switch layout-switch--one-column" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="2 2 22 2 22 22 2 22 2 2"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="utility-bar utility-bar--sticky-mobile-copy">
                    <div class="utility-bar__left">
                        <a href="#" class="toggle-btn utility-bar__item toggle-btn--revealed-desktop" data-toggle-filters="">
                            <span class="button-icon">
                                <svg width="23" height="19" viewBox="0 0 20 20" stroke-width="1.25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1" y1="6" x2="19" y2="6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                    <line x1="1" y1="14" x2="19" y2="14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></line>
                                    <circle cx="7" cy="6" r="3" fill="none" stroke="currentColor"></circle>
                                    <circle cx="13" cy="14" r="3" fill="none" stroke="currentColor"></circle>
                                </svg>
                            </span>
                            <span>Filter</span>
                            <span class="toggle-btn__chevron ltr-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <title>Right</title>
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="utility-bar__centre">
                        <div class="utility-bar__item">{{ $totalProducts }} products</div>
                    </div>
                    <div class="utility-bar__right">
                        <span class="utility-bar__item desktop-only">
                            <div class="link-dropdown link-dropdown--right-aligned">
                                <div class="visually-hidden" id="sort-dropdown-headingdupe">Sort by</div>
                                <button class="link-dropdown__button notabutton" aria-expanded="false" aria-controls="sort-dropdown-optionsdupe" aria-describedby="sort-dropdown-headingdupe">
                                    <span class="link-dropdown__button-text">Featured
                                    </span>
                                    <span class="link-dropdown__button-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <title>Down</title>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </button>
                                <div class="link-dropdown__options" id="sort-dropdown-optionsdupe"><a href="/collections/e-scooters?sort_by=manual" class="link-dropdown__link link-dropdown__link--active">Featured</a><a href="/collections/e-scooters?sort_by=best-selling" class="link-dropdown__link">Best selling</a><a href="/collections/e-scooters?sort_by=title-ascending" class="link-dropdown__link">Alphabetically, A-Z</a><a href="/collections/e-scooters?sort_by=title-descending" class="link-dropdown__link">Alphabetically, Z-A</a><a href="/collections/e-scooters?sort_by=price-ascending" class="link-dropdown__link">Price, low to high</a><a href="/collections/e-scooters?sort_by=price-descending" class="link-dropdown__link">Price, high to low</a><a href="/collections/e-scooters?sort_by=created-ascending" class="link-dropdown__link">Date, old to new</a><a href="/collections/e-scooters?sort_by=created-descending" class="link-dropdown__link">Date, new to old</a></div>
                            </div>
                        </span>
                        <span class="utility-bar__item mobile-only">
                            <div class="layout-switchers">
                                <a class="layout-switch layout-switch--two-columns layout-switch--active" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="2 2 10 2 10 10 2 10 2 2"></polyline>
                                        <polyline points="14 2 22 2 22 10 14 10 14 2"></polyline>
                                        <polyline points="14 14 22 14 22 22 14 22 14 14"></polyline>
                                        <polyline points="2 14 10 14 10 22 2 22 2 14"></polyline>
                                    </svg>
                                </a>
                                <a class="layout-switch layout-switch--one-column" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="2 2 22 2 22 22 2 22 2 2"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="filter-container filter-container--side filter-container--show-filters-desktop filter-container--mobile-initialised">
                    <a class="filter-shade" href="#" data-toggle-filters=""></a>
                    <div class="filters" data-auto-apply-hide-unavailable="false">
                        <div class="filters__inner sticky-content-container" data-ajax-container="">
                            <header class="filters__heading">
                                <div class="filters__heading-text heading-font h4-style">Filter</div>
                                <a class="filters__close" href="#" data-toggle-filters="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x" aria-hidden="true">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </a>
                            </header>
                            <form id="CollectionFilterForm">
                                <div class="filter-group">
                                    <a href="#" class="filter-group__heading" data-toggle-target=".filter-group--3">
                                        <div class="filter-group__heading__text">Price</div>
                                        <span class="filter-group__heading__indicator">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                <title>Down</title>
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </a>
                                    <div class="filter-group__items filter-group--3 toggle-target">
                                        <div class="toggle-target-container">
                                            <div class="cc-price-range">
                                                <div class="cc-price-range__input-row">
                                                    <div class="cc-price-range__input-container">
                                                        <span class="cc-price-range__input-currency-symbol">£</span>
                                                        <input class="cc-price-range__input cc-price-range__input--min" id="CCPriceRangeMin" name="pricegte" placeholder="{{ $priceGte }}" type="text" inputmode="numeric" pattern="[0-9]*" step="10" min="0" max="{{ $getMaxPrice }}" aria-label="From" value="{{ $priceGte }}">
                                                    </div>
                                                    <div class="cc-price-range__input-container">
                                                        <span class="cc-price-range__input-currency-symbol">£</span>
                                                        <input class="cc-price-range__input cc-price-range__input--max" id="CCPriceRangeMax" name="pricelte" placeholder="{{ $priceLte }}" type="text" inputmode="numeric" pattern="[0-9]*" step="10" min="0" max="{{ $getMaxPrice }}" aria-label="To" value="{{ $priceLte }}">
                                                    </div>
                                                </div>
                                                <div class="cc-price-range__bar">
                                                    <div class="cc-price-range__bar-inactive"></div>
                                                    <div class="cc-price-range__bar-active" style="left: 0%; right: 0%;"></div>
                                                    <div class="cc-price-range__control cc-price-range__control--min" aria-valuemin="0" aria-valuemax="{{ $getMaxPrice }}" tabindex="0" aria-valuenow="{{ $priceGte }}" style="left: 0%;"></div>
                                                    <div class="cc-price-range__control cc-price-range__control--max" aria-valuemin="0" aria-valuemax="{{ $getMaxPrice }}" tabindex="0" aria-valuenow="{{ $priceLte }}" style="left: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-group mobile-only">
                                    <a href="#" class="filter-group__heading" data-toggle-target=".filter-group--sort">
                                        <div class="filter-group__heading__text">Sort by</div>
                                        <span class="filter-group__heading__indicator">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                <title>Down</title>
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </a>
                                    <div class="filter-group__items filter-group--sort toggle-target">
                                        <div class="toggle-target-container">
                                            <label class="filter-group__item">
                                                <input class="filter-group__checkbox" id="Filter-Sort-title-asc" type="radio" name="sort_by" value="title-asc" {{ ($sortBy == 'title-asc') ? 'checked' : '' }}>
                                                <span class="filter-group__item__text">Alphabetically, A-Z</span>
                                            </label>
                                            <label class="filter-group__item">
                                                <input class="filter-group__checkbox" id="Filter-Sort-title-desc" type="radio" name="sort_by" value="title-desc" {{ ($sortBy == 'title-desc') ? 'checked' : '' }}>
                                                <span class="filter-group__item__text">Alphabetically, Z-A</span>
                                            </label>
                                            <label class="filter-group__item">
                                                <input class="filter-group__checkbox" id="Filter-Sort-price-asc" type="radio" name="sort_by" value="price-asc" {{ ($sortBy == 'price-asc') ? 'checked' : '' }}>
                                                <span class="filter-group__item__text">Price, low to high</span>
                                            </label>
                                            <label class="filter-group__item">
                                                <input class="filter-group__checkbox" id="Filter-Sort-price-desc" type="radio" name="sort_by" value="price-desc" {{ ($sortBy == 'price-desc') ? 'checked' : '' }}>
                                                <span class="filter-group__item__text">Price, high to low</span>
                                            </label>
                                            <label class="filter-group__item">
                                                <input class="filter-group__checkbox" id="Filter-Sort-created-asc" type="radio" name="sort_by" value="created-asc" {{ ($sortBy == 'created-asc') ? 'selected' : '' }}>
                                                <span class="filter-group__item__text">Date, old to new</span>
                                            </label>
                                            <label class="filter-group__item">
                                                <input class="filter-group__checkbox" id="Filter-Sort-created-desc" type="radio" name="sort_by" value="created-desc" {{ ($sortBy == 'created-desc') ? 'checked' : '' }}>
                                                <span class="filter-group__item__text">Date, new to old</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <noscript>
                                    <button type="submit" class="btn">Submit</button>
                                </noscript>
                            </form>
                        </div>
                    </div>
                    <div class="filters-adjacent collection-listing" data-ajax-container="">
                        <div class="product-list product-list--per-row-4 product-list--per-row-mob-2 product-list--per-row-mob-2 product-list--image-shape-shortest">

                            @foreach ($products as $product)
                                <div class="product-block cc-animate-init -in cc-animate-complete">
                                    <input type="hidden" name="productId" id="productId" value="{{ encrypt($product->id) }}" />
                                    <div class="block-inner" style="min-height: 440.031px;">
                                        <div class="block-inner-inner">
                                            <div class="image-cont image-cont--with-secondary-image ">
                                                <a class="product-link" href="{{ route('productDetail', encrypt($product->id)) }}" aria-label="{{ $product->name }}" tabindex="-1">
                                                    <div class="image-label-wrap">
                                                        <div>
                                                            @foreach ($product->images as $imageKey => $image)
                                                                @if ($loop->first)
                                                                    <div class="product-block__image product-block__image--primary product-block__image--active">
                                                                        <div class="rimage-outer-wrapper">
                                                                            <div class="rimage-wrapper" style="padding-top:100.0%">
                                                                                <img class="rimage__image fade-in lazyautosizes lazyloaded" data-aspectratio="1.0" data-sizes="auto" alt="" src="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}">
                                                                                <noscript>
                                                                                    <img class="rimage__image" src="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}" alt="">
                                                                                </noscript>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="product-block__image product-block__image--secondary rimage-wrapper  product-block__image--show-on-hover" data-image-index="{{ $imageKey }}">
                                                                        <div class="rimage-background fade-in lazyloaded" data-lazy-bgset-src="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}" data-lazy-bgset-aspect-ratio="1.0" data-lazy-bgset-width="1024" data-parent-fit="contain" style="background-image: url('{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}');">
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="product-block__image-dots" aria-hidden="true">
                                                            <div class="product-block__image-dot product-block__image-dot--active"></div>
                                                            <div class="product-block__image-dot"></div>
                                                            <div class="product-block__image-dot product-block__image-dot--more"></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="image-page-button image-page-button--previous ltr-icon" href="#" aria-label="Previous" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                                        <title>Left</title>
                                                        <polyline points="15 18 9 12 15 6"></polyline>
                                                    </svg>
                                                </a>
                                                <a class="image-page-button image-page-button--next ltr-icon" href="#" aria-label="Previous" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                        <title>Right</title>
                                                        <polyline points="9 18 15 12 9 6"></polyline>
                                                    </svg>
                                                </a>
                                                <a class="btn btn--secondary quickbuy-toggle AddToCartBtn" href="#">Add To Cart</a>
                                            </div>
                                            <div class="product-info">
                                                <div class="inner">
                                                    <div class="innerer">
                                                        <a class="product-link" href="{{ route('productDetail', encrypt($product->id)) }}">
                                                            <div class="product-block__title">{{ $product->name }}</div>
                                                            <div class="product-price">
                                                                <span class="product-price__item product-price__from">From</span>
                                                                <span class="product-price__item product-price__amount product-price__amount--on-sale theme-money">£{{ number_format($product->web_sales_price, 2) }}
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @if ($totalProducts > 0)
            <div class="container pagination-row" data-ajax-container="">
                <div class="pagination">
                    @if ($page > 1)
                        <a class="pagination__prev inh-col underline underline--on-hover" href="{{ route('home', ['page' => ($page-1), 'sort_by' => $sortBy, 'pricegte' => $priceGte, 'pricelte' => $priceLte]) }}">« Previous</a>
                        <span class="pagination__sep">·</span>
                    @endif
                    @for ($p=1; $p<=$totalPages; $p++)
                        @if ($page == $p)
                            <span class="pagination__number underline underline--not-link">{{ $p }}</span>
                        @else
                            <span class="pagination__number"><a class="inh-col underline underline--on-hover" href="{{ route('home', ['page' => $p, 'sort_by' => $sortBy, 'pricegte' => $priceGte, 'pricelte' => $priceLte]) }}">{{ $p }}</a></span>
                        @endif
                    @endfor
                    @if ($totalPages != $page)
                        <span class="pagination__sep">·</span>
                        <a class="pagination__next inh-col underline underline--on-hover" href="{{ route('home', ['page' => ($page + 1), 'sort_by' => $sortBy, 'pricegte' => $priceGte, 'pricelte' => $priceLte]) }}">Next »</a>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('script')
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

    $('body').on('click', '.link-dropdown__link', function(e){
        $('body').find('.link-dropdown__button-text').text($(this).text());
    });

    $('body').on('click', '.AddToCartBtn', function(e){
        e.preventDefault();

        const productId = $(this).closest('div.product-block').find('#productId').val();
        var quantity = 1;
        $.ajax({
            url: '{{ route("cart.add") }}',
            type: 'POST',
            data: {
                productId: productId,
                quantity: quantity,
            },
            success: function(response) {
                if (response.success) {
                    var cartHtml = '';
                    var cartTotal = 0;
                    $.each(response.cart, function( key, value ) {
                        cartHtml += '<div class="cartItemDiv"><input type="hidden" class="cartProductId" value="'+value.productId+'" /><div class="cart-item product-skootz-aovo-pro2-ew6"><div class="cart-item__column cart-item__image"><a href="'+value.url+'"><div class="rimage-outer-wrapper" style="max-width: 100px"><div class="rimage-wrapper " style="padding-top:100.0%"><img class="rimage__image fade-in lazyautosizes lazyloaded" src="'+value.image+'"><noscript><img class="rimage__image" src="'+value.image+'" alt=""></noscript></div></div></a></div><div class="cart-item__not-image"><div class="cart-item__column cart-item__description"><div class="lightly-spaced-row"><div class="cart-item__title"><a class="inh-col" href="'+value.url+'">'+value.name+'</a></div></div></div><div class="cart-item__column cart-item__price"><span class="theme-money cart-item__selling-price">£'+value.price.toFixed(2)+'</span></div><div class="cart-item__column cart-item__quantity"><div class="quantity buttoned-input"><a id="cartItemMinus" class="notabutton" href="#" aria-label="Decrease"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><title>Minus</title><line x1="5" y1="12" x2="19" y2="12"></line></svg></a><input class="cart-item__quantity-input cartQty" type="number" size="2" id="updates_1" name="updates[]" data-initial-value="1" data-line="1" value="'+value.quantity+'" aria-label="Quantity"><a id="cartItemPlus" class="notabutton" href="#" aria-label="Increase"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><title>Plus</title><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a></div></div></div></div></div>';

                        cartTotal += (value.price * value.quantity);
                    });
                    $('body').find('.cartSubTotal').text('£'+numberFormat(cartTotal, 2));
                    $('body').find('.cartItemLists').empty().append(cartHtml);
                    $('body').find('.cartCount').text(response.cartCount);
                    $('body').find('.cartCountText').text('('+response.cartCount+')');
                    $('body').find('.cart-link').click();
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });

    $('body').on('click', '#cartItemMinus, #cartItemPlus', function(e){
        var productId = $(this).closest('div.cartItemDiv').find('.cartProductId').val();
        var quantity = parseInt($(this).closest('div.cartItemDiv').find('.cartQty').val());
        if (isNaN(quantity) || quantity < 0) {
            quantity = 1;
        }
        if ($(this).attr('id') === 'cartItemMinus') {
            quantity = quantity - 1;
        } else {
            quantity = quantity + 1;
        }

        $.ajax({
            url: '{{ route("cart.sync") }}',
            type: 'POST',
            data: {
                productId: productId,
                quantity: quantity,
            },
            success: function(response) {
                if (response.success) {
                    var cartHtml = '';
                    var cartTotal = 0;
                    $.each(response.cart, function( key, value ) {
                        cartHtml += '<div class="cartItemDiv"><input type="hidden" class="cartProductId" value="'+value.productId+'" /><div class="cart-item product-skootz-aovo-pro2-ew6"><div class="cart-item__column cart-item__image"><a href="'+value.url+'"><div class="rimage-outer-wrapper" style="max-width: 100px"><div class="rimage-wrapper " style="padding-top:100.0%"><img class="rimage__image fade-in lazyautosizes lazyloaded" src="'+value.image+'"><noscript><img class="rimage__image" src="'+value.image+'" alt=""></noscript></div></div></a></div><div class="cart-item__not-image"><div class="cart-item__column cart-item__description"><div class="lightly-spaced-row"><div class="cart-item__title"><a class="inh-col" href="'+value.url+'">'+value.name+'</a></div></div></div><div class="cart-item__column cart-item__price"><span class="theme-money cart-item__selling-price">£'+value.price.toFixed(2)+'</span></div><div class="cart-item__column cart-item__quantity"><div class="quantity buttoned-input"><a id="cartItemMinus" class="notabutton" href="#" aria-label="Decrease"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><title>Minus</title><line x1="5" y1="12" x2="19" y2="12"></line></svg></a><input class="cart-item__quantity-input cartQty" type="number" size="2" id="updates_1" name="updates[]" data-initial-value="1" data-line="1" value="'+value.quantity+'" aria-label="Quantity"><a id="cartItemPlus" class="notabutton" href="#" aria-label="Increase"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><title>Plus</title><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a></div></div></div></div></div>';

                        cartTotal += (value.price * value.quantity);
                    });
                    $('body').find('.cartSubTotal').text('£'+numberFormat(cartTotal, 2));
                    $('body').find('.cartItemLists').empty().append(cartHtml);
                    $('body').find('.cartCount').text(response.cartCount);
                    $('body').find('.cartCountText').text('('+response.cartCount+')');
                    $('body').find('.cart-link').click();
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