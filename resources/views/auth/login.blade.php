<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('Login') }}</title>	
		<link rel="icon" href="{{asset('assets/img/logo.jpg')}}">
        <link type="text/css" href="{{asset('assets/css/demos/photo.css')}}" rel="stylesheet" />
  </head>

<body>
    <section class="login">
        <div class="container">
            <div class="banner-content">
                <h1><i class="fa fa-smile"></i> {{ __('Fluffs') }}</h1>
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 class="form-signin-heading">{{ __('Please sign in') }}</h3>
                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit">{{ __('Sign in') }}</button>
                    <br/>
                    <a class="btn btn-dark " href="{{ route('register') }}" role="button">{{ __('Dont have an account yet? Register Here.') }}</a>
                    @if (Route::has('password.request'))
                        <a class="btn btn-dark " href="{{ route('password.request') }}" role="button">{{ __('Forgot your password?') }}</a>
                    @endif
                </form>
            </div>
        </div>
    </section> 
  
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/base.js')}}"></script>

  </body>
</html>
