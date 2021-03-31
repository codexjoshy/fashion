@extends('layouts.frontend')

@section('content')
<!--************************************
				Inner Page Banner Start
		*************************************-->
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">product</a></li>
                    <li class="tg-active">Detail</li>
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="tg-content" class="tg-content">
                    <div class="tg-product tg-productdetail">
                        <div class="tg-productbox">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                                <div class="tg-productgallery">
                                    <div id="tg-viewslider" class="tg-viewslider tg-productgalleryslider owl-carousel">
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-11.png') }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-11.png') }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-11.png') }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-11.png') }}"
                                                alt="image description"></figure>
                                    </div>
                                    <div id="tg-thumblider" class="tg-thumblider tg-productgalleryslider owl-carousel">
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-12.png') }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-13.png') }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-14.png') }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img
                                                src="{{ asset('frontend/images/products/img-15.png') }}"
                                                alt="image description"></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
                                <div class="tg-producttextbox">
                                    <div class="tg-producttextboxhead">
                                        <div class="tg-leftbox">
                                            <h1>Product Title Here</h1>
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-rightbox">
                                            <span>$164 / $190</span>
                                            <span>Available In Stock</span>
                                        </div>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            labore etaiatiea dolore magna aliqua aseenim adiat minim veniam,
                                            quis nostrud exercitation ullaceo laboris nisi ut aliquip ex ea
                                            commodo consequat aute irure dolor ina reprehenderit inchieach
                                            voluptate velit esse cillum dolore eu fugiat cepteur sint occaecat
                                            cupidatat non proident sunt in culpa quista officia deserunt mollit
                                            anim id est laborum.</p>
                                    </div>
                                    <div class="tg-producttextboxfoot">
                                        <a class="tg-btn" href="javascript:void(0);">Add To Cart</a>
                                        <a class="tg-btn" href="http://www.codezel.com/tailors-online/customizer/?pid=8"
                                            target="_blank">Start Customizing</a>
                                        <div class="tg-productshare">
                                            <span>Share:</span>
                                            <ul class="tg-socialicons">
                                                <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                                <li class="tg-dribbble"><a href="javascript:void(0);"><i
                                                            class="fa fa-dribbble"></i></a></li>
                                                <li class="tg-rss"><a href="javascript:void(0);"><i
                                                            class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-producttabs">
                            <ul class="tg-producttabnav" role="tablist">
                                <li role="presentation" class="active"><a href="#tg-deescription" role="tab"
                                        data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#tg-reviews" role="tab" data-toggle="tab">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content tg-tabcontent">
                                <div role="tabpanel" class="tab-pane fade in active" id="tg-deescription">
                                    <figure class="tg-alignleft"><img src="images/products/img-16.jpg"
                                            alt="image description"></figure>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            labore etaiatiea dolore magna aliqua aseenim adiat minim veniam,
                                            quis nostrud exercitation ullaceoate laboris nisi ut aliquip ex
                                            eaommodo consequat aute irure dolor ina reprehenderit inchieach
                                            voluptate velit esse cillum dolore eufugiat aeur sint occaecat
                                            cupidatate non proident sunt in culpa quista.</p>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sitateu voluptatem
                                            accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae
                                            ab illo inventore veritatiset quasi architecto beatae vitae dicta
                                            sunt explicabo lokiatana poketona shonua.</p>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                            numquam eius modita tempora incidunt ut labore et dolore magnam
                                            aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tg-reviews">
                                    <figure class="tg-alignright"><img src="images/products/img-16.jpg"
                                            alt="image description"></figure>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            labore etaiatiea dolore magna aliqua aseenim adiat minim veniam,
                                            quis nostrud exercitation ullaceoate laboris nisi ut aliquip ex
                                            eaommodo consequat aute irure dolor ina reprehenderit inchieach
                                            voluptate velit esse cillum dolore eufugiat aeur sint occaecat
                                            cupidatate non proident sunt in culpa quista.</p>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sitateu voluptatem
                                            accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae
                                            ab illo inventore veritatiset quasi architecto beatae vitae dicta
                                            sunt explicabo lokiatana poketona shonua.</p>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit, sed quia consequuntur magni dolores eos qui ratione
                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                            numquam eius modita tempora incidunt ut labore et dolore magnam
                                            aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tg-relatedproducts">
                        <h2>Related Products</h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="tg-product">
                                    <figure class="tg-productimg">
                                        <img src="images/products/img-01.jpg" alt="image description">
                                        <figcaption>
                                            <div class="tg-hoverimglink">
                                                <img src="images/products/img-10.png" alt="image description">
                                                <a href="shopdetail.html">
                                                    <span>View Detail</span>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-productcontent">
                                        <div class="tg-producttitle">
                                            <h3><a href="shopdetail.html">Fabric Title Here</a></h3>
                                        </div>
                                        <div class="tg-rating">
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-price">
                                            <h4><a href="javascript:void(0);">$330</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="tg-product">
                                    <figure class="tg-productimg">
                                        <img src="images/products/img-02.jpg" alt="image description">
                                        <figcaption>
                                            <div class="tg-hoverimglink">
                                                <img src="images/products/img-10.png" alt="image description">
                                                <a href="shopdetail.html">
                                                    <span>View Detail</span>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-productcontent">
                                        <div class="tg-producttitle">
                                            <h3><a href="shopdetail.html">Fabric Title Here</a></h3>
                                        </div>
                                        <div class="tg-rating">
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-price">
                                            <h4><a href="javascript:void(0);">$330</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="tg-product">
                                    <figure class="tg-productimg">
                                        <img src="images/products/img-03.jpg" alt="image description">
                                        <figcaption>
                                            <div class="tg-hoverimglink">
                                                <img src="images/products/img-10.png" alt="image description">
                                                <a href="shopdetail.html">
                                                    <span>View Detail</span>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-productcontent">
                                        <div class="tg-producttitle">
                                            <h3><a href="shopdetail.html">Fabric Title Here</a></h3>
                                        </div>
                                        <div class="tg-rating">
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-price">
                                            <h4><a href="javascript:void(0);">$330</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="tg-product">
                                    <figure class="tg-productimg">
                                        <img src="images/products/img-04.jpg" alt="image description">
                                        <figcaption>
                                            <div class="tg-hoverimglink">
                                                <img src="images/products/img-10.png" alt="image description">
                                                <a href="shopdetail.html">
                                                    <span>View Detail</span>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-productcontent">
                                        <div class="tg-producttitle">
                                            <h3><a href="shopdetail.html">Fabric Title Here</a></h3>
                                        </div>
                                        <div class="tg-rating">
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-price">
                                            <h4><a href="javascript:void(0);">$330</a></h4>
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
<!--************************************
				Main End
		*************************************-->
@endsection
