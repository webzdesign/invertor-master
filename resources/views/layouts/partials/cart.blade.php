@php
    $cart = session()->get('cart', []);
@endphp
<div data-section-id="cart-drawer" data-section-type="cart-drawer">
    <div class="cart-drawer-modal cc-popup cc-popup--right" aria-hidden="true" data-freeze-scroll="true">
        <div class="cc-popup-background"></div>
        <div class="cc-popup-modal" role="dialog" aria-modal="true" aria-labelledby="CartDrawerModal-Title">
            <div class="cc-popup-container">
                <div class="cc-popup-content">
                    <cart-form data-section-id="cart-drawer" class="cart-drawer" data-ajax-update="true">
                        <div class="cart-drawer__content" data-merge-attributes="content-container">
                            <div class="cart-drawer__content-upper">
                                <header class="cart-drawer__header cart-drawer__content-item">
                                    <div id="CartDrawerModal-Title" class="cart-drawer__title h4-style heading-font" data-merge="header-title">
                                        Shopping cart
                                        <span class="cart-drawer__title-count cartCountText">({{ count($cart) }})</span>
                                    </div>
                                    <button type="button" class="cc-popup-close tap-target" aria-label="Close">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon feather-x" viewBox="0 0 24 24">
                                            <path d="M18 6L6 18M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </header>
                                <div class="cart-drawer__content-item">
                                    <div class="cart-info-block cart-info-block--lmtb"></div>
                                </div>
                                <div class="cart-item-list cart-drawer__content-item">
                                    <div class="cart-item-list__body cartItemLists">
                                        @php
                                            $cartTotal = 0;
                                        @endphp
                                        @foreach ($cart as $cKey => $cartItem)
                                            <div class='cartItemDiv'>
                                                <input type="hidden" class="cartProductId" value="{{ $cartItem['productId'] }}" />
                                                <div class="cart-item product-skootz-aovo-pro2-ew6">
                                                    <div class="cart-item__column cart-item__image">
                                                        <a href="{{ route('productDetail', encrypt($cKey)) }}">
                                                            <div class="rimage-outer-wrapper" style="max-width: 100px">
                                                                <div class="rimage-wrapper" style="padding-top:100.0%">
                                                                    <img class="rimage__image fade-in lazyautosizes lazyloaded" src="{{ $cartItem['image'] }}">
                                                                    <noscript><img class="rimage__image" src="{{ $cartItem['image'] }}" alt=""></noscript>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="cart-item__not-image">
                                                        <div class="cart-item__column cart-item__description">
                                                            <div class="lightly-spaced-row">
                                                                <div class="cart-item__title"><a class="inh-col" href="{{ route('productDetail', encrypt($cKey)) }}">{{ $cartItem['name'] }}</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__column cart-item__price"><span class="theme-money cart-item__selling-price">£{{ number_format($cartItem['price'], 2) }}</span></div>
                                                        <div class="cart-item__column cart-item__quantity">
                                                            <div class="quantity buttoned-input">
                                                                <a id="cartItemMinus" class="notabutton" href="#" aria-label="Decrease">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                                                        <title>Minus</title>
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    </svg>
                                                                </a>
                                                                <input class="cart-item__quantity-input cartQty" type="number" size="2"  data-initial-value="1" data-line="1" value="{{ $cartItem['quantity'] }}" aria-label="Quantity">
                                                                <a id="cartItemPlus" class="notabutton" href="#" aria-label="Increase">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                                        <title>Plus</title>
                                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $cartTotal += floatVal($cartItem['price']) * floatVal($cartItem['quantity']);
                                            @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-drawer__footer" data-merge-attributes="footer-container">
                            <div data-merge="footer">
                                <div class="subtotal h4-style heading-font opposing-items">
                                    Subtotal:
                                    <span class="theme-money cartSubTotal">£{{ number_format($cartTotal, 2) }}</span>
                                </div>
                                <div class="lightly-spaced-row">
                                    <div class="cart-drawer__note toggle-target toggle-target--hidden">
                                        <div class="toggle-target-container">
                                            <textarea name="note"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-buttons" data-merge-attributes="checkout-buttons">
                                <a href="{{ route('checkout') }}" class="button button--large button--wide">Check out</a>
                            </div>
                        </div>
                        <div class="cart-drawer__empty-content cart-drawer__empty-content--hidden" data-merge-attributes="empty-container">
                            <button type="button" class="cc-popup-close tap-target" aria-label="Close">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon feather-x" viewBox="0 0 24 24">
                                    <path d="M18 6L6 18M6 6l12 12"></path>
                                </svg>
                            </button>
                            <div class="align-center">
                                <div class="lightly-spaced-row">
                                    <span class="icon--large">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" aria-hidden="true">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon stroke="currentColor" stroke-width="1.5" points="2 9.25 22 9.25 18 21.25 6 21.25"></polygon>
                                                <line x1="12" y1="9" x2="12" y2="3" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></line>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class="majortitle h1-style">Your cart is empty</div>
                                <div class="button-row">
                                    <a class="btn btn--primary button-row__button" href="/collections/all">START SHOPPING</a>
                                </div>
                            </div>
                        </div>
                    </cart-form>
                </div>
            </div>
        </div>
    </div>
</div>