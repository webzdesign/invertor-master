@extends('layouts.master')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>FAQ</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<section class="about spad faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Electrical Scooters, what do you offer?
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Electric scooters for teens and adults are usually available with us. They come in a number of different flavors with very lightweight models and innovative designs.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            If you provide repairs on electric scooters?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Not only do we service and repair all makes and models of electric scooters, but we also have shops in Edinburgh and Glasgow. Your scooter will always remain as good as new.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What do I have to do to get the correct electric scooter?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            When you are thinking of purchasing an electric scooter, we urge you to consider the following factors: battery life, speed, usage, and weight. We’ve also written a blog post containing a more detailed guide on the top five things you need to know before buying an electric scooter.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is a honeycomb tire and why should I give it a try?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body">
                            There's no chance of a flat tire with honeycomb tires because they are puncture proof. They are smooth riding, they require much less maintenance than conventional pneumatic tires.
                          </div>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-header" id="headingFive">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Are your electric scooters sent with a warranty?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                          <div class="card-body">
                            And yes, we back all of our electric scooters with a manufacturer’s warranty against defects in materials and workmanship. To learn more about the specifics of each model, please visit our website.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSix">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Do you make the (often very expensive) next day delivery available for orders placed online?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                          <div class="card-body">
                              Yes, we do. We have next day delivery of electric scooters from our site so that you can ride as soon as possible with your new ride.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSeven">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can I test a scooter before I buy it?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                          <div class="card-body">
                             Absolutely! Come and test ride our electric scooters in our Edinburgh or Glasgow shops. If we can not find the model right for you, our staff will be more than happy to help you out.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingEight">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Which other forms of payment do you take?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                          <div class="card-body">
                            We accept payments with credit/debit cards and PayPal. We accept cash both in-store and over the counter for purchases.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingNine">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Can you use electric scooters when you are not of a certain age?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                          <div class="card-body">
                            Electric scooters can be ridden legally in the UK by those who are at least 14 years of age. However, we would still advise checking local regulations as they are different all over the country.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTen">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                But how do I look after my electric scooter?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                          <div class="card-body">
                            Some tips include looking at tire pressure, maintaining a battery charge, and brake checks. Also, we advise that you bring in your scooter for professional servicing from time to time, so that your scooter is always working in tip top order.
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section Begin -->

<!-- Testimonial Section End -->


@endsection