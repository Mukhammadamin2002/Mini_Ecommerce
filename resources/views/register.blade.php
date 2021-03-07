@extends('master')
@section('content')
<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="register" method="post">
			@csrf
			  <div class="form-group">
				<h2 class="text-center">Register</h2>
			    <label for="exampleInputEmail1">User Name</label>
			    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Username">
			  </div>			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			  </div>

			  <button type="submit" class="btn btn-info">Register</button>
			</form>
		</div>
	</div>
</div>
@endsection