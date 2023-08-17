<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Home | E Shop</title>
	

	<!-- Font awesome -->
    <link href="{{ URL::asset('public/assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('public/assets/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ URL::asset('public/assets/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/jquery.simpleLens.css') }}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('public/assets/css/theme-color/default-theme.css') }}" rel="stylesheet">
    <!-- <link id="switcher" href="{{ URL::asset('public/assets/css/theme-color/bridge-theme.css') }}" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ URL::asset('public/assets/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ URL::asset('public/assets/css/style.css') }}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


	</head>
	<body>
	<!-- wpf loader Two -->
    <!-- <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>  -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

		<x-nav/>
		@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  {{Session::get('success')}}
		</div>
		@endif
		@if(Session::has('error'))
		<div class="alert alert-success" role="alert">
			<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  {{Session::get('error')}}
		</div>
		@endif

        @yield('content')   
		@include('widgets.footer')
	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ URL::asset('public/assets/js/bootstrap.js') }}"></script>  
	<!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery.smartmenus.js') }}"></script>
	<!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery.smartmenus.bootstrap.js') }}"></script>  
	<!-- To Slider JS -->
	<script src="{{ URL::asset('public/assets/js/sequence.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/sequence-theme.modern-slide-in.js') }}"></script>  
	<!-- Product view slider -->
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery.simpleGallery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery.simpleLens.js') }}"></script>
	<!-- slick slider -->
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/slick.js') }}"></script>
	<!-- Price picker slider -->
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/nouislider.js') }}"></script>
	<!-- Custom js -->
	<script src="{{ URL::asset('public/assets/js/custom.js') }}"></script> 
    @yield('js')
	</body>
</html>

