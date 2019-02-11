@extends('include.master')
@section('title','Out Permission')

@section('css')
@endsection

@section('content')

		<div class="content-right">
			<div class="container">
				<div class="content-start">
					<div class="content-header">
						<h1>Upps</h1>
						<p>Informasi diluar jangkauan.</p>
					</div>
					<div class="content-box">
						<div class="content-text-header">
							<div class="row">
								<div class="col-md-12"><h4>Peringatan</h4></div>
							</div>
						</div>
						<div class="content-text-isi">
							<p><span style="color:red">Konten ini mungkin saja tidak tersedia, atau diluar jangkauan</span>
							</p>
								<a href="{{ url('administrator/post-berita') }}" class="btn btn-primary">Kembali</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('js')
@endsection
	