<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>	
    
    <link rel="icon" href="{{ asset('assets/img/logo.jpg') }}">
    <link type="text/css" href="{{ asset('assets/css/demos/photo.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/modernizr-custom.js') }}"></script>
</head>
<body>
     @include('layouts.header')
    
     @yield('content')
	 
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/base.js') }}"></script>
	<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.js') }}"></script>
	<script>
		$('#Slim,#Slim2').slimScroll({
				height:"auto",
				position: 'right',
				railVisible: true,
				alwaysVisible: true,
				size:"8px",
			});		
	</script>
  </body>
</html>