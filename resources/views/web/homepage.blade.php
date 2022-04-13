@php
$locale = app()->getLocale();
@endphp
@extends('web.layouts.app', ['title' => 'Home'])


@section('content')

    <!--    HOME SECTION-->
    <section class="home-section" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/photos/top-banner.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="home-container-box">
                <div class="row">
                    <div class="col-12 col-xl-8 py-0">
                        <div class="home-content py-5">
                            <p>
                                @lang('home.Sponsors_Incubator')
                            </p>
                            <h1>
                                @lang('home.Sponsors_Incubator_A')
                            </h1>
                            <div class="">
                                <a href="{{route('register')}}">@lang('home.I_am_an_Event_Sponsor')</a>
                                <a href="{{route('register')}}">@lang('home.I_am_an_Event_Organizer')</a>
                                <a href="{{route('register')}}">@lang('home.I_am_an_Event_marketer')</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="home-image d-none d-xl-block">
                    <img src="{{asset('web')}}/images/photos/home.png" alt="">
                </div> --}}
            </div>
        </div>
    </section>
    <!--   HOME SECTION  -->

    <!--    EVENT SECTION-->
    <section class="event-section py-5">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all" data-bs-toggle="pill" data-bs-target="#all_tab" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">All</button>
                </li>
                @foreach ($event_types as $event_type)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="{{$event_type->slug}}" data-bs-toggle="pill" data-bs-target="#{{$event_type->slug}}_tab" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{$event_type->name}}</button>
                    </li>
                @endforeach
                
                {{-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li> --}}
              </ul>
              <div class="tab-content" id="pills-tabContent">
                
                <div class="tab-pane fade show active" id="all_tab" role="tabpanel" aria-labelledby="all">
                    default
                </div>

                @php
                    $event_topics = App\Models\EventTopic::where('event_type_id',$event_type->id)->limit(4)->get();
                @endphp

                @foreach ($event_topics as $event_tpoic)
                    <div class="tab-pane fade" id="{{$event_tpoic->slug}}_tab" role="tabpanel" aria-labelledby="{{$event_type->slug}}">
                        <div class="row">
                            @foreach ($event_tpoic as $item)
                                <div class="col-12 col-sm-6 col-md-3 mb-4 mix available">
                                    <div class="event-box" style="background-image: url({{asset('web')}}/images/event/1.png); ">
                                        <h6>
                                            Cinema, Media & Entertainmentt
                
                                        </h6>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                
                
              </div>
        </div>
    </section>
    <!--    EVENT SECTION END-->

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
                        <p>
                            @lang('home.about_p2')
                        </p>
                        <p>
                            @lang('home.about_p3')
                        </p>
                        <p>
                            @lang('home.about_p4')
                        </p>
                        <div>
                            <a href="{{route('about')}}" class="about-btn">@lang('home.Read_More')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    ABOUT SECTION END-->

    <!--    SERVICE SECTION-->
    <section class="service-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4>@lang('home.Our_Services')</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="service-box">
                        <a href="{{route('service')}}">
                            <img src="{{asset('web')}}/images/service/1.png" alt="">
                        </a>
                        <div class="service-text">
                            <h4>@lang('home.service_li6')</h4>
                            <p>
                                @lang('home.Event_marketing_is')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="service-box">
                        <a href="{{route('service')}}">
                            <img src="{{asset('web')}}/images/service/2.png" alt="">
                        </a>
                        <div class="service-text">
                            <h4>@lang('home.Ads')</h4>
                            <p>
                                @lang('home.Ads_li1')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="service-box">
                        <a href="{{route('service')}}">
                            <img src="{{asset('web')}}/images/service/3.png" alt="">
                        </a>
                        <div class="service-text">
                            <h4>@lang('home.Sponsoring_non_profit')</h4>
                            <p>
                                @lang('home.Sponsoring_non_profit_li1')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="service-box">
                        <a href="{{route('service')}}">
                            <img src="{{asset('web')}}/images/service/4.png" alt="">
                        </a>
                        <div class="service-text">
                            <h4>@lang('home.sponsoring_influencers')</h4>
                            {{-- <p>
                                @lang('home.event_marketing_p')
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    SERVICE SECTION END-->

    <!--    COUNT SECTION-->
    {{-- <section class="count-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-2 pb-5">
                    <div class="count-box">
                        <h4  class="counter" data-count="2540">2540+</h4>
                        <span>+</span>
                        <p>Sponsors</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-2 pb-5">
                    <div class="count-box">
                        <h4 class="counter" data-count="560">560+</h4>
                        <span>+</span>
                        <p>Marketers</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-2 pb-5">
                    <div class="count-box">
                        <h4 class="counter" data-count="420">420+</h4>
                        <span>+</span>
                        <p>Live Events</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-2 pb-5">
                    <div class="count-box">
                        <h4 class="counter" data-count="2510">2510+</h4>
                        <span>+</span>
                        <p>Events Organizer</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-2 pb-5">
                    <div class="count-box">
                        <h4 class="counter" data-count="12">12+</h4>
                        <span>+</span>
                        <p>Country Suport</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-2 pb-5">
                    <div class="count-box">
                            <h4 class="counter" data-count="100">100%</h4>
                            <span>%</span>
                        <p>Payment Security</p>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!--    COUNT SECTION END-->


    <!--    CLIENT SECTION-->
    {{-- <section class="client-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="say-about-head">
                        <h6>
                            What our clients say, <br>
                            About us
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="client_slider">
                <div class="col-12">
                        <div class="say-about-box w-100">
                            <p>
                                “ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”
                            </p>
                            <div class="say-client d-flex align-items-center">
                                <img src="{{asset('web')}}/images/photos/client.png" alt="Client Photo">
                                <div>
                                    <h5>Abdullah Al Noman</h5>
                                    <h6>Digital Marketer & SEO</h6>
                                </div>
                            </div>
                        </div>
                   </div>
                    <div class="col-12">
                        <div class="say-about-box w-100">
                            <p>
                                “ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”
                            </p>
                            <div class="say-client d-flex align-items-center">
                                <img src="{{asset('web')}}/images/photos/client.png" alt="Client Photo">
                                <div>
                                    <h5>Abdullah Al Noman</h5>
                                    <h6>Digital Marketer & SEO</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="say-about-box w-100">
                            <p>
                                “ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”
                            </p>
                            <div class="say-client d-flex align-items-center">
                                <img src="{{asset('web')}}/images/photos/client.png" alt="Client Photo">
                                <div>
                                    <h5>Abdullah Al Noman</h5>
                                    <h6>Digital Marketer & SEO</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </section> --}}
    <!--    CLIENT SECTION END-->

    <!--    BRAND SECTION-->
    <div class="section-brand-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4>@lang('home.Our_sponsors')</h4>
                    </div>
                </div>
            </div>
            <div class="picture_slider mt-5">
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/1.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/2.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/3.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/4.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/5.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/6.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/1.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/2.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/3.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/4.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/5.png" alt="Image">
                </div>
                <div class="brand-box">
                    <img src="{{asset('web')}}/images/brands/6.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!--    BRAND SECTION END-->



  @include('web.component.subscribe'); 

@endsection



@push('js')
    <script>
	$('.counter').each(function () {
	    var $this = $(this),
	        countTo = $this.attr('data-count');

	    $({
	        countNum: $this.text()
	    }).animate({
	            countNum: countTo
	        },
	        {
	            duration: 6000,
	            easing: 'linear',
	            step: function () {
	                $this.text(Math.floor(this.countNum));
	            },
	            complete: function () {
	                $this.text(this.countNum);
	            }
	        });
	});




    // slick slider
    $('.event_type').slick({
            slidesToShow: 4,
            slidesToScroll: 2,
            autoplay: true,
            dots: false,
            @if ($locale == 'ar')
            rtl: true,
            @endif
            infinite: false,
            autoplaySpeed: 2000,
            nextArrow: $('.event_next'),
            prevArrow: $('.event_prev'),
            arrows: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endpush

