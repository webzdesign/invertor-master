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
                                    $('.sz_cart_btn').click();
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
            });
        </script>
        @yield('script')
    </body>
</html>