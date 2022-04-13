@extends('web.layouts.app', ['title' => 'About'])


@section('content')

          <!--    PAGE HEAD SECTION-->
    <section class="page-head-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>@lang('home.About_Us')</h2>
                   
                </div>
            </div>
        </div>
    </section>
    <!--    PAGE HEAD SECTION END-->

    <!--    ABOUT SECTION-->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-image">
                        <img src="{{asset('web')}}/images/photos/about.png" alt="Image">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <div class="about-text">
                        <h4>@lang('home.who_are_we')</h4>
                        <p>
                            @lang('home.about_p1')
                        </p>
                        <ul>
                            <li>
                                <span></span>
                                @lang('home.about_p2')
                            </li>
                            <li>
                                <span></span>
                                @lang('home.about_p3')
                            </li>
                            <li>
                                <span></span>
                                @lang('home.about_p4')
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    ABOUT SECTION END-->

    <!--    VISSION MISSION SECTION-->
    {{-- <section class="vission-mission-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mission-vision-box">
                        <div class="d-flex bd-highlight">
                            <div class="mission-image flex-shrink-1 bd-highlight">
                                <img src="{{asset('web')}}/images/photos/vission.png" alt="Vission Photo">
                            </div>
                            <div class="mission-text w-100 bd-highlight">
                                <h4>Our vision</h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mission-vision-box">
                        <div class="d-flex bd-highlight">
                            <div class="mission-image flex-shrink-1 bd-highlight">
                                <img src="{{asset('web')}}/images/photos/mission.png" alt="Vission Photo">
                            </div>
                            <div class="mission-text w-100 bd-highlight">
                                <h4>Our Mission</h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--    VISSION MISSION SECTION END-->
    {{-- @include('web.component.subscribe');  --}}


@endsection

