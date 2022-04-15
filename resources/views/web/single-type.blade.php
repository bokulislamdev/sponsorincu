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
                    <p>
                        <a href="{{route('homepage')}}">Home</a>
                        <span>/</span>
                        <a href="{{route('event.category')}}">@lang('home.Event_Type')</a>
                        <span>/</span>
                        <span>{{$event_types->name}}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--    PAGE HEAD SECTION END-->
    
    <section class="benefit-section py-2">
        <div class="container">
            <div class="row m-auto">
                @foreach ($event_topics as $event_topic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="benefit-box" style="background-image: linear-gradient(#6429e3c4,#6429e3c4),url(http://127.0.0.1:8000/web/images/small-service/Attracting-donations-for-the-benefit-of-the-parties.png);background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
                        <div class="benefit-content">
                            <h6>
                                @if ($locale == 'en')
                                {{$event_topic->name}}
                                @elseif( $locale == "ar")
                                {{$event_topic->name_ar}}
                                @endif
                            </h6>
                            <a href="{{route('single.topic',$event_topic->slug)}}" class="stretched-link"></a>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>

        </div>
    </section>



@endsection


