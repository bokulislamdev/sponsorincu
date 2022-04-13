
@extends('web.layouts.app', ['title' => 'User Register'])


@section('content')


 <!--    PAGE HEAD SECTION-->
 <section class="page-head-section py-5">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <h2>@lang('home.Create_account')</h2>
              <p>
                  <span>@lang('home.Register_with_us')</span>
              </p>
          </div>
      </div>
  </div>
</section>
<!--    PAGE HEAD SECTION END-->

<section class="signin-section py-5">
  <div class="container">
      <div class="signin-box">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">@lang('home.As_sponsor')</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">@lang('home.As_organizer')</button>
              </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="{{route('register')}}" method="post">
                  @csrf
                  <div class="input-box py-3">
                    <input type="text" placeholder="@lang('home.User_Name')" name="username" value="{{old('username')}}">
                      <i data-feather="user" class="input-icon"></i>
                  </div>
                  <span class="text-danger">{{$errors->first('username')}}</span>
                  <div class="input-box py-3">
                    <input type="email" placeholder="@lang('home.email_address')" name="email" value="{{old('email')}}">
                      <i data-feather="mail" class="input-icon"></i>
                  </div>
                  <span class="text-danger">{{$errors->first('email')}}</span>
                  <div class="input-box py-3">
                    <input type="password" placeholder="@lang('home.password')" name="password">
                    
                      <i data-feather="lock" class="input-icon"></i>
                  </div>
                  <span class="text-danger">{{$errors->first('password')}}</span>
                  <div class="input-box py-3">
                    <input type="password" placeholder="@lang('home.confirm_password')" name="password_confirmation">
                      <i data-feather="lock" class="input-icon"></i>
                  </div>
                  <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                  <div class="forget-password">
                      <a href="#">@lang('home.Forgot_your_password')</a>
                  </div>
                  <div class="signin-btn py-3">
                      <button type="submit">@lang('home.Signup')</button>
                  </div>
                  <div class="have-an-accound">
                      <p>@lang('home.have_an_Account')
                          <a href="{{route('login')}}"> Sign in</a>
                      </p>
                  </div>
                  </form>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form action="{{route('register')}}" method="post">
                  @csrf
                      <div class="input-box py-3">
                        <input type="text" placeholder="@lang('home.User_Name')" name="username" value="{{old('username')}}">
                          <i data-feather="user" class="input-icon"></i>
                      </div>
                      <span class="text-danger">{{$errors->first('username')}}</span>
                      <div class="input-box py-3">
                        <input type="email" placeholder="@lang('home.email_address')" name="email" value="{{old('email')}}">
                          <i data-feather="mail" class="input-icon"></i>
                      </div>
                      <span class="text-danger">{{$errors->first('email')}}</span>
                      <div class="input-box py-3">
                        <input type="password" placeholder="@lang('home.password')" name="password">
                        
                          <i data-feather="lock" class="input-icon"></i>
                      </div>
                      <span class="text-danger">{{$errors->first('password')}}</span>
                      <div class="input-box py-3">
                        <input type="password" placeholder="@lang('home.confirm_password')" name="password_confirmation">
                          <i data-feather="lock" class="input-icon"></i>
                      </div>
                      <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                      <div class="forget-password">
                          <a href="#">@lang('home.Forgot_your_password')</a>
                      </div>
                      <div class="signin-btn py-3">
                          <button type="submit">@lang('home.Signup')</button>
                      </div>
                      <div class="have-an-accound">
                          <p>@lang('home.have_an_Account')
                              <a href="{{route('login')}}"> Sign in</a>
                          </p>
                      </div>
                  </form>
              </div>

          </div>

      </div>
  </div>
