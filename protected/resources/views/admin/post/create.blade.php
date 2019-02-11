@extends('include.master')
@section('title','Buat Post Berita')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}">
@endsection

@section('content')
		<div class="content-right">
			<div class="container">
				<div class="content-start">
					<div class="content-header">
						<h1>Buat Post Berita</h1>
						<p>Buat Baru Post Berita.</p>
					</div>
					<form method="post" action="">
						{{ csrf_field() }}
					<div class="row">
						<div class="col-md-9">
							<div class="content-box">
								<div class="content-text-isi">
									<div class="form-group">
									    <label for="exampleInputEmail1">Nama <span class="mandatory">(*)</span></label>
									    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Berita" value="{{ old('nama') }}">
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Deskripsi <span class="mandatory">(*)</span></label>
									    <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan Deskripsi Berita">{{ old('deskripsi') }}</textarea>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Gambar <span class="mandatory">(*)</span></label>
									    <div class="">
									    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											  Launch demo modal
											</button>
									    	
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Content <span class="mandatory">(*)</span></label>
									    <textarea class="form-control" id="editor1" rows="3" name="content">{{ old('content') }}</textarea>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<div class="content-text-header">Terbitkan</div>
									<div class="content-text-isi">
										<button type="submit" class="btn col-md-6  btn-primary">Submit</button>
										<a href="{{url('administrator/post-berita')}}" class="btn col-md-5 btn-warning">Batal</a>	
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
							<div class="content-box">
								<div class="content-text-header">Categories <span class="mandatory">(*)</span></div>
									<div class="content-text-isi">
										@foreach($cat as $key=>$cats)
										<div class="custom-control custom-checkbox">
										  <input type="checkbox" name="categories[]" class="custom-control-input" id="customCheck{{$key+1}}" value="{{$cats->id}}">
										  <label class="custom-control-label" for="customCheck{{$key+1}}">{{$cats->name}}</label>
										</div>
										@endforeach
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
<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script>
 CKEDITOR.replace( 'editor1' );	
</script>
@if($errors->any()) 
	<script>
		 toastr.error('Silahkan isi yang bertanda (*)');
	</script>
@endif
@endsection

