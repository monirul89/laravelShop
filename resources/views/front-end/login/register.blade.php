
@extends('front-end.master')
@section('title')
    Register
@endsection
@section('mainContent')
    <div class="register">
        <form> 
            <div class="  register-top-grid">
            <h3>PERSONAL INFORMATION</h3>
            <div class="mation">
                <span>First Name<label>*</label></span>
                <input type="text"> 
            
                <span>Last Name<label>*</label></span>
                <input type="text"> 
                
                    <span>Email Address<label>*</label></span>
                    <input type="text"> 
            </div>
                <div class="clearfix"> </div>
                <a class="news-letter" href="#">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
                </a>
                </div>
                <div class="  register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>
                    <div class="mation">
                        <span>Password<label>*</label></span>
                        <input type="text">
                        <span>Confirm Password<label>*</label></span>
                        <input type="text">
                    </div>
                </div>
        </form>
        <div class="clearfix"> </div>
        <div class="register-but">
            <form>
                <input type="submit" value="submit">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
@endsection