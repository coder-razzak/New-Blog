<!DOCTYPE HTML>
<html lang="en">
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
    <link href="{{ asset('assets/frontend/blank-static/css/styles.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/blank-static/css/responsive.css') }}" rel="stylesheet">

</head>
<body >
	@include('layouts.frontend.partials.header')

	<div class="slider display-table center-text">
		<h1 class="title display-table-cell"><b>BEAUTY</b></h1>
	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="post-wrapper">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>

					</div><!-- post-wrapper -->
                </div><!-- col-sm-8 col-sm-offset-2 -->
                <div class="col-lg-2 col-md-0"></div>
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- section -->


    @include('layouts.frontend.partials.footer')


	<!-- SCIPTS -->
	<script src="{{ asset('assets/frontend/common-js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/tether.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/swiper.js') }}"></script>
	<script src="{{ asset('assets/frontend/common-js/scripts.js') }}"></script>

</body>
</html>
