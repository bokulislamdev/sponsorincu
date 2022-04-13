@php
$locale = app()->getLocale();
@endphp
@extends('web.layouts.app', ['title' => 'Events'])


@section('content')

    <!--    PAGE HEAD SECTION-->
    <section class="page-head-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>@lang('home.Discover_Events')</h2>
                  
                </div>
            </div>
        </div>
    </section>
    <!--    PAGE HEAD SECTION END-->

    <!--    EVENT SECTION-->
    <section class="event-page-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="event-left">
                        <form action="#">
                            <div class="py-2">
                                <label for="#">@lang('home.Location')</label>
                                <input type="text">
                            </div>
                            <div class="py-2">
                                <label for="#">@lang('home.Event_Type')</label>
                                <select name="" id="">
                                    <option value="">select</option>
                                </select>
                            </div>
                            <div class="py-2">
                                <label for="#">@lang('home.Event_Topic')</label>
                                <select name="" id="">
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
                                <input type="date" placeholder="asd jas">
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
                            @foreach ($events as $event)
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
                                        
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                            {{-- <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/6.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/7.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/5.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/6.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/7.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/5.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/6.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/7.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/5.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/6.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pb-4">
                                <div class="main-event-box">
                                    <div class="event-image">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/event/7.png" alt="Event Photo">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <span class="date">Thursday, 13 Apr 2022</span>
                                        <p class="title">Lorem Ipsum is simply dummy text of the....</p>
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> Riadah, Saudi Arabia</span>
                                        <span class="price">Starting at <b>$500</b></span>
                                    </div>
                                </div>
                            </div> --}}
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    EVENT SECTION END-->


    @include('web.component.subscribe'); 


@endsection

