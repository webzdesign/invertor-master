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
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-slate-200">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            function initQuantityButton(){
                $('.add-quantity-btn').each(function () {
                    let container = $(this);

                    // Function to update the disable class
                    function updateDisableClass(status) {
                        let quantitySpan = container.find('span').eq(1); // Select the middle span
                        let quantity = parseInt(quantitySpan.text());
                        let minusButton = container.find('.minus-btn');
                        let plusButton = container.find('.plus-btn');
                        let sharedId = container.attr('data-shared-id');

                        if (quantity <= 1) {
                            minusButton.addClass('disabled').css('opacity', '0.5'); // Add disabled class
                        } else {
                            minusButton.removeClass('disabled').css('opacity', '1'); // Remove disabled class
                        }
                        if (quantity >= 10) {
                            plusButton.addClass('disabled').css('opacity', '0.5'); // Add disabled class
                        } else {
                            plusButton.removeClass('disabled').css('opacity', '1'); // Remove disabled class
                        }
                        if( status != 'initialize' ){
                            $.ajax({
                                url: '{{ route("cart.add") }}',
                                type: 'POST',
                                data: {
                                    productId: sharedId,
                                    total_quantity: quantity,
                                },
                                success: function(response) {
                                    if (response.success) {
                                        $('.sz_cart_total').html(response.cart_total);
                                        $('.sz_card_popup_products').html(response.sz_cart_popup_html);
                                        $('.sz_cart-badge').html(response.total_cart_count);
                                        initQuantityButton('initialize');
                                    }
                                },
                                error: function(xhr) {
                                    console.error(xhr.responseText);
                                }
                            });
                        }
                    }

                    // Initial update of the disable class
                    updateDisableClass('initialize');

                    // Handle plus button click
                    container.find('.plus-btn').click(function () {
                        let quantitySpan = container.find('span').eq(1); // Select the middle span
                        let quantity = parseInt(quantitySpan.text());
                        if (quantity < 10) {
                            quantitySpan.text(quantity + 1); // Increment and update quantity
                            updateDisableClass(); // Update disable class
                        }
                    });

                    // Handle minus button click
                    container.find('.minus-btn').click(function () {
                        let quantitySpan = container.find('span').eq(1); // Select the middle span
                        let quantity = parseInt(quantitySpan.text());
                        if (quantity > 1) {
                            quantitySpan.text(quantity - 1); // Decrement and update quantity
                            updateDisableClass(); // Update disable class
                        }
                    });
                });
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
                    var $this = $(this);
                    var pid = $this.data("pid");
                    var quantity = 1;
                    var $parent = $this.parent('.sz_add_to_cart-sec');
                    if( $parent.find('.sz_product_quantity').length > 0 ){
                        quantity = parseInt($parent.find('.sz_product_quantity').text());
                    }
                    var isOrderNowbtn = $this.hasClass("eb_OrderNowBtn");
                    $('.AddToCartBtn[data-pid="' + pid + '"]').prop('disabled', true);
                    
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
                                    $('.AddToCartBtn[data-pid="' + pid + '"]').find('.sz_add_to_cart_circle').removeClass('d-none');
                                    $('.AddToCartBtn[data-pid="' + pid + '"]').prop('disabled', false);
                                    $('.sz_alert .sz_alert_msg').text(response.message);
                                    $('.sz_alert_success, .sz_alert_danger').hide();
                                    if( response.cart_reached_status == 1 ){
                                        $('.sz_alert').removeClass('alert-success').addClass('alert-danger');
                                        $('.sz_alert_danger').show();
                                    } else {
                                        $('.sz_alert').removeClass('alert-danger').addClass('alert-success');
                                        $('.sz_alert_success').show();
                                    }
                                    $('.sz_alert').removeClass('fade-out-left').addClass('fade-in-right');
                                    setTimeout(function(){
                                        $('.sz_alert').removeClass('fade-in-right').addClass('fade-out-left');
                                    }, 2000);
                                    $('.sz_cart_total').html(response.cart_total);
                                    $('.sz_card_popup_products').html(response.sz_cart_popup_html);
                                    $('.sz_cart-badge').html(response.total_cart_count);
                                    initQuantityButton();
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
                initQuantityButton();
            });
        </script>
        @yield('script')
    </body>
</html>