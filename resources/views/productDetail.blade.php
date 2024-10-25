@extends('layouts.master')

@section('content')
<div class="container cf">
    <div id="shopify-section-template--16718812184818__main" class="shopify-section section-main-product page-section-spacing page-section-spacing--no-top-mobile">
        <div data-section-type="main-product" data-components="accordion,custom-select,modal">
            <div class="container desktop-only not-in-quickbuy cc-animate-init -in cc-animate-complete" data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                <div class="page-header">
                    <nav class="breadcrumbs" aria-label="Breadcrumbs">
                        <ol class="breadcrumbs-list">
                            <li class="breadcrumbs-list__item">
                                <a class="breadcrumbs-list__link" href="{{ route('home') }}">Home</a> 
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <title>Right</title>
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </span>
                            </li>
                            <li class="breadcrumbs-list__item">
                                <a class="breadcrumbs-list__link" href="{{ route('productDetail', $product->id) }}" aria-current="page">{{ $product->name }}</a>
                            </li>
                        </ol>
                        <div class="breadcrumbs-prod-nav">
                            <a class="breadcrumbs-prod-nav__link breadcrumbs-prod-nav__link--prev" href="#" title="Aovo Pro 2 Electric Scooter">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                        <title>Left</title>
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </span>
                                <span class="breadcrumbs-prod-nav__text">Previous</span>
                            </a>
                            <a class="breadcrumbs-prod-nav__link breadcrumbs-prod-nav__link--next" href="#" title="NEW M4 Pro S+ 2024 Electric Scooter XXL Battery">
                                <span class="breadcrumbs-prod-nav__text">Next</span> 
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <title>Right</title>
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="product-detail quickbuy-content spaced-row container variant-status--on-sale">
                <div class="gallery gallery--layout-carousel-under gallery-size-medium product-column-left has-thumbnails cc-animate-init gallery-initialised -in cc-animate-complete" data-cc-animate="" data-cc-animate-delay="0.2s" data-variant-image-grouping="false" data-variant-image-grouping-option="Color,Colour,Couleur,Farbe" data-variant-image-grouping-option-index="" style="">
                    <div class="gallery__inner">
                        <div class="main-image">
                            <div class="slideshow product-slideshow slideshow--custom-initial" data-slick='{"adaptiveHeight":true,"initialSlide":0}'>
                                @foreach ($product->images as $pKey => $pImage)
                                    @if ($loop->first)
                                        <div class="slide slide--custom-initial" data-media-id="62724839801205">
                                            <a class="show-gallery" href="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}">
                                                <div id="FeaturedMedia-template--16718812184818__main-62724839801205-wrapper"
                                                    class="product-media-wrapper"
                                                    data-media-id="template--16718812184818__main-62724839801205"
                                                    tabindex="-1">
                                                    <div class="product-media product-media--image">
                                                        <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                            <div class="rimage-wrapper lazyload--placeholder" style="padding-top:100.0%"
                                                                >
                                                                <img class="rimage__image lazyload fade-in "
                                                                    data-src="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}"
                                                                    data-widths="[180, 220, 300, 360, 460, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                                    data-aspectratio="1.0"
                                                                    data-sizes="auto"
                                                                    alt=""
                                                                    >
                                                                <noscript>
                                                                    <img class="rimage__image" src="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}" alt="">
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @else
                                        <div class="slide" data-media-id="62724839833973">
                                            <a class="show-gallery" href="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}">
                                                <div id="FeaturedMedia-template--16718812184818__main-62724839833973-wrapper"
                                                    class="product-media-wrapper"
                                                    data-media-id="template--16718812184818__main-62724839833973"
                                                    tabindex="-1">
                                                    <div class="product-media product-media--image">
                                                        <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                                            <div class="rimage-wrapper lazyload--placeholder" style="padding-top:100.0%"
                                                                >
                                                                <img class="rimage__image lazyload fade-in "
                                                                    data-src="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}"
                                                                    data-widths="[180, 220, 300, 360, 460, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                                    data-aspectratio="1.0"
                                                                    data-sizes="auto"
                                                                    alt=""
                                                                    >
                                                                <noscript>
                                                                    <img class="rimage__image" src="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}" alt="">
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="slideshow-controls">
                                <div class="slideshow-controls__arrows"></div>
                            </div>
                            <span class="product-label-list">
                                <script id="variant-label-8094351098098-45158952534258" type="text/template"></script>
                                <div class="product-label-container"></div>
                                <script id="variant-label-8094351098098-45158952567026" type="text/template"></script><script id="variant-label-8094351098098-46794923933938" type="text/template"></script><script id="variant-label-8094351098098-46794923966706" type="text/template"></script>
                            </span>
                        </div>
                        <div class="thumbnails">
                            @foreach ($product->images as $pImage)
                                <a class="thumbnail thumbnail--media-image" href="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}">
                                    <div class="rimage-outer-wrapper" style="max-width: 1024px">
                                        <div class="rimage-wrapper lazyload--placeholder" style="padding-top:100.0%"
                                            >
                                            <img class="rimage__image lazyload fade-in "
                                                data-src="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}"
                                                data-widths="[180, 220, 300, 360, 460, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                data-aspectratio="1.0"
                                                data-sizes="auto"
                                                alt=""
                                                >
                                            <noscript>
                                                <img class="rimage__image" src="{{ env('APP_Image_URL').'storage/product-images/'.$pImage->name }}" alt="">
                                            </noscript>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="detail product-column-right cc-animate-init -in cc-animate-complete" data-cc-animate="" data-cc-animate-delay="0.2s" style="">
                    <div class="product-form theme-init" data-ajax-add-to-cart="true" data-product-id="8534383886578" data-enable-history-state="true">
                        <div class="title-row">
                            <h1 class="title">{{ $product->name }}</h1>
                        </div>
                        <div class="price-container">
                            <div class="variant-visibility-area">
                                <div class="price-area">
                                    <div class="price h4-style on-sale">
                                        <span class="current-price theme-money">£{{ number_format($product->web_sales_price, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="not-in-quickbuy">
                        <div class="buy-buttons-row">
                            <div class="quantity-submit-row input-row has-spb">
                                <label class="label" for="quantity">Quantity</label>
                                <div class="quantity-wrapper">
                                    <a href="#" data-quantity="down">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus" style="height:45px !important;">
                                            <title>Minus</title>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </a>
                                    <input aria-label="Quantity" id="quantity" type="number" name="quantity" value="1">
                                    <a href="#" data-quantity="up">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus" style="height:45px !important;">
                                            <title>Plus</title>
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </a>
                                </div>
                                <input type="hidden" id="productId" name="productId" value="{{ encrypt($product->id) }}" />
                                <div class="quantity-submit-row__submit input-row"><button class="button button--large AddToCartBtn"  data-add-to-cart-text="Add to Cart">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class=" product-detail-accordion">
                            <div class="cc-accordion cc-initialized" data-allow-multi-open="true">
                                <details class="cc-accordion-item" open>
                                    <summary class="cc-accordion-item__title">Description</summary>
                                    <div class="cc-accordion-item__panel">
                                        <div class="cc-accordion-item__content rte cf">
                                            <h2 data-mce-fragment="1"><b data-mce-fragment="1">{{ $product->name }}</b></h2>
                                            <p data-mce-fragment="1"><b data-mce-fragment="1">Specifications:</b></p>
                                            <p data-mce-fragment="1"><span data-mce-fragment="1">{{ $product->description }}</span></p>
                                        </div>
                                    </div>
                                </details>
                            </div>
                        </div>
                        <div class="lightish-spaced-row-above only-in-quickbuy">
                            <a class="more" href="/products/skootz-m4-pro-s-2024-electric-scooter">
                                <span class="beside-svg underline">More details</span>
                                <span class="icon--small icon-natcol ltr-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <title>Right</title>
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.product-detail -->
        </div>
    </div>
    <div id="shopify-section-template--16718812184818__recommendations" class="shopify-section section-product-recommendations">
        <div class="product-recommendations cc-animate-init -in cc-animate-complete" data-section-id="template--16718812184818__recommendations" data-url="/recommendations/products?section_id=template--16718812184818__recommendations&amp;limit=4&amp;product_id=8534383886578" data-components="accordion,modal" data-cc-animate="">
            <div class="container container--no-max fully-spaced-row">
                <h4 class="align-center hometitle">You may also like</h4>
                <div class="collection-listing related-collection">
                    <div class="product-list product-list--per-row-4 product-list--per-row-mob-2 product-list--image-shape-shortest">
                        @foreach ($othersProducts as $othersProduct)
                            <div data-product-id="13790932042101" class="product-block">
                                <div class="block-inner" style="min-height: 494.438px;">
                                    <div class="block-inner-inner">
                                        <div class="image-cont image-cont--with-secondary-image ">
                                            <a class="product-link" href="{{ route('productDetail', encrypt($othersProduct->id)) }}" aria-label="{{ $othersProduct->name }}" tabindex="-1">
                                                <div class="image-label-wrap">
                                                    <div>
                                                        @foreach ($othersProduct->images as $oKey => $oImage)
                                                            @if ($loop->first)
                                                                <div class="product-block__image product-block__image--primary product-block__image--active">
                                                                    <div class="rimage-outer-wrapper">
                                                                        <div class="rimage-wrapper " style="padding-top:100.0%">
                                                                            <img class="rimage__image fade-in lazyautosizes lazyloaded" data-aspectratio="1.0" data-sizes="auto" alt="" src="{{ env('APP_Image_URL').'storage/product-images/'.$oImage->name }}" >
                                                                            <noscript>
                                                                                <img class="rimage__image" src="{{ env('APP_Image_URL').'storage/product-images/'.$oImage->name }}" alt="">
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="product-block__image product-block__image--secondary rimage-wrapper  product-block__image--show-on-hover" data-image-index="{{ $oKey }}">
                                                                    <div class="rimage-background fade-in lazyloaded" data-lazy-bgset-src="{{ env('APP_Image_URL').'storage/product-images/'.$oImage->name }}" data-lazy-bgset-aspect-ratio="1.0" data-lazy-bgset-width="1024" data-parent-fit="contain" style="background-image: url('{{ env('APP_Image_URL').'storage/product-images/'.$oImage->name }}');">
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
                                            <a class="btn btn--secondary quickbuy-toggle" href="#">Quick buy</a>
                                        </div>
                                        <div class="product-info">
                                            <div class="inner">
                                                <div class="innerer">
                                                    <a class="product-link" href="{{ route('productDetail', encrypt($othersProduct->id)) }}">
                                                        <div class="product-block__title">{{ $othersProduct->name }}</div>
                                                        <div class="product-price">
                                                            <span class="product-price__item product-price__from">From</span>
                                                            <span class="product-price__item product-price__amount product-price__amount--on-sale theme-money">£{{ number_format($othersProduct->web_sales_price, 2) }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickbuy-container">
                                    <a href="#" class="close-detail" aria-label="Close quick buy" tabindex="-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x" aria-hidden="true">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </a>
                                    <div class="inner"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
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
    $('.AddToCartBtn').click(function(e) {
        e.preventDefault();

        const productId = $('body').find('#productId').val();
        var quantity = $('body').find('#quantity').val();
        if (quantity == 0) {
            quantity = 1;
        }
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