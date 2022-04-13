    <!--    FOOTER-->
    <footer class="py-5">
        <div class="container">
            <div class="footer-main">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="footer-head">
                            <div class="logo mb-3">
                                <a href="{{route('homepage')}}">
                                    <img src="{{asset('web')}}/images/logo/logo2.png" alt="">
                                </a>
                            </div>
                            <p>
                                @lang('home.footer_about')
                            </p>

                            <ul>
                                <li class="mt-1">
                                    <i class="footer-feather" data-feather="phone-call"></i>
                                    <span>{{$websetting->phone}} </span>
                                </li>
                                <li class="mt-3">
                                    <i class="footer-feather" data-feather="mail"></i>
                                    <span>{{$websetting->email}}</span>
                                </li>

                            </ul>
                            <div class="social-icons footer-social mt-3">
                                <a href="{{$social->facebook}}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{$social->twitter}}" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{$social->linkdin}}" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="{{$social->instagram}}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="{{$social->pinterest}}" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="footer-head">
                            <h6 class="bottom-border">@lang('home.Important_links')</h6>
                            <ul>
                                <li><a href="{{route('about')}}">@lang('home.About_Us')</a></li>
                                <li><a href="{{route('service')}}">@lang('home.Our_Services')</a></li>
                                <li><a href="{{route('event')}}">@lang('home.Discover_Events')</a></li>
                                <li><a href="{{route('contact')}}">@lang('home.Contact_Us')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="footer-head">
                            <h6 class="bottom-border">@lang('home.Our_Services')</h6>
                            <ul>
                                <li><a href="javascript:void(0)">@lang('home.Looking_for_sponsors')</a></li>
                                <li><a href="{{route('event')}}">@lang('home.Search_for_events')</a></li>
                                <li><a href="{{route('service')}}">@lang('home.Looking_for_an_event_organizer')</a></li>
                                <li><a href="{{route('service')}}">@lang('home.Become_an_event_marketer')</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--    FOOTER END-->

    <!--    COPYRIGHT-->
    <section class="copyright-section">
        <div class="container">
            <div class="copyright-content">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="copyright-left">
                            <p>@copyright-2022 | All Rights Researved by Sponsor.Incu</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="copyright-right">
                            <a href="#">
                                Terms & Condition
                            </a>
                            <a href="#">
                                Privacy Policy
                            </a>
                            <a href="#">
                                Help
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--    COPYRIGHT END-->