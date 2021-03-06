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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All types</button>
                    </li>
                    @foreach ($event_types as $event_type)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="types{{ $event_type->id }}-tab" data-bs-toggle="tab" data-bs-target="#types{{ $event_type->id }}" type="button" role="tab" aria-controls="types{{ $event_type->id }}" aria-selected="false">
                                @if ($locale == 'en')
                                {{ $event_type->name }}
                                @elseif( $locale == "ar")
                                {{ $event_type->name_ar }}
                                @endif
                                
                            </button>
                        </li>
                    @endforeach
                </ul>
                <div class="row pt-2">
                    <div class="contact-title d-flex justify-content-end align-items-center">
                        <a href="{{route('event.category')}}">View All</a>
                    </div>
                </div>
                <div class="tab-content mt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row">
                            @foreach ($event_topics_default as $topics_default)
                            <div class="col-12 col-sm-6 col-md-3 mb-4 mix available">
                                <div class="event-box" style="background-image: url({{asset('web')}}/images/event/1.png); ">
                                    <h6>
                                        @if ($locale == 'en')
                                        {{ $topics_default->name }}
                                        @elseif( $locale == "ar")
                                        {{ $topics_default->name_ar }}
                                        @endif
                                        
                                    </h6>
                                    <a href="{{route('single.topic',$topics_default->slug)}}" class="stretched-link"></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach ($event_types as $event_type)
                        @php
                            $event_topics = App\Models\EventTopic::where('event_type_id',$event_type->id)->limit(4)->get();
                        @endphp
                        <div class="tab-pane fade" id="types{{ $event_type->id }}" role="tabpanel" aria-labelledby="types{{ $event_type->id }}-tab">
                            <div class="row">
                                @foreach ($event_topics as $event_topic)
                                <div class="col-12 col-sm-6 col-md-3 mb-4 mix available">
                                    <div class="event-box" style="background-image: url({{asset('web')}}/images/event/1.png); ">
                                        <h6>
                                            @if ($locale == 'en')
                                            {{ $event_topic->name }}
                                        @elseif( $locale == "ar")
                                        {{ $event_topic->name_ar }}
                                        @endif
                                        </h6>
                                        <a href="{{route('single.topic',$event_topic->slug)}}" class="stretched-link"></a>
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
        
         <!--    EVENT SECTION-->
    <section class="event-page-section py-5">
        <div class="container">
             <div class="row mb-4">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4>@lang('home.Discover_Events')</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="event-left">
                        <form action="{{route('event')}}" method="get">
                        
                            <div class="py-2">
                                <label for="#">@lang('home.Location')</label>
                                <input type="text" name="location">
                            </div>
                            <div class="py-2">
                                <label for="#">@lang('home.Event_Type')</label>
                                <select name="type" id="event_type_id" onchange="getEventToptic()">
                                    <option value="">select</option>
                                    @foreach ($event_types as $item)
                                    <option value="{{$item->id}}">
                                         @if ($locale == 'en')
                                        {{$item->name}}
                                        @else
                                        {{$item->name_ar}}
                                        @endif
                                        
                                    </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="py-2">
                                <label for="#">@lang('home.Event_Topic')</label>
                                <select name="topic" id="event_topic">
                                    <option value="">select</option>
                                </select>
                            </div>
                            <div class="py-2">
                                <webrouk-custom-range start="0" end="1000" from="300" to="700" prefix-char="$">
                                    <input type="hidden">
                                </webrouk-custom-range>
                            </div>
                            <div class="py-2">
                                <label for="#">@lang('home.Date')</label>
                                <input type="date" name="date">
                            </div>
                            <div class="pt-3">
                                <button type="submit">@lang('home.Search')</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8 pt-4 pt-md-0">
                    <div class="event-right">
                        <div class="row">
                            @forelse ($events as $event)
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="{{route('event.details',$event->slug)}}">
                                            <img src="{{asset($event->image)}}" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">{{ Carbon\Carbon::parse($event->date)->format('l') }}, {{ Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                                        {{-- <p class="title">{{$event->name}}</p> --}}
                                        @if ($locale == 'en')
                                        <p class="title">{{substr($event->name, 0, 38) . '...';}}</p>

                                        @elseif( $locale == "ar")
                                        <p class="title">{{$event->name_ar}}</p>
                                        @endif
                                        
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> {{$event->address}}</span>
                                        <span class="price">Starting at <b>SAR {{$event->basic_price}}</b></span>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h4 class="text-danger text-center py-5">Search Not Found . </h4>
                            @endforelse
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    EVENT SECTION END-->


    <!--    ABOUT SECTION-->
    <!--<section class="about-section py-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="about-image">-->
    <!--                    <img src="{{asset('web')}}/images/photos/about.png" alt="Image">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-md-6 mt-4 mt-md-0">-->
    <!--                <div class="about-text">-->
    <!--                    <h4>@lang('home.who_are_we')</h4>-->
    <!--                    <p>-->
    <!--                        @lang('home.about_p1')-->
    <!--                    </p>-->
    <!--                    <p>-->
    <!--                        @lang('home.about_p2')-->
    <!--                    </p>-->
    <!--                    <p>-->
    <!--                        @lang('home.about_p3')-->
    <!--                    </p>-->
    <!--                    <p>-->
    <!--                        @lang('home.about_p4')-->
    <!--                    </p>-->
    <!--                    <div>-->
    <!--                        <a href="{{route('about')}}" class="about-btn">@lang('home.Read_More')</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--    ABOUT SECTION END-->

    <!--    SERVICE SECTION-->
    <!--<section class="service-section py-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <div class="section-title text-center">-->
    <!--                    <h4>@lang('home.Our_Services')</h4>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row mt-5">-->
    <!--            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">-->
    <!--                <div class="service-box">-->
    <!--                    <a href="{{route('service')}}">-->
    <!--                        <img src="{{asset('web')}}/images/service/1.png" alt="">-->
    <!--                    </a>-->
    <!--                    <div class="service-text">-->
    <!--                        <h4>@lang('home.service_li6')</h4>-->
    <!--                        <p>-->
    <!--                            @lang('home.Event_marketing_is')-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">-->
    <!--                <div class="service-box">-->
    <!--                    <a href="{{route('service')}}">-->
    <!--                        <img src="{{asset('web')}}/images/service/2.png" alt="">-->
    <!--                    </a>-->
    <!--                    <div class="service-text">-->
    <!--                        <h4>@lang('home.Ads')</h4>-->
    <!--                        <p>-->
    <!--                            @lang('home.Ads_li1')-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">-->
    <!--                <div class="service-box">-->
    <!--                    <a href="{{route('service')}}">-->
    <!--                        <img src="{{asset('web')}}/images/service/3.png" alt="">-->
    <!--                    </a>-->
    <!--                    <div class="service-text">-->
    <!--                        <h4>@lang('home.Sponsoring_non_profit')</h4>-->
    <!--                        <p>-->
    <!--                            @lang('home.Sponsoring_non_profit_li1')-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">-->
    <!--                <div class="service-box">-->
    <!--                    <a href="{{route('service')}}">-->
    <!--                        <img src="{{asset('web')}}/images/service/4.png" alt="">-->
    <!--                    </a>-->
    <!--                    <div class="service-text">-->
    <!--                        <h4>@lang('home.sponsoring_influencers')</h4>-->
    <!--                        {{-- <p>-->
    <!--                            @lang('home.event_marketing_p')-->
    <!--                        </p> --}}-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
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
                                ??? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.???
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
                                ??? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.???
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
                                ??? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.???
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
                        <h4>@lang('home.Our_partners')</h4>
                    </div>
                </div>
            </div>
            <div class="picture_slider mt-5 d-flex align-items-center">
                <div class="brand-box">
                    <a href="#">
                         <img src="{{asset('web')}}/images/brands/event.png" alt="Image">
                    </a>
                   
                </div>
                <div class="brand-box">
                    <a href="#">
                         <img src="{{asset('web')}}/images/brands/technical.png" alt="Image">
                    </a>
                    
                </div>
                <div class="brand-box">
                    <a href="https://jobincu.com/en">
                         <img src="{{asset('web')}}/images/brands/job.png" alt="Image">
                    </a>
                    
                </div>
                <div class="brand-box">
                    <a href="#">
                         <img src="{{asset('web')}}/images/brands/marketing.png" alt="Image">
                    </a>
                    
                </div>
                 <div class="brand-box">
                     <a href="#">
                        <img src="{{asset('web')}}/images/brands/Design Incubator.png" alt="Image">
                    </a>
                    
                </div>
                <div class="brand-box">
                    <a href="https://exportincu.com/en">
                          <img src="{{asset('web')}}/images/brands/export.png" alt="Image">
                    </a>
                   
                </div>
                  <div class="brand-box">
                      <a href="#">
                         <img src="{{asset('web')}}/images/brands/Relathionship-incubator.png" alt="Image">
                    </a>
                    
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
@push('js')
@if ($locale == 'en')


    <script>
            function getEventToptic() {
                var event_type_id = $("#event_type_id").val()
        
                if (event_type_id) {
                    $.ajax({
                        url: `{{ route('event.topic.get') }}`,
                        data: {
                            id: event_type_id
                        },
                        success: function(res) {
                            console.log(res)
                            $("#event_topic").empty()
                            var options = '';
                            $.each(res, function(index, row) {
                                options += "<option value='" + row.id + "'>" + row.name + "</option>";
                            })
                            console.log(options)
                            $("#event_topic").append(options);
                        },
                        error: function(e) {
                            console.log(e);
                            toastr.error('Something went wrong, please see the console')
                        }
                    });
        
                    return;
                }
            }

    </script>

@elseif ($locale == 'ar')

 <script>
            function getEventToptic() {
                var event_type_id = $("#event_type_id").val()
        
                if (event_type_id) {
                    $.ajax({
                        url: `{{ route('event.topic.get') }}`,
                        data: {
                            id: event_type_id
                        },
                        success: function(res) {
                            console.log(res)
                            $("#event_topic").empty()
                            var options = '';
                            $.each(res, function(index, row) {
                                options += "<option value='" + row.id + "'>" + row.name_ar + "</option>";
                            })
                            console.log(options)
                            $("#event_topic").append(options);
                        },
                        error: function(e) {
                            console.log(e);
                            toastr.error('Something went wrong, please see the console')
                        }
                    });
        
                    return;
                }
            }

    </script>

@endif

@endpush