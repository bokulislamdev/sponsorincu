@extends('web.layouts.app', ['title' => 'Events'])


@section('content')

        <!--    PAGE HEAD SECTION-->
        <section class="page-head-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Events Details</h2>
                        <p>
                            <a href="{{route('homepage')}}">@lang('home.Homepage')</a>
                            <span>/</span>
                            <span>@lang('home.Discover_Events') / Details of Events</span>
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
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="event-right">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main-event-box main-event-details">
                                        <div class="event-image">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset($event->image)}}" alt="Event Photo">
                                            </a>
                                        </div>
                                        <div class="pt-3 border-bottom">
                                            <span class="date">{{ Carbon\Carbon::parse($event->date)->format('l') }}, {{ Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                                            <p class="title">{{$event->name}}</p>
                                            <span class="date"> <i class="event-address-icon" data-feather="map-pin"></i> {{$event->address}}</span>
    
                                        </div>
                                        <div class="py-2">
                                            {!! $event->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-5">
                                <div class="col-12">
                                    <h2 class="sponser-header">Sponsor Package</h2>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-4 pb-5">
                                    <div class="sponser-package">
                                        <div class="package-head">
                                            <p>Basic Packag</p>
                                            <h4>$500</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 01
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 02
                                            </li>
                                            <li class="danger">
                                                <i class="i-check" data-feather="check"></i> Service Number 03
                                            </li>
                                            <li class="danger">
                                                <i class="i-check" data-feather="check"></i> Service Number 04
                                            </li>
                                            <li class="danger">
                                                <i class="i-check" data-feather="check"></i> Service Number 05
                                            </li>
                                        </ul>
                                        <a href="#">Contact</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-4 pb-5">
                                    <div class="sponser-package">
                                        <div class="package-head">
                                            <p>Standart Package</p>
                                            <h4>$800</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 01
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 02
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 03
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 04
                                            </li>
                                            <li class="danger">
                                                <i class="i-check" data-feather="check"></i> Service Number 05
                                            </li>
                                        </ul>
                                        <a href="#">Contact</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-4 pb-5">
                                    <div class="sponser-package">
                                        <div class="package-head">
                                            <p>Premium Package</p>
                                            <h4>$1200</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 01
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 02
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 03
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 04
                                            </li>
                                            <li>
                                                <i class="i-check" data-feather="check"></i> Service Number 05
                                            </li>
                                        </ul>
                                        <a href="#">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="our-sponser py-5">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="sponser-header">Our Sponsors</h2>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 pb-3">
                                        <img src="{{asset('web')}}/images/brands/1.png" alt="">
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 pb-4">
                                        <img src="{{asset('web')}}/images/brands/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 pb-4">
                                        <img src="{{asset('web')}}/images/brands/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 pb-4">
                                        <img src="{{asset('web')}}/images/brands/4.png" alt="">
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 pb-4">
                                        <img src="{{asset('web')}}/images/brands/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 pb-4">
                                        <img src="{{asset('web')}}/images/brands/6.png" alt="">
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-12 col-md-5 col-lg-4 pt-4 pt-md-0">
                        <div class="event-left">
                            <h3>Aspect Attendance</h3>
                            @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
                            <div class="male-female pt-4">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{$event->aspect_male}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <span class="male">Male</span>
                                    <span class="female">Female</span>
                                </div>
                            </div>
                            <form action="{{route('event.request.store')}}" method="post">
                                @csrf
                                <div class="py-2">
                                    <input type="hidden" name="event_id" value="{{$event->id}}">
                                    <label for="#">Frist Name</label>
                                    <input type="text" placeholder="Frist Name" name="first_name" value="{{old('first_name')}}">
                                    <span class="text-danger">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="py-2">
                                    <label for="#">Last Name</label>
                                    <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                                    <span class="text-danger">{{$errors->first('last_name')}}</span>
                                </div>
                                <div class="py-2">
                                    <label for="#">Comapny</label>
                                    <input type="text" placeholder="Company" name="company"  value="{{old('company')}}">
                                    <span class="text-danger">{{$errors->first('company')}}</span>
                                </div>
                                <div class="py-2">
                                    <label for="#">Email</label>
                                    <input type="text" placeholder="Email" name="email"  value="{{old('email')}}">
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="py-2">
                                    <label for="#">Phone</label>
                                    <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}">
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                </div>
                                <div class="py-2">
                                    <label for="">Choose Package</label>
                                    <select id="" name="package">
                                        <option value="basic" {{old('package') == 'basic' ? 'selected' : '' }}>Basic</option>
                                        <option value="standart" {{old('package') == 'standart' ? 'selected' : '' }}>Standart</option>
                                        <option value="premium"  {{old('package') == 'premium' ? 'selected' : '' }}>Premium</option>
                                    </select>
                                    <span class="text-danger">{{$errors->first('package')}}</span>
                                </div>
                                <div class="py-2">
                                    <textarea id="" cols="30" rows="10" placeholder="Message" name="message">{{old('message')}}</textarea>
                                </div>
                                <div class="py-2 d-flex checkbox">
                                    <input id="tramscondation" type="checkbox" value="1" name="trams_condition" {{old('trams_condition') == 1 ? 'checked' : ''}}>
                                    <label for="tramscondation">Hereby I agree with all terms and condition of <b>Sponsors Incubator ltd.</b></label>
                                    <p class="text-danger">{{$errors->first('trams_condition')}}</p>
                                </div>
                                <div class="pt-3">
                                    <button type="submit">Send</button>
                                </div>
    
                            </form>
    
    
    
                            <div class="about-org mt-5">
                                <div class="d-flex bd-highlight">
                                    <div class="about-org-img flex-shrink-1 bd-highlight">
                                        <a href="#">
                                            <img src="{{asset('web')}}/images/org/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="about-org-right w-100 bd-highlight">
                                        <p>Know About Organizer</p>
                                        <h6>Renasa Tour & Travel Agency</h6>
                                        <span>
                                            <i class="i-map" data-feather="map-pin"></i>
                                             Riadah, Saudi Arabia
                                         </span>
                                    </div>
                                    
                                </div>
                              
                                    <div class="py-2">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                                <div class="need-ticket">
                                    <p>Need Ticket?</p>
                                    <a href="#">Find Ticket</a>
                                </div>
                                
                                <div class="need-ticket pt-5">
                                    <p>Are you Event Organizer?</p>
                                    <a href="#" class="live-event">List Events</a>
                                    <a href="#">Find Sponsors</a>
                                </div>
                               
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </div>
        </section>
        <!--    EVENT SECTION END-->


    @include('web.component.subscribe'); 


@endsection

