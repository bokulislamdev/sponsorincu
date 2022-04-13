@extends('web.layouts.app', ['title' => 'Blog Details'])


@section('content')

    <!--    PAGE TITLE-->
    <section class="page-title py-5">
        <div class="container">
            <h2>Blog Page</h2>
            <a href="{{route('homepage')}}">Home</a>.
            <a href="#">Pages</a>.
            <span>Blog Page</span>

        </div>
    </section>
    <!--    PAGE  TITLE END-->

    <!--    BLOG-->
    <section class="blog py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 pb-5">
                            <div class="blog-boxx d-flex align-content-between flex-wrap">
                                <div class="blog-image w-100">
                                    <a href="#">
                                        <img src="{{asset($blog->image)}}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-text py-2 w-100">
                                    <div class="blog-date py-2">
                                        <span>
                                            <img src="{{asset('web')}}/images/icons/ink.png" alt="">
                                            {{$blog->user ? $blog->user->name : ''}}
                                        </span>
                                        <span>
                                            <img src="{{asset('web')}}/images/icons/calendar.png" alt="">
                                            {{$blog->created_at->format('d M y')}}
                                        </span>
                                    </div>

                                    <h4>{{$blog->title}}</h4>
                                    <div>

                                        {!! $blog->description !!}

                                    </div>

                                    <div class="recent-post mt-5">
                                        <h3>Share</h3>
                                        <div class="payment-card follow">

                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-details-right">
                        <div class="blog-search">
                            <h3>Search</h3>
                            <div class="search-input">
                                <form action="#">
                                    <input type="text" placeholder="Search For Posts">
                                </form>
                                <button type="submit"><img src="{{asset('web')}}/images/icons/search2.png" alt=""></button>
                            </div>
                        </div>

                        <div class="blog-category mt-5">
                            <h3>Categories</h3>



                            <div class="custom-row">



                                @foreach ($categories as $category)
                                    <a href="#">{{$category->name}} </a>
                                @endforeach

                            </div>

                        </div>

                        <div class="recent-post mt-5">
                            <h3>Recent Post</h3>
                            @foreach ($recent_blog as $blog)
                            <div class="d-flex bd-highlight align-items-center">

                                <div class="recent-image p-2 flex-shrink-1 bd-highlight">



                                    <a href="{{route('blog.details',$blog->slug)}}"><img src="{{asset($blog->image)}}" alt="Blog Photo"></a>

                                </div>

                                <div class="recent-text p-2 w-100 bd-highlight">
                                    <h6>{{$blog->title}}</h6>
                                    <span>{{$blog->created_at->format('d M y')}}</span>
                                </div>

                            </div>
                            @endforeach

                        </div>

                        <div class="recent-post mt-5">
                            <h3>Sale Product</h3>
                            @foreach ($sale_blog as $sale )


                            <div class="d-flex bd-highlight align-items-center">
                                <div class="recent-image p-2 flex-shrink-1 bd-highlight">
                                    <a href="{{route('blog.details',$blog->slug)}}"><img src="{{asset($sale->image)}}" alt="Blog Photo"></a>
                                </div>
                                <div class="recent-text p-2 w-100 bd-highlight">
                                    <h6>{{$sale->title}}</h6>
                                    <span>{{$sale->created_at->format('d M y')}}</span>
                                </div>
                            </div>
                            @endforeach

                        </div>


                        <div class="recent-post mt-5">
                            <h3>Offer product</h3>
                            @foreach ($offer_blog as $offer )


                            <div class="row mt-4">
                                <div class="col-6 text-center pb-4">
                                    <div class="recent-image offer">
                                        <a href="{{route('blog.details',$blog->slug)}}"><img src="{{asset($offer->image)}}" alt="Blog Photo"></a>
                                    </div>
                                    <div class="recent-text mt-2">
                                        <h6>{{$offer->title}}</h6>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div class="recent-post mt-5">
                            <h3>Follow</h3>
                            <div class="payment-card follow">

                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                        {{-- <div class="tegs mt-5">
                            <h3>Tags</h3>
                            <div class="custom-row">
                                <a href="#">General</a>
                                <a href="#">Atsanil</a>
                                <a href="#">Insas.</a>
                                <a href="#">Bibsaas</a>
                                <a href="#">Nulla.</a>
                            </div>
                        </div> --}}


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--    BLOG END-->


    @include('web.component.parties');

@endsection



