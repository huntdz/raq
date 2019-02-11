@extends('include.layouthome')
@section('title','Investasi')

@section('banner')
<div class="banner_header banner_sub_header">
    <div style="background-image:url('{{ asset('images/bg_investasi.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 1;"></div>
    <h3>Investasi Qurban</h3><p>Gebyar Investasi Qurban</p>
</div>

@endsection

@section('content')

<div class="ourcrumbs">
	<div class="container">
		<ul>
			<li><a href="{{URL('/')}}">Beranda</a></li>
			<li>Investasi</li>
		</ul>
	</div>
</div>	

<section class="sec_investasi">
	<div class="container">
		<div class="row">
			<div class="split_5">
				<img src="{{ asset('images/investternaknesia.jpeg')}}">
			</div>
			<div class="split_7">
				<h1>Gebyar Investasi Qurban Ternaknesia 2019</h1>
				<p>Saya Eko, peternak asal madiun, Alhamdulillah tahun ini dapat bekerjasama dengan tim ternaknesia untuk membuka Proyek Investasi Qurban Kambing Jatisari 2019. Saya saat ini sedang menjalankan amanah sebagai ketua Himpunan Peternak Domba Kambing (HPDKI) di Madiun. Pada tahun 2018 lalu, Saya pernah membuka proyek permodalan bersama Ternaknesia, dan menghasilkan ROI sebesar 12% pada akhir periode. </p>

				<p>Saat ini saya kembali membuka proyek permodalan dengan modal mulai dari 500 ribu/slot dan ROI 9-12% hanya dalam 6 bulan.</p>
				 
				<p>Kalau sobat tertarik dengan proyek saya, sobat bisa mengunjungi
				<br><a href="http://bit.ly/investEko2">http://bit.ly/investEko2</a>
				<br><a href="http://bit.ly/investEko2">http://bit.ly/investEko2</a>
				<br>pelajari proposalnya, dan Selamat Berinvestasi </p>
				 
				<p>Salam,
				Sobatmu Eko, 
				Peternak asal Madiun</p>
			</div>
		</div>
	</div>
</section>

@endsection

@section('js')
<script src="{{asset('assets/js/custom.js')}}"></script>
@endsection