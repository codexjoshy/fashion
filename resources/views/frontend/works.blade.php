@extends('layouts.frontend')

@section('content')
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="tg-breadcrumb">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="tg-active">How It Works</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
				Inner Page Banner End
		*************************************-->

<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                    <div class="tg-sectionhead">
                        <div class="tg-heading">
                            <h2>How Tailor Online Works</h2>
                        </div>
                        <div class="tg-description">
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etaiate
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip exea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-worksteps">
                        <div class="tg-workstep">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                                    <div class="tg-videobox">
                                        <img src="{{ asset('frontend/images/howitwork/img-01.jpg') }}"
                                            alt="image description">
                                        <iframe
                                            src="https://www.youtube.com/embed/YJNvgjGRKcY?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                                    <div class="tg-stepcontent">
                                        <h3>01. Select Suit You Like</h3>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elite sed dotas eiusmod temp incididunt
                                                ireae etaiate dolore magna enim ad minim veniam uis aute irure
                                                dolor ina reprehenderit inchieach voluptate velit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-workstep">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                                    <div class="tg-videobox">
                                        <img src="{{ asset('frontend/images/howitwork/img-01.jpg') }}"
                                            alt="image description">
                                        <iframe
                                            src="https://www.youtube.com/embed/J37W6DjqT3Q?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                                    <div class="tg-stepcontent">
                                        <h3>02. Select Suit You Like</h3>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elite sed dotas eiusmod temp incididunt
                                                ireae etaiate dolore magna enim ad minim veniam uis aute irure
                                                dolor ina reprehenderit inchieach voluptate velit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-workstep">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                                    <div class="tg-videobox">
                                        <img src="{{ asset('frontend/images/howitwork/img-01.jpg') }}"
                                            alt="image description">
                                        <iframe
                                            src="https://www.youtube.com/embed/cS9g9XdHiAQ?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                                    <div class="tg-stepcontent">
                                        <h3>03. Select Suit You Like</h3>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elite sed dotas eiusmod temp incididunt
                                                ireae etaiate dolore magna enim ad minim veniam uis aute irure
                                                dolor ina reprehenderit inchieach voluptate velit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-workstep">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                                    <div class="tg-videobox">
                                        <img src="{{ asset('frontend/images/howitwork/img-01.jpg') }}"
                                            alt="image description">
                                        <iframe
                                            src="https://www.youtube.com/embed/gvPyZN7muJM?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                                    <div class="tg-stepcontent">
                                        <h3>04. Select Suit You Like</h3>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elite sed dotas eiusmod temp incididunt
                                                ireae etaiate dolore magna enim ad minim veniam uis aute irure
                                                dolor ina reprehenderit inchieach voluptate velit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
