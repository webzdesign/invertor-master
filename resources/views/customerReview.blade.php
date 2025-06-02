@php
use App\Models\Review;

    // $customer_review_arr = array(
    //     array(
    //         'name' => ' Cristina M., Chișinău',
    //         'type' => 'Customer',
    //         'img' => 'testiicon.png',
    //         'review_content' => ' “From the moment I requested a quote, the Invertor Lux team was attentive and efficient. They helped me choose the right air conditioner for my apartment and installed it the very next day. The whole process felt smooth and professional.”',
    //     ),
    //     array(
    //         'name' => 'Andrei P., Bălți',
    //         'type' => 'Customer',
    //         'img' => 'testiicon.png',
    //         'review_content' => '“I wasn’t sure which model to choose for my office, but their support team called me, asked the right questions, and gave a perfect recommendation. Delivery and installation were done in under 48 hours!”',
    //     ),
    //     array(
    //         'name' => 'Irina D., Ungheni',
    //         'type' => 'Customer',
    //         'img' => 'testiicon.png',
    //         'review_content' => ' “The air conditioner is working flawlessly, and the installation was done neatly without any hassle. The team respected my time and my space. Highly recommended for anyone in Moldova.”',
    //     ),
    //     array(
    //         'name' => 'Vlad C., Orhei',
    //         'type' => 'Customer',
    //         'img' => 'testiicon.png',
    //         'review_content' => '“I’ve worked with many service providers before, but Invertor Lux stands out. Their advice was honest, the pricing was fair, and the quality of work was impressive.”',
    //     ),
    //     array(
    //         'name' => 'Natalia T., Cahul',
    //         'type' => 'Customer',
    //         'img' => 'testiicon.png',
    //         'review_content' => '“This was my first time buying an AC for my store. The team took care of everything, from selecting the right model to installing it on a Sunday. That’s real customer care!”',
    //     ),
    // );
    $customer_review_arr = Review::get()->map(function($reviews) {
        return [
            'name' => $reviews->customer_name,
            'review_title' => $reviews->review_title,
            'review_content' => $reviews->review_description,
            'type' => 'Customer',
            'img' => 'testiicon.png',
        ];
    });
@endphp

<section class="customer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 mb-4 mb-lg-0">
                <h2 class="font-bebas text-slate-900 text-center text-md-start">{{ __('What our customer are saying')}}</h2>
            </div>
            <div class="col-xl-9 col-lg-8 position-relative">
                <div class="owl-carousel clientSlider position-relative">
                    @foreach( $customer_review_arr as $customer_review )
                        <div>
                            <div class="text-center text-md-start">
                                <svg class="quote" width="113" height="94" viewBox="0 0 113 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M113 15.389C96.0751 23.4111 87.6128 32.837 87.6128 43.6668C94.8267 44.469 100.792 47.3102 105.509 52.1903C110.225 57.0704 112.584 62.7192 112.584 69.1369C112.584 75.9557 110.295 81.7049 105.717 86.3844C101.139 91.064 95.3816 93.4038 88.4452 93.4038C80.6764 93.4038 73.9482 90.3621 68.2603 84.2786C62.5725 78.1952 59.7286 70.8083 59.7286 62.1176C59.7286 36.0457 74.8497 15.6564 105.093 0.949219L113 15.389ZM53.2714 15.389C36.2078 23.4111 27.6762 32.837 27.6762 43.6668C35.0288 44.469 41.0634 47.3102 45.7801 52.1903C50.4969 57.0704 52.8552 62.7192 52.8552 69.1369C52.8552 75.9557 50.5316 81.7049 45.8842 86.3844C41.2368 91.064 35.445 93.4038 28.5085 93.4038C20.7397 93.4038 14.0462 90.3621 8.42771 84.2786C2.80921 78.1952 0 70.8083 0 62.1176C0 36.0457 15.0518 15.6564 45.1559 0.949219L53.2714 15.389Z" fill="#FB7E06"/>
                                </svg>
                                <p class="sz_review_content text-gray-500 text-2xl font-inter-medium mt-lg-5 mt-4">{{ __($customer_review['review_content']) }}</p>
                                <div class="d-md-flex gap-4 mt-lg-5 mt-4">
                                    <img class="avatar" src="{{ asset( 'assets/images/Avater.png' ) }}" alt="Avatar">
                                    <div class="my-auto">
                                        <h3 class="text-gray-800 font-hubot font-medium mb-1">{{ $customer_review['name'] }}</h3>
                                        <p class="text-gray-800 font-inter-regular mb-0">{{ __($customer_review['type']) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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