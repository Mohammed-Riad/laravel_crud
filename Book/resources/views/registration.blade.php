@extends('master')

@section('section1')
<div class="row justify-content-center" style="margin-top:100px; ">
	<div class="col-md-4">
		<div class="card">
		<div class="card-header"><a href="login" >login</a></div>
		<div class="card-body">
			<form action="regstare" method="POST">
				@csrf
				<div class="form-group mb-3">
					<input type="text" name="name" class="form-control" placeholder="Name" />
					@error('name')
						<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group mb-3">
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
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
					<button type="submit" class="btn btn-dark btn-block">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>
  </section>
@endsection