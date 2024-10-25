@extends('layouts.checkoutMaster')

@section('content')
<style>
.error{
    color:#f1a0b0;
}
</style>
<div class="nMPKH iYA3J">
    <button aria-controls="disclosure_details" aria-expanded="false" class="WtpiW">
        <span class="smIFm">
            <span class="_4ptW6">
                <span class="fCEli">Show order summary</span>
                <span class="a8x1wu2 a8x1wu1 _1fragemod _1fragem1t _1fragemkk _1fragemka a8x1wug a8x1wuk a8x1wui _1fragem2i _1fragemsr a8x1wum a8x1wul a8x1wuy">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wu10 a8x1wuz _1fragem1y _1fragemod _1fragemkk _1fragemka _1fragemnm">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                    </svg>
                </span>
            </span>
            <span>
                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem4v _1fragem6o _1fragem2s _1fragemog">
                    <p translate="no" class="_1x52f9s1 _1x52f9s0 _1fragemlj _1x52f9sz _1x52f9sy _1fragemnw _1x52f9s3 _1x52f9so notranslate">£1,592.00</p>
                </div>
            </span>
        </span>
    </button>
    <div id="disclosure_details" hidden="" class="_94sxtb1 _94sxtb0 _1fragemjv _1fragemk5 _1fragemlj _1fragemsm _94sxtbd _94sxtb6 _1fragemsb" style="height: 0px;">
        <div></div>
    </div>
