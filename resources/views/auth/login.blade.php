@extends('web.layouts.app', ['title' => 'Login'])


@section('content')

 <!--    PAGE HEAD SECTION-->
 <section class="page-head-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Sign In</h2>
                <p>
                    <span>Welcome to the sponsore login page</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!--    PAGE HEAD SECTION END-->

<!--    SIGN IN SECTION-->
<section class="signin-section py-5">
    <div class="container">
        <div class="signin-box">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="input-box py-3">
                    <input type="text" placeholder="@lang('home.email_address')" name="email" value="{{old('email')}}">
                    <i data-feather="mail" class="input-icon"></i>
                </div>
                <span class="text-danger">{{$errors->first('email')}}</span>
                <div class="input-box py-3">
                    <input type="password" placeholder="@lang('home.password')" name="password">
                    <i data-feather="lock" class="input-icon"></i>
                </div>
                <span class="text-danger">{{$errors->first('password')}}</span>
                <div class="forget-password">
                    <a href="#">@lang('home.Forgot_your_password')</a>
                </div>
                <div class="signin-btn py-3">
                    <button type="submit">Sign In</button>
                </div>
                 <div class="have-an-accound">
                   <p>@lang('home.donot_an_account')
                       <a href="{{route('register')}}"> @lang('home.Signup')</a>
                   </p>
                </div>
            </form>
        </div>
    </div>
</section>
<!--    SIGN IN SECTION END-->
    
    <!--    LOGIN SECTION-->
    {{-- <section class="login-section pb-5">
        <div class="container">
            <div class="login-box">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="py-4">
                        <input type="text" placeholder="@lang('home.email_address')" name="email" value="{{old('email')}}">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                    <div class="py-4">
                        <input type="password" placeholder="@lang('home.password')" name="password">
                        <span class="text-danger">{{$errors->first('password')}}</span>
                         <p class="forget"><a href="#">@lang('home.Forgot_your_password')</a></p>
                    </div>
                   
                    <button type="submit">@lang('home.Login')</button>
                    <p class="have-account">@lang('home.donot_an_account') <a href="{{route('register')}}">@lang('home.Signup')</a></p>
                </form>
            </div>
        </div>
    </section> --}}
    <!--    LOGIN SECTION END-->
      
     
@endsection





    {{-- <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{ asset('account') }}/assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                                </div>
								<div class="form-group">
									<input class="form-control" placeholder="Password"  type="password"
                                    name="password" required autocomplete="current-password">
                                </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a> </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
