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
                        <span>@lang('home.Discover_Events')</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--    PAGE HEAD SECTION END-->
    @foreach ($event_types as $event_type)
    <section class="benefit-section py-2">
        <div class="container">
            <div class="row py-4">
                <div class="contact-title border-bottom d-flex justify-content-between align-items-center">
                    <h6>
                        @if ($locale == 'en')
                            {{$event_type->name}}
                        @elseif( $locale == "ar")
                        {{$event_type->name_ar}}
                        @endif
                    </h6>
                    <a href="#">View All</a>
                </div>
            </div>
            <div class="row m-auto">
                
                @php
                     $event_topics = App\Models\EventTopic::where('event_type_id',$event_type->id)->limit(4)->get();
                @endphp
                  
                
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
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div> 
                @endforeach
                




            </div>

        </div>
    </section>
    @endforeach





    <section class="benefit-section py-2">
        <div class="container">
            <div class="row py-4">
                <div class="contact-title border-bottom d-flex justify-content-between align-items-center">
                    <h6>
                        Live Events
                    </h6>
                    <a href="#">View All</a>
                </div>
            </div>
            <div class="row m-auto">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="benefit-box" style="background-image: linear-gradient(#6429e3c4,#6429e3c4),url(http://127.0.0.1:8000/web/images/small-service/Attracting-donations-for-the-benefit-of-the-parties.png);background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
                        <div class="benefit-content">
                            <h6>
                                Attracting donations for the benefit of the parties </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </section>


    @include('web.component.subscribe'); 


@endsection

