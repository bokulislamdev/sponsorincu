
@extends('web.layouts.app', ['title' => 'Vendor Register'])


@section('content')
<!--    LOGIN-->
<div class="section-login-section py-5">
    <div class="container">
        <div class="login-box">
            <h4>Vendor Registration</h4>
            <p>Please Vendor account detail bellow.</p>
            <form action="{{route('vendor.register')}}" method="post">
                @csrf
                <div>
                  <input type="text" placeholder="User Name" name="username" value="{{old('username')}}">
                  <span class="text-danger">{{$errors->first('username')}}</span>
                </div>
                <div>
                  <input type="text" placeholder="Full Name" name="name" value="{{old('name')}}">
                  <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                 <div>
                  <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}">
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" name="phone" value="{{old('phone')}}">
                  <span class="text-danger">{{$errors->first('phone')}}</span>
                </div>
                <div>
                  <input type="password" placeholder="Password" name="password">
                <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                <div>
                  <input type="password" placeholder="Confirm Password" name="password_confirmation">
                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                </div>
                
                <div class="forget">
                    <a href="#">Forgot your password?</a>
                </div>
                <button type="submit">Signup</button>
                <div>
                    <p>have an Account? <a href="{{route('login')}}">Login</a></p>
                </div>
            </form>
        </div>
    </div>
  </div>
  <!--    LOGIN END-->
@endsection