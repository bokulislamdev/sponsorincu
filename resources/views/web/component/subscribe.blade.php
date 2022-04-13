    <!--    NOTIFICATION SECTION-->
    <section class="notification-section py-5">
        <div class="container">
            <div class="notify-container py-5 px-3">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="notification-left">
                            {{-- <h4>Get Notification</h4> --}}
                            <p>
                                @lang('home.Get_notified')
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="notification-right">
                            <div class="noti-form">
                                <form action="{{route('subscribe')}}" method="POST">
                                    @csrf
                                    <div class="noti-relative">
                                        <input type="text" placeholder="@lang('home.Email')" name="email">
                                        <button class="noti-button" type="submit">@lang('home.Subscription')</button>
                                    </div>
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    NOTIFICATION SECTION END-->