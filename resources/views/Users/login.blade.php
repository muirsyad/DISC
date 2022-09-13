@extends('lr-layout')
@section('content')

<div class="card">
    <div class="card-body">

<p class="h3 mb-0 text-gray-800 text-center mb-3">Login</p>
<span>Login to the system to take the DISC personality test</span>
<form method ="POST"action="/users/auth">
    @csrf
    <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
        name="email">

        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="************"
        name="password">

        @error('password')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
<span>Dont have an account? </span><a href="/register">Create now</a>
    </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Login</button>
        </div>
</form>
    </div>
</div>
@endsection
