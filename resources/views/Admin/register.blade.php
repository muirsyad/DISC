@extends('lr-layout')
@section('content')
<div class="card">
    <div class="card-body">
        <h1>Register</h1>
        <form method="POST" action="/users">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="example: Muhammad Kasim" name="name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                name="email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="************" name="password">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password confirmation</label>
                <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="************" name="password_confirmation">
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">No-tel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="example: 01782726353" name="no-tel">

                    @error('no-tel')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <input type="hidden" name="role_id" value="1">
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
