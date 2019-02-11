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
						<h1>Media Manager</h1>
						<p>Informasi Media Manager.</p>

					</div>
					<div class="row">
						<div class="col-md-3">
						<div class="content-box">
							<div class="content-text-header">
								<div class="row">
									<div class="col-md-12"> 
										
										<div class="filemanager">
											<form method="post" enctype="multipart/form-data">
											{{ csrf_field() }}	
												<input type="file" name="file" id="file" class="inputfile" />
												<label for="file">Choose a file</label>
											</form>
										</div>
										
										<div class="sortby">
											<h4>Sort By</h4>
											<ul class="nav flex-column nav-tabs" >
												<li>
													<a class="active" data-toggle="tab" href="#all">
														<i class="ico icon-folder-new"></i> All
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#images" ><i class="ico icon-folder-new"></i> Images</a>
												</li>
												<li>
													<a data-toggle="tab" href="#document"><i class="ico icon-folder-new"></i> Document
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#video"><i class="ico icon-folder-new"></i> Video
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						</div>
						<div class="col-md-9">
							<div class="content-box">
							<div class="content-text-header">
								<div class="row">
									<div class="col-md-12"> <h4>List Media</h4></div>
								</div>
							</div>
							<div class="tab-content content-filemanager">
								<div class="backgrounProgress">						
									<div class="widthprogress">
										<div class="progress">
									  		<div class="progress-bar" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade show active" id="all" ></div>
								<div class="tab-pane fade" id="images" ></div>
								<div class="tab-pane fade" id="document" ></div>
								<div class="tab-pane fade" id="video" ></div>
							</div>
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
<script src="{{ asset('assets/js/custom/jquery.jscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/mediafiles.js') }}"></script>
@endsection
	