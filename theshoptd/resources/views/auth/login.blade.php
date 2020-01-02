@extends('layouts.app')

@section('title')
Login
@endsection

@section('loginBody')
<div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address"
                        required="required" autofocus="autofocus">
                    <label for="inputEmail">Email address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                        required="required">
                    <label for="inputPassword">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember-me">
                        Remember Password
                    </label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary col-sm-12">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
            <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>
</div>
@endsection