<!--************************************
				Header Start
		*************************************-->
<header id="tg-header" class="tg-header tg-haslayout">
    <div class="tg-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="tg-addressinfo">
                        <li>
                            <i class="icon-map-marker"></i>
                            <address>14 Tottenham Court Road, Manchester</address>
                        </li>
                        <li>
                            <i class="icon-clock"></i>
                            <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                        </li>
                        <li>
                            <i class="icon-phone-handset"></i>
                            <span>+4 1234 567890</span>
                        </li>
                    </ul>
                    <ul class="tg-socialicons">
                        <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                        <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-logonav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="tg-logo"><a href="{{ route('frontend.index') }}"><img
                                src="{{ asset('frontend/images/logo.png') }}" alt="company logo here"></a></strong>
                    <div class="tg-navigationarea">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    {{-- <li class="menu-item-has-children {{ Request::is('/')? 'current-menu-item':'' }}">
                                    <a href="{{ route('frontend.index') }}">hOME</a>
                                    <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="index-2.html">Home-1</a></li>
                                        <li><a href="indexv2.html">Home-2</a></li>
                                    </ul>
                                    </li> --}}
                                    {{-- <li><a href="shirt.html">Shirts</a>
                                    </li>
                                    <li><a href="blazers.html">Blazers</a></li>
                                    <li><a href="pants.html">Pants</a></li> --}}
                                    <li class="{{ Request::is('/')? 'current-menu-item':'' }}"><a
                                            href="{{ route('frontend.index') }}">Home
                                        </a></li>
                                    <li class="{{ Request::is('how-it-works')? 'current-menu-item':'' }}"><a
                                            href="{{ route('frontend.steps') }}">How It Works</a></li>
                                    <li class="{{ Request::is('contact')? 'current-menu-item':'' }}"><a
                                            href="{{ route('frontend.contact') }}">Contact</a></li>
                                    {{-- <li class="menu-item-has-children">
                                        <a href="javascript:void(0);"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">shop</a></li>
                                                    <li><a href="shopdetail.html">Product Detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="newsgrid.html">blog grid</a></li>
                                                    <li><a href="newslist.html">blog list</a></li>
                                                    <li><a href="newsdetail.html">blog detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="aboutus.html">About</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="comingsoon.html">coming soon</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </nav>
                        <a class="tg-btn tg-btnstartcustomizing" href="{{ route('login') }}" target="_blank">Login</a>
                        {{-- <a class="tg-btn tg-btnstartcustomizing"
                            href="http://www.codezel.com/tailors-online/customizer/?pid=8"
                            target="_blank"><span>new</span>Start Customizing</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--************************************
				Header End
		*************************************-->
