    <!--    HEADER SECTION-->
    <header class="py-2">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-2">
                            <div class="logo-image d-flex justify-content-between align-items-center">
                                <a href="{{route('homepage')}}">
                                    <img src="{{ asset($websetting->logo) }}" alt="">
                                </a>
                                                               <div class="d-xl-none">
                                    @if ($locale == 'en')
                                <a  class="arabic-button" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">Arabic</a>
                                @elseif($locale == 'ar')
                                <a  class="arabic-button" href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">English</a>
                                @endif
                                </div>
                                <i class="fa-solid fa-bars d-xl-none" onclick="mobileClick()"></i>
                            </div>

                        </div>
                        <div class="col-10 d-none d-xl-block">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="menubar">
                                    <ul>
                                        <li>
                                            <a href="{{route('homepage')}}" class="menu-active d-flex align-items-center">
                                                @lang('home.Homepage')
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}" class="d-flex align-items-center">
                                                @lang('home.About_Us')
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('service')}}" class="d-flex align-items-center">
                                                @lang('home.Our_Services')
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('event')}}" class="">
                                                @lang('home.Discover_Events')
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('become.sponsor')}}" class="">
                                                Become Sponsor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}" class="">
                                                @lang('home.Contact_Us')
                                            </a>
                                        </li>
                                        <li class="sub-btn no-border">
                                            <a class="no-border {{'register' == request()->path() || 'login' == request()->path() ? 'menu-active' : ''}}" href="javascript:void(0)">@lang('home.Accounts') 
                                                <i data-feather="chevron-down"></i>
                                            </a>
                                            <div class="sub-menu">
                                              @auth
                      
                                                @if (Auth::user()->role == 1)
                                                <a href="{{route('admin.dashboard')}}">@lang('home.Dashboard')</a>
                                                 @elseif(Auth::user()->role == 2)
                                                <a href="{{route('organizer.dashboard')}}">@lang('home.Dashboard')</a>
                                                @elseif(Auth::user()->role == 3)
                                                <a href="{{route('sponsor.dashboard')}}">@lang('home.Dashboard')</a>
                                                @elseif(Auth::user()->role == 4)
                                                <a href="{{route('marketer.dashboard')}}">@lang('home.Dashboard')</a>
                                                @endif
                      
                                                <a href="javascript:void(0)">
                                                  <form action="{{route('logout')}}" method="post">
                                                    @csrf
                                                      <button type="submit" style="background: none"> @lang('home.Logout') </button>
                                                  </form>
                                              </a>
                      
                                              @endauth
                      
                                              @guest
                                                <a href="{{route('register')}}">@lang('home.Create_account')</a>
                                                <a href="{{route('login')}}">@lang('home.Sign_In')</a>
                                              @endguest
                      
                      
                                                {{-- <a href="#">Vendor Registration</a> --}}
                      
                                            </div>
                                          </li>

                                     
                                        <li>
                                            
                                            {{-- <a href="#" class="login-button-home">
                                                Arabic
                                            </a> --}}
                                            @if ($locale == 'en')
                                                <a  class="login-button-home" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">Arabic</a>
                                                @elseif($locale == 'ar')
                                                <a  class="login-button-home" href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">English</a>
                                                @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="search-bar px-4">
                                    <div class="search-box">
                                        <form action="{{route('event')}}" method="get">
                                            <input type="text" placeholder="@lang('home.Find_Events')" name="event">
                                            <button type="submit">
                                                <img src="{{asset('web')}}/images/icons/search.png" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--    HEADER SECTION END-->

    <!--    MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="mobile-logo mb-3">
                <a href="{{route('homepage')}}">
                    <img src="{{asset('web')}}/images/logo/logo2.png" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>


<!--
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        All Category
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right"></i>Lip Gloss</a></li>

                            <li><a href="#"><i class="fa fa-chevron-right"></i>Body Lotion</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i>Cream</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i>Garnier</a></li>
                        </ul>
                    </div>
                </div>
            </div>
-->


            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{route('homepage')}}">
                        <button class="accordion-button custom collapsed none" type="button">
                           @lang('home.Homepage')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{route('service')}}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.Our_Services')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{route('about')}}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.About_Us')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{route('event')}}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.Discover_Events')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{route('contact')}}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.Contact_Us')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        @lang('home.Accounts')
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            @guest
                            <li><a href="{{route('login')}}"><i class="fa fa-chevron-right"></i>@lang('home.Login')</a></li>
                            <li><a href="{{route('register')}}"><i class="fa fa-chevron-right"></i>@lang('home.Create_account')</a></li>
                            @endguest
                            @auth
        
                            @if (Auth::user()->role == 1)
                            <li>
                                
                                <a href="{{route('admin.dashboard')}}">
                                    <i class="fa fa-chevron-right"></i>
                                    @lang('home.Dashboard')
                                </a>
                            </li>
                            @elseif(Auth::user()->role == 2)
                            <li>
                                <a href="{{route('organizer.dashboard')}}">
                                    <i class="fa fa-chevron-right"></i>
                                    @lang('home.Dashboard')
                                </a>
                            </li>
                            @elseif(Auth::user()->role == 3)
                            <li>
                                <a href="{{route('sponsor.dashboard')}}">
                                    <i class="fa fa-chevron-right"></i>
                                    @lang('home.Dashboard')
                                </a>
                            </li>
                            @elseif(Auth::user()->role == 4)
                            <li>
                                <a href="{{route('marketer.dashboard')}}">
                                    <i class="fa fa-chevron-right"></i>
                                    @lang('home.Dashboard')
                                </a>
                            </li>
                            @endif






        
                            <li class="d-flex"><a href="javascript:void(0)">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <i class="fa fa-chevron-right"></i>
                                    <button type="submit" style="background:none"> @lang('home.Logout')</button>
                                </form>
                            </a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    @if ($locale == 'en')
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Arabic
                        </button>
                    </a>
                    @elseif($locale == 'ar')
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            English
                        </button>
                    </a>
                    @endif
                </h2>
            </div>
           

        </div>

    </div>
    <!--    MOBILE MENU END-->