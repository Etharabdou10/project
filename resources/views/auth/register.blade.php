@section('content')
@extends('admin.layouts.regmain')
@section('content_reg')
<div class="col-md-7">
	<form method="POST" action="{{ route('register') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
		@csrf
		<h3 class="fw-semibold mb-5">REGISERTATION FORM</h3>
		<div class="form-group d-flex mb-3">
			<input type="text" placeholder="First Name" class="form-control me-2 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
			@error('firstname')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
			<input type="text" placeholder="Last Name" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
			@error('lastname')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="input-group mb-3">
			<input type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
			@error('username')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
			<img src="{{asset('admin/images/user-svgrepo-com.svg')}}" alt="" class="input-group-text">
		</div>
		<div class="input-group  mb-3">
			<input type="text" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
			@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
			<img src="{{asset('admin/images/email-svgrepo-com.svg')}}" alt="" class="input-group-text">
		</div>
		<div class="input-group mb-3">
			<input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
			@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
			<img src="{{asset('admin/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
		</div>
		<div class="input-group mb-5">
			<input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" value="{{ old('password') }}" required autocomplete="new-password">
			<img src="{{asset('admin/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
		</div>
		<button class="btn btn-dark px-5 mb-2" type="submit">
			REGISTER
			<img src="{{asset('admin/images/arrow-sm-right-svgrepo-com.svg')}}" alt="">
		</button>
		<a href="{{ route('login') }}" class="fw-semibold fs-6 text-decoration-none text-dark">Already have account?</a>
	</form>
</div>
</div>
</div>
@endsection('content_reg')
@endsection