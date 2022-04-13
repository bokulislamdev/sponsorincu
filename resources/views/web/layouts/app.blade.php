@php
$locale = app()->getLocale();
@endphp

<!DOCTYPE html>

@if ($locale == 'en')
    <html lang="en" dir="auto">
@elseif( $locale == "ar")
    <html lang="ar" dir="rtl">
@endif

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title ?? 'page title not set' }} - {{$websetting->homepage_title}} </title>
<!--    BOOSTRAP-->
@if ($locale == 'en')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@elseif($locale == 'ar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
@endif
<!-- FONTAWSOME6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<!--    GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!--    slick slider-->
<link rel="stylesheet" href="{{asset('web')}}/css/slick.css">
<link rel="stylesheet" href="{{asset('web')}}/css/slick-theme.css">
@include('web.layouts.inc.css-default')
<!--    MAIN CSS-->
<link rel="stylesheet" href="{{asset('web')}}/css/style.css">
<link rel="stylesheet" href="{{asset('web')}}/css/responsive.css">
@if ($locale == 'ar')
<link rel="stylesheet" href="{{asset('web')}}/css/arabic.css">
@endif

</head>

<body>




    @include('web.layouts.inc.header')


    @yield('content')



    @include('web.layouts.inc.footer')


    

        <!--    JQUERY GOOGLE HOST-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <!--    BOOSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--feather icon-->
        <script src="https://unpkg.com/feather-icons"></script>
        <!--    slick-->
        <script src="{{asset('web')}}/js/slick.min.js"></script>
            <!--    mixitup-->
        <script src="{{asset('web')}}/js/mixitup.min.js"></script>


    @include('web.layouts.inc.js-default')



    <script>
           //        MOBILE MENU
        function mobileClick() {
            $("#mobile-menu").toggleClass('mobileAdd');
        }
        
        
        //        feather icon
        feather.replace()

        //mixitup
        $(document).ready(function() {
            var mixer = mixitup(".mixit-js");
        });


        $('.client_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            @if ($locale == 'ar')
            rtl: true,
            @endif
            dots: true,
            infinite: false,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            arrows: false,
            
            
        });
        


        // slick slider
        $('.picture_slider').slick({
            slidesToShow: 6,
            slidesToScroll: 2,
            autoplay: true,
            dots: true,
            @if ($locale == 'ar')
            rtl: true,
            @endif
            infinite: false,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            arrows: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    @stack('js')

  </div>
</body>


</html>



    








