<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/logins.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}">
	</head>
	<body>
	<div class="login">
		<div class="login-logo">
		<a href="{{URL('/')}}">	
		 <img src = "{{asset('images/logo-hijau.png')}}">
		 </a> 
		</div> 
	    <h1>Login Here</h1>
		<form method="post" action="{{ route('login') }}">
		 {{ csrf_field() }}
		  <div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary">Login</button>
		  <small id="emailHelp" class="form-text text-muted" style="text-align:center">©rumahaqiqohkamil.com. All rights reserved.</small>
		</form>
	</div>
	<script src="{{ asset('assets/js/jquery-2.1.1.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
	@if ($errors->has('email')) 
	<script>
		 toastr.error('{{ $errors->first('email') }}');
	</script>	
	@endif
	@if ($errors->has('password')) 
	<script>
		 toastr.error('{{ $errors->first('password') }}');
	</script>	
	@endif
	
	</body>
</html>