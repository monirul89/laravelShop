@extends('layouts.app')

@section('title')
Register
@endsection

@section('loginBody')
<div class="card card-login mx-auto mt-5">
    <div class="card-header">{{ __('Register') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">

                <div class="form-label-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="fullName">Full Name</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    <label for="inputEmail">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                    <label for="confirmPassword">Confirm password</label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary col-sm-12">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">Login</a>
            <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>
</div>
@endsection