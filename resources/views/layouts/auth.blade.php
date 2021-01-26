<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('frontend/img/teklogo.png') }}" type="image/png" sizes="16x16">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    {{--
    <link href="{{ asset('backend/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/css/style.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    --}}

    <link rel="stylesheet" href="{{ asset('backend/css/styles-auth.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {

            /* padding-top: 40px; */
            /* padding-bottom: 40px; */
        }
    </style>
</head>

<body>
    <div class="dashboard-main-wrapper my_bg">
        @include('partials.nav.auth')
        <!-- ============================================================== -->
        <!-- login page  -->
        <!-- ============================================================== -->
        <div class="splash-container">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
    </div>

    <script src="{{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>

</html>