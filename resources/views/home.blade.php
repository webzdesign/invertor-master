@extends('layouts.master')

@section('content')

<section class="hero bg-slate-100">
    <div class="container">
        <div class="owl-carousel hero__slider">
            <div class="owl-item-hero">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8 left-slide">
                            @php
                                $breaks = array("<br />","<br>","<br/>");
                                $p_description = str_ireplace($breaks, "", $slider_product->description);
                                if( mb_strlen($p_description) > 70 ){
                                    $p_description = mb_strimwidth($p_description, 0, 70, '...');
                                }
                                $p_name = str_ireplace($breaks, "", $slider_product->name);
                                if( mb_strlen($p_name) > 20 ){
                                    $p_name = mb_strimwidth($p_name, 0, 20, '...');
                                }
                                if( $slider_product->unique_number == '013' ){
                                    $p_description = 'Your dream of getting an electric scooter is just 1 step away';
                                }
                                $slider_yt_url = 'https://www.youtube.com/embed/QgJkwPvnpQg?si=y1pFEns95QWdhO-W';
                            @endphp
                        <h1 class="fadeItem text-slate-900 font-bebas d-none d-lg-block"><a class="text-decoration-none text-slate-900" href="{{ route('productDetail', $slider_product->slug) }}">{{ $p_name }}</a></h1>
                        <p class="fadeItem text-gray-500 font-inter-regular text-lg my-4 text-lg-start text-center mx-auto mx-lg-0">{{ $p_description }}</p>
                        <h2 class="fadeItem text-lg-start text-center">{{ env( 'SZ_CURRENCY_SYMBOL' ) . number_format($slider_product->web_sales_price, 2) }}</h2>
                        <a href="javascript:void(0);" class="fadeItem order-btn mx-auto mx-lg-0 bg-slate-900 d-flex align-items-center justify-content-between rounded-pill ps-3 pe-2 mt-5 text-decoration-none text-white font-semibold text-lg mb-4 AddToCartBtn eb_OrderNowBtn" data-pid="{{encrypt($slider_product->id)}}">
                            Order Now 
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="#F3F3F3"/>
                                <path d="M12 20H28M28 20L22 14M28 20L22 26" stroke="#292929" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                            
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-4 right-slide">
                        <div class="d-lg-flex align-items-start text-center justify-content-between position-relative">
                            <h1 class="text-slate-900 font-bebas d-lg-none">{{ $p_name }}</h1>
                            <div class="slider-image">
                                <a href="{{ route('productDetail', $slider_product->slug) }}">
                                    <img src="{{ env('APP_Image_URL').'storage/product-images/' . $slider_product->images->first()->name }}" alt="{{ $p_name }}">
                                </a>
                            </div>
                            <div class="arrow position-absolute">
                                <img src="{{ asset( 'assets/images/Arrow.png' ) }}" alt="arrow">
                            </div>
                            <div class="img-video overflow-hidden rounded-3xl position-relative cursor-pointer">
                                <img src="{{ asset( 'assets/images/slider2.png' ) }}" alt="bike">
                                <div class="left-50 position-absolute top-50 translate-middle sz_youtube_video_btn" data-youtubeUrl="{{ $slider_yt_url }}">
                                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="2" width="48" height="48" rx="24" fill="#FEFEFE"/>
                                        <rect x="1" y="1" width="50" height="50" rx="25" stroke="white" stroke-opacity="0.24" stroke-width="2"/>
                                        <path d="M36.5 26C36.5006 26.2546 36.4353 26.5051 36.3105 26.727C36.1856 26.949 36.0055 27.1348 35.7875 27.2665L22.28 35.5297C22.0523 35.6691 21.7914 35.7452 21.5244 35.7502C21.2575 35.7551 20.994 35.6887 20.7613 35.5578C20.5307 35.4289 20.3387 35.2409 20.2049 35.0132C20.0711 34.7855 20.0004 34.5263 20 34.2622V17.7378C20.0004 17.4737 20.0711 17.2144 20.2049 16.9867C20.3387 16.759 20.5307 16.5711 20.7613 16.4422C20.994 16.3112 21.2575 16.2448 21.5244 16.2498C21.7914 16.2547 22.0523 16.3308 22.28 16.4703L35.7875 24.7334C36.0055 24.8651 36.1856 25.051 36.3105 25.2729C36.4353 25.4949 36.5006 25.7453 36.5 26Z" fill="#080707"/>
                                    </svg>                                                    
                                </div>
                                <div class="text-white font-inter-regular position-absolute bottom-0 mb-4 w-100 text-center">
                                    110kg Weight limit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spec border border-gray-500 rounded-lg py-4 mt-5">
            <ul class="d-flex align-items-center flex-wrap m-0 py-0 px-3">
                <li class="text-center">
                    <p class="text-gray-500 m-0">Motor</p>
                    <div class="font-semibold text-lg m-0">350w | 10.4Ah</div>
                </li>
                <li class="text-center">
                    <p class="text-gray-500 m-0">Weight limit</p>
                    <div class="font-semibold text-lg m-0">110kg</div>
                </li>
                <li class="text-center">
                    <p class="text-gray-500 m-0">Speed</p>
                    <div class="font-semibold text-lg m-0">25-30 Km</div>
                </li>
                <li class="text-center">
                    <p class="text-gray-500 m-0">Range</p>
                    <div class="font-semibold text-lg m-0">25km to 30km</div>
                </li>
                <li class="text-center">
                    <p class="text-gray-500 m-0">Delivery</p>
                    <div class="font-semibold text-lg m-0">Cash on delivery</div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="why-choose bg-slate-900">
    <div class="row m-0">
        <div class="col-xxl-4 left-side p-0">
            <div class="position-relative">
                <img src="{{ asset( 'assets/images/why.png' ) }}" alt="bike" width="100%">
                <h2 class="text-white font-bebas position-absolute top-0 text-center mt-5 w-100 text-center">Reliable Scooters, Affordable Prices</h2>
                <label class="position-absolute border border-gray-400 text-white font-manrope-semibold rounded-pill text-xl translate-middle-x whitespace-nowrap bg-gray-500">Tuya D8</label>
            </div>
        </div>
        <div class="col-xxl-8 right-side my-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="border border-gray-400 bg-gray-500 p-4 rounded-3xl h-100 d-flex flex-column justify-content-between">
                        <div class="icon rounded-pill d-flex align-items-center justify-content-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27 12.0007C27.0011 10.1469 26.5337 8.32296 25.6412 6.6982C24.7487 5.07344 23.4601 3.70058 21.895 2.70713C20.33 1.71369 18.5392 1.13188 16.6891 1.01575C14.839 0.899619 12.9896 1.25293 11.3125 2.04288C9.63553 2.83282 8.18535 4.03377 7.0967 5.53417C6.00805 7.03458 5.31624 8.78578 5.08553 10.6251C4.85482 12.4644 5.09268 14.3323 5.77704 16.0551C6.4614 17.7779 7.57004 19.2998 9 20.4794V30.0007C8.99988 30.1712 9.04338 30.339 9.12636 30.488C9.20934 30.6369 9.32905 30.7622 9.4741 30.8519C9.61916 30.9416 9.78474 30.9927 9.95511 31.0004C10.1255 31.008 10.295 30.972 10.4475 30.8957L16 28.1257L21.5538 30.9019C21.693 30.9685 21.8457 31.0023 22 31.0007C22.2652 31.0007 22.5196 30.8953 22.7071 30.7078C22.8946 30.5202 23 30.2659 23 30.0007V20.4794C24.2512 19.449 25.2587 18.1543 25.9503 16.6884C26.6419 15.2224 27.0003 13.6216 27 12.0007ZM7 12.0007C7 10.2206 7.52784 8.48058 8.51677 7.00054C9.50571 5.5205 10.9113 4.36695 12.5559 3.68576C14.2004 3.00457 16.01 2.82634 17.7558 3.17361C19.5016 3.52087 21.1053 4.37804 22.364 5.63671C23.6226 6.89538 24.4798 8.49903 24.8271 10.2449C25.1743 11.9907 24.9961 13.8003 24.3149 15.4448C23.6337 17.0894 22.4802 18.495 21.0001 19.4839C19.5201 20.4728 17.78 21.0007 16 21.0007C13.6139 20.998 11.3262 20.049 9.63896 18.3617C7.95171 16.6745 7.00265 14.3868 7 12.0007ZM21 28.3832L16.4463 26.1069C16.3073 26.0374 16.1541 26.0012 15.9988 26.0012C15.8434 26.0012 15.6902 26.0374 15.5513 26.1069L11 28.3832V21.7969C12.548 22.5881 14.2616 23.0007 16 23.0007C17.7384 23.0007 19.452 22.5881 21 21.7969V28.3832ZM16 19.0007C17.3845 19.0007 18.7378 18.5901 19.889 17.821C21.0401 17.0518 21.9373 15.9585 22.4672 14.6795C22.997 13.4004 23.1356 11.9929 22.8655 10.635C22.5954 9.27717 21.9287 8.02989 20.9497 7.05093C19.9708 6.07196 18.7235 5.40527 17.3656 5.13518C16.0078 4.86508 14.6003 5.0037 13.3212 5.53352C12.0421 6.06333 10.9489 6.96054 10.1797 8.11168C9.41054 9.26283 9 10.6162 9 12.0007C9.00199 13.8566 9.74012 15.6359 11.0524 16.9482C12.3648 18.2606 14.1441 18.9987 16 19.0007ZM16 7.00067C16.9889 7.00067 17.9556 7.29392 18.7779 7.84332C19.6001 8.39273 20.241 9.17362 20.6194 10.0873C20.9978 11.0009 21.0969 12.0062 20.9039 12.9761C20.711 13.946 20.2348 14.8369 19.5355 15.5362C18.8363 16.2355 17.9454 16.7117 16.9755 16.9046C16.0055 17.0975 15.0002 16.9985 14.0866 16.6201C13.173 16.2416 12.3921 15.6008 11.8427 14.7785C11.2932 13.9563 11 12.9896 11 12.0007C11 10.6746 11.5268 9.40282 12.4645 8.46514C13.4021 7.52746 14.6739 7.00067 16 7.00067Z" fill="white"/>
                            </svg>  
                        </div>
                        <div>
                            <h3 class="text-xl text-slate-50 mt-5">Top-Quality Scooters</h3>
                            <p class="text-sm text-slate-50 font-inter-regular m-0">Our fleet features the latest models with superior performance, ensuring a smooth and reliable ride every time.</p>                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-slate-950 p-4 rounded-3xl h-100 d-flex flex-column justify-content-between">
                        <div class="icon rounded-pill d-flex align-items-center justify-content-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 15H17V7H18C19.0609 7 20.0783 7.42143 20.8284 8.17157C21.5786 8.92172 22 9.93913 22 11C22 11.2652 22.1054 11.5196 22.2929 11.7071C22.4804 11.8946 22.7348 12 23 12C23.2652 12 23.5196 11.8946 23.7071 11.7071C23.8946 11.5196 24 11.2652 24 11C23.9983 9.40921 23.3657 7.88405 22.2408 6.75919C21.116 5.63433 19.5908 5.00165 18 5H17V3C17 2.73478 16.8946 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2C15.7348 2 15.4804 2.10536 15.2929 2.29289C15.1054 2.48043 15 2.73478 15 3V5H14C12.4087 5 10.8826 5.63214 9.75736 6.75736C8.63214 7.88258 8 9.4087 8 11C8 12.5913 8.63214 14.1174 9.75736 15.2426C10.8826 16.3679 12.4087 17 14 17H15V25H13C11.9391 25 10.9217 24.5786 10.1716 23.8284C9.42143 23.0783 9 22.0609 9 21C9 20.7348 8.89464 20.4804 8.70711 20.2929C8.51957 20.1054 8.26522 20 8 20C7.73478 20 7.48043 20.1054 7.29289 20.2929C7.10536 20.4804 7 20.7348 7 21C7.00165 22.5908 7.63433 24.116 8.75919 25.2408C9.88405 26.3657 11.4092 26.9983 13 27H15V29C15 29.2652 15.1054 29.5196 15.2929 29.7071C15.4804 29.8946 15.7348 30 16 30C16.2652 30 16.5196 29.8946 16.7071 29.7071C16.8946 29.5196 17 29.2652 17 29V27H19C20.5913 27 22.1174 26.3679 23.2426 25.2426C24.3679 24.1174 25 22.5913 25 21C25 19.4087 24.3679 17.8826 23.2426 16.7574C22.1174 15.6321 20.5913 15 19 15ZM14 15C12.9391 15 11.9217 14.5786 11.1716 13.8284C10.4214 13.0783 10 12.0609 10 11C10 9.93913 10.4214 8.92172 11.1716 8.17157C11.9217 7.42143 12.9391 7 14 7H15V15H14ZM19 25H17V17H19C20.0609 17 21.0783 17.4214 21.8284 18.1716C22.5786 18.9217 23 19.9391 23 21C23 22.0609 22.5786 23.0783 21.8284 23.8284C21.0783 24.5786 20.0609 25 19 25Z" fill="#FEFEFE"/>
                            </svg>  
                        </div>
                        <div>
                            <h3 class="text-xl text-slate-50 mt-5">Affordable Rates</h3>
                            <p class="text-sm text-slate-50 font-inter-regular m-0">Enjoy competitive pricing with flexible rental options to fit your schedule and budget.</p>                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-slate-950 p-4 rounded-3xl h-100 d-flex flex-column justify-content-between">
                        <div class="icon rounded-pill d-flex align-items-center justify-content-center">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0001 24.0007C10.0001 24.266 9.89477 24.5203 9.70723 24.7079C9.5197 24.8954 9.26534 25.0007 9.00013 25.0007H3.00013C2.47367 25.0004 1.95657 24.8616 1.50077 24.5981C1.04496 24.3347 0.666509 23.956 0.40342 23.5C0.140332 23.044 0.00187297 22.5267 0.00195316 22.0003C0.00203335 21.4738 0.14065 20.9567 0.403877 20.5007L4.69013 13.0945L2.93388 13.5632C2.80666 13.5972 2.67399 13.6058 2.54346 13.5885C2.41292 13.5712 2.28707 13.5284 2.17308 13.4625C1.94288 13.3293 1.775 13.1102 1.70638 12.8532C1.63775 12.5963 1.674 12.3227 1.80715 12.0925C1.9403 11.8623 2.15945 11.6944 2.41638 11.6257L6.51263 10.5295C6.63952 10.4955 6.77187 10.4868 6.90212 10.5039C7.03236 10.5211 7.15796 10.5637 7.27172 10.6294C7.38548 10.6951 7.48518 10.7826 7.56512 10.8869C7.64506 10.9911 7.70368 11.1101 7.73763 11.237L8.83638 15.3332C8.87108 15.4607 8.88019 15.5938 8.86316 15.7248C8.84614 15.8558 8.80332 15.9822 8.73719 16.0965C8.67105 16.2109 8.58291 16.311 8.47786 16.3911C8.37281 16.4712 8.25292 16.5297 8.12513 16.5632C8.04022 16.5854 7.95287 16.5967 7.86513 16.597C7.64514 16.5968 7.43136 16.524 7.25691 16.39C7.08245 16.256 6.95705 16.0682 6.90013 15.8557L6.42513 14.087L2.13888 21.5007C2.05131 21.6524 2.00511 21.8244 2.0049 21.9996C2.00469 22.1747 2.05047 22.3468 2.13768 22.4987C2.22488 22.6506 2.35044 22.7769 2.5018 22.865C2.65315 22.9531 2.825 22.9999 3.00013 23.0007H9.00013C9.26534 23.0007 9.5197 23.1061 9.70723 23.2936C9.89477 23.4812 10.0001 23.7355 10.0001 24.0007ZM27.5914 20.5007L24.6989 15.5007C24.5605 15.2831 24.3434 15.1273 24.0929 15.0659C23.8424 15.0046 23.5778 15.0424 23.3545 15.1715C23.1312 15.3005 22.9664 15.5109 22.8946 15.7586C22.8227 16.0063 22.8493 16.2722 22.9689 16.5007L25.8614 21.5007C25.9489 21.6524 25.9951 21.8244 25.9954 21.9996C25.9956 22.1747 25.9498 22.3468 25.8626 22.4987C25.7754 22.6506 25.6498 22.7769 25.4985 22.865C25.3471 22.9531 25.1753 22.9999 25.0001 23.0007H16.4139L17.7064 21.7082C17.894 21.5208 17.9995 21.2664 17.9996 21.0012C17.9997 20.7359 17.8945 20.4815 17.707 20.2939C17.5195 20.1062 17.2652 20.0007 16.9999 20.0006C16.7347 20.0005 16.4803 20.1058 16.2926 20.2932L13.2926 23.2932C13.1997 23.3861 13.1259 23.4964 13.0756 23.6178C13.0252 23.7392 12.9993 23.8693 12.9993 24.0007C12.9993 24.1322 13.0252 24.2623 13.0756 24.3837C13.1259 24.5051 13.1997 24.6154 13.2926 24.7082L16.2926 27.7082C16.3855 27.8011 16.4958 27.8747 16.6172 27.9249C16.7385 27.9751 16.8686 28.0009 16.9999 28.0009C17.1313 28.0008 17.2613 27.9749 17.3826 27.9246C17.504 27.8743 17.6142 27.8005 17.707 27.7076C17.7998 27.6147 17.8734 27.5044 17.9237 27.3831C17.9739 27.2617 17.9997 27.1316 17.9996 27.0003C17.9996 26.869 17.9736 26.7389 17.9233 26.6176C17.873 26.4963 17.7993 26.3861 17.7064 26.2932L16.4139 25.0007H25.0001C25.5266 25.0004 26.0437 24.8616 26.4995 24.5981C26.9553 24.3347 27.3337 23.956 27.5968 23.5C27.8599 23.044 27.9984 22.5267 27.9983 22.0003C27.9982 21.4738 27.8596 20.9567 27.5964 20.5007H27.5914ZM14.0001 2.00075C14.1759 1.99899 14.3489 2.04446 14.501 2.13241C14.6532 2.22037 14.7789 2.34758 14.8651 2.50075L19.1514 9.907L17.3914 9.4345C17.1383 9.37511 16.8721 9.41656 16.6491 9.55009C16.4262 9.68361 16.2639 9.8987 16.1968 10.1498C16.1297 10.4009 16.1629 10.6682 16.2896 10.8952C16.4162 11.1222 16.6262 11.291 16.8751 11.3657L20.9726 12.4645C21.0571 12.4867 21.144 12.498 21.2314 12.4982C21.4514 12.498 21.6651 12.4253 21.8396 12.2913C22.0141 12.1573 22.1395 11.9695 22.1964 11.757L23.2951 7.65825C23.3328 7.53028 23.3446 7.39606 23.3296 7.26348C23.3147 7.13091 23.2734 7.00267 23.2081 6.88631C23.1428 6.76995 23.055 6.66783 22.9496 6.58596C22.8443 6.50408 22.7236 6.44412 22.5948 6.40959C22.4659 6.37505 22.3314 6.36666 22.1993 6.38489C22.0671 6.40312 21.9399 6.44762 21.8252 6.51575C21.7105 6.58389 21.6106 6.67429 21.5314 6.78162C21.4522 6.88896 21.3952 7.01106 21.3639 7.14075L20.8889 8.912L16.5964 1.50075C16.3328 1.04555 15.9542 0.667637 15.4985 0.404918C15.0429 0.1422 14.5261 0.00390625 14.0001 0.00390625C13.4741 0.00390625 12.9574 0.1422 12.5017 0.404918C12.046 0.667637 11.6674 1.04555 11.4039 1.50075L8.50888 6.50075C8.38449 6.72981 8.35446 6.99839 8.42518 7.24927C8.49591 7.50015 8.66179 7.7135 8.8875 7.84387C9.11321 7.97425 9.3809 8.01134 9.63356 7.94725C9.88621 7.88315 10.1039 7.72295 10.2401 7.50075L13.1351 2.50075C13.2213 2.34758 13.3471 2.22037 13.4992 2.13241C13.6514 2.04446 13.8244 1.99899 14.0001 2.00075Z" fill="#FEFEFE"/>
                            </svg>  
                        </div>
                        <div>
                            <h3 class="text-xl text-slate-50 mt-5">Eco-Friendly</h3>
                            <p class="text-sm text-slate-50 font-inter-regular m-0">Reduce your carbon footprint with our energy-efficient electric scooters, designed for green.</p>                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-slate-950 p-4 rounded-3xl h-100 d-flex flex-column justify-content-between">
                        <div class="icon rounded-pill d-flex align-items-center justify-content-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.2362 6.8325C24.04 5.62422 22.6172 4.66377 21.0492 4.00613C19.4813 3.3485 17.799 3.00659 16.0987 3H16C12.5522 3 9.24558 4.36964 6.80761 6.80761C4.36964 9.24558 3 12.5522 3 16V23C3 23.7956 3.31607 24.5587 3.87868 25.1213C4.44129 25.6839 5.20435 26 6 26H8C8.79565 26 9.55871 25.6839 10.1213 25.1213C10.6839 24.5587 11 23.7956 11 23V18C11 17.2044 10.6839 16.4413 10.1213 15.8787C9.55871 15.3161 8.79565 15 8 15H5.045C5.23785 12.9149 6.02104 10.928 7.30278 9.27213C8.58452 7.61626 10.3117 6.36004 12.2819 5.65071C14.2521 4.94137 16.3836 4.80832 18.4267 5.26713C20.4698 5.72595 22.3398 6.75763 23.8175 8.24125C25.6236 10.0566 26.7345 12.4488 26.9562 15H24C23.2044 15 22.4413 15.3161 21.8787 15.8787C21.3161 16.4413 21 17.2044 21 18V23C21 23.7956 21.3161 24.5587 21.8787 25.1213C22.4413 25.6839 23.2044 26 24 26H27C27 26.7956 26.6839 27.5587 26.1213 28.1213C25.5587 28.6839 24.7956 29 24 29H17C16.7348 29 16.4804 29.1054 16.2929 29.2929C16.1054 29.4804 16 29.7348 16 30C16 30.2652 16.1054 30.5196 16.2929 30.7071C16.4804 30.8946 16.7348 31 17 31H24C25.3261 31 26.5979 30.4732 27.5355 29.5355C28.4732 28.5979 29 27.3261 29 26V16C29.0065 14.2995 28.6774 12.6144 28.0316 11.0412C27.3857 9.46811 26.4358 8.03788 25.2362 6.8325ZM8 17C8.26522 17 8.51957 17.1054 8.70711 17.2929C8.89464 17.4804 9 17.7348 9 18V23C9 23.2652 8.89464 23.5196 8.70711 23.7071C8.51957 23.8946 8.26522 24 8 24H6C5.73478 24 5.48043 23.8946 5.29289 23.7071C5.10536 23.5196 5 23.2652 5 23V17H8ZM24 24C23.7348 24 23.4804 23.8946 23.2929 23.7071C23.1054 23.5196 23 23.2652 23 23V18C23 17.7348 23.1054 17.4804 23.2929 17.2929C23.4804 17.1054 23.7348 17 24 17H27V24H24Z" fill="#FEFEFE"/>
                            </svg>  
                        </div>
                        <div>
                            <h3 class="text-xl text-slate-50 mt-5">Excellent Support</h3>
                            <p class="text-sm text-slate-50 font-inter-regular m-0">Our dedicated team is always ready to assist you, ensuring a seamless experience from start to finish.</p>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <h2 class="font-bebas">Explore Our <br/>Newest Models</h2>
            <div class="top-content">
                <p class="text-xl text-gray-500 font-inter-medium">Be among the first to ride our freshest, high-performance scooters.</p>
                <a href="{{ route('shop') }}" class="button-dark mt-3">See our collections</a>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($Products as $p_key => $product)
                <div class="col-md-6 mb-5">
                    <div class="product-card border text-center p-4 border-slate-200 rounded-3xl">
                        <a href="{{ route('productDetail', $product->slug) }}">
                            <img class="sz_product_image" src="{{ env( 'APP_Image_URL' ) . 'storage/product-images/' . $product->images->first()->name }}" alt="{{ $product->name }}">
                        </a>
                    </div>
                    <div class="text-md-start text-center">
                        <h2 class="text-lg text-gray-950 font-inter-semibold mb-0 mt-4">{{ $product->name }}</h2>
                        <h2 class="text-lg text-gray-950 font-inter-semibold mt-0">{{ env( 'SZ_CURRENCY_SYMBOL' ) }} {{ number_format($product->web_sales_price, 2) }}</h2>
                        <a href="javascript:;" class="button-dark mt-3 AddToCartBtn" data-pid="{{ encrypt( $product->id ) }}">Add to cart</a>
                        <div class="font-semibold text-lg m-0 mt-2">Cash on delivery</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="premier bg-slate-900">
    <div class="container">
        <h2 class="text-white font-bebas">Your Premier Electric Scooter Destination</h2>
        <div class="row mt-sm-5 mt-4">
            <div class="col-xl-7 col-lg-6 mb-4">
                <div class="premier-card bg-gray-500 rounded-lg pb-0 overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <h3 class="text-slate-50 font-bebas">Your Journey, Reimagined</h3>
                    <p class="text-xl text-slate-50 font-inter-regular mb-2 mt-3">Check Out Our Line of Cutting Edge E-Scooters</p>
                    <img src="{{ asset( 'assets/images/pro3.png' ) }}" alt="bike" width="100%" height="100%">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 mb-4">
                <div class="premier-card bg-slate-950 rounded-lg p-0 overflow-hidden h-100 d-flex flex-column justify-content-between">
                    <div class="card-content pb-0">
                        <h3 class="text-slate-50 font-bebas">Experience the Thrill of Sustainable Ridings</h3>
                        <p class="text-xl text-slate-50 font-inter-regular mb-2 mt-3">Skootz Electric Scooters are the first choice</p>
                    </div>
                    <img src="{{ asset( 'assets/images/pro4.png' ) }}" alt="bike" width="100%">
                </div>
            </div>
        </div>
        <div>
            <div class="premier-card bg-slate-950 rounded-lg p-0 overflow-hidden d-flex flex-column justify-content-between">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="card-content pb-0">
                            <h3 class="text-slate-50 font-bebas">Elevate Your Commute</h3>
                            <p class="text-xl text-slate-50 font-inter-regular mb-2 mt-3">Get to know the Future of Urban Mobility with Skootz</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <img src="{{ asset( 'assets/images/pro5.png' ) }}" alt="bike" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('latestScooter')

@include('customerReview')

@endsection
@section('script')
<script>
    $(document).ready(function(){
        $(".hero__slider").owlCarousel({
            margin: 20,
            items: 1,
            dots: false,
            nav: true,
            navText: ['<span class="arrow_left"><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.646446 3.64645C0.451184 3.84171 0.451184 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976311 4.7308 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM14 3.5L1 3.5V4.5L14 4.5V3.5Z" fill="#FEFEFE"/></svg><span/>', '<span class="arrow_right"><svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3536 4.35355C13.5488 4.15829 13.5488 3.84171 13.3536 3.64645L10.1716 0.464466C9.97631 0.269204 9.65973 0.269204 9.46447 0.464466C9.2692 0.659728 9.2692 0.976311 9.46447 1.17157L12.2929 4L9.46447 6.82843C9.2692 7.02369 9.2692 7.34027 9.46447 7.53553C9.65973 7.7308 9.97631 7.7308 10.1716 7.53553L13.3536 4.35355ZM0 4.5H13V3.5H0V4.5Z" fill="#F3F3F3"/></svg><span/>'],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 1200,
            autoHeight: false,
            autoplay: false
        });
    });
</script>
@endsection
