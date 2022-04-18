@extends('web.layouts.app', ['title' => 'Become Sponsor'])


@section('content')
<!--    PAGE HEAD SECTION-->
<section class="page-head-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Become Sponsor</h2>
                <p>
                    <a href="#">Home</a>
                    <span>/</span>
                    <span>Become Sponsor</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!--    PAGE HEAD SECTION END-->

<!--    BECOME SPONSOR-->
<section class="become-sponsor-section py-5">
    <div class="container">
        <div class="row">
            <div class="become-sponsor-head">
                <h4>Sponsorship</h4>
                <h6>Crazy Word for Smart Marketing</h6>
                <p>
                    Sponsorships are available on a first-come, first-served basis. DISTRIBUTECH International's® sponsorship packages are designed to offer a variety of opportunities and levels of exposure. They are a great way to leverage your participation and presence at the event.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <div class="become-sponsor-box" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 68.75%),url({{asset('web')}}/images/sponsor/1.png); background-size: cover; background-position: center; background-repeat: no-repeat;">

                    <h6>Booth Trapffic Generation</h6>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <div class="become-sponsor-box" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 68.75%),url({{asset('web')}}/images/sponsor/2.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h4>Branding</h4>
                    <h6>Branding</h6>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <div class="become-sponsor-box" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 68.75%),url({{asset('web')}}/images/sponsor/3.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h4>Networking</h4>
                    <h6>Networking</h6>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <div class="become-sponsor-box" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 68.75%),url({{asset('web')}}/images/sponsor/4.png); background-size: cover; background-position: center; background-repeat: no-repeat;">

                    <h6>Service Launch/New Product</h6>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <div class="become-sponsor-box" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 68.75%),url({{asset('web')}}/images/sponsor/5.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h4>Leadership</h4>
                    <h6>Thought Leadership</h6>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pb-4">
                <div class="become-sponsor-box" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 68.75%),url({{asset('web')}}/images/sponsor/6.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h4>Advertiesment</h4>
                    <h6>Official Advertisment</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    BECOME SPONSOR END-->


<!--    SPONSOR CONTACT-->
<section class="sponsor-contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sponsor-contact">
                    <h4>Sponsorship Contacts:</h4>
                    <h6>Very interested in becoming a sponsor? Let us help.</h6>
                    <div class="mt-4">
                        <a href="#become_sponsor">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    SPONSOR CONTACT-->

<!--    BECOME SPONSOR REQUEST-->
<section class="become-sponsor-request py-5" id="become_sponsor">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="become-sponsor-request-form">
                    <h3>Become A Sponsor</h3>
                    <h6>Request More Information</h6>
                    <form action="{{route('contact.store')}}" method="POST" class="mt-4">
                        @csrf
                       
                           
                                <input type="text" placeholder="@lang('home.Frist_Name')" name="first_name" value="{{old('name')}}">
                                <span class="text-danger">{{$errors->first('first_name')}}</span>
                            
                            
                                <input type="text" placeholder="@lang('home.Last_Name')" name="last_name" value="{{old('name')}}">
                                <span class="text-danger">{{$errors->first('last_name')}}</span>
                           
                            
                                <input type="email" placeholder="@lang('home.Enter_Your_email')" name="email" value="{{old('email')}}">
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            
                            
                                <input type="text" placeholder="@lang('home.phone_number')" name="phone" value="{{old('phone')}}">
                                <span class="text-danger">{{$errors->first('phone')}}</span>


                                <input type="text" placeholder="Job Title" name="job_title" value="{{old('job_title')}}">
                          
                                <input type="text" placeholder="@lang('home.country')" name="country" value="{{old('country')}}">
                                <input type="text" placeholder="@lang('home.address')" name="address" value="{{old('address')}}">

                                <button type="submit" >@lang('home.send')</button>
                           
                        
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="become-sponsor-request-info pt-4">
                    <h2>Access to Potential Customers Through Media</h2>
                    <p>
                        In addition to our live events, we also have strong media brands and opportunities to reach new prospects digitally. We take pride in being able to service our customers globally 365 days a year through our industry-leading media channels.
                    </p>
                    <ul class="py-2">
                        <li>Websites </li>
                        <li>E-newsletters</li>
                        <li>Social Media</li>
                        <li>Direct Communication to Targeted Audiences</li>
                        <li>Retargeting / Audience Extension Program</li>
                        <li>Video Production Services</li>
                        <li>Audience Research</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#">Download</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    BECOME SPONSOR REQUEST END-->


@endsection

