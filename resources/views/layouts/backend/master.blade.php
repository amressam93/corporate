<!DOCTYPE html>
<html lang="en" dir="{{App::getLocale() == 'en' ? '':'rtl'}}">
<head>

    @include('layouts.backend.headers.head')

</head>

<body style="font-family: 'Cairo', sans-serif">

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="{{asset('backend/assets/images/pre-loader/loader-01.svg')}}" alt="">
    </div>

    <!--=================================
     preloader -->

@include('layouts.backend.headers.main-header')
<!--=================================
     Main content -->

    <div class="container-fluid">
        <div class="row">

        @include('layouts.backend.sidebar.main-sidebar')

        <!--=================================
           wrapper -->
            <div class="content-wrapper">

            @yield('content')
            <!--=================================
                 wrapper -->

                @include('layouts.backend.footers.footer')

            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>

<!--=================================
 footer -->

@include('layouts.backend.footers.scripts')

</body>
</html>
