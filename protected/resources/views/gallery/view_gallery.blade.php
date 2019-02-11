@extends('include.layouthome')
@section('title','Gallery')

@section('banner')
<div class="banner_header banner_sub_header">
    <div style="background-image:url('{{ asset('images/bg_gallery.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 1;"></div>
    <h3>Gallery Kami</h3><p>Merupakan moment yang kami abadikan setiap client</p>
</div>

@endsection

@section('content')
<div class="ourcrumbs">
	<div class="container">
		<ul>
			<li><a href="{{URL('/')}}">Beranda</a></li>
			<li>Gallery</li>
		</ul>
	</div>
</div>	
	<section class="sec_layanan">
		<div class="container">
			<div class="galleries">
				<ul>
					<li>
						<a href=""><img src="{{ asset('images/layanan1.jpg') }}">
							<div class="title_gallery">
								<small><i class="fa fa-time"></i> Selasa 16 Januari</small>
								<h4>Lorem Ipsum Dolor Set Amet Dolor Set Amet</h4>
							</div>
						</a>
					</li>
					<li>
						<a href=""><img src="{{ asset('images/layanan1.jpg') }}">
							<div class="title_gallery">
								<small><i class="fa fa-time"></i> Selasa 16 Januari</small>
								<h4>Lorem Ipsum Dolor Set Amet Dolor Set Amet</h4>
							</div>
						</a>
					</li>
					<li>
						<a href=""><img src="{{ asset('images/layanan1.jpg') }}">
							<div class="title_gallery">
								<small><i class="fa fa-time"></i> Selasa 16 Januari</small>
								<h4>Lorem Ipsum Dolor Set Amet Dolor Set Amet</h4>
							</div>
						</a>
					</li>
					<li>
						<a href=""><img src="{{ asset('images/layanan1.jpg') }}">
							<div class="title_gallery">
								<small><i class="fa fa-time"></i> Selasa 16 Januari</small>
								<h4>Lorem Ipsum Dolor Set Amet Dolor Set Amet</h4>
							</div>
						</a>
					</li>
					
				</ul>
			</div>
	    </div>
	</section>    		

</div>
@endsection

@section('js')
<script src="{{asset('assets/js/custom.js')}}"></script>
@endsection