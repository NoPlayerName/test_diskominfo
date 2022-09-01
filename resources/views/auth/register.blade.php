@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-md-5">
  <main class="form-register ">
    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
    <form action="/register" method="POST">
        @csrf
      <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name" required value="{{ old('name') }}">
        <label for="floatingInput">Full Name</label>
        <div class="invalid-feedback">
            @error('name')
            {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
        <label for="floatingInput">Username</label>
        <div class="invalid-feedback">
            @error('username')
            {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        <div class="invalid-feedback">
            @error('email')
            {{ $message }}
            @enderror
        </div>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror " id="password" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        <div class="invalid-feedback">
            @error('password')
            {{ $message }}
            @enderror
        </div>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now!</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; Muhammad Ruhiyat {{ date('Y') }}</p>
  </main>
</div>
</div>
@endsection

