@extends('include.master')
@section('title','Kategori Berita')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}">
@endsection

@section('content')

		<div class="content-right">
			<div class="container">
				<div class="content-start">
					<div class="content-header">
						<h1>Kategori Berita</h1>
						<p>Pembuatan Informasi Kategori Berita.</p>
					</div>
					<div class="content-box">
						<div class="content-text-header">
							<div class="row">
								<div class="col-md-6"><h4>Kategori Berita</h4></div>
								<div class="col-md-6">
									<div class="button-group-table">
										<a href="{{URL('administrator/ketegori-berita/create')}}" class="btn btn-primary"><i class="ico icon-plus"></i> Create</a>
										<span class="dropdown">
											<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action</a>
											  <div class="dropdown-menu dropdown-table-action dropdown-menu-right" aria-labelledby="dropdownMenuLink">
											    <a class="dropdown-item hapusany" href="#">Delete</a>
											    <a class="dropdown-item giveactive" href="#">Active</a>
											    <a class="dropdown-item givedeactive" href="#">Deactive</a>
											  </div>
										</span>
										<a href="" class="btn btn-primary">Filter</a>
									</div>
								</div>
							</div>
						</div>
						<div class="content-text-isi">
							<div class="table-responsive">
							  <table class="table table-striped">
								  <thead>
								    <tr>
								      <th scope="col">
										  <input type="checkbox" id="checkAll">
								      </th>
								      <th scope="col">Name</th>
								      <th scope="col">Created At</th>
								      <th scope="col">Updated At</th>
								      <th scope="col">Status</th>
								      <th scope="col">Operation</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@if(count($cats) ==0)
								  	<tr>
								  		<td colspan="6" style="text-align:center">No data available</td>
								  	</tr>	
								  	@else
								  	@foreach($cats as $index=>$cat)
								    <tr id="sort{{ $cat->id }}">
								      <th scope="row">
								      	@if($cat->is_default == '1')
								      	@else
								      	<input type="checkbox" id="Check-{{$index+1}}" value="{{$cat->id}}">
								      	@endif
								      </th>
								      <td>{{$cat->name}}</td>
								      <td>{{$cat->created_at}}</td>
								      <td>{{$cat->updated_at}}</td>
								      <td>
								      	@if($cat->status == '1')
								      		<span class="badge badge-primary">Aktif</span>
								      	@else
								      		<span class="badge badge-primary">Tidak Aktif</span>
								      	@endif	
								      </td>
								      <td>
								      	@if($cat->is_default == '1')
								      	<a href="{{URL('administrator/ketegori-berita/edit',$cat->id)}}" class="btn btn-primary">Edit</a> 
								      	@else
								      	<a href="{{URL('administrator/ketegori-berita/edit',$cat->id)}}" class="btn btn-primary">Edit</a> 
								      	<a href="#" class="btn btn-danger hapus" data-id='{{ $cat->id }}'>Delete</a>
								      	@endif
								      </td>
								    </tr>
								    @endforeach
								    @endif
							  </table>
							  <nav class="Page navigation example">
							  {{ $cats->links() }}
							  </nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('js')
<script src="{{asset('assets/js/subcustom.js')}}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/kategoripost.js') }}"></script>
@if(Session::has('flash_message')) 
	<script>
		 toastr.success("{{ Session::get('flash_message') }}");
	</script>
@endif
@endsection
	