@extends('web.layouts.app', ['title' => 'Services'])


@section('content')

        <!--    PAGE HEAD SECTION-->
        <section class="page-head-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>@lang('home.Our_Services')</h2>
                      
                    </div>
                </div>
            </div>
        </section>
        <!--    PAGE HEAD SECTION END-->
    
        <!--    BENEFITES SECTION-->
        <section class="benefit-section py-5">
            <div class="container">
                <div class="row m-auto">
                    {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Attracting-donations-for-the-benefit-of-the-parties.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                @lang('home.service_li1')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Attracting-sponsorships-for-the-benefit-of-the-parties.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li2')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Sponsorship-Counseling.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li3')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Event-Planning-&-Event-Martketing.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li4')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Marketing-of-pavilions-in-local-and-international-exhibitions.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li5')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Event-Planning-&-Event-Martketing.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li6')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Ticket-marketing-and-event-registration.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li7')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                     <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Use-marketing-tools-as-follows.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li8')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                     <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/small-service/Measuring-the-effect-of-effectiveness.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content">
                                <h6>
                                    @lang('home.service_li9')
                            </h6>
                             <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                        <div class="benefit-box" style="background-image: linear-gradient(#6429e365,#6429e365),url({{asset('web')}}/images/photos/top-banner.png);background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                            <div class="benefit-content comming-soon">
                                <h6>
                                   Comming Soon...
                            </h6>
                             <a href="javascript:void(0)" class="stretched-link"></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
    
            </div>
    
        </section>
        <!--    BENEFITES SECTION END-->
    
        <!--    MARKETING SECTION-->
        <section class="marketing-section">
            <div class="container">
                <div class="marketing-box py-5"  style="background-image: url({{asset('web')}}/images/photos/Event-marketing-banner.png);background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
                    <h2>
                        @lang('home.event_marketing')
                    </h2>
                    <p>
                        @lang('home.event_marketing_p')
                    </p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 pb-4">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/1.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li1')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12 col-lg-6 pb-4 d-none d-lg-block">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/2.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li2')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pb-4 d-lg-none">
                        <div class="marketing-content-box right">
                            <div class="d-flex bd-highlight">
                               
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li2')
                                    </p>
                                </div>
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/2.png" alt="Event Marketing Photo">
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="col-12 col-lg-6 pb-4">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/3.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li3')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12 col-lg-6 pb-4 d-none d-lg-block">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/4.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li4')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pb-4 d-lg-none">
                        <div class="marketing-content-box right">
                            <div class="d-flex bd-highlight">
                               
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li4')
                                    </p>
                                </div>
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/4.png" alt="Event Marketing Photo">
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12 col-lg-6 pb-4">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/5.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li5')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-12 col-lg-6 pb-4 d-none d-lg-block">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/6.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li6')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pb-4 d-lg-none">
                        <div class="marketing-content-box right">
                            <div class="d-flex bd-highlight">
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li6')
                                    </p>
                                </div>
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/6.png" alt="Event Marketing Photo">
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-12 col-lg-6 pb-4">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/7.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li7')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12 col-lg-6 pb-4 d-none d-lg-block">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/8.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li8')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pb-4 d-lg-none">
                        <div class="marketing-content-box right">
                            <div class="d-flex bd-highlight">
                                
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li8')
                                    </p>
                                </div>
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/8.png" alt="Event Marketing Photo">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-lg-6 pb-4">
                        <div class="marketing-content-box">
                            <div class="d-flex bd-highlight">
                                <div class="flex-shrink-1 bd-highlight">
                                    <img src="{{asset('web')}}/images/marketing/9.png" alt="Event Marketing Photo">
                                </div>
                                <div class="w-100 bd-highlight">
                                    <p>
                                        @lang('home.event_marketing_li9')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!--    MARKETING SECTION END-->
    
        <!--    MARKETING TOOLS-->
        <section class="marketing-tool-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="marketing-tool-image">
                            <img src="{{asset('web')}}/images/photos/marketing-tool.png" alt="Marketing Tools Photo">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="marketing-tools-content">
                            <div class="marketing-tools-content-head">
                                <div class="d-flex bd-highlight align-items-center">
                                    <div class="flex-shrink-1 bd-highlight">
                                        <h6>
                                            @lang('home.Use_marketing')
                                        </h6>
                                    </div>
                                    <div class="line-weith w-100 bd-highlight">
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li> <i data-feather="check" class="tik-icon"></i> @lang('home.Use_marketing_li1')</li>
                                <li><i data-feather="check" class="tik-icon"></i> @lang('home.Use_marketing_li2')</li>
                                <li><i data-feather="check" class="tik-icon"></i> @lang('home.Use_marketing_li3')</li>
                                <li>
                                    <i data-feather="check" class="tik-icon"></i>
                                    @lang('home.Use_marketing_li4')
                                </li>
                            </ul>
                            <div class="marketing-tools-content-head mt-3 mb-2">
                                <div class="d-flex bd-highlight align-items-center">
                                    <div class="flex-shrink-1 bd-highlight">
                                        <h6 class="additional">
                                            @lang('home.Additional_Services')
                                        </h6>
                                    </div>
                                    <div class="line-weith w-100 bd-highlight">
                                    </div>
                                </div>
                            </div>
    
                            <p>
                                @lang('home.Additional_Services_li1')
                            </p>
                            <p>
                               @lang('home.Additional_Services_li2')
                            </p>
                            <p>
                                @lang('home.Additional_Services_li3')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    MARKETING TOOLS END-->
    
    
    
        <!--    MARKETING SECTION-->
        <section class="marketing-section py-5">
            <div class="container">
                <div class="marketing-box py-5"  style="background-image: url({{asset('web')}}/images/photos/Ads2.png);background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
                    <h2>
                        @lang('home.Ads')
                    </h2>
    
                </div>
            </div>
        </section>
        <!--    MARKETING SECTION END-->
    
        <!--    ADS CONTENT SECTION-->
        <section class="ads-content-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li1')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li2')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li3')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li4')
    
    
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li5')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li6')
    
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li7')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Ads_li8')
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ADS CONTENT SECTION END-->
        
            <!--    MARKETING SECTION-->
        <section class="marketing-section py-5">
            <div class="container">
                <div class="marketing-box org py-5" style="background-image: url({{asset('web')}}/images/photos/Sponsoring-non-profit-organization.png);background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
                    <h2>
                        @lang('home.Sponsoring_non_profit')
                    </h2>
    
                </div>
            </div>
        </section>
        <!--    MARKETING SECTION END-->
        
        
            <!--    ADS CONTENT SECTION-->
        <section class="ads-content-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Sponsoring_non_profit_li1')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Sponsoring_non_profit_li2')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Sponsoring_non_profit_li3')
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="ads-content-box">
                            <p>
                                @lang('home.Sponsoring_non_profit_li4')
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ADS CONTENT SECTION END-->
        
        
        
                <!--    MARKETING SECTION-->
        <section class="marketing-section py-5">
            <div class="container">
                <div class="marketing-box org py-5" style="background-image: url({{asset('web')}}/images/photos/ads-org-bg2.png)">
                    <h2>
                       @lang('home.sponsoring_influencers')
                    </h2>
    
                </div>
            </div>
        </section>
        <!--    MARKETING SECTION END-->

    {{-- @include('web.component.subscribe');  --}}


@endsection