</div>
<div class="Sxi8I">
    
        <div class="_9F1Rf GI5Fn _1fragemna _1fragemn5 _1fragemt6">
            <div class="gdtca">
                <main id="checkout-main" class="djSdi">
                    <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem4v _1fragem47 _1fragem6o _1fragem60 _1fragem2s">
                        <form action="{{ route('orderPlace') }}" method="POST" id="addOrder" enctype="multipart/form-data"> @csrf
                            <input type="hidden" id="lat" name="lat">
                            <input type="hidden" id="long" name="long">
                            <input type="hidden" id="range" name="range">
                            <div class="km09ry1 _1fragemlj">
                                <div class="_9QNMB">
                                    <section class="_197l2ofi _197l2ofg _1fragemna _197l2ofp _197l2ofk _1fragemn6 _1fragemsy _1fragem1y _1fragemf0 _1fragemg0 _1fragemh3 _1fragemht _1fragemd7 _1frageme7 _1fragemiw _1fragemjm _1fragemlj">
                                        <div id="rTLEi"></div>
                                    </section>
                                    <div class="_16s97g74v _16s97g760"></div>
                                </div>
                                <div>
                                    <div>
                                        <section class="_197l2ofi _197l2ofg _1fragemna _197l2ofp _197l2ofk _1fragemn6 _1fragemsy _1fragem1y _1fragemf0 _1fragemg0 _1fragemh3 _1fragemht _1fragemd7 _1frageme7 _1fragemiw _1fragemjm _1fragemlj">
                                            <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3w _1fragem5p _1fragem2s">
                                                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3c _1fragem55 _1fragem2s">
                                                    <h2 class="n8k95w1 n8k95w0 _1fragemlj n8k95w2">Delivery</h2>
                                                </div>
                                                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem4b _1fragem64 _1fragem2s">
                                                    <section aria-label="Shipping address" class="_1fragem1y _1fragemlj">
                                                        <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3w _1fragem5p _1fragem2s">
                                                            <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem4b _1fragem64 _1fragem2s">
                                                                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3w _1fragem5p _1fragem2s">
                                                                    <div>
                                                                        <div id="shippingAddressForm">
                                                                            <div aria-hidden="false" class="r62YW">
                                                                                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3w _1fragem5p _1fragem2s">
                                                                                    <div class="_1mrl40q0 _1fragemlj _1fragem3w _1fragem5p _1fragem2s _1fragemm3 _1fragemlz _16s97g7f _16s97g7p _16s97g71j _16s97g71t" style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                                                                                        <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlj _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemnb">
                                                                                            <div class="cektnc0 _1fragemlj cektnc5">
                                                                                                <label id="TextField0-label" for="TextField0" class="cektnc3 cektnc1 _1frageml9 _1fragems0 _1fragemst _1fragemsf _1fragemsa _1fragemsp _1fragemsq"><span class="cektnca"><span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">First name</span></span></label>
                                                                                                <div class="_7ozb2u6 _7ozb2u5 _1fragemlj _1fragem2s _1fragemnl _1fragemsf _1fragemsa _1fragemsp _1fragemss _7ozb2uc _7ozb2ua _1fragemnb _1fragemsy _7ozb2ul _7ozb2uh"><input id="first_name" name="first_name" placeholder="First name" type="text" aria-required="true" aria-labelledby="TextField0-label" autocomplete="shipping given-name" class="_7ozb2uq _7ozb2up _1fragemlj _1fragemst _1fragemod _1fragemrz _7ozb2ut _7ozb2us _1fragemsf _1fragemsa _1fragemsp _7ozb2u11 _7ozb2u1h _7ozb2ur"></div>
                                                                                            </div>
                                                                                            <label id="first_name-error" class="error" for="first_name"></label>
                                                                                        </div>
                                                                                        <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlj _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemnb">
                                                                                            <div class="cektnc0 _1fragemlj cektnc5">
                                                                                                <label id="TextField1-label" for="TextField1" class="cektnc3 cektnc1 _1frageml9 _1fragems0 _1fragemst _1fragemsf _1fragemsa _1fragemsp _1fragemsq"><span class="cektnca"><span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">Last name</span></span></label>
                                                                                                <div class="_7ozb2u6 _7ozb2u5 _1fragemlj _1fragem2s _1fragemnl _1fragemsf _1fragemsa _1fragemsp _1fragemss _7ozb2uc _7ozb2ua _1fragemnb _1fragemsy _7ozb2ul _7ozb2uh"><input id="last_name" name="last_name" placeholder="Last name" type="text" aria-required="true" aria-labelledby="TextField1-label" autocomplete="shipping family-name" class="_7ozb2uq _7ozb2up _1fragemlj _1fragemst _1fragemod _1fragemrz _7ozb2ut _7ozb2us _1fragemsf _1fragemsa _1fragemsp _7ozb2u11 _7ozb2u1h _7ozb2ur"></div>
                                                                                            </div>
                                                                                            <label id="last_name-error" class="error" for="last_name"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_1mrl40q0 _1fragemlj _1fragem3w _1fragem5p _1fragem2s _1fragemm3 _1fragemlz _16s97g7f _16s97g7p _16s97g71j _16s97g71t" style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                                                                                        <div class="wfKnD IGF4z">
                                                                                            <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3m _1fragem5f _1fragem2s">
                                                                                                <div>
                                                                                                    <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlj _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemnb">
                                                                                                        <div class="cektnc0 _1fragemlj cektnc5">
                                                                                                            <label id="shipping-address1-label" for="shipping-address1" class="cektnc3 cektnc1 _1frageml9 _1fragems0 _1fragemst _1fragemsf _1fragemsa _1fragemsp _1fragemsq"><span class="cektnca"><span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">Address</span></span></label>
                                                                                                            <div class="_7ozb2u6 _7ozb2u5 _1fragemlj _1fragem2s _1fragemnl _1fragemsf _1fragemsa _1fragemsp _1fragemss _7ozb2uc _7ozb2ua _1fragemnb _1fragemsy _7ozb2ul _7ozb2uh">
                                                                                                                <input id="address" name="address" placeholder="Address" type="text" aria-autocomplete="list" aria-controls="shipping-address1-options" aria-owns="shipping-address1-options" aria-expanded="false" aria-required="true" aria-labelledby="shipping-address1-label" aria-haspopup="listbox" role="combobox" autocomplete="shipping address-line1" autocorrect="off" class="_7ozb2uq _7ozb2up _1fragemlj _1fragemst _1fragemod _1fragemrz _7ozb2ut _7ozb2us _1fragemsf _1fragemsa _1fragemsp _7ozb2uv _7ozb2uu _1fragemox _1fragemp7 _7ozb2u11 _7ozb2u1h _7ozb2ur">
                                                                                                                <div class="_7ozb2u1f _7ozb2u1e _1fragemlj _1fragemst _1fragemmi _1fragemni _7ozb2u1g">
                                                                                                                    <span class="a8x1wu2 a8x1wu1 _1fragemod _1fragem1t _1fragemkk _1fragemka a8x1wu9 a8x1wuj a8x1wuh _1fragem1y a8x1wuo a8x1wul a8x1wuy">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wu10 a8x1wuz _1fragem1y _1fragemod _1fragemkk _1fragemka _1fragemnm">
                                                                                                                            <path stroke-linecap="round" d="M9.16 9.159a4.194 4.194 0 1 0-5.933-5.93 4.194 4.194 0 0 0 5.934 5.93Zm0 0L12.6 12.6"></path>
                                                                                                                        </svg>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <label id="address-error" class="error" for="address"></label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_1mrl40q0 _1fragemlj _1fragem3w _1fragem5p _1fragem2s _1fragemm3 _1fragemlz _16s97g7f _16s97g7p _16s97g71j _16s97g71t" style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                                                                                        <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlj _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemnb">
                                                                                            <div class="cektnc0 _1fragemlj cektnc5">
                                                                                                <label id="TextField4-label" for="TextField4" class="cektnc3 cektnc1 _1frageml9 _1fragems0 _1fragemst _1fragemsf _1fragemsa _1fragemsp _1fragemsq"><span class="cektnca"><span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">House No</span></span></label>
                                                                                                <div class="_7ozb2u6 _7ozb2u5 _1fragemlj _1fragem2s _1fragemnl _1fragemsf _1fragemsa _1fragemsp _1fragemss _7ozb2uc _7ozb2ua _1fragemnb _1fragemsy _7ozb2ul _7ozb2uh"><input id="house_no" name="house_no" placeholder="House No" type="text" aria-required="true" aria-labelledby="TextField4-label" autocomplete="shipping address-level2" class="_7ozb2uq _7ozb2up _1fragemlj _1fragemst _1fragemod _1fragemrz _7ozb2ut _7ozb2us _1fragemsf _1fragemsa _1fragemsp _7ozb2u11 _7ozb2u1h _7ozb2ur"></div>
                                                                                            </div>
                                                                                            <label id="house_no-error" class="error" for="house_no"></label>
                                                                                        </div>
                                                                                        <div class="hDo51">
                                                                                            <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlj _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemnb">
                                                                                                <div class="cektnc0 _1fragemlj cektnc5">
                                                                                                    <label id="TextField5-label" for="TextField5" class="cektnc3 cektnc1 _1frageml9 _1fragems0 _1fragemst _1fragemsf _1fragemsa _1fragemsp _1fragemsq"><span class="cektnca"><span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">Postcode</span></span></label>
                                                                                                    <div class="_7ozb2u6 _7ozb2u5 _1fragemlj _1fragem2s _1fragemnl _1fragemsf _1fragemsa _1fragemsp _1fragemss _7ozb2uc _7ozb2ua _1fragemnb _1fragemsy _7ozb2ul _7ozb2uh"><input id="post_code" name="post_code" placeholder="Postcode" type="text" inputmode="text" aria-required="true" aria-labelledby="TextField5-label" autocomplete="shipping postal-code" autocapitalize="characters" class="_7ozb2uq _7ozb2up _1fragemlj _1fragemst _1fragemod _1fragemrz _7ozb2ut _7ozb2us _1fragemsf _1fragemsa _1fragemsp _7ozb2u11 _7ozb2u1h _7ozb2ur"></div>
                                                                                                </div>
                                                                                                <label id="post_code-error" class="error" for="post_code"></label>
                                                                                                <span id="post_code_custom_error" class="error" style=""></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_1mrl40q0 _1fragemlj _1fragem3w _1fragem5p _1fragem2s _1fragemm3 _1fragemlz _16s97g7f _16s97g7p _16s97g71j _16s97g71t" style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                                                                                        <div class="_1mrl40q0 _1fragemlj _1fragem3w _1fragem5p _1fragem2s _1fragemm3 _16s97g7f _16s97g7p _16s97g71j _16s97g71t" style="--_16s97g7a: 1fr; --_16s97g7k: minmax(0, 1fr); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(0, 1fr);z-index:2;">
                                                                                            <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlj _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemnb">
                                                                                                <div class="cektnc0 _1fragemlj cektnc5">
                                                                                                    <label id="TextField6-label" for="TextField6" class="cektnc3 cektnc1 _1frageml9 _1fragems0 _1fragemst _1fragemsf _1fragemsa _1fragemsp _1fragemsq"><span class="cektnca"><span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">Phone</span></span></label>
                                                                                                    <div class="_7ozb2u6 _7ozb2u5 _1fragemlj _1fragem2s _1fragemnl _1fragemsf _1fragemsa _1fragemsp _1fragemss _7ozb2uc _7ozb2ua _1fragemnb _1fragemsy _7ozb2ul _7ozb2uh">
                                                                                                        <input id="phone" name="phone" placeholder="Phone" type="tel" aria-required="true" aria-labelledby="TextField6-label" autocomplete="shipping tel" class="_7ozb2uq _7ozb2up _1fragemlj _1fragemst _1fragemod _1fragemrz _7ozb2ut _7ozb2us _1fragemsf _1fragemsa _1fragemsp _7ozb2uv _7ozb2uu _1fragemox _1fragemp7 _7ozb2u10 _7ozb2u1h _7ozb2ur">
                                                                                                        <input type="hidden" name="country_dial_code" id="country_dial_code">
                                                                                                        <input type="hidden" name="country_iso_code" id="country_iso_code">
                                                                                                        <div class="_7ozb2u1f _7ozb2u1e _1fragemlj _1fragemst _1fragemmi _1fragemni _7ozb2u1g">
                                                                                                            <div class="_5uqybw0 _1fragemlj _1fragem28 _1fragem78">
                                                                                                                <div class="_5uqybw2 _5uqybw1 _1fragem28 _1fragemkp _1fragem3w _1fragem5p _1fragemm8 _1fragemmc _1fragem78">
                                                                                                                    <button type="button" class="_1xqelvi1 _1xqelvi0 _1fragemnk _1fragemlj _1fragems4 _1fragemsf _1fragemsa _1fragemsp _1fragemry _1fragem1y _1xqelvi4 _1xqelvi3 _1fragem28 _1fragemmg _1xqelvi8">
                                                                                                                        <span class="_1xqelvi2">
                                                                                                                            <span class="a8x1wu2 a8x1wu1 _1fragemod _1fragem1t _1fragemkk _1fragemka a8x1wu9 a8x1wuj a8x1wuh _1fragem1y a8x1wuo a8x1wul a8x1wuy">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-label="More information" class="a8x1wu10 a8x1wuz _1fragem1y _1fragemod _1fragemkk _1fragemka _1fragemnm">
                                                                                                                                    <circle cx="7" cy="7" r="5.6"></circle>
                                                                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.6 5.1c.2-1.3 2.6-1.3 2.8 0S6.95 6.4 6.95 7.45m.055 2.35H7v.005h.005z"></path>
                                                                                                                                    <circle cx="7" cy="9.7" r="0.1"></circle>
                                                                                                                                </svg>
                                                                                                                            </span>
                                                                                                                        </span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <label id="phone-error" class="error" for="phone"></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="_16s97g74v _16s97g760"></div>
                                    </div>
                                </div>
                                <section aria-label="Payment" class="_197l2ofi _197l2ofg _1fragemna _197l2ofp _197l2ofk _1fragemn6 _1fragemsy _1fragem1y _1fragemf0 _1fragemg0 _1fragemh3 _1fragemht _1fragemd7 _1frageme7 _1fragemiw _1fragemjm _1fragemlj">
                                    <div>
                                        <div>
                                            <div>
                                                <div class="_1fragem1y _1fragemlj">
                                                    <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem4g _1fragem69 _1fragem2s">
                                                        <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3w _1fragem5p _1fragem2s">
                                                            <div class="_1fragem32 _1fragem21 _1fragemlj"></div>
                                                        </div>
                                                        <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem46 _1fragem5z _1fragem2s">
                                                            <div>
                                                                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem3w _1fragem5p _1fragem2s">
                                                                    <div><button id="checkout-pay-button" type="submit" class="_1m2hr9ge _1m2hr9gd _1fragemsq _1fragemlj _1fragemnk _1fragem2i _1fragems4 _1fragemsg _1fragemsl _1fragemsa _1m2hr9g1h _1m2hr9g1d _1fragemne _1m2hr9g16 _1m2hr9g13 _1fragemop _1fragemon _1fragemor _1fragemol _1fragempl _1fragemph _1fragempp _1fragempd _1fragemb4 _1fragemaf _1fragembt _1fragem9q _1fragemsa _1m2hr9g1q _1m2hr9g1o _1m2hr9g10 _1m2hr9gx _1m2hr9g12 _1m2hr9g11 _1fragemri _1m2hr9g1b _1m2hr9g19 _1fragems5" style="background-color: rgb(34,36,38);"><span class="_1m2hr9gr _1m2hr9gq _1fragems0 _1fragemsf _1fragems9 _1fragemsm _1m2hr9gn _1m2hr9gl _1fragem28 _1fragem6t _1fragems2" ><span class="_19gi7yt0 _19gi7yt10 _19gi7ytz _1fragemnw">Place order</span></span></button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_16s97g75k"></div>
                                                    <div class="_197l2oft _1fragemnn _1fragemmc _1fragem28 _1fragemlj"></div>
                                                    <div class="_1fragem32 _1fragem20 _1fragemlj">
                                                        <div class="_16s97g75f"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="i4DWM _1fragemna _1fragemn7 _1fragemsy">
            <div class="_4QenE">
                <aside>
                    <div>
                        <section class="_1fragem1y _1fragemlj">
                            <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem46 _1fragem5z _1fragem2s">
                                <h2 class="n8k95wf _1fragems1">Order summary</h2>
                                <div class="_1ip0g651 _1ip0g650 _1fragemlj _1fragem46 _1fragem5z _1fragem2s">
                                    <section class="_1fragem1y _1fragemlj">
                                        <div class="_6zbcq51o _1fragems1">
                                            <h3 id="ResourceList0" class="n8k95w1 n8k95w0 _1fragemlj n8k95w4">Shopping cart</h3>
                                        </div>
                                        <div role="table" aria-labelledby="ResourceList0" class="_6zbcq54 _6zbcq53 _1fragem28 _1fragemnn _6zbcq5m _6zbcq5a _1fragem3w _6zbcq5s">
                                            <div role="rowgroup" class="_6zbcq513 _6zbcq512 _1fragem28 _1fragemnn _6zbcq5z _6zbcq5y _1fragems1">
                                                <div role="row" class="_6zbcq511 _6zbcq510 _1fragem28 _1fragemmc _1fragemod _1fragem5p">
                                                    <div role="columnheader" class="_6zbcq51o _1fragems1">Product image</div>
                                                    <div role="columnheader" class="_6zbcq51o _1fragems1">Description</div>
                                                    <div role="columnheader" class="_6zbcq51o _1fragems1">Quantity</div>
                                                    <div role="columnheader" class="_6zbcq51o _1fragems1">Price</div>
                                                </div>
                                            </div>
                                            <div role="rowgroup" class="_6zbcq513 _6zbcq512 _1fragem28 _1fragemnn _6zbcq5m _6zbcq5a _1fragem3w">
                                                @php
                                                    $cart = session()->get('cart', []);
                                                    $cartTotal = 0;
                                                    $cartItems = 0;
                                                @endphp
                                                @foreach ($cart as $cKey => $cartItem)
                                                    @php
                                                        $productPrice = App\Models\Product::find(decrypt($cartItem['productId']));
                                                        if (!$productPrice) {
                                                            continue;
                                                        }
                                                        $cartTotal += floatVal($productPrice->web_sales_price) * floatVal($cartItem['quantity']);
                                                        $cartItems += $cartItem['quantity'];
                                                    @endphp
                                                    <input type="hidden" name="productId[]" value="{{ $cartItem['productId'] }}" />
                                                    <input type="hidden" name="quantity[]" value="{{ $cartItem['quantity'] }}" />

                                                    <div role="row" class="_6zbcq516 _6zbcq515 _1fragem28 _1fragem1t _6zbcq519 _6zbcq518">
                                                        <div role="cell" class="_6zbcq51n _6zbcq51m _1fragem28 _1fragemnn _6zbcq51h _6zbcq51e _1fragem78 _6zbcq51c">
                                                            <div class="_1m6j2n34 _1m6j2n33 _1fragemlj _1fragemt2 _1m6j2n3a _1m6j2n39 _1m6j2n35" style="--_1m6j2n30: 1;">
                                                                <div class="_1h3po421 _1h3po423 _1h3po422 _1fragemlj" style="--_1h3po420: 1;">
                                                                    <picture>
                                                                        <img src="{{ $cartItem['image'] }}" alt="{{ $cartItem['name'] }}" class="_1h3po424 _1h3po427 _1h3po425 _1fragem1y _1fragemkk _1fragem8r _1fragem87 _1fragem9b _1fragem7n _1fragemb4 _1fragemaf _1fragembt _1fragem9q _1fragemkz _1m6j2n35">
                                                                    </picture>
                                                                </div>
                                                                <div class="_1m6j2n3l _1m6j2n3k _1frageml9">
                                                                    <div class="_99ss3s1 _99ss3s0 _1fragem2n _1fragemmc _1fragem6t _99ss3s7 _99ss3s4 _99ss3s2 _1fragemi7 _1fragemge _1fragemnt _99ss3sk _99ss3sf _1fragemow _1fragemp1 _1fragempb _1fragemp6">
                                                                        <div><span class="_1fragems1">Quantity</span><span>{{ $cartItem['quantity'] }}</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="cell" class="_6zbcq51n _6zbcq51m _1fragem28 _1fragemnn _6zbcq51i _6zbcq51f _1fragem6t _6zbcq51d _6zbcq51b _1fragemmh _6zbcq51k _1fragemnq _16s97g741" style="--_16s97g73w: 6.4rem;">
                                                            <div class="_1fragem1y _1fragemlj dDm6x">
                                                                <p class="_1x52f9s1 _1x52f9s0 _1fragemlj _1x52f9sv _1x52f9su _1fragemnu">{{ $cartItem['name'] }}</p>
                                                            </div>
                                                        </div>
                                                        <div role="cell" class="_6zbcq51n _6zbcq51m _1fragem28 _1fragemnn _6zbcq51i _6zbcq51f _1fragem6t _6zbcq51c _6zbcq51l">
                                                            <div class="_6zbcq51o _1fragems1"><span class="_19gi7yt0 _19gi7ytw _19gi7ytv _1fragemnu">3</span></div>
                                                        </div>
                                                        <div role="cell" class="_6zbcq51n _6zbcq51m _1fragem28 _1fragemnn _6zbcq51i _6zbcq51f _1fragem6t _6zbcq51d _6zbcq51b _1fragemmh">
                                                            <div class="_197l2oft _1fragemnn _1fragemme _1fragem28 _1fragemlj Byb5s"><span translate="no" class="_19gi7yt0 _19gi7ytw _19gi7ytv _1fragemnu notranslate">£{{ number_format($productPrice->web_sales_price, 2) }}</span></div>
                                                        </div>
                                                    </div>
                                                    
                                                @endforeach
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                                <section class="_1fragem1y _1fragemlj">
                                    <div class="nfgb6p2 _1fragems1">
                                        <h3 id="MoneyLine-Heading0" class="n8k95w1 n8k95w0 _1fragemlj n8k95w4">Cost summary</h3>
                                    </div>
                                    <div role="table" aria-labelledby="MoneyLine-Heading0">
                                        <div role="rowgroup" class="nfgb6p2 _1fragems1">
                                            <div role="row">
                                                <div role="columnheader">Item</div>
                                                <div role="columnheader">Value</div>
                                            </div>
                                        </div>
                                        <div role="rowgroup" class="nfgb6p1 nfgb6p0 _1fragem2s nfgb6p3">
                                            <div role="row" class="_1qy6ue60 _1qy6ue68 _1qy6ue61 _1qy6ue66 _1qy6ue64 _1fragem3h _1fragem5a _1fragem2s">
                                                <div role="rowheader" class="_1qy6ue6a"><span class="_19gi7yt0 _19gi7ytw _19gi7ytv _1fragemnu">Subtotal • {{ $cartItems }} items</span></div>
                                                <div role="cell" class="_1qy6ue6b"><span translate="no" class="_19gi7yt0 _19gi7ytw _19gi7ytv _1fragemnu notranslate">£{{ number_format($cartTotal, 2) }}</span></div>
                                            </div>
                                            <div role="row" class="_1x41w3p1 _1x41w3p0 _1fragem2s _1fragemmc _1x41w3p2">
                                                <div role="rowheader" class="_1x41w3p5"><span class="_19gi7yt0 _19gi7yt10 _19gi7ytz _1fragemnw _19gi7yt2">Total</span></div>
                                                <div role="cell" class="_1x41w3p6">
                                                    <div class="_5uqybw0 _1fragemlj _1fragem28 _1fragem78">
                                                        <div class="_5uqybw2 _5uqybw1 _1fragem28 _1fragemkp _1fragem3h _1fragem5a _1fragemmb _1fragem78"><abbr translate="no" class="_19gi7yt0 _19gi7ytu _19gi7ytt _1fragemnt _19gi7ytj notranslate _19gi7yt1c _19gi7yt19 _1fragems5">GBP</abbr><strong translate="no" class="_19gi7yt0 _19gi7yt10 _19gi7ytz _1fragemnw _19gi7yt2 notranslate">£{{ number_format($cartTotal, 2) }}</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="row" class="_1qy6ue60 _1qy6ue68 _1qy6ue63 _1qy6ue66 _1qy6ue64 _1fragem3h _1fragem5a _1fragem2s">
                                                <div role="rowheader" class="_1qy6ue6a">
                                                    <p class="_1x52f9s1 _1x52f9s0 _1fragemlj _1x52f9sv _1x52f9su _1fragemnu _1x52f9sp"><span class="go06b0"></span></p>
                                                </div>
                                                <div role="cell" class="_1qy6ue6b"></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/intel.min.js') }}"></script>
