<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFLENS9J52"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZFLENS9J52');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16832855332"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16832855332');
</script>



<!-- conversion tag -->
@yield('conversion')
<!-- end conversion tag -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="title" content="@yield('title')">
<meta name="description" content="@yield('description')">
<meta name="facebook-domain-verification" content="9wtd1mndzstptvdq44oem96afptaij" />
<meta name="google-site-verification" content="LR_u2j_o9y2rXRCnck9iFjnXitl2flRbIRofPsd8-Q0" />
<link rel="shortcut icon" href="{{ asset( 'assets/images/favicon.ico' ) }}" type="image/x-icon">

<title> @yield('title')</title>

<link rel="stylesheet" href="{{ asset( 'assets/css/bootstrap.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/swiper-bundle.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/owl.carousel.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/slick-theme.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/slick.min.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/style.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/utilities.css' ) . '?' . time() }}">
<link rel="stylesheet" href="{{ asset( 'assets/css/responsive.css' ) . '?' . time() }}">

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '926797672983731');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=926797672983731&ev=PageView&noscript=1"
  /></noscript>
</script>
  <!-- End Meta Pixel Code -->




