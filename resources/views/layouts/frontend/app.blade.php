<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="{{ asset('assets/frontend/common-css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/common-css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/common-css/ionicons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/front-page-category/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/front-page-category/css/responsive.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>

    @include('layouts.frontend.partials.header')
	@yield('content')
    @include('layouts.frontend.partials.footer')

	<!-- SCIPTS -->
	<script src="{{ asset('assets/frontend/common-js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/tether.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/swiper.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/scripts.js') }}"></script>
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	{!! Toastr::message() !!}
	 
	<script>
		@if($errors->any())
			 @foreach($errors->all() as $error)
				 toastr.error('{{ $error }}', 'Error')
			 @endforeach
		 @endif    
	</script>
</body>
</html>