<script>
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const input = document.querySelector('#phone');
    const errorMap = ["Phone number is invalid.", "Invalid country code", "Too short", "Too long"];

    const iti = window.intlTelInput(input, {
        initialCountry: "gb",
        preferredCountries: ['gb', 'pk'],
        separateDialCode:true,
        nationalMode:false,
        utilsScript: "{{ asset('assets/js/intel2.js') }}"
    });

    $.validator.addMethod('inttel', function (value, element) {
        if (value.trim() == '' || iti.isValidNumber()) {
            return true;
        }
        return false;
    }, function (result, element) {
            return errorMap[iti.getValidationError()] || errorMap[0];
    });

    input.addEventListener('keyup', () => {
        if (iti.isValidNumber()) {
            $('#country_dial_code').val(iti.s.dialCode);
            $('#country_iso_code').val(iti.j);
        }
    });
    input.addEventListener("countrychange", function() {
        if (iti.isValidNumber()) {
            $('#country_dial_code').val(iti.s.dialCode);
            $('#country_iso_code').val(iti.j);
        }
    });

    var submitStatus = 0;

    $('body').on('change', '#post_code', function(e){
        var post_code = $('#post_code').val();
        var house_no = $('#post_code').val();
        if (post_code != '' && house_no != '' && post_code.length <= 8) {
            $.ajax({
                url: '{{ route("getAvailableDriver") }}',
                type: 'POST',
                data: {
                    postal_code: post_code,
                    house_no: house_no,
                },
                success: function(response) {
                    if (response.status) {
                        $('body').find('#lat').val(response.lat);
                        $('body').find('#long').val(response.long);
                        $('body').find('#range').val(response.range);

                        submitStatus = 1;
                        $('#post_code_custom_error').text('');
                    } else {
                        submitStatus = 0;
                        $('#post_code_custom_error').text(response.message);
                    }
                }
            });
        }
    });


    $("#addOrder").validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            address: {
                required: true,
            },
            house_no: {
                required: true,
            },
            post_code: {
                required: true,
                maxlength:8,
            },
            phone: {
                required: true,
                inttel: true,
            },
        },
        messages: {
            first_name: {
                required: "First name is required."
            },
            last_name: {
                required: "Last name is required."
            },
            address: {
                required: "Address is required."
            },
            house_no: {
                required: "House No is required.",
            },
            post_code: {
                required: "Post code is required.",
                maxlength: "Maximum 8 characters allowed for postal code.",
            },
            phone: {
                required: "Phone is required.",
            },
        },
        errorPlacement: function(error, element) {
            error.appendTo(element.parent("div"));
        },
        submitHandler:function(form) {
            $('button[type="submit"]').attr('disabled', true);
            console.log(submitStatus);
            if(!this.beenSubmitted && submitStatus == 1) {
                this.beenSubmitted = true;
                form.submit();
            }
        }
    });

});
</script>
@endsection