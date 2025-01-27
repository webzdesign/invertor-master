@extends('layouts.master')

@section('content')

<section class="bg-linear linear-banner rounded-3xl p-2 m-2 position-relative">
    <div class="w-100 h-100"></div>
    <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0 text-6xl text-4xl-mob">Refund and Return Policy</h2>
</section>

<section class="breadcrumb mb-0 bg-slate-100 py-3 d-none d-md-block">
    <div class="container">
        <ul class="p-0 m-0 d-flex align-items-center flex-wrap gap-3">
            <li>
                <a href="{{ route('home') }}" class="text-slate-900 font-inter-medium text-xl text-decoration-none">Home</a>
            </li>
            <li>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18.5C9 18.5 15 14.0811 15 12.5C15 10.9188 9 6.5 9 6.5" stroke="#292929" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="font-inter-regular text-xl text-decoration-none text-slate-900">Refund policy</li>
        </ul>
    </div>
</section>

<section class="py-md-5 py-3">
    <div class="container">
        <h3 class="text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob">Refund Policy</h3>
        <div class="mb-4">
          
            <p class="text-gray-500 text-lg font-inter-regular mb-0">At Skootz, your satisfaction is our priority. If you’re unsatisfied with your purchase, we’re here to make it right with a hassle-free return and refund process.
            </p>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Eligibility for Returns and Refunds
            </h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">To qualify for a return or refund, the following conditions must be met:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Return Timeframe:</b> Items must be returned within <b>30 days of delivery.</b>
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Condition of Items:</b> Products must be in their <b>original condition</b>, unused, and with all packaging intact.
                </li>
                <li><b>Eligible Circumstances:</b>
                    <ul>
                        <li>Received a defective or damaged product.</li>
                        <li>Changed your mind (product must remain unused and in original condition).</li>
                    </ul>
                    </li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">How to Initiate a Return
            </h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">To start a return, please follow these simple steps:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Contact Us: Email us at <a href="mailto:runmaxlimited@gmail.com" class="font-inter-semibold text-decoration-none text-slate-900">runmaxlimited@gmail.com</a> or  <a href="mailto:support@skotz.co.uk" class="font-inter-semibold text-decoration-none text-slate-900">support@skotz.co.uk</a> with the following details:
                    <ul>
                        <li>Your order number.</li>
                        <li>Reason for return.</li>
                        <li>Supporting images (if applicable, e.g., for damaged or defective items).</li>
                    </ul>
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Confirmation:</b> Our support team will review your request and provide you with return instructions.
                </li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Refund Process</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">Once we receive and inspect the returned item:</p>
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Inspection Timeframe:</b> We will inspect the item within <b>2 business days</b> of receipt.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Refund Approval:</b> the item meets the eligibility criteria, your refund will be approved.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Refund Timeline:</b> Refunds will be processed within <b>7 business days</b> after approval.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Refund Method: </b> will be credited to your original payment method.</li>
            </ul>
          
        </div>

        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Non-Refundable Items</h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">We are unable to accept returns or issue refunds for:</p>

            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Customized or personalized products.</li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Items damaged due to misuse or improper handling.
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Sale or discounted items, unless proven defective.
                </li>
            </ul>
          
        </div>

        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Important Notes
            </h4>
           
            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Customers are responsible for return shipping costs unless the return is due to our error (e.g., wrong or defective item sent).
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">We recommend using a trackable shipping method to ensure safe return delivery.
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc">Based on your payment provider's policies, refunds may take additional time to reflect in your account.

                </li>
            </ul>
          
        </div>

        <div class="mb-4">
            <h4 class="text-slate-900 text-2xl font-hubot font-semibold">Contact Us for Support

            </h4>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">For any questions or assistance regarding your return, feel free to reach out:</p>

            <ul>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Email: </b> <a href="mailto:runmaxlimited@gmail.com" class="font-inter-semibold text-decoration-none text-slate-900">runmaxlimited@gmail.com</a>
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Support: </b> <a href="mailto:support@skotz.co.uk" class="font-inter-semibold text-decoration-none text-slate-900">support@skotz.co.uk</a>
                </li>
                <li class="text-gray-500 text-lg font-inter-regular mb-0 list-disc"><b>Phone:</b> +44 7918816728

                </li>
              
            </ul>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">Our team is available during support hours to assist you promptly.</p>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">For full details, please visit our <a href="{{ route( 'terms-conditions' ) }}" class="font-inter-semibold text-decoration-none text-slate-900">Terms and Conditions</a> or <a href="{{ route('shipping-policy') }}" class="font-inter-semibold text-decoration-none text-slate-900">Shipping Policy.</a>
            </p>
            <p class="text-gray-500 text-lg font-inter-regular mb-0">Thank you for choosing Skootz. We’re here to ensure your satisfaction with every purchase!
            </p>
          
        </div>

    </div>
</section>

{{-- @include('newsLetter') --}}

@endsection