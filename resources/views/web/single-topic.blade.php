@php
$locale = app()->getLocale();
@endphp

@extends('web.layouts.app', ['title' => 'Single Topic'])


@section('content')

        <!--    PAGE HEAD SECTION-->
        <section class="page-head-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h2>@lang('home.Event_Topic')</h2>
                    <p>
                        <a href="{{route('homepage')}}">Home</a>
                        <span>/</span>
                        <a href="{{route('event.category')}}">@lang('home.Event_Type')</a>
                        <span>/</span>
                        <span>
                            @if ($locale == 'en')
                            {{$event_topic->name}}
                            @elseif( $locale == "ar")
                            {{$event_topic->name_ar}}
                            @endif
                    </p>
                      
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
                        <form action="{{route('event')}}" method="get">
                        
                            <div class="py-2">
                                <label for="#">@lang('home.Location')</label>
                                <input type="text" name="location">
                            </div>
                            <div class="py-2">
                                <label for="#">@lang('home.Event_Type')</label>
                                <select name="type" id="event_type_id" onchange="getEventToptic()">
                                    <option value="">select</option>
                                    @foreach ($event_type as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
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
                                        
                                        <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> {{$event->address}}</span>
                                        <span class="price">Starting at <b>SAR {{$event->basic_price}}</b></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    EVENT SECTION END-->



@endsection

@push('js')

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
@endpush()
