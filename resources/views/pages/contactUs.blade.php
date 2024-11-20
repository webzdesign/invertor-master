@extends('layouts.master')

@section('content')
<style>
.hoverColor:hover{
    color: #33ac29;
}
.error{
    color:red;
}
</style>
    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.579562164561!2d-1.8864894877387377!3d52.522947471945436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870a31269ba69b1%3A0x24dd7c798f3d76b2!2sTop%20Cloud%20Logistics%20Limited!5e0!3m2!1sen!2sin!4v1730976289471!5m2!1sen!2sin" height="100%" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>      
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact Us</h2>
                            <p>At Skootz Electric Scooters, we're here to help you find the perfect scooter for your lifestyle and answer any questions you may have. Whether you're curious about our products, need assistance with your order, or want advice on choosing the best scooter for your needs, our team is ready to assist!</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Get in Touch</h4>
                                <p>
                                    <strong>Phone:</strong>Call us at <a href="tel:+447418356616" class="hoverColor"> +44 7418356616</a> for direct assistance.<br>
                                    <strong>Email:</strong>Reach us at <a href="mailto:hello@runmax.com" class="hoverColor"> hello@runmax.com</a> with any questions or feedback.<br>
                                    <strong>Address:</strong> Visit our showroom at Edinburgh and Glasgow for a firsthand look at our range of scooters.
                                </p>
                            </li>
                            <li>
                                <h4>Customer Support Hours</h4>
                                <p>
                                    Monday – Friday: 9:00 AM – 6:00 PM<br>
                                    Saturday: 10:00 AM – 4:00 PM<br><br>

                                    Feel free to contact us anytime—we look forward to hearing from you!
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    @if (session()->has('success'))
                        <label style="font-size: 18px;color: green;">{{ session('success') }}</label>
                    @endif
                    <div class="contact__form">
                        <form action="{{ route('contactUs.store') }}" id="contactUs" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <input type="text" class="mb-0" placeholder="Name" name="name" id="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger d-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <input type="email" class="mb-0" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger d-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" class="mb-0" name="message" id="message">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger d-block" >{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
@section('script')
<script>
$(document).ready(function(){
    $("#contactUs").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                email: true,
                required: true,
            },
            message: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Name is required."
            },
            email: {
                required: "Email is required."
            },
            message: {
                required: "Message is required."
            },
        },
        errorPlacement: function(error, element) {
            error.appendTo(element.parent("div"));
        },
        submitHandler:function(form) {
            if(!this.beenSubmitted) {
                this.beenSubmitted = true;
                $('button[type="submit"]').attr('disabled', true);
                form.submit();
            }
        }
    });
});
</script>
@endsection