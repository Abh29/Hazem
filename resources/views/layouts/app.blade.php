<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{-- page styles  --}}
    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="css/fullcalendar.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="css/jquery.bxslider.css" rel="stylesheet"> 
	<!-- Font Awesome StyleSheet CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="svg/style.css" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="css/widget.css" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="css/typography.css" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="css/shortcodes.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="style.css" rel="stylesheet">
	<!-- Color CSS -->
	<link href="css/color.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="css/selectric.css" rel="stylesheet">
	<!-- SIDE MENU -->
	<link rel="stylesheet" href="css/jquery.sidr.dark.css">
    
    @yield('css')

</head>
<body>
    <div id="app">
    
        <main class="py-4">
                @yield('content')
        </main>
    </div>

    {{-- pages css --}}

    <!--Bootstrap core JavaScript-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Bx-Slider JavaScript-->
	<script src="js/jquery.bxslider.min.js"></script>
	<!--Owl Carousel JavaScript-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Pretty Photo JavaScript-->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!--Full Calender JavaScript-->
	<script src="js/moment.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery.downCount.js"></script>
	<!--Image Filterable JavaScript-->
	<script src="js/jquery-filterable.js"></script>
	<!--Accordian JavaScript-->
	<script src="js/jquery.accordion.js"></script>
	<!--Number Count (Waypoints) JavaScript-->
	<script src="js/waypoints-min.js"></script>
	<!--v ticker-->
	<script src="js/jquery.vticker.min.js"></script>
	<!--select menu-->
	<script src="js/jquery.selectric.min.js"></script>
	<!--Side Menu-->
	<script src="js/jquery.sidr.min.js"></script>
	<!--Custom JavaScript-->
	<script src="js/custom.js"></script>
    
    @yield('js')

</body>
</html>
