@extends('include.master')
@section('title','Post Berita')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}">
@endsection

@section('content')

		<div class="content-right">
			<div class="container">
				<div class="content-start">
					<div class="content-header">
						<h1>Post Berita</h1>
						<p>Pembuatan Informasi Berita.</p>
					</div>
					<div class="content-box">
						<div class="content-text-header">
							<div class="row">
								<div class="col-md-6"><h4>Post Berita</h4></div>
								<div class="col-md-6">
									<div class="button-group-table">
										<a href="{{URL('administrator/post-berita/create')}}" class="btn btn-primary"><i class="ico icon-plus"></i> Create</a>
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
								  	@if(count($post) ==0)
								  	<tr>
								  		<td colspan="6" style="text-align:center">No data available</td>
								  	</tr>	
								  	@else
								  	@foreach($post as $index=>$posts)
								    <tr id="sort{{ $posts->id }}">
								      <th scope="row">
								      	<input type="checkbox" id="Check-{{$index+1}}" value="{{$posts->id}}">
								      	
								      </th>
								      <td>{{$posts->name}}</td>
								      <td>{{$posts->created_at}}</td>
								      <td>{{$posts->updated_at}}</td>
								      <td>
								      	@if($posts->status == '1')
								      		<span class="badge badge-primary">Aktif</span>
								      	@else
								      		<span class="badge badge-primary">Tidak Aktif</span>
								      	@endif	
								      </td>
								      <td>
								      	<a href="{{URL('administrator/post-berita/edit',$posts->id)}}" class="btn btn-primary">Edit</a> 
								      	<a href="#" class="btn btn-danger hapus" data-id='{{ $posts->id }}'>Delete</a>
								      </td>
								    </tr>
								    @endforeach
								    @endif
							  </table>
							  <nav class="Page navigation example">
							  {{ $post->links() }}
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
<script src="{{ asset('assets/js/custom/Postpost.js') }}"></script>
@if(Session::has('flash_message')) 
	<script>
		 toastr.success("{{ Session::get('flash_message') }}");
	</script>
@endif
@endsection
	