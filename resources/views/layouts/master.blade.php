<html lang="en">

    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        @php
            $cart = session()->get('cart', []);
            $cartCount = count($cart);
        @endphp

        @include('layouts.partials.header')
    
        <main>
            @yield('content')
        </main>

        @include('layouts.partials.footer')
        <div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center p-lg-4">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none" stroke="#198754" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                            <polyline class="path check" fill="none" stroke="#198754" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                        </svg>
                        <h4 class="text-success mt-3">Oh Yeah!</h4>
                        <p class="mt-3">Success! Your item has been added to the cart.</p>
                        <button type="button" class="btn btn-sm mt-3 btn-success sz_add_to_cart_ok_btn" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-slate-200">
                    <div class="modal-body">
                        <iframe class="aspect-video sz_youtube_video_iframe" width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function numberFormat(number, decimals) {
                number = parseFloat(number);

                const formatted = number.toLocaleString(undefined, {
                    minimumFractionDigits: decimals,
                    maximumFractionDigits: decimals
                });

                return formatted;
            }
            function toggleHeaderClass() {
                if ($(window).scrollTop() >= 10) {
                    $("header").addClass("border-bottom");
                } else {
                    $("header").removeClass("border-bottom");
                }
            }
            $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(".loader").fadeOut();
                $("#preloder").delay(200).fadeOut("slow");

                $('body').on('click', '.AddToCartBtn', function(e){       
                    e.preventDefault();
                    var pid = $(this).data("pid");
                    var quantity = 1;
                    if( $('.sz_product_quantity').length > 0 ){
                        quantity = parseInt($('.sz_product_quantity').text());
                    }
                    var isOrderNowbtn = $(this).hasClass("eb_OrderNowBtn");
                    
                    $.ajax({
                        url: '{{ route("cart.add") }}',
                        type: 'POST',
                        data: {
                            productId: pid,
                            quantity: quantity,
                        },
                        success: function(response) {
                            if (response.success) {
                                if( isOrderNowbtn == true ){
                                    window.location.href = "{{ route('checkout') }}";
                                } else {
                                    $('#addToCartModal').modal('show');
                                    $('#sz_cart_total').html(response.cart_total);
                                    $('#sz_card_popup_products').html(response.sz_cart_popup_html);
                                }
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });
                    
                });
                $(document).on('click', '.sz_remove_cart', function(e){
                    var pid = $(this).data("pid");
                
                    $.ajax({
                        url: '{{ route("cart.remove") }}',
                        type: 'POST',
                        data: {
                            pid: pid,
                        },
                        success: function(response) {
                            location.reload();
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });
                });

                toggleHeaderClass();
                $(window).on("scroll", function () {
                    toggleHeaderClass();
                });

                // Mobile Navigation
                if ($('#nav-menu-container').length) {

                    var $mobile_nav = $('#nav-menu-container').clone().prop({ id: 'mobile-nav' });
                    $mobile_nav.find('> ul').attr({ 'class': '', 'id': '' });
                    $('#right-nav').append($mobile_nav);
                    $('#right-nav').append('<div id="mobile-body-overly"></div>');
                    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

                    $(document).on('click', '.menu-has-children i', function (e) {
                        $(this).next().toggleClass('menu-item-active');
                        $(this).nextAll('div').eq(0).slideToggle();
                    });

                    $(document).on('click', '#mobile-nav-toggle', function (e) {
                        $('body').toggleClass('mobile-nav-active');
                        $('#mobile-body-overly').toggle();
                    });

                    $(document).on('click', '.close-menu', function (e) {
                        $('body').toggleClass('mobile-nav-active');
                        $('#mobile-body-overly').toggle();
                    });

                    $(document).click(function (e) {
                        var container = $("#mobile-nav, #mobile-nav-toggle");
                        if (!container.is(e.target) && container.has(e.target).length === 0) {
                            if ($('body').hasClass('mobile-nav-active')) {
                                $('body').removeClass('mobile-nav-active');
                                $('#mobile-body-overly').fadeOut();
                            }
                        }
                    });
                } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
                    $("#mobile-nav, #mobile-nav-toggle").hide();
                }
                $(document).on('click', '.sz_add_to_cart_ok_btn', function(e){
                    $('.sz_cart_btn').click();
                });
                $(document).on('click', '.sz_youtube_video_btn', function(e){
                    $('.sz_youtube_video_iframe').attr( 'src', $(this).attr('data-youtubeUrl') );
                    $('#videoModal').modal( 'show' );
                });
                $(document).on('hide.bs.modal', '#videoModal', function(e){
                    $('.sz_youtube_video_iframe').attr( 'src', '' );
                });
            });
        </script>
        @yield('script')
    </body>
</html>