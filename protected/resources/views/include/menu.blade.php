<ul>
	<li><a href="{{ url('administrator')}}"><i class="ico icon-jendela"></i> Beranda</a></li>
	<li><a href="{{ url('administrator/post-berita')}}" class="menu-collapse" data-toggle="collapse" data-target="#collapseZero"><i class="ico icon-post"></i> Post Berita</a>
		<ul id="collapseZero" class="collapse">
			<li>
				<a href="{{ url('administrator/post-berita')}}">
					<i class="ico icon-tas"></i> All Post 
				</a>
				<a href="{{ url('administrator/ketegori-berita')}}">
					<i class="ico icon-stempel"></i>  Kategori Post
				</a>
			</li>
		</ul>
	</li>
	<li><a href="{{ url('administrator/media')}}"><i class="ico icon-media"></i> Media</a></li>
	<li><a href="#" class="menu-collapse" data-toggle="collapse" data-target="#collapseOne"><i class="ico icon-klipbuku"></i> Master Data</a>
		<ul id="collapseOne" class="collapse">
			<li><a href=""><i class="ico icon-mobil"></i> Jenis Kendaraan</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="ico icon-rambu-rambu"></i> Permission</a>
	</li>
	<li><a href="#"><i class="ico icon-setting"></i> Setting</a></li>
</ul>
