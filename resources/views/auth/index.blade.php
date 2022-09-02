@extends('layouts.auth.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-md-4">

    @if (session()->has('success'))     
    <div class="alert alert-success alert-dismissble fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif
  
  <main class="form-signin ">
    <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
    <form action="/login" method="POST">
      @csrf
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        <div class="invalid-feedback">
          @error('record')
              {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <div class="invalid-feedback">
          @error('record')
              {{ $message }}
          @enderror
        </div>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; Muhammad Ruhiyat {{ date('Y') }}</p>
  </main>
</div>
</div>
@endsection

