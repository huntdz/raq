@extends('include.layouthome')
@section('title','Layanan Kami')

@section('banner')
<div class="banner_header banner_sub_header">
    <div style="background-image:url('{{ asset('images/bg_layanan.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 1;"></div>
    <h3>Layanan Kami</h3><p>Melayani hewan quban, tasyakuran aqiqoh siap haji</p>
</div>

@endsection

@section('content')
<div class="ourcrumbs">
	<div class="container">
		<ul>
			<li><a href="{{URL('/')}}">Beranda</a></li>
			<li>Layanan Kami</li>
		</ul>
	</div>
</div>
<section class="sec_layanan">
		<div class="container">
			<div class="row">
				<div class="split_5">
					<div class="banner_sec_landing_1">
                    	<img src="{{ asset('images/layanan1.jpg') }}">
                	</div>
				</div>
				<div class="split_7">
					<div class="general_c_">
						<h1>Paket Aqiqoh</h1>
						<p>Paket aqiqoh terdiri dari paket A-F, dan juga tasyakuran.Menu ini terdiri dari varian sate dan gule.</p>
						<table>
							<thead>
								<tr>
									<th>Tipe (paket)</th>
									<th>Harga</th>
									<th>Sate (Tusuk)</th>
									<th>Gule (Porsi)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>A</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
								<tr>
									<td>B</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
								<tr>
									<td>C</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
								<tr>
									<td>D</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
								<tr>
									<td>E</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
								<tr>
									<td>F</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
								<tr>
									<td>Tasyakuran</td>
									<td>Rp. 1400.000</td>
									<td>250</td>
									<td>80</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</section>	

<section class="sec_layanan">
		<div class="container">
			
					<div class="general_c_">
						<h1>Paket Nasi Kotak</h1>
						<p>Paket nasi kotak terdiri dari paket A-E.Menu ini terdiri dari nasi, acar, dan lain-lain.</p>
						<table>
							<thead>
								<tr>
									<th>Paket</th>
									<th>Menu</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>A</td>
									<td>Nasi, acar, krupung, udang, buah, perlengkapan makan (sendok, tius, tusuk gigi), stiker hajatan</td>
									<td>Rp. 8.500</td>
								</tr>
								<tr>
									<td>B</td>
									<td>Nasi, acar, krupung, udang, buah, perlengkapan makan (sendok, tius, tusuk gigi), stiker hajatan</td>
									<td>Rp. 8.500</td>
								</tr>
								<tr>
									<td>C</td>
									<td>Nasi, acar, krupung, udang, buah, perlengkapan makan (sendok, tius, tusuk gigi), stiker hajatan</td>
									<td>Rp. 8.500</td>
								</tr>
								<tr>
									<td>D</td>
									<td>Nasi, acar, krupung, udang, buah, perlengkapan makan (sendok, tius, tusuk gigi), stiker hajatan</td>
									<td>Rp. 8.500</td>
								</tr>
								<tr>
									<td>E</td>
									<td>Nasi, acar, krupung, udang, buah, perlengkapan makan (sendok, tius, tusuk gigi), stiker hajatan</td>
									<td>Rp. 8.500</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				
		</div>
</section>
<section class="sec_layanan">
		<div class="container">
			<div class="row">
				<div class="split_5">
					<div class="banner_sec_landing_1">
                    	<img src="{{ asset('images/layanan3.jpg') }}">
                	</div>
				</div>
				<div class="split_7">
					<div class="general_c_">
						<h1>Paket Tambahan</h1>
						<p>Kami juga menyediakan aneka menu tambahan, diantaranya adalah</p>
						<ul>
							<li>Lapis</li>
							<li>Rendang</li>
							<li>Krengsengan</li>
							<li>rica-rica/tongseng</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
</section>	
@endsection

@section('js')
<script src="{{asset('assets/js/custom.js')}}"></script>
@endsection