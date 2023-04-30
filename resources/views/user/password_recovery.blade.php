@extends('layouts.app')

@section('content')
<div class="card text-center" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">
        <p class="card-text py-2">
            Enter your email address and we'll send you an email with instructions to reset your password.
        </p>
        <form class="form-outline" method="POST" action="{{ route('password_recovery') }}">
            @csrf
            <input name="email" type="email" id="typeEmail" class="form-control my-3" />
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <label class="form-label" for="typeEmail">Email input</label>
            <button style="height: 40px" type="submit" class="btn btn-primary w-100">Reset password</a>
        </form>
        
        <div class="d-flex justify-content-between mt-4">
            <a class="" href="{{ route('login') }}">Login</a>
            <a class="" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>
@endsection