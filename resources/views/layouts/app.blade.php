<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicon-32x32.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    @stack('css')
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

    {{--
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/vector-map/jqvmap.css') }}">
    <link href="{{ asset('backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/assets/vendor/daterangepicker/daterangepicker.css') }}" />
    --}}
    <title>{{ config('app.name') }} - @yield('title')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper" id="app">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('partials.nav.app')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('partials.aside')
        <!-- ============================================================== -->
        <!-- end left sidebar -->

        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                @include('flash')
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ==============================================================
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header ">
                            {{-- <h2 class="pageheader-title">@yield('pageheader', '')</h2> --}}
                            <div class="col-12 divider mb-3" style="background-color:#e0e4ef"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                {{-- @if(\Request::route()->getPrefix() != '/admin' && !\Request::is('dashboard') ) --}}
                                <div class="card mb-2 ml-auto" style="width: fit-content;" id="walletBalance">
                                    <div class="card-body">
                                        <h5 class="text-success mb-0">Ledger Balance:
                                            {{-- &#8358;{{ number_format(calculateLedgerBalance(auth()->user()->id), 2) }} --}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="card mb-2 ml-auto" style="width: fit-content;" id="walletBalance">
                                    <div class="card-body">
                                        <h5 class="text-success mb-0">Wallet Balance:
                                            {{-- &#8358;{{ number_format(calculateAvailableBalance(auth()->user()->id), 2) }} --}}
                                        </h5>
                                    </div>
                                </div>
                                {{-- @endcannot --}}
                                {{-- @if(\Request::route()->getPrefix() != '/admin' && \Request::is('earnings') ) --}}
                                <div class="card mb-2 ml-auto" style="width: fit-content;" id="walletBalance">
                                    <div class="card-body">
                                        <h5 class="text-success mb-0">Binary:
                                            {{-- &#8358;{{ number_format($binary, 2) }} --}}
                                        </h5>
                                 /   </div>
                                </div>
                                <div class="card mb-2 ml-auto" style="width: fit-content;" id="pv">
                                    <div class="card-body">
                                        <h5 class="text-success mb-0">PV:
                                            {{-- {{ $pv }} --}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="card mb-2 ml-auto" style="width: fit-content;" id="indirect">
                                    <div class="card-body">
                                        <h5 class="text-success mb-0">Indirect:
                                            {{-- &#8358;{{ number_format($indirect, 2) }} --}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="card mb-2 ml-auto" style="width: fit-content;" id="direct">
                                    <div class="card-body">
                                        <h5 class="text-success mb-0">Direct:
                                            {{-- &#8358;{{ number_format($direct, 2) }} --}}
                                        </h5>
                                    </div>
                                </div>
                                {{-- @endcannot --}}


                            </div>


                            {{-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                                    </ol>
                                </nav>
                            </div> --}}
                        </div>
                    </div>
                </div>

                -->


                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- page contents  -->
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                <!--  page contents end -->
                <!-- ============================================================== -->



                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer" style="position: absolute; bottom:0; left:0;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                ©Teks Global 2020..
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">Proof</a>
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- Optional JavaScript -->
    <script src="{{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/js/main-js.js') }}"></script>
    @stack('scripts')
</body>

</html>
