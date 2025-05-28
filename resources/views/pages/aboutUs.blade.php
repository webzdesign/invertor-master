@extends('layouts.master')
@section('title', 'About' . ' ' . config('app.name') . ' Lux | Moldova’s Trusted Air Conditioner Experts')
@section('description','Founded in 2024, Invertor Lux provides customized AC sales and installation services across Moldova. Discover our story, mission, and commitment to customer comfort')
@section('url','/about')
@section('conversion')
    <script>
        gtag('event', 'conversion', { 'send_to': 'AW-16832855332/qYrtCNWc4ZcaEKT6w9o-' });
    </script>
@endsection

@section('content')

    <section class="strore-banner p-2 position-relative">
        <img src="{{ asset('assets/images/inv-our-store-banner.png') }}" alt="Invertor Lux team" width="100%"
            class="rounded-3xl d-none d-sm-block">
        <img src="{{ asset('assets/images/inv-our-store-banner-mob.png') }}" alt="Invertor Lux team" width="100%" class="d-sm-none">
        <h2 class="text-slate-50 position-absolute top-50 translate-middle left-50 font-bebas whitespace-nowrap mb-0">
            {{ __('About')}} {{ config('app.name') }}
        </h2>
    </section>

    {{-- <section class="bg-slate-900 py-5">
        <div class="container">
            <h2 class="text-white font-bebas text-7xl text-4xl-mob mb-sm-4">{{ __('About')}} {{ config('app.name') }}</h2>
            <div class="row">
                <div class="col-xxl-4 col-md-6 mt-4">
                    <div class="sz_about_skootz_sec bg-slate-950 rounded-3xl p-4">
                        <svg width="100" height="71" viewBox="0 0 100 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38.2157 52.9665C37.7695 49.9755 36.4548 47.4842 34.1453 45.5832C31.9187 43.6636 29.2361 42.7132 26.3415 42.6541C26.0923 42.6436 25.9243 42.5491 25.8462 42.4756C25.8278 42.4582 25.8161 42.4438 25.8092 42.434C25.8076 42.4317 25.8062 42.4297 25.8051 42.4279C25.8048 42.4274 25.8045 42.427 25.8042 42.4265L25.8061 42.4016L25.8075 42.3659C25.8087 42.3336 25.8238 42.2701 25.9029 42.2006C25.9767 42.1358 26.1216 42.0568 26.364 42.0645L26.3808 42.0651L26.3977 42.0653C31.7939 42.1472 36.6387 45.6215 38.3274 50.7807C38.5409 51.505 38.6965 52.179 38.7736 52.821C38.8181 53.2401 38.9741 54.0599 39.7291 54.6432C40.4073 55.1672 41.1734 55.167 41.4206 55.1669H41.428H41.4604H41.4927H41.5251H41.5575H41.5898H41.6222H41.6546H41.6869H41.7193H41.7517H41.784H41.8164H41.8488H41.8811H41.9135H41.9459H41.9782H42.0106H42.043H42.0753H42.1077H42.1401H42.1724H42.2048H42.2372H42.2695H42.3019H42.3343H42.3666H42.399H42.4314H42.4637H42.4961H42.5285H42.5608H42.5932H42.6256H42.6579H42.6903H42.7227H42.755H42.7874H42.8198H42.8521H42.8845H42.9169H42.9492H42.9816H43.0139H43.0463H43.0787H43.111H43.1434H43.1758H43.2081H43.2405H43.2729H43.3052H43.3376H43.37H43.4023H43.4347H43.4671H43.4994H43.5318H43.5642H43.5965H43.6289H43.6613H43.6936H43.726H43.7584H43.7907H43.8231H43.8555H43.8878H43.9202H43.9526H43.9849H44.0173H44.0497H44.082H44.1144H44.1468H44.1791H44.2115H44.2439H44.2762H44.3086H44.341H44.3733H44.4057H44.4381H44.4704H44.5028H44.5352H44.5675H44.5999H44.6323H44.6646H44.697H44.7294H44.7617H44.7941H44.8264H44.8588H44.8912H44.9235H44.9559H44.9883H45.0206H45.053H45.0854H45.1177H45.1501H45.1825H45.2148H45.2472H45.2796H45.3119H45.3443H45.3767H45.409H45.4414H45.4738H45.5061H45.5385H45.5709H45.6032H45.6356H45.668H45.7003H45.7327H45.7651H45.7974H45.8298H45.8622H45.8945H45.9269H45.9593H45.9916H46.024H46.0564H46.0887H46.1211H46.1535H46.1858H46.2182H46.2506H46.2829H46.3153H46.3477H46.38H46.4124H46.4448H46.4771H46.5095H46.5419H46.5742H46.6066H46.6389H46.6713H46.7037H46.736H46.7684H46.8008H46.8331H46.8655H46.8979H46.9302H46.9626H46.995H47.0273H47.0597H47.0921H47.1244H47.1568H47.1892H47.2215H47.2539H47.2863H47.3186H47.351H47.3834H47.4157H47.4481H47.4805H47.5128H47.5452H47.5776H47.6099H47.6423H47.6747H47.707H47.7394H47.7718H47.8041H47.8365H47.8689H47.9012H47.9336H47.966H47.9983H48.0307H48.0631H48.0954H48.1278H48.1602H48.1925H48.2249H48.2573H48.2896H48.322H48.3544H48.3867H48.4191H48.4515H48.4838H48.5162H48.5485H48.5809H48.6133H48.6456H48.678H48.7104H48.7427H48.7751H48.8075H48.8398H48.8722H48.9046H48.9369H48.9693H49.0017H49.034H49.0664H49.0988H49.1311H49.1635H49.1959H49.2282H49.2606H49.293H49.3253H49.3577H49.3901H49.4224H49.4548H49.4872H49.5195H49.5519H49.5843H49.6166H49.649H49.6814H49.7137H49.7461H49.7785H49.8108H49.8432H49.8756H49.9079H49.9403H49.9727H50.005H50.0374H50.0698H50.1021H50.1345H50.1669H50.1992H50.2316H50.264H50.2963H50.3287H50.361H50.3934H50.4258H50.4581H50.4905H50.5229H50.5552H50.5876H50.62H50.6523H50.6847H50.7171H50.7494H50.7818H50.8142H50.8465H50.8789H50.9113H50.9436H50.976H51.0084H51.0407H51.0731H51.1055H51.1378H51.1702H51.2026H51.2349H51.2673H51.2997H51.332H51.3644H51.3968H51.4291H51.4615H51.4939H51.5262H51.5586H51.591H51.6233H51.6557H51.6881H51.7204H51.7528H51.7852H51.8175H51.8499H51.8823H51.9146H51.947H51.9794H52.0117H52.0441H52.0765H52.1088H52.1412H52.1735H52.2059H52.2383H52.2706H52.303H52.3354H52.3677H52.4001H52.4325H52.4648H52.4972H52.5296H52.5619H52.5943H52.6267H52.659H52.6914H52.7238H52.7561H52.7885H52.8209H52.8532H52.8856H52.918H52.9503H52.9827H53.0151H53.0474H53.0798H53.1122H53.1445H53.1769H53.2093H53.2416H53.274H53.3064H53.3387H53.3711H53.4035H53.4358H53.4682H53.5006H53.5329H53.5653H53.5977H53.63H53.6624H53.6948H53.7271H53.7595H53.7919H53.8242H53.8566H53.889H53.9213H53.9537H53.986H54.0184H54.0508H54.0831H54.1155H54.1479H54.1802H54.2126H54.245H54.2773H54.3097H54.3421H54.3744H54.4068H54.4392H54.4715H54.5039H54.5363H54.5686H54.601H54.6334H54.6657H54.6981H54.7305H54.7628H54.7952H54.8276H54.8599H54.8923H54.9247H54.957H54.9894H55.0218H55.0541H55.0865H55.1189H55.1512H55.1836H55.216H55.2483H55.2807H55.3131H55.3454H55.3778H55.4102H55.4425H55.4749H55.5073H55.5396H55.572H55.6044H55.6367H55.6691H55.7015H55.7338H55.7662H55.7985H55.8309H55.8633H55.8956H55.928H55.9604H55.9927H56.0251H56.0575H56.0898H56.1222H56.1546H56.1869H56.2193H56.2517H56.284H56.3164H56.3488H56.3811H56.4135H56.4459H56.4782H56.5106H56.543H56.5753H56.6077H56.6401H56.6724H56.7048H56.7372H56.7695H56.8019H56.8343H56.8666H56.899H56.9314H56.9637H56.9961H57.0285H57.0608H57.0932H57.1256H57.1579H57.1903H57.2227H57.255H57.2874H57.3198H57.3521H57.3845H57.4169H57.4492H57.4816H57.5139H57.5463H57.5787H57.611H57.6434H57.6758H57.7081H57.7405H57.7729H57.8052H57.8376H57.87H57.9023H57.9347H57.9671H57.9994C58.3058 55.1669 58.9118 55.141 59.5087 54.7666C60.097 54.3975 60.3928 53.8746 60.551 53.4865C62.7014 48.8952 64.8777 44.3325 67.0642 39.7486C67.7706 38.2674 68.4781 36.7841 69.1862 35.2969L69.2126 35.2414L69.2356 35.1843C69.4044 34.7651 69.4462 34.3537 69.4564 34.0801C69.4675 33.7814 69.4461 33.48 69.4004 33.2076L69.3912 33.1525L69.3789 33.098C68.8084 30.5716 68.2378 28.0332 67.667 25.4937L67.665 25.4851L67.6641 25.481C67.0937 22.9433 66.5231 20.4046 65.9524 17.8774C65.6012 16.2504 65.218 14.6208 64.8338 12.9872C64.7444 12.6071 64.6549 12.2267 64.5658 11.8461L64.2043 10.3021H62.6185H62.616H62.6135H62.6109H62.6084H62.6059H62.6034H62.6009H62.5984H62.5958H62.5933H62.5908H62.5883H62.5858H62.5832H62.5807H62.5782H62.5756H62.5731H62.5706H62.5681H62.5655H62.563H62.5604H62.5579H62.5554H62.5528H62.5503H62.5478H62.5452H62.5427H62.5401H62.5376H62.535H62.5325H62.53H62.5274H62.5249H62.5223H62.5198H62.5172H62.5147H62.5121H62.5096H62.507H62.5044H62.5019H62.4993H62.4968H62.4942H62.4917H62.4891H62.4865H62.484H62.4814H62.4788H62.4763H62.4737H62.4711H62.4686H62.466H62.4634H62.4609H62.4583H62.4557H62.4532H62.4506H62.448H62.4454H62.4429H62.4403H62.4377H62.4351H62.4325H62.43H62.4274H62.4248H62.4222H62.4196H62.4171H62.4145H62.4119H62.4093H62.4067H62.4041H62.4015H62.3989H62.3964H62.3938H62.3912H62.3886H62.386H62.3834H62.3808H62.3782H62.3756H62.373H62.3704H62.3678H62.3652H62.3626H62.36H62.3574H62.3548H62.3522H62.3496H62.347H62.3444H62.3418H62.3392H62.3366H62.334H62.3314H62.3288H62.3262H62.3236H62.321H62.3184H62.3157H62.3131H62.3105H62.3079H62.3053H62.3027H62.3001H62.2975H62.2948H62.2922H62.2896H62.287H62.2844H62.2818H62.2791H62.2765H62.2739H62.2713H62.2687H62.2661H62.2634H62.2608H62.2582H62.2556H62.2529H62.2503H62.2477H62.2451H62.2424H62.2398H62.2372H62.2346H62.2319H62.2293H62.2267H62.2241H62.2214H62.2188H62.2162H62.2135H62.2109H62.2083H62.2057H62.203H62.2004H62.1978H62.1951H62.1925H62.1899H62.1872H62.1846H62.182H62.1793H62.1767H62.1741H62.1714H62.1688H62.1661H62.1635H62.1609H62.1582H62.1556H62.153H62.1503H62.1477H62.145H62.1424H62.1398H62.1371H62.1345H62.1318H62.1292H62.1266H62.1239H62.1213H62.1186H62.116H62.1133H62.1107H62.1081H62.1054H62.1028H62.1001H62.0975H62.0948H62.0922H62.0896H62.0869H62.0843H62.0816H62.079H62.0763H62.0737H62.071H62.0684H62.0657H62.0631H62.0604H62.0578H62.0552H62.0525H62.0499H62.0472H62.0446H62.0419H62.0393H62.0366H62.034H62.0313H62.0287H62.026H62.0234H62.0207H62.0181H62.0154H62.0128H62.0101H62.0075H62.0048H62.0022H61.9995H61.9969H61.9942H61.9916H61.9889H61.9863H61.9836H61.981H61.9783H61.9757H61.973H61.9704H61.9677H61.9651H61.9624H61.9598H61.9571H61.9545H61.9518H61.9492H61.9465H61.9439H61.9412H61.9386H61.9359H61.9333H61.9306H61.928H61.9253H61.9227H61.92H61.9174H61.9147H61.9121H61.9094H61.9068H61.9041H61.9015H61.8988H61.8962H61.8935H61.8909H61.8882H61.8856H61.8829H61.8803H61.8776H61.875H61.8723H61.8697H61.867H61.8644H61.8617H61.8591H61.8564H61.8538H61.8511H61.8485H61.8458H61.8432H61.8405H61.8379H61.8352H61.8326H61.83H61.8273H61.8247H61.822H61.8194H61.8167H61.8141H61.8114H61.8088H61.8061H61.8035H61.8009H61.7982H61.7956H61.7929H61.7903H61.7876H61.785H61.7824H61.7797H61.7771H61.7744H61.7718H61.7692H61.7665H61.7639H61.7612H61.7586H61.756H61.7533H61.7507H61.748H61.7454H61.7428H61.7401H61.7375H61.7349H61.7322H61.7296H61.7269H61.7243H61.7217H61.719H61.7164H61.7138H61.7111H61.7085H61.7059H61.7032H61.7006H61.698H61.6954H61.6927H61.6901H61.6875H61.6848H61.6822H61.6796H61.6769H61.6743H61.6717H61.6691H61.6664H61.6638H61.6612H61.6586H61.6559H61.6533H61.6507H61.6481H61.6454H61.6428H61.6402H61.6376H61.635H61.6323H61.6297H61.6271H61.6245H61.6219H61.6193H61.6166H61.614H61.6114H61.6088H61.6062H61.6036H61.6009H61.5983H61.5957H61.5931H61.5905H61.5879H61.5853H61.5827H61.5801H61.5775H61.5748H61.5722H61.5696H61.567H61.5644H61.5618H61.5592H61.5566H61.554H61.5514H61.5488H61.5462H61.5436H61.541H61.5384H61.5358H61.5332H61.5306H61.528H61.5254H61.5228H61.5202H61.5176H61.5151H61.5125H61.5099H61.5073H61.5047H61.5021H61.4995H61.4969H61.4943H61.4918H61.4892H61.4866H61.484H61.4814H61.4788H61.4763H61.4737H61.4711H61.4685H61.4659H61.4634H61.4608H61.4582H61.4556H61.4531H61.4505H61.4479H61.4453H61.4428H61.4402H61.4376H61.4351H61.4325H61.4299H61.4274H61.4248H61.4222H61.4197H61.4171H61.4145H61.412H61.4094H61.4069H61.4043H61.4017H61.3992H61.3966H61.3941H61.3915H61.389H61.3864H61.3839H61.3813H61.3788H61.3762H61.3737H61.3711H61.3686H61.366H61.3635H61.361H61.3584H61.3559H61.3533H61.3508H61.3483H61.3457H61.3432H61.3407H61.3381H61.3356H61.3331H61.3305H61.328H61.3255H61.3229H61.3204H61.3179H61.3154H61.3128H61.3103H61.3078H61.3053H61.3028H61.3002H61.2977H61.2952H61.2927H61.2902H61.2877H61.2851C59.6162 10.3021 58.0271 10.3019 56.3954 10.2557C55.888 10.2373 55.511 9.86117 55.4441 9.4887L55.4404 9.46821L55.4363 9.4478C55.3271 8.9058 55.5618 8.51058 55.9517 8.33418C56.1581 8.25678 56.4616 8.20071 56.7613 8.20071H56.7791L56.7968 8.20039C58.5538 8.16923 60.3123 8.17959 62.091 8.19007C62.991 8.19538 63.8962 8.20071 64.809 8.20071C65.4392 8.20071 65.6469 8.34266 65.708 8.39315C65.7751 8.44854 65.9576 8.63692 66.0905 9.26406L66.0928 9.27467L66.0951 9.28525C67.4993 15.5733 68.8917 21.8735 70.2847 28.1762L70.285 28.1778C71.6765 34.4741 73.0686 40.7729 74.4726 47.0603C74.6047 47.6897 74.9298 48.3 75.5307 48.7341C75.9939 49.0687 76.5002 49.1924 76.6821 49.2368C76.6916 49.2391 76.7002 49.2412 76.7079 49.2431L76.7668 49.2577L76.8265 49.2688C80.0615 49.8666 82.2704 52.3184 82.5295 55.4061C82.7977 59.0257 80.9795 61.869 77.8616 62.962L77.8616 62.9619L77.8506 62.9659C74.5479 64.1453 70.8695 62.7038 69.24 59.6509C67.607 56.5911 68.4702 52.7115 71.2384 50.6585L71.2419 50.6559C71.6284 50.368 71.9079 49.9872 72.0827 49.6667C72.2197 49.4155 72.5533 48.7366 72.3906 47.9102C72.214 47.0042 72.014 46.072 71.8114 45.1279C71.6849 44.5384 71.5574 43.9442 71.434 43.3488L70.1485 37.1471L67.6393 42.9624C67.6111 43.0278 67.5821 43.0822 67.5394 43.1556C67.5276 43.1758 67.5153 43.1966 67.5 43.2224L67.4951 43.2305C67.4818 43.253 67.465 43.2811 67.4488 43.3089C67.4123 43.3711 67.3605 43.4611 67.3083 43.5649L67.3 43.5814L67.292 43.598C65.29 47.7644 63.2878 51.9784 61.3331 56.1455C61.1036 56.6315 60.8712 56.8569 60.6752 56.9788C60.475 57.1033 60.1496 57.221 59.5709 57.221C55.2384 57.221 50.9068 57.2446 46.5757 57.2682L46.554 57.2683C42.2139 57.292 37.874 57.3156 33.5233 57.3156C33.2613 57.3156 32.8128 57.332 32.3299 57.5266L32.4429 57.4102H27.7137H27.7104H27.707H27.7037H27.7003H27.697H27.6937H27.6903H27.687H27.6836H27.6803H27.677H27.6736H27.6703H27.667H27.6636H27.6603H27.657H27.6536H27.6503H27.647H27.6436H27.6403H27.637H27.6337H27.6304H27.627H27.6237H27.6204H27.6171H27.6138H27.6104H27.6071H27.6038H27.6005H27.5972H27.5939H27.5906H27.5872H27.5839H27.5806H27.5773H27.574H27.5707H27.5674H27.5641H27.5608H27.5575H27.5542H27.5509H27.5476H27.5443H27.541H27.5377H27.5344H27.5311H27.5278H27.5245H27.5212H27.5179H27.5146H27.5114H27.5081H27.5048H27.5015H27.4982H27.4949H27.4916H27.4883H27.4851H27.4818H27.4785H27.4752H27.4719H27.4687H27.4654H27.4621H27.4588H27.4555H27.4523H27.449H27.4457H27.4424H27.4392H27.4359H27.4326H27.4294H27.4261H27.4228H27.4196H27.4163H27.413H27.4098H27.4065H27.4032H27.4H27.3967H27.3934H27.3902H27.3869H27.3836H27.3804H27.3771H27.3739H27.3706H27.3674H27.3641H27.3608H27.3576H27.3543H27.3511H27.3478H27.3446H27.3413H27.3381H27.3348H27.3316H27.3283H27.3251H27.3218H27.3186H27.3153H27.3121H27.3088H27.3056H27.3023H27.2991H27.2958H27.2926H27.2894H27.2861H27.2829H27.2796H27.2764H27.2731H27.2699H27.2667H27.2634H27.2602H27.2569H27.2537H27.2505H27.2472H27.244H27.2408H27.2375H27.2343H27.2311H27.2278H27.2246H27.2214H27.2181H27.2149H27.2117H27.2084H27.2052H27.202H27.1987H27.1955H27.1923H27.1891H27.1858H27.1826H27.1794H27.1761H27.1729H27.1697H27.1665H27.1632H27.16H27.1568H27.1536H27.1503H27.1471H27.1439H27.1407H27.1375H27.1342H27.131H27.1278H27.1246H27.1213H27.1181H27.1149H27.1117H27.1085H27.1052H27.102H27.0988H27.0956H27.0924H27.0892H27.0859H27.0827H27.0795H27.0763H27.0731H27.0699H27.0666H27.0634H27.0602H27.057H27.0538H27.0506H27.0473H27.0441H27.0409H27.0377H27.0345H27.0313H27.0281H27.0248H27.0216H27.0184H27.0152H27.012H27.0088H27.0056H27.0024H26.9992H26.9959H26.9927H26.9895H26.9863H26.9831H26.9799H26.9767H26.9735H26.9703H26.967H26.9638H26.9606H26.9574H26.9542H26.951H26.9478H26.9446H26.9414H26.9382H26.9349H26.9317H26.9285H26.9253H26.9221H26.9189H26.9157H26.9125H26.9093H26.9061H26.9029H26.8996H26.8964H26.8932H26.89H26.8868H26.8836H26.8804H26.8772H26.874H26.8708H26.8676H26.8644H26.8611H26.8579H26.8547H26.8515H26.8483H26.8451H26.8419H26.8387H26.8355H26.8323H26.8291H26.8258H26.8226H26.8194H26.8162H26.813H26.8098H26.8066H26.8034H26.8002H26.797H26.7937H26.7905H26.7873H26.7841H26.7809H26.7777H26.7745H26.7713H26.7681H26.7648H26.7616H26.7584H26.7552H26.752H26.7488H26.7456H26.7424H26.7392H26.7359H26.7327H26.7295H26.7263H26.7231H26.7199H26.7167H26.7134H26.7102H26.707H26.7038H26.7006H26.6974H26.6942H26.6909H26.6877H26.6845H26.6813H26.6781H26.6749H26.6716H26.6684H26.6652H26.662H26.6588H26.6555H26.6523H26.6491H26.6459H26.6427H26.6394H26.6362H26.633H26.6298H26.6266H26.6233H26.6201H26.6169H26.6137H26.6104H26.6072H26.604H26.6008H26.5975H26.5943H26.5911H26.5879H26.5846H26.5814H26.5782H26.575H26.5717H26.5685H26.5653H26.562H26.5588H26.5556H26.5524H26.5491H26.5459H26.5427H26.5394H26.5362H26.533H26.5297H26.5265H26.5233H26.52H26.5168H26.5136H26.5103H26.5071H26.5038H26.5006H26.4974H26.4941H26.4909H26.4876H26.4844H26.4812H26.4779H26.4747H26.4714H26.4682H26.4649H26.4617H26.4585H26.4552H26.452H26.4487H26.4455H26.4422H26.439H26.4357H26.4325H26.4292H26.426H26.4227H26.4195H26.4162H26.413H26.4097H26.4065H26.4032H26.4H26.3967H26.3934H26.3902H26.3869H26.3837H26.3804H26.3771H26.3739H26.3706H26.3674H26.3641H26.3608H26.3576H26.3543H26.351H26.3478H26.3445H26.3412H26.338H26.3347H26.3314H26.3282H26.3249H26.3216H26.3183H26.3151H26.3118H26.3085H26.3052H26.302H26.2987H26.2954H26.2921H26.2889H26.2856H26.2823H26.279H26.2757H26.2724H26.2692H26.2659H26.2626H26.2593H26.256H26.2527H26.2494H26.2461H26.2429H26.2396H26.2363H26.233H26.2297H26.2264H26.2231H26.2198H26.2165H26.2132H26.2099H26.2066H26.2033H26.2H26.1967H26.1934H26.1901H26.1868H26.1835H26.1802H26.1769H26.1735H26.1702H26.1669H26.1636H26.1603H26.157H26.1537H26.1504H26.147H26.1437H26.1404H26.1371H26.1338H26.1304H26.1271H26.1238H26.1205H26.1171H26.1138H26.1105H26.1072H26.1038H26.1005H26.0972H26.0938H26.0905H26.0872H26.0838H26.0828C25.4583 57.3813 25.0738 56.922 25.0436 56.5007C25.0067 55.7966 25.353 55.4235 25.9391 55.3374C26.3319 55.2859 26.64 55.2722 27.0156 55.2554C27.255 55.2448 27.5217 55.2329 27.8553 55.2092L31.7905 54.93L29.2392 51.9208C26.9123 49.1763 22.6765 49.1488 20.1051 51.5685C17.4283 54.0872 17.5328 58.3993 20.1507 60.8648C21.5689 62.203 23.3615 62.6601 24.9534 62.5781C26.5013 62.4985 28.0869 61.897 29.1487 60.8033L30.8052 59.097C29.4828 61.9808 26.674 63.564 23.467 63.1936L23.4596 63.1928C20.5052 62.8627 18.1071 60.7506 17.431 57.76C17.3937 57.5804 17.3449 57.403 17.3144 57.2923L17.3129 57.2866C17.3706 56.6675 17.379 56.0292 17.3802 55.4584C17.4806 55.1735 17.5812 54.8703 17.6725 54.5954C17.7435 54.3816 17.8087 54.185 17.8638 54.0275C18.05 53.4942 18.2231 53.0771 18.4282 52.7305C19.8738 50.3554 21.9131 49.2367 24.6322 49.3477L24.6374 49.3479C27.6103 49.4615 29.6905 50.8195 30.9413 53.523C31.0877 53.8483 31.3727 54.3948 31.9613 54.7934C32.5737 55.2081 33.2123 55.2615 33.6185 55.2615H33.6736L33.7287 55.2585C34.2289 55.2309 34.6749 55.2393 35.2023 55.2493C35.5105 55.2551 35.8466 55.2615 36.2375 55.2615H38.558L38.2157 52.9665ZM73.9281 53.3468L72.8153 49.2943L70.3721 52.7137C68.7857 54.9339 68.9563 57.9266 70.5467 60.0013C72.2791 62.3274 75.1376 63.1202 77.8043 62.2594L77.8114 62.2571L77.8185 62.2548C79.1131 61.8261 80.2202 60.9515 80.9958 59.9216C81.7638 58.9019 82.3162 57.5811 82.2851 56.1664C82.278 54.9466 81.802 53.7724 81.204 52.8775C80.6189 52.0019 79.6984 51.071 78.51 50.6933L75.3375 49.685L75.9369 52.9595C75.9736 53.1602 76.0023 53.3647 76.0374 53.6144L76.0427 53.6521C76.0768 53.8947 76.1186 54.1899 76.1771 54.4851C76.2804 55.0829 75.8913 55.4987 75.599 55.5691C74.9328 55.7178 74.4033 55.3452 74.2653 54.8276L74.2568 54.7958L74.2473 54.7643C74.2084 54.6353 74.1774 54.4903 74.1286 54.2417L74.1192 54.194C74.0757 53.9717 74.0163 53.6681 73.9281 53.3468Z"
                                stroke="#F3F3F3" stroke-width="4" />
                        </svg>
                        <h3 class="text-slate-50 font-semibold font-hubot text-xl mt-4">{{ __('Who We Are?')}}</h3>
                        <p class="text-slate-50 text-sm font-inter-regular mb-0">{{ __('Skootz is a UK based Company of
                            high-quality e-scooters and e-bikes. It aims to encourage emission-free travel while delivering
                            exceptional customer service')}}</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6 mt-4">
                    <div class="sz_about_skootz_sec bg-slate-950 rounded-3xl p-4">
                        <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M49.5827 35.0003C49.5827 43.0544 43.0534 49.5837 34.9993 49.5837C26.9452 49.5837 20.416 43.0544 20.416 35.0003C20.416 26.9462 26.9452 20.417 34.9993 20.417"
                                stroke="#F3F3F3" stroke-width="4" stroke-linecap="round" />
                            <path
                                d="M40.834 6.41646C38.9492 6.03385 36.9983 5.83301 35.0007 5.83301C18.8923 5.83301 5.83398 18.8914 5.83398 34.9997C5.83398 51.1078 18.8923 64.1663 35.0007 64.1663C51.1088 64.1663 64.1673 51.1078 64.1673 34.9997C64.1673 33.0021 63.9664 31.0511 63.584 29.1663"
                                stroke="#F3F3F3" stroke-width="4" stroke-linecap="round" />
                            <path
                                d="M35.0918 34.8899L48.3711 21.6105M57.5796 12.671L55.9661 6.87518C55.6689 5.92035 54.52 5.53984 53.7456 6.17267C49.557 9.59555 44.9942 14.206 48.7205 21.4781C56.2283 24.9791 60.5143 20.2579 63.8005 16.2897C64.4545 15.5001 64.0601 14.3132 63.0755 14.0285L57.5796 12.671Z"
                                stroke="#F3F3F3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="text-slate-50 font-semibold font-hubot text-xl mt-4">{{ __('What is Skootz\'s
                            mission?')}}</h3>
                        <p class="text-slate-50 text-sm font-inter-regular mb-0">{{ __('Skootz is on a mission to boost
                            emission-free travel through high quality e-scooters and e-bikes. Urban transportation is
                            revolutionized and provides a more sustainable means by which to get around.')}}</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6 mt-4">
                    <div class="sz_about_skootz_sec bg-slate-950 rounded-3xl p-4">
                        <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M51.043 14.583C53.4591 14.583 55.418 16.5418 55.418 18.958C55.418 21.3743 53.4591 23.333 51.043 23.333C48.6268 23.333 46.668 21.3743 46.668 18.958C46.668 16.5418 48.6268 14.583 51.043 14.583Z"
                                stroke="#F3F3F3" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M8.09021 32.5027C5.16436 35.7705 5.10142 40.7006 7.78667 44.1688C13.1153 51.051 18.9475 56.8831 25.8297 62.2116C29.2978 64.897 34.2278 64.834 37.4957 61.9083C46.3676 53.9644 54.4923 45.6627 62.3334 36.5394C63.1087 35.6375 63.5934 34.5321 63.7022 33.3477C64.1835 28.1105 65.1722 13.0216 61.0746 8.92392C56.9767 4.8262 41.8879 5.81484 36.6507 6.29606C35.4662 6.40491 34.3608 6.8898 33.4587 7.66499C24.3357 15.506 16.034 23.6308 8.09021 32.5027Z"
                                stroke="#F3F3F3" stroke-width="4.375" />
                            <path
                                d="M40.2155 36.0692C40.2776 34.8996 40.6058 32.76 38.8275 31.1339M38.8275 31.1339C38.2771 30.6308 37.5252 30.1767 36.5011 29.8156C32.8361 28.5239 28.3343 32.8475 31.5189 36.8051C33.2307 38.9322 34.5505 39.5867 34.4262 42.0023C34.3387 43.7019 32.6695 45.4772 30.4695 46.1536C28.5582 46.741 26.4499 45.9631 25.1164 44.473C23.4882 42.6539 23.6527 40.9386 23.6387 40.1911M38.8275 31.1339L40.8344 29.127M25.2615 44.6999L23.3555 46.606"
                                stroke="#F3F3F3" stroke-width="4.375" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="text-slate-50 font-semibold font-hubot text-xl mt-4">{{ __('What support Skootz
                            offer?')}}</h3>
                        <p class="text-slate-50 text-sm font-inter-regular mb-0">{{ __('Skootz offers a range of support
                            services, including:')}}</p>
                        <p class="text-slate-50 text-sm font-inter-regular mb-0">- {{ __('Maintenance and repair expert
                            technical support.')}}</p>
                        <p class="text-slate-50 text-sm font-inter-regular mb-0">- {{ __('Stripe and Cash On Delivery as
                            convenient payment options.')}}</p>
                        <p class="text-slate-50 text-sm font-inter-regular mb-0">- {{ __('Products of different select and
                            range.')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 class="text-slate-900 text-6xl text-4xl-mob mb-sm-0 mb-4 font-bebas">{{ __('FAQ')}}</h2>
                </div>
                <div class="col-xl-8">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0 rounded-0 pb-4 pt-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button
                                    class="accordion-button bg-transparent shadow-none text-slate-900 font-hubot text-2xl font-semibold p-0"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center gap-2">
                                        Electrical Scooters, what do you offer?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        Electric scooters for teens and adults are usually available with us. They come in a
                                        number of different flavors with very lightweight models and innovative designs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center gap-2">
                                        If you provide repairs on electric scooters?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        Not only do we service and repair all makes and models of electric scooters, but we
                                        also have shops in Edinburgh and Glasgow. Your scooter will always remain as good as
                                        new.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <div class="d-flex align-items-center gap-2">
                                        What do I have to do to get the correct electric scooter?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        When you are thinking of purchasing an electric scooter, we urge you to consider the
                                        following factors: battery life, speed, usage, and weight. We’ve also written a blog
                                        post containing a more detailed guide on the top five things you need to know before
                                        buying an electric scooter.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <div class="d-flex align-items-center gap-2">
                                        What is a honeycomb tire and why should I give it a try?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        There's no chance of a flat tire with honeycomb tires because they are puncture
                                        proof. They are smooth riding, they require much less maintenance than conventional
                                        pneumatic tires.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingFive">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <div class="d-flex align-items-center gap-2">
                                        Are your electric scooters sent with a warranty?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        And yes, we back all of our electric scooters with a manufacturer’s warranty against
                                        defects in materials and workmanship. To learn more about the specifics of each
                                        model, please visit our </p><a href="{{ route('shop') }}">shop page</a>.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingSix">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    <div class="d-flex align-items-center gap-2">
                                        Do you make the (often very expensive) next day delivery available for orders placed
                                        online?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        Yes, we do. We have next day delivery of electric scooters from our site so that you
                                        can ride as soon as possible with your new ride.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingSeven">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2">
                                            Can I test a scooter before I buy it?
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        Absolutely! Come and test ride our electric scooters in our Portsmouth shops. If we
                                        can not find the model right for you, our staff will be more than happy to help you
                                        out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingEight">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">
                                    <div class="d-flex align-items-center gap-2">
                                        Which other forms of payment do you take?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        We accept payments through major credit and debit cards. Additionally, we offer a
                                        Cash on Delivery (COD) option for most UK regions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingNine">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                    aria-expanded="false" aria-controls="collapseNine">
                                    <div class="d-flex align-items-center gap-2">
                                        Can you use electric scooters when you are not of a certain age?
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        Electric scooters can be ridden legally in the UK by those who are at least 14 years
                                        of age. However, we would still advise checking local regulations as they are
                                        different all over the country.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-0 py-sm-4 py-3">
                            <h2 class="accordion-header" id="headingTen">
                                <button
                                    class="accordion-button collapsed bg-transparent shadow-none text-slate-900 text-2xl font-hubot font-semibold p-0 gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                    aria-expanded="false" aria-controls="collapseTen">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2">
                                            But how do I look after my electric scooter?
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pb-0 px-0">
                                    <p class="mb-0 text-gray-500 font-inter-regular text-lg">
                                        Some tips include looking at tire pressure, maintaining a battery charge, and brake
                                        checks. Also, we advise that you bring in your scooter for professional servicing
                                        from time to time, so that your scooter is always working in tip top order.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section style="">
        <div class="container">
            <section class="py-2">
                <h1 text-slate-900 text-4xl font-hubot font-semibold mb-3 text-32px-mob>{{ __('About Invertor Lux – Moldova’s Air Conditioning Partner')}}</h1>
                <p class="fs-5">{{ __('Your Comfort is Our Craft. Your Satisfaction is Our Promise.')}}</p>
            </section>

            <article class="">
                <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    {!! __('At <strong>Invertor Lux</strong>, we believe that comfort is more than a luxury — it’s a necessity. Established in 2024 and headquartered in <strong>Chișinău, Moldova</strong>, we have rapidly grown into a trusted name in <strong>air conditioning sales and professional installation services</strong>, proudly serving residential homes, businesses, and institutions throughout the country.') !!}
                </p>
                <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    {{ __('With a customer-first philosophy and a team of experienced HVAC professionals, we don’t just sell products — we create tailored climate control experiences that enhance everyday living and working environments.')}}
                </p>
            </article>

            <section class="py-3">
                <h2 class="fw-bold">{{ __('Who We Are')}}</h2>
                <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    {!! __('<strong>Invertor Lux</strong> was founded with a simple goal: to bring modern, energy-efficient climate solutions to every corner of Moldova. Whether it’s a small apartment, a large office space, or a commercial facility, we design and deliver cooling systems that meet your exact needs — no compromises.') !!}
                </p>
                <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    {{ __('We are more than a supplier — we are a complete service partner. From personalized consultation and expert installation to post-sale support, we are with you every step of the way.')}}
                </p>
            </section>

            <section class="py-3">
                <h2 class="fw-bold">{{ __('Our Mission')}}</h2>
                <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    {{ __('To deliver high-quality, reliable, and affordable air conditioning systems along with expert installation services that prioritize customer comfort, energy savings, and long-term performance.')}}
                </p>
            </section>

            <section class="py-3">
                <h2 class="fw-bold">{{ __('Our Vision')}}</h2>
                <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    {{ __('To be recognized as Moldova’s most respected and forward-thinking climate solutions company — where every household and business can rely on us for dependable indoor comfort and peace of mind.')}}
                </p>
            </section>

            <section class="py-3">
                <h2 class="fw-bold">{{ __('Our Core Values')}}</h2>
                <article class="">
                    <h4>{{ __('Professionalism')}}</h4>
                    <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                        {{ __('We bring technical expertise and attention to detail to every installation, ensuring it’s done right the first time.')}}    
                    </p>
                </article>

                <article class="">
                    <h4>{{ __('Trust & Integrity')}}</h4>
                    <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                        {{ __('We build long-term relationships based on honesty, transparency, and reliability. No hidden fees. No false promises.')}}    
                    </p>
                </article>

                <article class="">
                    <h4>{{ __('Innovation & Sustainability')}}</h4>
                    <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                        {{ __('We offer the latest Inverter and energy-efficient technologies to help customers save on costs and reduce their environmental impact.')}}    
                    </p>
                </article>

                <article class="">
                    <h4>{{ __('Customer-Centric Service')}}</h4>
                    <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                        {{ __('We listen carefully, respond quickly, and always put our customers’ needs at the heart of what we do.')}}    
                    </p>
                </article>

                <article class="">
                    <h4>{{ __('Nationwide Reach')}}</h4>
                    <p class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                        {{ __('We proudly serve clients across all of Moldova, regardless of your location or project size.')}}    
                    </p>
                </article>
            </section>

            <section class="py-3">
                <h3 class="text-slate-900 text-2xl font-hubot font-semibold">{{ __('What We Do')}}</h3>
                <p class="fs-5 text-gray-500 text-lg font-inter-regular">
                    {{ __('Whether you\'re cooling a cozy home, outfitting a new office, or retrofitting a large commercial site, Invertor Lux delivers:')}}
                </p>
                <ul class="lh-lg fs-5 text-gray-500 text-lg font-inter-regular">
                    <li class="list-disc">{!! __('<strong>Top-brand air conditioning units</strong> from trusted global manufacturers') !!}</li>
                    <li class="list-disc">{!! __('<strong>Custom installation plans</strong> based on your property type and layout') !!}</li>
                    <li class="list-disc">{!! __('<strong>Certified installation teams</strong> trained for residential and commercial projects') !!}</li>
                    <li class="list-disc">{!! __('<strong>Post-installation service & support,</strong> including maintenance, repair, and upgrades') !!}</li>
                    <li class="list-disc">{!! __('<strong>Fast delivery and installation</strong> anywhere in Moldova') !!}</li>
                </ul>
            </section>

            <section class="py-3">
                <h3 class="text-slate-900 text-2xl font-hubot font-semibold">{{ __('Why Choose Invertor Lux') }}?</h3>

                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">✅ {!! __('<strong>Expert Advice You Can Trust</strong> – Our team provides honest guidance to help you choose the best system for your space.') !!}</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">✅ {!! __('<strong>Transparent Pricing</strong> – Fair, upfront costs with no surprise charges.') !!}</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">✅ {!! __('<strong>Premium Product Selection</strong> – Featuring high-performance, energy-saving air conditioners.') !!}</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">✅ {!! __('<strong>Rapid Response & Delivery</strong> – We work efficiently, so you don’t have to wait to feel the difference.') !!}</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">✅ {!! __('<strong>Total Satisfaction Guarantee</strong> – We’re not happy until you’re completely comfortable.') !!}</p>
            </section>

            <section class="py-3">
                <h3 class="text-slate-900 text-2xl font-hubot font-semibold" >{{ __('Join the Invertor Lux Family')}}</h3>

                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">{{ __('Our reputation is built on the smiles of satisfied customers. Whether you\'re a homeowner looking for cooler summers, or a business needing scalable air conditioning solutions, Invertor Lux is here to serve.')}}</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">{{ __('Let us help you build a better, cooler future — one installation at a time')}}</p>
            </section>

            <section class="py-3">
                <h3 class="text-slate-900 text-2xl font-hubot font-semibold">{{ __('Contact Us')}}</h3>

                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">📍  <strong>{{__('Address')}}:&nbsp;</strong>&nbsp;{{ __('Șoseaua Muncești 400, Chișinău, MD-2002, Moldova')}}</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">📞 <strong>{{__('Phone')}}:&nbsp;</strong>&nbsp;+373 793 15 994</p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">🌐 <strong>{{ __('Website')}}:&nbsp;</strong>&nbsp;<a href="www.invertor.md">www.invertor.md</a> </p>
                <p class="fs-5 lh-lg text-gray-500 text-lg font-inter-regular">📩  <strong>{{ __('Email')}}:&nbsp;</strong>&nbsp;info@invertor.md</p>
            </section>

        </div>
    </section>


    @include('customerReview')

    @include('latestScooter')

@endsection