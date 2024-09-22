@extends('admin.layouts.main')
@section('content_adduser')
<div class="container my-5">
  <div class="mx-2">
    <h2 class="fw-bold fs-2 mb-5 pb-2">Add USER</h2>
    @if (session('success'))
    <div style="color:green;">
      {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div style="color:red;">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('users.store')}}" method="POST" class="px-md-5">
      @csrf
      <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
        <div class="col-md-5">
          <input type="text" placeholder="firstname" name="firstname" class="form-control py-2" value="{{old('firstname')}}" />
          @error('firstname')
          <div class="alert alert-warning">{{$message}}</div>
          @enderror
        </div>
        <div class="col-md-5">
          <input type="text" placeholder="Last Name" name="lastname" class="form-control py-2" value="{{old('lastname')}}" required />
          @error('lastname')
          <div class="alert alert-warning">{{$message}}</div>
          @enderror
        </div>
      </div>
      <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
        <div class="col-md-10">
          <input type="text" placeholder="e.g. Jhon33" name="username" class="form-control py-2" value="{{old('username')}}" required />
          @error('username')
          <div class="alert alert-warning">{{$message}}</div>
          @enderror
        </div>
      </div>
      <div class="form-group mb-3 row">
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
        <div class="col-md-10">
          <input type="email" placeholder="e.g. Jhon@example.com" name="email" class="form-control py-2" value="{{old('email')}}" required />
          @error('email')
          <div class="alert alert-warning">{{$message}}</div>
          @enderror
        </div>
      </div>
      <div class="form-group mb-3 row">
        <label for="password" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
        <div class="col-md-10">
          <input type="password" placeholder="Password" name="password" class="form-control py-2" value="{{old('password')}}" required utocomplete="new-password" />
          @error('password')
          <div class="invalid-feedback" role="alert">{{$message}}</div>
          @enderror
        </div>
      </div>
      <div class="form-group mb-3 row">
        <label for="password-confirm" class="form-label col-md-2 fw-bold text-md-end">Confirm Password:</label>
        <div class="col-md-10">
          <input type="password" placeholder="Confirm Password" name="password_confirmation" required class="form-control py-2" />
          @error('password')
          <div class="alert alert-warning">{{$message}}</div>
          @enderror
        </div>
      </div>
      <div class="text-md-end">
        <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
          Add User
        </button>
      </div>
    </form>
  </div>
</div>
</main>
@endsection