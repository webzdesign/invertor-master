<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Skootz is unique combination of high quality products and excellent customer service.">
<meta name="facebook-domain-verification" content="9wtd1mndzstptvdq44oem96afptaij" />
<meta name="google-site-verification" content="LR_u2j_o9y2rXRCnck9iFjnXitl2flRbIRofPsd8-Q0" />
<link rel="shortcut icon" href="{{ asset( 'assets/images/favicon.ico' ) }}" type="image/x-icon">

<title>SKOOTZ | Buy E-Scooters Online</title>

<link rel="stylesheet" href="{{ asset( 'assets/css/bootstrap.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/swiper-bundle.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/owl.carousel.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/slick-theme.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/slick.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/style.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/utilities.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/responsive.css' ) . '?' . time() }}">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KVZL6F4V');</script>
<!-- End Google Tag Manager -->

<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.measurementId') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{ config('services.ga4.measurementId') }}');
</script>