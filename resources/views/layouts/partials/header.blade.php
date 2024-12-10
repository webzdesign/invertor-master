<div id="preloder">
    <div class="loader"></div>
</div>
<header class="d-flex align-items-center flex-column justify-content-center position-sticky top-0 bg-white" id="header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route( 'home' ) }}">
                <img src="{{ asset( 'assets/images/Skootz_Logo.svg' ) }}">
            </a>
            <ul class="menu align-items-center d-lg-flex gap-5 m-0 p-0 d-none" id="nav-menu-container">
                <li class="d-lg-none close-menu position-absolute">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Menu / Close_MD">
                        <path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </li>
                <li>
                    <a class="text-decoration-none text-slate-900 {{ request()->is( '/' ) ? 'active' : '' }}" href="{{ route( 'home' ) }}">Home</a>
                </li>
                <li>
                    <a class="text-decoration-none text-slate-900 {{ request()->is('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
                </li>
                <li>
                    <a class="text-decoration-none text-slate-900 {{ request()->is('blog*') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                </li>
                <li>
                    <a class="text-decoration-none text-slate-900 {{ request()->is( 'about-us' ) ? 'active' : '' }}" href="{{ route( 'about-us' ) }}">About Us</a>
                </li>
                <li>
                    <a class="text-decoration-none text-slate-900 {{ request()->is( 'contact-us' ) ? 'active' : '' }}" href="{{ route( 'contact-us' ) }}">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-4" id="right-nav">
                <button type="button" class="bg-transparent border-0 d-lg-block d-none sz_cart_btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M3.87289 17.0194L2.66933 9.83981C2.48735 8.75428 2.39637 8.21152 2.68773 7.85576C2.9791 7.5 3.51461 7.5 4.58564 7.5H19.4144C20.4854 7.5 21.0209 7.5 21.3123 7.85576C21.6036 8.21152 21.5126 8.75428 21.3307 9.83981L20.1271 17.0194C19.7282 19.3991 19.5287 20.5889 18.7143 21.2945C17.9 22 16.726 22 14.3782 22H9.62182C7.27396 22 6.10003 22 5.28565 21.2945C4.47127 20.5889 4.27181 19.3991 3.87289 17.0194Z"
                            stroke="#141B34" stroke-width="1.5" />
                        <path d="M17.5 7.5C17.5 4.46243 15.0376 2 12 2C8.96243 2 6.5 4.46243 6.5 7.5"
                            stroke="#141B34" stroke-width="1.5" />
                    </svg>
                </button>
                <div id="mobile-nav-toggle" class="d-lg-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M20 12.5H10" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M20 5.5H4" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M20 19.5H4" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-menu bg-slate-900 position-fixed bottom-0 left-0 right-0 d-flex d-lg-none align-items-center justify-content-between px-5">
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 17H12.009" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M20 8.5V13.5C20 17.2712 20 19.1569 18.8284 20.3284C17.6569 21.5 15.7712 21.5 12 21.5C8.22876 21.5 6.34315 21.5 5.17157 20.3284C4 19.1569 4 17.2712 4 13.5V8.5"
                    stroke="#FEFEFE" stroke-width="1.5" />
                <path
                    d="M22 10.5L17.6569 6.33548C14.9902 3.77849 13.6569 2.5 12 2.5C10.3431 2.5 9.00981 3.77849 6.34315 6.33548L2 10.5"
                    stroke="#FEFEFE" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </a>
        <a href="{{ route('shop') }}">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.66699 10.9863V15.4917C3.66699 18.3235 3.66699 19.7395 4.54567 20.6192C5.42435 21.499 6.83856 21.499 9.66699 21.499H15.667C18.4954 21.499 19.9096 21.499 20.7883 20.6192C21.667 19.7395 21.667 18.3235 21.667 15.4917V10.9863"
                    stroke="#FEFEFE" stroke-width="1.5" />
                <path
                    d="M15.667 16.9766C14.9829 17.5838 13.8938 17.9766 12.667 17.9766C11.4402 17.9766 10.3511 17.5838 9.66699 16.9766"
                    stroke="#FEFEFE" stroke-width="1.5" stroke-linecap="round" />
                <path
                    d="M18.4636 2.50269L6.8178 2.53177C5.07963 2.44223 4.63397 3.78234 4.63397 4.43743C4.63397 5.02334 4.55852 5.87749 3.49321 7.48285C2.4279 9.08821 2.50795 9.56511 3.10868 10.6765C3.60725 11.5989 4.87538 11.9592 5.53659 12.0198C7.6368 12.0676 8.65862 10.2515 8.65862 8.97498C9.70048 12.1823 12.6635 12.1823 13.9837 11.8155C15.3065 11.4481 16.4396 10.1329 16.707 8.97498C16.8629 10.414 17.3361 11.2536 18.7342 11.8306C20.1824 12.4282 21.4278 11.5148 22.0527 10.9292C22.6776 10.3437 23.0786 9.04376 21.9647 7.61505C21.1965 6.62976 20.8763 5.70155 20.7712 4.73952C20.7102 4.18209 20.6567 3.58311 20.2651 3.20194C19.6927 2.6449 18.8715 2.47588 18.4636 2.50269Z"
                    stroke="#FEFEFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <a href="javascript:;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.2059 17.0194L3.00234 9.83981C2.82036 8.75428 2.72938 8.21152 3.02074 7.85576C3.31211 7.5 3.84762 7.5 4.91865 7.5H19.7474C20.8184 7.5 21.3539 7.5 21.6453 7.85576C21.9366 8.21152 21.8456 8.75428 21.6637 9.83981L20.4601 17.0194C20.0612 19.3991 19.8617 20.5889 19.0473 21.2945C18.233 22 17.059 22 14.7112 22H9.95483C7.60697 22 6.43304 22 5.61866 21.2945C4.80428 20.5889 4.60482 19.3991 4.2059 17.0194Z"
                    stroke="#FEFEFE" stroke-width="1.5" />
                <path d="M17.833 7.5C17.833 4.46243 15.3706 2 12.333 2C9.29544 2 6.83301 4.46243 6.83301 7.5"
                    stroke="#FEFEFE" stroke-width="1.5" />
            </svg>
        </a>
    </div>
    <div class="order-history offcanvas offcanvas-end border-0 p-4" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header px-0 pb-3 pb-sm-4">
            <h5 class="text-slate-900 mb-0 font-hubot font-medium text-2xl text-xl-mob">Order Summary</h5>
            <button type="button" class="border-0 bg-transparent" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L12 12M12 12L6 18M12 12L18 18M12 12L6 6" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        @php
            $cart_products = session()->get('cart', []);
            $subtotal = 0;
        @endphp
        <div class="offcanvas-body p-0 border-top border-gray-300">
            <ul class="p-0 m-0" id="sz_card_popup_products">
                @if( !empty( $cart_products ) )
                    @foreach( $cart_products as $cp_key => $cp_val )
                        <li class="d-flex border-bottom border-gray-300 py-3" id="sz_product_{{ $cp_key }}">
                            <div class="bg-white rounded-lg">
                                <a href="{{ $cp_val['url'] }}">
                                    <img class="pro-img" src="{{ $cp_val['image'] }}" alt="bike" width="92" height="92">
                                </a>
                            </div>
                            <div class="ms-3 w-100">
                                <h3 class="text-slate-900 font-inter-medium text-lg text-base-mob">{{ $cp_val['name'] }}</h3>
                                <p class="mb-0 text-slate-900 text-xl font-inter-medium text-lg-mob">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($cp_val['price'], 2) }}</p>
                            </div>
                            <div class="d-flex flex-column justify-content-between me-2">
                                <button type="button" class="bg-transparent border-0 ms-auto sz_remove_cart" data-pid="{{ $cp_key }}">
                                    <svg width="13" height="12" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 1L7.5 7M7.5 7L1.5 13M7.5 7L13.5 13M7.5 7L1.5 1" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="count font-inter-regular text-gray-500 text-end text-sm">x {{ $cp_val['quantity'] }} Item(s)</div>
                            </div>
                        </li>
                        @php
                            $total = $cp_val['price'] * $cp_val['quantity'];
                            $subtotal = $subtotal + $total;
                        @endphp
                    @endforeach
                @endif
            </ul>
            {{-- <div class="py-4 d-flex flex-column gap-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Subtotal</h4>
                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">£ 456.00</h3>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Discount</h4>
                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">0</h3>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Tax</h4>
                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">£ 100</h3>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular mb-0">Delivery Cost</h4>
                    <h3 class="text-slate-900 text-2xl text-xl-mob font-inter-medium mb-0">£ 150</h3>
                </div>
            </div> --}}
        </div>
        <div class="offcanvas-footer pt-2">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="text-slate-900 text-lg text-base-mob font-inter-regular">Total</h4>
                <h3 class="text-slate-900 text-xl text-lg-mob font-inter-medium" id="sz_cart_total">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($subtotal, 2) }}</h3>
            </div>
            <a href="{{ route('checkout') }}" class="button-dark w-100 mt-2 mt-sm-4 text-center">Checkout</a>
        </div>
    </div>
</header>