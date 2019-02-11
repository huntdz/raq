<div class="menutop">
	<div class="mask_menutop"></div>
	<div class="menutop_main" id="mySidenav">
	<div class="close_menutop"><span onclick="closeNav()"><i class="fa fa-times"></i></span></div>
	<ul id="side-menu">
		<li>
			<a href="{{URL('/')}}"  class="{{ request()->is('/') ? 'actives' : '' }}">Beranda</a>
		</li>
		<li>
			<a href="{{ URL('layanan-kami') }}" class="{{ request()->is('layanan-kami') ? 'actives' : '' }}">Layanan Kami</a>
		</li>
		<li>
			<a href="{{URL('gallery')}}" class="{{ request()->is('gallery') ? 'actives' : '' }}">Gallery</a>
		</li>
		<li>
			<a href="{{URL('investasi')}}" class="{{ request()->is('investasi') ? 'actives' : '' }}">Investasi</a>
		</li>
	</ul>
	</div>
	<div class="contactTop">
		<div class="CT_TextIcon">
			<i class="fa fa-mobile-alt"></i>
		</div>
		<div class="CT_TextHubungi">
			<p>Hubungi Kami</p>
			<p class="__phone">+62 813 21180 583</p>
			
		</div>
	</div>
	<div class="nav-bars">
		<span onclick="openNav()"><i class="fa fa-bars"></i></span>
	</div>
</div>