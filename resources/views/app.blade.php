<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>MedVision - Medical Simulations</title>
    <meta name="description"
        content="MedVision">
    <meta name="keywords"
        content="medical, simulations">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="animsition">
        <div class="site-wrapper transparent-header">
          @include('partials/header')
          @yield('content')
          @include('partials/footer')
          @include('partials/ctaBar')
        </div>
    </div>

      <!-- Javascript -->
      <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/animsition.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.appear.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/countto.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.stickit.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/magnific.popup.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>