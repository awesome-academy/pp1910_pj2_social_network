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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h3 class="form-signin-heading">{{ __('Forgot Password') }}</h3>
                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>
                </form>
            </div>
        </div>
    </section> 

	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/base.js')}}"></script>
  </body>
</html>