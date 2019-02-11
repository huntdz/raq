<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{!! csrf_token() !!}" />
		<title>Rumah Aqiqoh Kamil - @yield('title')</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('images/icon/favicon.png') }}">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/master.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slider.css') }}">
		@yield('css')
	</head>
	<body>
	    <header class="header">
		 <div class="container">
			<div class="main_header">
				<div class="logoTop">
					<a href="{{URL('/')}}">
					<img src="{{ asset('images/logo-putih.png') }}">
					</a>
				</div>
				@include('include.menu-home')
			</div>
		 </div>	
		</header> 
		@yield('banner')
		
		<div class="main">
			@yield('content')
		</div>
		
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="split_6">
						<div class="footer-content">
							<h2>
								Alamat Kami
							</h2>
							<p>Jalan. Mangga RT.04 / RW.02 Jatisari, Geger, Madiun - Jawa Timur</p>
							<p>Telp. +62 813 21180 583 / +62 852 9374 4780</p>
							<p style="margin-top:10px;"><b>Temukan Kami di</b></p>
							<ul>
								<li>
									<a href="#"> <i class="fab fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="split_6">
						<div class="footer-content">
							<h2>
								Hadist Tentang Aqiqoh
							</h2>
							<p class="hadist-footer">"Tiap-tiap anak itu ada aqiqohnya, maka sembelihlah binatang aqiqoh untuknya dan buanglah kotoran darinya (cukur rambutnya)". (HR. Bukhari Juz 6, hal.217)</p>
							
							<p class="copyright">© Copyright 2019. All Rights Reserved. rumahaqiqohkamil.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="{{ asset('assets/js/jquery-2.1.1.js') }}"></script>
		@yield('js')
		
	</body>
</html>