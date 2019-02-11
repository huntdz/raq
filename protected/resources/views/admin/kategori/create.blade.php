@extends('include.master')
@section('title','Buat Kategori Berita')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}">
@endsection

@section('content')
		<div class="content-right">
			<div class="container">
				<div class="content-start">
					<div class="content-header">
						<h1>Buat Kategori Berita</h1>
						<p>Buat Baru Kategori Berita.</p>
					</div>
					<form method="post" action="">
						{{ csrf_field() }}
					<div class="row">
						<div class="col-md-9">
							<div class="content-box">
								<div class="content-text-isi">
									<div class="form-group">
									    <label for="exampleInputEmail1">Nama <span class="mandatory">(*)</span></label>
									    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kategori">
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Deskripsi <span class="mandatory">(*)</span></label>
									    <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan Deskripsi Kategori"></textarea>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<div class="content-text-header">Terbitkan</div>
									<div class="content-text-isi">
										<button type="submit" class="btn col-md-6  btn-primary">Submit</button>
										<a href="{{url('administrator/ketegori-berita')}}" class="btn col-md-5 btn-warning">Batal</a>	
									</div>
							</div>

							<div class="content-box">
								<div class="content-text-header">Status <span class="mandatory">(*)</span></div>
									<div class="content-text-isi">
										<select class="form-control" name="status">
										  <option value="1">Aktif</option>
										  <option value="0">Tidak Aktif</option>
										</select>
									</div>
							</div>
						</div>	
					</div>
				</form>
				</div>
			</div>
		</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
@if($errors->any()) 
	<script>
		 toastr.error('Silahkan isi yang bertanda (*)');
	</script>
@endif
@endsection

