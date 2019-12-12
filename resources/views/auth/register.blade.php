@extends('layouts.app')

@section('title')
Register
@endsection

@section('loginBody')
<div class="card card-login mx-auto mt-5">
    <div class="card-header">Register an Account</div>
    <div class="card-body">
        <form>
            <div class="form-group">

                <div class="form-label-group">
                    <input type="fullName" id="inputEmail" class="form-control" placeholder="Full Name"
                        required="required">
                    <label for="fullName">Full Name</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                        required="required">
                    <label for="inputEmail">Email address</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                        required="required">
                    <label for="inputEmail">Password</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password"
                        required="required">
                    <label for="confirmPassword">Confirm password</label>
                </div>
            </div>

            <a class="btn btn-primary btn-block" href="{{ route('login') }}">Register</a>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">Login</a>
            <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>
</div>
@endsection