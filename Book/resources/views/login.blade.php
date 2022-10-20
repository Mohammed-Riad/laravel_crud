@extends('master')


@section('section1')
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif
<style>
	.lo
	{
		padding-top: 100px;
	}
</style>
<div class="row justify-content-center" style="margin-top:100px; "> 
	<div class="col-md-4">
		<div class="card">
			<div class="card-header"><a href="sign">Register</a>
			<div class="card-body">
				<form action="Login" method="post">
					@csrf
					<div class="form-group mb-3">
						<input type="text" name="email" class="form-control" placeholder="Email" />
						@error('email')
						<span class="text-danger">{{ $message }}</span>
					  @enderror
					</div>
					<div class="form-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password" />
						@error('password')
						<span class="text-danger">{{ $message }}</span>
					  @enderror
					</div>
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-dark btn-block">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection