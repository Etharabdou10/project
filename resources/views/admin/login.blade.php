@extends('admin.layouts.regmain')
@section('content_log') 
			<div class="col-md-7">
				<form  method="POST" action="{{ route('login') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
				@csrf
					<h3 class="fw-semibold mb-5">LOGIN FORM</h3>
					<div class="input-group mb-3">
						<input type="text" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
						@error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
						<img src="{{asset('admin/images/user-svgrepo-com.svg')}}" alt="" class="input-group-text">
					</div>
					<div class="input-group mb-3">
						<input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<img src="{{asset('admin/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
					</div>
					<button class="btn btn-dark px-5 mb-2" type="submit">
						LOGIN
						<img src="{{asset('admin/images/arrow-sm-right-svgrepo-com.svg')}}" alt="">
					</button>
					<a href="{{ route('register') }}" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
				</form>
			</div>
		</div>
	</div>
@endsection('content_log') 