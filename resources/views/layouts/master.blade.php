<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Sistema de legajos')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ACA VA EL PARTIAL DE LOS ESTILOS :D -->
    @include('layouts.partials.styles')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <!--ACA VVA EL PARTIAAL DEL SIDEBAR LA BARRITA DEL COSTADO FEA ES UN IF PORQUE EL PARTIAL DEL USER ES DIFERENTE AL PARTIAL DEL ADMIN :D :D-->

        @if(Auth::user()->rol_id == 1)
            @include('layouts.partials.sidebar')
        @else
            @include('layouts.partials.users_sidebar')
        @endif

        <!-- main content area start -->
        <div class="main-content">

            
            @include('layouts.partials.header')

            @include('layouts.partials.pagetitle')

            @yield('admin-content')
            @yield('user-content')


        </div>
        <!-- main content area end -->


        <!-- ACA VA EL PARTIAL DE LOS ESTILOS :D -->
        @include('layouts.partials.footer')

       
    </div>
    <!-- page container area end -->

    @include('layouts.partials.offset')
    
    @include('layouts.partials.scripts')


</body>

</html>
