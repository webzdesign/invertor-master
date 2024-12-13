@php
    $customer_review_arr = array(
        array(
            'name' => 'Oliver Wilson',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'Skootz is an incredible team! Turning to a professional helped my puncture repair run quickly and professionally.',
        ),
        array(
            'name' => 'Emily Johnson',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'I had an amazing time at Skootz! They took the time to assist me select the ideal scooter for my everyday journey, and the staff was really helpful. Their familiarity with the various models and features amazed me. I felt secure with my purchase as I walked out!',
        ),
        array(
            'name' => 'James Smith',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'Amazing service! I dropped my daughter’s scooter off at a repair shop and they fixed it in five minutes. Finally, the technician explained what had gone wrong and what to do if it happened to you again. I would like to commend their honesty and turnaround time.',
        ),
        array(
            'name' => 'Sophie Brown',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'The collection of electric scooters at Skootz is really cool. The staff were very knowledgeable, I found exactly what I was looking for.',
        ),
        array(
            'name' => 'Chloe Davis',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'I picked an electric scooter from Skootz and it\'s become awesome for my daily commute. Staff has helped me find a model which suits me perfectly and I love how easy to use it is. I couldn\'t go back to public transport now!',
        ),
        array(
            'name' => 'Liam Taylor',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'I love my new scooter! They guided me through the options and I found the right one; the staff at Skootz.',
        ),
        array(
            'name' => 'Mia Thompson',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'I couldn\'t thank Mike and his team enough for their quick service when my son\'s scooter had a flat tire!" They were so nice and told me everything and my son in turn felt confident about it again',
        ),
        array(
            'name' => 'Noah Anderson',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'Skootz has Top-notch customer service! "They do care about their customers and they do go above and beyond.',
        ),
        array(
            'name' => 'Olivia Martin',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'We highly recommend anyone wanting to buy or repair an electric scooter to go to Skootz. Their expertise is unmatched! Plenty of people give you a pat on the back, everything they did was just to give me support through the whole process: choosing to and then aftercare, it made all the difference.',
        ),
        array(
            'name' => 'Jack White',
            'type' => 'Customer',
            'img' => 'testiicon.png',
            'review_content' => 'Buying my first electric scooter with Skootz was so easy! I left the store, answered all my questions patiently and even showed me how to use it. This commitment to the satisfaction of customers is taken on us.',
        ),
    );
@endphp

<section class="customer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 mb-4 mb-lg-0">
                <h2 class="font-bebas text-slate-900 text-center text-md-start">What our customer are saying</h2>
            </div>
            <div class="col-xl-9 col-lg-8 position-relative">
                <div class="owl-carousel clientSlider position-relative">
                    @foreach( $customer_review_arr as $customer_review )
                        <div>
                            <div class="text-center text-md-start">
                                <svg class="quote" width="113" height="94" viewBox="0 0 113 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M113 15.389C96.0751 23.4111 87.6128 32.837 87.6128 43.6668C94.8267 44.469 100.792 47.3102 105.509 52.1903C110.225 57.0704 112.584 62.7192 112.584 69.1369C112.584 75.9557 110.295 81.7049 105.717 86.3844C101.139 91.064 95.3816 93.4038 88.4452 93.4038C80.6764 93.4038 73.9482 90.3621 68.2603 84.2786C62.5725 78.1952 59.7286 70.8083 59.7286 62.1176C59.7286 36.0457 74.8497 15.6564 105.093 0.949219L113 15.389ZM53.2714 15.389C36.2078 23.4111 27.6762 32.837 27.6762 43.6668C35.0288 44.469 41.0634 47.3102 45.7801 52.1903C50.4969 57.0704 52.8552 62.7192 52.8552 69.1369C52.8552 75.9557 50.5316 81.7049 45.8842 86.3844C41.2368 91.064 35.445 93.4038 28.5085 93.4038C20.7397 93.4038 14.0462 90.3621 8.42771 84.2786C2.80921 78.1952 0 70.8083 0 62.1176C0 36.0457 15.0518 15.6564 45.1559 0.949219L53.2714 15.389Z" fill="#1F2937"/>
                                </svg>
                                <p class="text-gray-500 text-2xl font-inter-medium mt-lg-5 mt-4">{{ $customer_review['review_content'] }}</p>
                                <div class="d-md-flex gap-4 mt-lg-5 mt-4">
                                    <img class="avatar mb-3 mb-md-0" src="{{ asset( 'assets/theme/img/' . $customer_review['img'] ) }}" alt="Avatar">
                                    <div class="my-auto">
                                        <h3 class="text-gray-800 font-hubot font-medium mb-1">{{ $customer_review['name'] }}</h3>
                                        <p class="text-gray-800 font-inter-regular mb-0">{{ $customer_review['type'] }}</p>
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