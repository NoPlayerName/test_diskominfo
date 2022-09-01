@extends('layouts.auth.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-md-5">
  <main class="form-signin ">
    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
    <form>
      <div class="form-floating">
        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
        <label for="floatingInput">Full Name</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="username" placeholder="Username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now!</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; Muhammad Ruhiyat {{ date('Y') }}</p>
  </main>
</div>
</div>
@endsection