</section>



  
  <!--    LOGIN SECTION-->
  {{-- <section class="login-section pb-5">
      <div class="container">
          <div class="login-box">
            <form action="{{route('register')}}" method="post">
              @csrf
              <div  class="py-4">
                <input type="text" placeholder="@lang('home.User_Name')" name="username" value="{{old('username')}}">
                <span class="text-danger">{{$errors->first('username')}}</span>
              </div>
              <div  class="py-4">
                <input type="text" placeholder="@lang('home.Full_Name')" name="name" value="{{old('name')}}">
                <span class="text-danger">{{$errors->first('name')}}</span>
              </div>
               <div  class="py-4">
                <input type="email" placeholder="@lang('home.email_address')" name="email" value="{{old('email')}}">
                <span class="text-danger">{{$errors->first('email')}}</span>
              </div>
              <div  class="py-4">
                <input type="text" placeholder="@lang('home.Phone')" name="phone" value="{{old('phone')}}">
                <span class="text-danger">{{$errors->first('phone')}}</span>
              </div>
              <div  class="py-4">
                <input type="password" placeholder="@lang('home.password')" name="password">
              <span class="text-danger">{{$errors->first('password')}}</span>
              </div>
              <div class="py-4">
                <input type="password" placeholder="@lang('home.confirm_password')" name="password_confirmation">
              <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
              </div>
                  <div class="py-4">
                      <input type="text" placeholder="Name">
                  </div>
                  <div class="py-4">
                      <input type="password" placeholder="Password">
                       <p class="forget"><a href="#">Forget Password?</a></p>
                  </div>
                 
                  <button type="submit">@lang('home.Signup')</button>
                  <p class="have-account">@lang('home.have_an_Account')  <a href="{{route('login')}}"> @lang('home.Login')</a></p>
              </form>
          </div>
      </div>
  </section> --}}
  <!--    LOGIN SECTION END-->



<!--    LOGIN-->
{{-- <div class="section-login-section py-5 mt-5">
  <div class="container mt-5">
      <div class="login-box">
          <h4>@lang('home.User_Registration')</h4>
          <p>@lang('home.Please_User_account')</p>
          <form action="{{route('register')}}" method="post">
              @csrf
              <div>
                <input type="text" placeholder="@lang('home.User_Name')" name="username" value="{{old('username')}}">
                <span class="text-danger">{{$errors->first('username')}}</span>
              </div>
              <div>
                <input type="text" placeholder="@lang('home.Full_Name')" name="name" value="{{old('name')}}">
                <span class="text-danger">{{$errors->first('name')}}</span>
              </div>
               <div>
                <input type="email" placeholder="@lang('home.email_address')" name="email" value="{{old('email')}}">
                <span class="text-danger">{{$errors->first('email')}}</span>
              </div>
              <div>
                <input type="text" placeholder="@lang('home.Phone')" name="phone" value="{{old('phone')}}">
                <span class="text-danger">{{$errors->first('phone')}}</span>
              </div>
              <div>
                <input type="password" placeholder="@lang('home.password')" name="password">
              <span class="text-danger">{{$errors->first('password')}}</span>
              </div>
              <div>
                <input type="password" placeholder="@lang('home.confirm_password')" name="password_confirmation">
              <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
              </div>
              
              <div class="forget">
                  <a href="#">@lang('home.Forgot_your_password')</a>
              </div>
              <button type="submit">@lang('home.Signup')</button>
              <div>
                  <p>@lang('home.have_an_Account') <a href="{{route('login')}}">@lang('home.Login')</a></p>
              </div>
          </form>
      </div>
  </div>
</div> --}}
<!--    LOGIN END-->

@endsection


                  {{-- <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5>
                    <form class="form-body" method="post" action="{{ route('register') }}">
                        @csrf

                      </div>
                        <div class="row g-3">
                          <div class="col-12 ">
                            <label for="inputName" class="form-label">Username</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <input type="text" class="form-control radius-30 ps-5" name="username" value="{{ old('username') }}" placeholder="jhon121..">
                            </div>
                          </div>
                          <div class="col-12 ">
                            <label for="inputName" class="form-label">Name</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <input type="text" class="form-control radius-30 ps-5" name="name" value="{{ old('name') }}" placeholder="jhon deo">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="form-control radius-30 ps-5" name="email" value="{{ old('email') }}" placeholder="jhon@gmail.com">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" name="password" placeholder="Enter New Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" name="password_confirmation" placeholder="Enter Confirm Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                              <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign Up</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign in here</a></p>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main> --}}
       <!--end page main-->

         
        <!--end page main-->
    {{-- <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{ asset('account') }}/assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $error }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                @endforeach
                            @endif
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                    
                                </div>
								<div class="form-group">
									<input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
								<div class="form-group">
									<input class="form-control"  type="password"
                                    name="password"
                                    required autocomplete="new-password" placeholder="Password" />
                                 </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

