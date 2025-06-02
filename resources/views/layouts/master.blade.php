<!DOCTYPE html>
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
        <div class="modal fade lead-form-modal" id="getPriceModal" tabindex="-1" aria-labelledby="getPriceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header align-items-baseline p-0">
                        <h1 class="modal-title text-slate-900 font-semibold" id="getPriceModalLabel">{!! __('Enter Your Phone Number </br> Get The Offer') !!}</h1>
                        <button type="button" class="btn-close-lf w-fit bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.999 25L15 15M15.0011 25L25 15" stroke="#FB7E06" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M36.6673 19.9987C36.6673 10.7939 29.2053 3.33203 20.0007 3.33203C10.7959 3.33203 3.33398 10.7939 3.33398 19.9987C3.33398 29.2034 10.7959 36.6654 20.0007 36.6654C29.2053 36.6654 36.6673 29.2034 36.6673 19.9987Z" stroke="#FB7E06" stroke-width="2.5"/>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body p-0 mt-sm-4 mt-3">
                        <form class="phone-modal-form" id="phoneModalForm" >
                            <div class="mb-1 w-100" id="phoneModalData">
                                <input type="hidden" name="productId[]" id="productId">
                                <input type="text" name="is_scammers" style="display: none;">
                                <label class="font-inter-regular text-sm d-block mb-1" for="phone">{{ __('Phone number')}}<span class="text-rose-500">*</span></label>
                                <input type="hidden" name="country_dial_code_modal" id="country_dial_code_modal">
                                <input type="hidden" name="country_iso_code_modal" id="country_iso_code_modal">
                                <input type="text" class="input-control w-100" name="sz_phone_modal" id="phone_modal" value="">
                            </div>
                            <label id="phone_modal-error" class="error" style="color: red;" for="phone_modal"></label>
                             <div class="overflow-hidden border border-slate-700 rounded-lg p-3">
                                <div class="form-check">
                                    <input class="form-check-input shadow-none cursor-pointer border-slate-200" type="checkbox" id="terms_and_condtion" name="terms_and_condtion">
                                    <label class="form-check-label font-inter-regular text-sm text-gray-500 cursor-pointer ms-2" for="terms_and_condtion">
                                        <div class="check-one">{{__('Click Here To More Information')}}.</div>
                                        <span class="check-two" style="display:none;">
                                            {{__('By submitting this form, you express your consent to the processing of your personal data (name, email address, phone number, etc.) by Invertor Lux SRL and Iute Credit SRL, for the purpose of resolving your request. The data provided will be kept securely and will not be transmitted to third parties without your consent, except in cases required by law.')}}
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div id="success-container"></div>
                            <div class="mt-sm-4 mt-3">
                                <button type="submit" id="phoneModalFormSubmit" class="button-dark w-100">{{ __('Get the offer')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- write review modal --}}
        <div class="modal fade lead-form-modal" id="writeReviewModal" tabindex="-1" aria-labelledby="writeReviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header align-items-baseline p-0">
                        <h1 class="modal-title text-slate-900 font-semibold" id="writeReviewModalLabel">{!! __('Write A Review') !!}</h1>
                        <button type="button" class="btn-close-lf w-fit bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.999 25L15 15M15.0011 25L25 15" stroke="#FB7E06" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M36.6673 19.9987C36.6673 10.7939 29.2053 3.33203 20.0007 3.33203C10.7959 3.33203 3.33398 10.7939 3.33398 19.9987C3.33398 29.2034 10.7959 36.6654 20.0007 36.6654C29.2053 36.6654 36.6673 29.2034 36.6673 19.9987Z" stroke="#FB7E06" stroke-width="2.5"/>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body p-0 mt-sm-4 mt-3">
                        <form class="phone-modal-form" id="writeReviewModalForm">
                            <div class="mb-2 w-100">
                                <input type="hidden" name="product_id" id="product_id">
                                <input type="text" name="is_scammers" style="display: none;">
                                <label class="font-inter-regular text-sm d-block mb-1" for="customer_name">{{ __('Customer Name')}}<span class="text-rose-500">*</span></label>
                                <input type="text" class="input-control w-100" name="customer_name" id="customer_name" value="" placeholder="Customer Name">
                            </div>
                            <!-- Rating Section -->
                            <div class="mb-3 w-100">
                                <label class="font-inter-regular text-sm d-block mb-1">{{__('Add Ratings')}}<span class="text-rose-500">*</span></label>
                                <input type="hidden" name="rating" id="rating" value="0">

                                <div class="d-flex align-items-center gap-1 rating-stars">
                                    <span class="star text-muted fs-4 cursor-pointer" data-value="1">&#9733;</span>
                                    <span class="star text-muted fs-4 cursor-pointer" data-value="2">&#9733;</span>
                                    <span class="star text-muted fs-4 cursor-pointer" data-value="3">&#9733;</span>
                                    <span class="star text-muted fs-4 cursor-pointer" data-value="4">&#9733;</span>
                                    <span class="star text-muted fs-4 cursor-pointer" data-value="5">&#9733;</span>
                                </div>
                                <label class="font-inter-regular text-sm d-block my-1 error text-danger" id="rating-error"></label>
                            </div>
                            <div class="mb-2 w-100">
                                <label class="font-inter-regular text-sm d-block mb-1" for="review_title">{{ __('Review Title')}}<span class="text-rose-500">*</span></label>
                                <input type="text" class="input-control w-100" name="review_title" id="review_title" value="" placeholder="Review Title">
                            </div>
                            <div class="mb-2 w-100">
                                <label class="font-inter-regular text-sm d-block mb-1" for="review_description">{{ __('Review Description')}}<span class="text-rose-500">*</span></label>
                                <textarea name="review_description" class="form-control" id="review_description" placeholder="Review Description"></textarea>
                            </div>
                            <div class="overflow-hidden p-1">
                                <div class="form-check">
                                    <input class="form-check-input shadow-none cursor-pointer border-slate-200" type="checkbox" id="recommend_product" name="recommend_product" value="1" checked>
                                    <label class="form-check-label font-inter-regular text-sm text-gray-500 cursor-pointer ms-2" for="recommend_product">
                                        <span>
                                            {{__('Recommends this product')}}.
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div id="review-success-container"></div>
                            <div class="mt-sm-4 mt-3">
                                <button type="submit" id="writeReviewModalFormSubmit" class="button-dark w-100">{{ __('Add Review')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>

            $(document).ready(function(){
                $(".fade-owl-slider").owlCarousel({
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 3000, // Time between slides (in milliseconds)
                    loop: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    smartSpeed: 200,
                    dots: false,
                    nav: false,
                    touchDrag: false,
                    mouseDrag: false
                });
            });
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
                    $("header").addClass("header-fixed");
                } else {
                    $("header").removeClass("header-fixed");
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
                                        $('.sz_cart_price_details').html(response.sz_cart_price_html);
                                        $('.sz_cart-badge').html(response.total_cart_count);

                                        let paidAmount = response.grand_total - (response.total_cart_count * 35);
                                        $("#online_paid_amount").html(paidAmount.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
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
                                    $('.sz_cart_price_details').html(response.sz_cart_price_html);
                                    $('.sz_cart-badge').html(response.total_cart_count);
                                    $('.sz_order_now-btn').prop('disabled', false);
                                    let paidAmount = response.grand_total - (response.total_cart_count * 35);
                                    $("#online_paid_amount").html(paidAmount.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
                                    initQuantityButton();

                                }
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });

                });
                $('body').on('click', '.AddToCartBtn', function(e){
                    gtag_report_conversion();
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

        <script>
            function gtag_report_conversion(url) {
                var callback = function () {
                    if (typeof(url) != 'undefined') {
                        window.location = url;
                    }
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-16832855332/h41sCNTt1JcaEKT6w9o-',
                    'value': 1.0,
                    'event_callback': callback
                });

            }
            </script>

        <link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
        <script src="{{ asset('assets/js/intel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>
        @yield('script')

        <script>
            const inputModal = document.querySelector('#phone_modal');
            const errorMapModal = ["Phone number is invalid.", "Invalid country code", "Too short", "Too long"];

            const itiModal = window.intlTelInput(inputModal, {
                initialCountry: "md",
                preferredCountries: ['md','gb', 'pk'],
                separateDialCode:true,
                nationalMode:false,
                utilsScript: "{{ asset('assets/js/intel2.js') }}"
            });

            $.validator.addMethod('inttel_modal', function (value, element) {
                if (value.trim() == '' || itiModal.isValidNumber()) {
                    return true;
                }
                return false;
            }, function (result, element) {
                    return errorMapModal[itiModal.getValidationError()] || errorMapModal[0];
            });

            inputModal.addEventListener('keyup', () => {
                if (itiModal.isValidNumber()) {
                    $('#phoneModalFormSubmit').attr('disabled', false);
                    $('#country_dial_code_modal').val(itiModal.s.dialCode);
                    $('#country_iso_code_modal').val(itiModal.j);
                }
            });
            inputModal.addEventListener("countrychange", function() {
                if (itiModal.isValidNumber()) {
                    $('#country_dial_code_modal').val(itiModal.s.dialCode);
                    $('#country_iso_code_modal').val(itiModal.j);
                }
            });

            $(document).ready(function() {

                $(document).on('click','.getPriceModalBtn',function(){
                    $('#getPriceModal').modal('show');
                    let pID = $(this).data('pid');
                    if(pID) {
                        $(document).find('#phoneModalForm').find('#phoneModalData').find('#productId').val(pID);
                    }
                });

                $('#getPriceModal').on('hidden.bs.modal', function () {
                    let form = $('#phoneModalForm');
                    form[0].reset();
                    $('#success-container').empty();
                    form.find('.error').html('');
                    form.find('#productId').val('');
                });

                $('#phoneModalFormSubmit').attr('disabled', true);

                 $("#phoneModalForm").validate({
                    rules: {
                        sz_phone_modal: {
                            required: true,
                            inttel_modal: true,
                            number: true
                        },
                    },
                    messages: {
                        sz_phone_modal: {
                            required: "Phone is required.",
                            number : 'Phone number is invalid formate'
                        },
                    },
                    errorPlacement: function(error, element) {
                        error.appendTo(element.parent("div"));
                    },
                    submitHandler:function(form) {
                        $('#phoneModalFormSubmit').attr('disabled', true);

                        const formData = new FormData(form);
                        const rawData = Object.fromEntries(formData.entries());
                        const productIds = formData.getAll('productId[]');
                        const data = {
                            country_dial_code: rawData.country_dial_code_modal,
                            country_iso_code: rawData.country_iso_code_modal,
                            phone: rawData.sz_phone_modal,
                            productId: productIds,
                            is_scammers: rawData.is_scammers,
                            modalRequest: true,
                        };

                        // form.submit();
                        $.ajax({
                            url: "{{ route('quotation.request') }}",
                            method: "POST",
                            data: data,
                            success: function (response) {
                                $('#phoneModalForm')[0].reset();
                                $('#success-container').empty();

                                const translations = {
                                    "quotation.success": @json(__('quotation.success')),
                                    "quotation.error": @json(__('quotation.error'))
                                };

                                if (response.success)  {
                                    const successHtml = `
                                        <div id="successMessage" class="success-message rounded-lg d-flex gap-2" role="alert">
                                            <div>
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M27.5 15C27.5 8.09644 21.9035 2.5 15 2.5C8.09644 2.5 2.5 8.09644 2.5 15C2.5 21.9035 8.09644 27.5 15 27.5C21.9035 27.5 27.5 21.9035 27.5 15Z" fill="#04248C"/>
                                                    <path d="M10 15.625L13.125 18.75L20 11.25" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <span class="text-sm text-slate-900" id="successText">${translations[response.message]}</span>
                                        </div>`;

                                    $('#success-container').append(successHtml);

                                    // setTimeout(function() {
                                    //     if(response.success && response.redirect_url){
                                    //         window.location.href = response.redirect_url;
                                    //     }
                                    // }, 1000);
                                } else {
                                   const errorHtml = `
                                        <div id="errorMessage" class="alert alert-danger align-items-center gap-2 mt-3 p-3 rounded-2xl bg-red-100 text-red-900" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill text-red-600" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8 0c-.538 0-1.047.214-1.414.586L.586 6.586A2 2 0 0 0 0 8c0 .538.214 1.047.586 1.414l6 6A2 2 0 0 0 8 16a2 2 0 0 0 1.414-.586l6-6A2 2 0 0 0 16 8a2 2 0 0 0-.586-1.414l-6-6A1.995 1.995 0 0 0 8 0zM7.001 4a1 1 0 1 1 2 0v3a1 1 0 0 1-2 0V4zm1 7a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 8 11z"/>
                                            </svg>
                                            <span id="errorText">${translations[response.message]}</span>
                                        </div>`;

                                    $('#success-container').html(errorHtml);
                                    $('#phoneModalFormSubmit').attr('disabled', false);
                                }

                            },
                            error: function (xhr) {
                                console.error("Error:", xhr.responseJSON);
                                $('#phoneModalFormSubmit').attr('disabled', false);
                            }
                        });
                    }
                });

                $(document).on('click', '#terms_and_condtion', function () {
                    let Checked = $(this).is(':checked');

                    if(Checked) {
                        $('.check-one').hide();
                        $('.check-two').show();
                    } else {
                        $('.check-one').show();
                        $('.check-two').hide();
                    }

                });


                $(document).on('click','.writeReview',function(){
                    $('#writeReviewModal').modal('show');
                    let pID = $(this).data('pid');
                    if(pID) {
                        $(document).find('#writeReviewModalForm').find('#product_id').val(pID);
                    }
                });

                const stars = $(".rating-stars .star");
                const ratingInput = $("#rating");

                function highlightStars(count) {
                    stars.each(function (index) {
                        if (index < count) {
                            $(this).removeClass("text-muted").addClass("text-warning");
                        } else {
                            $(this).removeClass("text-warning").addClass("text-muted");
                        }
                    });
                }

                stars.on("click", function () {
                    const value = parseInt($(this).data("value"));
                    ratingInput.val(value);
                    highlightStars(value);
                });

                stars.on("mouseover", function () {
                    const hoverValue = parseInt($(this).data("value"));
                    highlightStars(hoverValue);
                });

                stars.on("mouseout", function () {
                    const selectedValue = parseInt(ratingInput.val()) || 0;
                    highlightStars(selectedValue);
                });

                $('#writeReviewModal').on('hidden.bs.modal', function () {
                    let formField = $('#writeReviewModalForm');
                    formField.find('#product_id').val('');
                    formField.find('#customer_name').val('');
                    formField.find('#rating').val('');
                    formField.find('#review_title').val('');
                    formField.find('#review_description').val('');
                    formField.find('#recommend_product').attr('checked',true);
                    formField.find('#review-success-container').empty();
                    formField.find(".rating-stars .star").addClass("text-muted");
                    formField.find('.error').html('');
                });

                $("#writeReviewModalForm").validate({
                    rules: {
                        customer_name: {
                            required: true,
                        },
                        review_title: {
                            required: true,
                        },
                        review_description: {
                            required: true,
                        },
                        rating: {
                            required: true,
                        }
                    },
                     messages: {
                        customer_name: {
                            required: "Customer name is required."
                        },
                        review_title: {
                            required: "Review title is required."
                        },
                        review_description: {
                            required: "Review description is required."
                        },
                        rating: {
                            required: "Please select a rating."
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.addClass('text-danger');
                        error.appendTo(element.parent());
                    },
                    submitHandler:function(form) {
                        $('#writeReviewModalFormSubmit').attr('disabled', true);

                        let rating = $('#writeReviewModalForm').find('#rating').val();

                        if (rating == 0) {
                            $('#rating-error').text('Please Select Rating!');
                            $('#writeReviewModalFormSubmit').attr('disabled', false);
                            return;
                        }

                        const formData = new FormData(form);
                        const rawData = Object.fromEntries(formData.entries());

                        // form.submit();
                        $.ajax({
                            url: "{{ route('storeReview') }}",
                            method: "POST",
                            data: rawData,
                            success: function (response) {
                                const reviewTranslations = {
                                    "review.success": @json(__('review.success')),
                                    "review.error": @json(__('review.error'))
                                };
                                if(response.success) {

                                    const successHtml = `
                                        <div id="successMessage" class="success-message rounded-lg d-flex gap-2" role="alert">
                                            <div>
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M27.5 15C27.5 8.09644 21.9035 2.5 15 2.5C8.09644 2.5 2.5 8.09644 2.5 15C2.5 21.9035 8.09644 27.5 15 27.5C21.9035 27.5 27.5 21.9035 27.5 15Z" fill="#04248C"/>
                                                    <path d="M10 15.625L13.125 18.75L20 11.25" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <span class="text-sm text-slate-900" id="successText"> ${reviewTranslations[response.message]}</span>
                                        </div>`;

                                    $('#review-success-container').append(successHtml);

                                    let formField = $('#writeReviewModalForm');
                                    formField.find('#product_id').val('');
                                    formField.find('#customer_name').val('');
                                    formField.find('#rating').val('');
                                    formField.find('#review_title').val('');
                                    formField.find('#review_description').val('');
                                    formField.find('#recommend_product').attr('checked',true);
                                    formField.find(".rating-stars .star").addClass("text-muted");

                                    if ($(document).find('.loadReviews').length) {
                                        $(document).find('.loadReviews').click();
                                    } else if ($(document).find('.loadMoreReviews').length) {
                                        $(document).find('.loadMoreReviews').click();
                                    }

                                    $('#writeReviewModalFormSubmit').attr('disabled', false);

                                    setTimeout(function() {
                                        $('#writeReviewModal').modal('hide');
                                    },1000);
                                } else {
                                    const errorHtml = `
                                        <div id="errorMessage" class="alert alert-danger align-items-center gap-2 mt-3 p-3 rounded-2xl bg-red-100 text-red-900" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill text-red-600" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8 0c-.538 0-1.047.214-1.414.586L.586 6.586A2 2 0 0 0 0 8c0 .538.214 1.047.586 1.414l6 6A2 2 0 0 0 8 16a2 2 0 0 0 1.414-.586l6-6A2 2 0 0 0 16 8a2 2 0 0 0-.586-1.414l-6-6A1.995 1.995 0 0 0 8 0zM7.001 4a1 1 0 1 1 2 0v3a1 1 0 0 1-2 0V4zm1 7a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 8 11z"/>
                                            </svg>
                                            <span id="errorText"> ${reviewTranslations[response.message]}</span>
                                        </div>`;

                                    $('#review-success-container').html(errorHtml);
                                    $('#writeReviewModalFormSubmit').attr('disabled', false);
                                }
                            },
                            error: function (xhr) {
                                const reviewTranslations = {
                                    "review.success": @json(__('review.success')),
                                    "review.error": @json(__('review.error'))
                                };
                                const errorHtml = `
                                    <div id="errorMessage" class="alert alert-danger align-items-center gap-2 mt-3 p-3 rounded-2xl bg-red-100 text-red-900" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill text-red-600" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8 0c-.538 0-1.047.214-1.414.586L.586 6.586A2 2 0 0 0 0 8c0 .538.214 1.047.586 1.414l6 6A2 2 0 0 0 8 16a2 2 0 0 0 1.414-.586l6-6A2 2 0 0 0 16 8a2 2 0 0 0-.586-1.414l-6-6A1.995 1.995 0 0 0 8 0zM7.001 4a1 1 0 1 1 2 0v3a1 1 0 0 1-2 0V4zm1 7a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 8 11z"/>
                                        </svg>
                                        <span id="errorText"> ${reviewTranslations[response.message]}</span>
                                    </div>`;

                                $('#review-success-container').html(errorHtml);
                                $('#writeReviewModalFormSubmit').attr('disabled', false);
                                $('#writeReviewModalFormSubmit').attr('disabled', false);
                            }
                        });
                    }
                });

            });

        </script>
    </body>
</html>
