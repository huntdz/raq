<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{!! csrf_token() !!}" />
		<title>System - @yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/administrator.css') }}">
		@yield('css')
	</head>
	<body>
		<div class="headeradmin">
			@include('include.header')
		</div>
		<div class="contentadmin">
			<div class="content-menu-left">
				@include('include.menu')
			</div>
			@yield('content')
		</div>	
		
		<script src="{{ asset('assets/js/jquery-2.1.1.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		@yield('js')
		<script src="{{ asset('assets/js/custom.js') }}"></script>
	</body>
</html>