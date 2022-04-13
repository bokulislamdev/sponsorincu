<!DOCTYPE html>
<html lang="en" class="semi-dark">
    <head>
        <title>{{ $title ?? 'page title not set' }} - {{$websetting->homepage_title}} </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
        <!--plugins-->
        <link href="{{ asset('account') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="{{ asset('account') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="{{ asset('account') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="{{ asset('account') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{ asset('account') }}/assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="{{ asset('account') }}/assets/css/style.css" rel="stylesheet" />
        <link href="{{ asset('account') }}/assets/css/icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <!-- loader-->
        <link href="{{ asset('account') }}/assets/css/pace.min.css" rel="stylesheet"/>
        <!--Theme Styles-->
        <link href="{{ asset('account') }}/assets/css/dark-theme.css" rel="stylesheet"/>
        <link href="{{ asset('account') }}/assets/css/light-theme.css" rel="stylesheet"/>
        <link href="{{ asset('account') }}/assets/css/semi-dark.css" rel="stylesheet" />
        <link href="{{ asset('account') }}/assets/css/header-colors.css" rel="stylesheet"/>
        {{-- toster & sweet alert --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" /> --}}
        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        @stack('css')


    </head>
    <body>
        <!--start wrapper-->
        <div class="wrapper">
            @include('account.layouts.inc.header');

            @if (Auth::user()->role == 1)
                @include('account.layouts.inc.admin-sidebar');
            @elseif(Auth::user()->role == 2)
                @include('account.layouts.inc.organizer-sidebar');
            @elseif(Auth::user()->role == 3)
                @include('account.layouts.inc.sponsor-sidebar');
            @elseif(Auth::user()->role == 4)
                @include('account.layouts.inc.marketer-sidebar');
            @endif




			@yield('content')




        </div>
        <!--end wrapper-->

        <!-- Bootstrap bundle JS -->
        <script src="{{asset('account')}}/assets/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="{{ asset('account') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('account') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="{{ asset('account') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="{{ asset('account') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="{{ asset('account') }}/assets/js/pace.min.js"></script>
        <script src="{{ asset('account') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
        <script src="{{ asset('account') }}/assets/plugins/chartjs/js/Chart.extension.js"></script>
        <script src="{{ asset('account') }}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
        <!--app-->
        <script src="{{ asset('account') }}/assets/js/app.js"></script>
        <script src="{{ asset('account') }}/assets/js/index2.js"></script>
        <!-- toster & sweetalert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        {{-- <script src="{{ asset('account') }}/assets/js/sweetalert2@9.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script>
            new PerfectScrollbar(".best-product");
        </script>

        {{-- CUSTOM JS --}}
        <script>
            @if (Session::has('message'))

            var type = "{{ Session::get('alert-type', 'info') }}"

            switch (type) {
                case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
                case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
                case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
                case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
            }
            @endif

            $(document).ready(function() {
                $('.summernote').summernote();
            });




        // confirmation delete
        // function deleteItem() {
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't to Delete This!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //         })
        //         .then((result) => {
        //             if (result.isConfirmed) {
        //                 $('#delete-form').submit()
        //                 Swal.fire(
        //                     'Deleted!',
        //                     'Your data has been deleted.',
        //                     'success'
        //                 )
        //             }
        //     })
        // }

        function deleteItem() {
            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't to Delete This!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        $('#delete-form').submit()
                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        )
                    }
            })
        }

        </script>

        @stack('js')









        {!! Notify::message() !!}





    </body>
</html>
