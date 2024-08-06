<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Meta Tag -->
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontend/css/responsive.css') }}">
</head><!--/head-->

<body class="js">
    <!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!--/header-->
	@include("layouts.fontend.elements.header")
	<!--/slider-->
	@include("layouts.fontend.elements.slide")
	<section>
		<div class="container">
            @yield('content')
		</div>
	</section>
	@include("layouts.fontend.elements.footer")
	<!--/Footer-->
    <!-- Jquery -->
	<script src="{{ asset('js/fontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/fontend/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('js/fontend/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('js/fontend/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('js/fontend/js/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	<script src="{{ asset('js/fontend/js/colors.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('js/fontend/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('js/fontend/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('js/fontend/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('js/fontend/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('js/fontend/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('js/fontend/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('js/fontend/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('js/fontend/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('js/fontend/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('js/fontend/js/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('js/fontend/js/active.js') }}"></script>
</body>
</html>
