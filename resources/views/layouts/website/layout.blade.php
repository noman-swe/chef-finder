<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food Code Proudly Presents By Themexpert</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="{{ asset('website/css/nivo-slider.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('website/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('website/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">

	<!-- jS -->
	<script src="{{ asset('website/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('website/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('website/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
	<script src="{{ asset('website/js/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('website/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('website/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}" type="text/javascript"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>

	@include('layouts.website.header')
    @yield('content')
	@include('layouts.website.footer')

</body>
</html>