<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-FITME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Liabraries CSS Files -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset("frontend/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.flipster.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pogoslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset("frontend/css/transitions.css") }}">
    <!-- Theme CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset("frontend/css/color.css") }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    @stack('css')
    <script src="{{ asset("js/vendor/modernizr-2.8.3-respond-1.4.2.min.js") }}"></script>
</head>

<body class="tg-home">
    <!--************************************
			Wrapper Start
	*************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        @include('partials.frontend.header')

        @yield('content')

        <!--    Footer Start
        *************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-footerinfo">
                <div class="container">
                    <div class="row">
                        <div class="tg-threecolumns">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="tg-column">
                                    <strong class="tg-logo">
                                        <a href="javascript:void(0);"><img src="{{ asset('frontend/images/logo.png') }}"
                                                alt="image description"></a>
                                    </strong>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit sed doi eiusmod empor incididunt utnalo labore
                                            doloregna aliqua mianiem aliquip commodo consequat.</p>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li>
                                            <i class="icon-phone-handset"></i>
                                            <span>0800 - 1234 - 562 - 6</span>
                                        </li>
                                        <li>
                                            <i class="icon-printer"></i>
                                            <span>+4 1234 5678 - 9</span>
                                        </li>
                                        <li>
                                            <i class="icon-heart-pulse"></i>
                                            <span><a href="mailto:support@domain.com">support@domain.com</a></span>
                                        </li>
                                        <li>
                                            <i class="icon-pushpin"></i>
                                            <address>795 South Park Avenue, Door 640 pushpin Wonland, CA 94107,
                                                Australia
                                            </address>
                                        </li>
                                    </ul>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                    class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                    class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                    class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="tg-googleplus"><a href="javascript:void(0);"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="tg-column">
                                    <div class="tg-widget tg-widgetusefulllinks">
                                        <div class="tg-widgettitle">
                                            <h3>Useful Links</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <ul class="tg-usefulllinks tg-liststyledot">

                                                <li class="active"><a href="{{ route('frontend.steps') }}">How It
                                                        Works</a></li>
                                                <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tg-widget tg-widgetbusinesshours">
                                        <div class="tg-widgettitle">
                                            <h3>Business Hours</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-description">
                                                <p></p>
                                            </div>
                                            <ul class="tg-timinginfo">
                                                <li>
                                                    <span>Monday - Friday: </span>
                                                    <span>09:00am to 05:00pm</span>
                                                </li>
                                                <li>
                                                    <span>Saturday: </span>
                                                    <span>09:00am to 02:00pm</span>
                                                </li>
                                                <li>
                                                    <span>Sunday: </span>
                                                    <span>Closed</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="tg-column">
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Signup Newsletter</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <form class="tg-themeform tg-formsignupnewsletter">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="firstname"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="lastname"
                                                            placeholder="last Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Enter Your Email Here*">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="tg-btn">signup</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                            <div class="tg-noticearea">
                                                <span class="tg-noticeicon"><i class="icon-bullhorn"></i></span>
                                                <h4>We Don’t Scam!</h4>
                                                <p>Consectetur adipisicing elit sed doi eiusod empor incidint.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-footerbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="tg-copyright">{{ date('Y') }} All Rights Reserved © Get Fitted Online</span>
                            <nav class="tg-addnav">
                                <ul>
                                    <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li><a href="howitwork.html">How It Works</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--************************************
                    				Footer End
                    		*************************************-->
    </div>
    <!--************************************
                    			Wrapper End
                    	*************************************-->
    <script src="{{ asset('frontend/js/vendor/jquery-library.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en">
    </script>
    <script src="{{ asset('frontend/js/jquery.flipster.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/pogoslider.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/js/gmap3.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @stack('scripts')
</body>


</html>
