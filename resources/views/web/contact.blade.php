@extends('web.layouts.app', ['title' => 'Contact'])


@section('content')

          <!--    PAGE HEAD SECTION-->
          <section class="page-head-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                        <p>
                            <a href="{{route('homepage')}}">Home</a>
                            <span>/</span>
                            <span>Contact Us</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--    PAGE HEAD SECTION END-->



    
        <section class="contact-section py-5">
            <div class="container">
                <div class="row">
                    <div class="contact-title">
                        <h6 class="border-bottom">
                            Official Address
                        </h6>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="contact-left h-100">
                            <h4>@lang('home.yout_message')</h4>
                            <div class="contact-form">
                                <form action="{{route('contact.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 py-3">
                                            <input type="text" placeholder="@lang('home.Frist_Name')" name="first_name" value="{{old('name')}}">
                                            <span class="text-danger">{{$errors->first('first_name')}}</span>
                                        </div>
                                        <div class="col-6 py-3">
                                            <input type="text" placeholder="@lang('home.Last_Name')" name="last_name" value="{{old('name')}}">
                                            <span class="text-danger">{{$errors->first('last_name')}}</span>
                                        </div>
                                        <div class="col-6 py-3">
                                            <input type="email" placeholder="@lang('home.Enter_Your_email')" name="email" value="{{old('email')}}">
                                            <span class="text-danger">{{$errors->first('email')}}</span>
                                        </div>
                                        <div class="col-6 py-3">
                                            <input type="text" placeholder="@lang('home.phone_number')" name="phone" value="{{old('phone')}}">
                                            <span class="text-danger">{{$errors->first('phone')}}</span>
                                        </div>
                                     
                                        <div class="col-12 py-3">
                                            <textarea name="message" id="" cols="30" rows="10" placeholder="@lang('home.write_yout_message')">{{old('message')}}</textarea>
                                        </div>
                                        <div class="col-12 py-3">
                                            <button type="submit" class="btn btn-primary order">@lang('home.yout_message')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contact-right h-100 d-flex align-content-between flex-wrap">
                            <div>
                                <h4 class="border-bottom">Contact info</h4>
                            <div class="location py-3 w-100">
                                <div class="d-flex">
                                    {{-- <i data-feather="map-pin" class="social-contact-icon"></i> --}}
                                    
                                    <i class="fa-solid fa-location-dot social-contact-icon"></i>
                                    <p>
                                        @lang('home.address_details')
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i data-feather="phone-call" class="social-contact-icon"></i>
                                    <p>
                                        {{$websetting->phone}}
                                    </p>
                                </div>
                                 <div class="d-flex">
                                    <i data-feather="mail" class="social-contact-icon"></i>
                                    <p>
                                        {{$websetting->email}}
                                    </p>
                                </div>
                            </div>
                            </div>
                            <div class="social-media-contact mt-4 w-100">
                                <h6 class="border-bottom">Social Connect</h6>
                                <div class="social-icons mt-3">
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
                    </div>
                </div>
            </div>
        </section>

        @include('web.component.subscribe'); 

@endsection

