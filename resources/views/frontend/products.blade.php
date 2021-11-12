@extends('layouts.frontend')

@section('content')
<!--************************************
				Header End
		*************************************-->
<!--************************************
				Inner Page Banner Start
		*************************************-->
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="tg-active">shop</li>
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
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-8 col-md-7 col-lg-9 pull-right">
                    <div class="row">
                        <div id="tg-content" class="tg-content">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-pagehead">
                                    <h2>{{ $category->name }} Collections</h2>
                                    <div class="tg-description">
                                        <p>{{ $category->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-products tg-productgrid">
                                @forelse ($galleries as $item)
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="tg-product">
                                        <figure class="tg-productimg">
                                            <img src="{{ Storage::url($item->image) }}" alt="image description">
                                            <figcaption>
                                                <div class="tg-hoverimglink">
                                                    <img src="{{ Storage::url($item->image) }}" alt="image description">
                                                    <a href="shopdetail.html">
                                                        <span>View Detail</span>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="tg-productcontent">
                                            <div class="tg-producttitle">
                                                <h3><a href="shopdetail.html">{{ $item->name }}</a></h3>
                                            </div>
                                            <div class="tg-rating">
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                            <div class="tg-price">
                                                <h4><a href="javascript:void(0);">&#8358;
                                                        {{ number_format($item->price,2 )}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                    <h3>Product Coming Soon</h3>
                                </div>
                                @endforelse

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <nav class="tg-pagination">
                                    <ul>
                                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="tg-active"><a href="#">5</a></li>
                                        <li>...</li>
                                        <li><a href="#">10</a></li>
                                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-5 col-lg-3 pull-left">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <form class="tg-themeform tg-formrefinesearch">
                            <fieldset>
                                <div class="tg-widget tg-themeformsearch">
                                    <input type="search" class="form-control" name="searchhere"
                                        placeholder="Search Here">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <h4>Fabric</h4>
                                <span class="tg-radio">
                                    <input type="radio" id="allfabric" name="fabric" value="All" checked>
                                    <label for="allfabric">
                                        <span>All</span>
                                        <span>(256)</span>
                                    </label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="basketweave" name="fabric" value="Basket weave">
                                    <label for="basketweave">
                                        <span>Basket weave</span>
                                        <span>(521)</span>
                                    </label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="batik" name="fabric" value="Batik">
                                    <label for="batik">
                                        <span>Batik</span>
                                        <span>(314)</span>
                                    </label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="bedfordcord" name="fabric" value="Bedford cord">
                                    <label for="bedfordcord">
                                        <span>Bedford cord</span>
                                        <span>(65)</span>
                                    </label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="broadcloth" name="fabric" value="Broadcloth">
                                    <label for="broadcloth">
                                        <span>Broadcloth</span>
                                        <span>(127)</span>
                                    </label>
                                </span>
                                <span class="tg-radio">
                                    <input type="radio" id="canvas" name="fabric" value="Canvas">
                                    <label for="canvas">
                                        <span>Canvas</span>
                                        <span>(621)</span>
                                    </label>
                                </span>
                            </fieldset>
                            <fieldset>
                                <h4>Color</h4>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="allcolor" name="availability" value="Any" checked>
                                    <label for="allcolor">
                                        <span>All</span>
                                        <span>(256)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="charcoal" name="availability" value="Charcoal">
                                    <label for="charcoal">
                                        <span>Charcoal</span>
                                        <span>(521)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="cream" name="availability" value="Cream">
                                    <label for="cream">
                                        <span>Cream</span>
                                        <span>(314)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="navy" name="availability" value="Navy">
                                    <label for="navy">
                                        <span>Navy</span>
                                        <span>(65)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="blue" name="availability" value="Blue">
                                    <label for="blue">
                                        <span>Blue</span>
                                        <span>(127)</span>
                                    </label>
                                </span>
                            </fieldset>
                            <fieldset>
                                <h4>Price</h4>
                                <div class="tg-amountbox">
                                    <span>Price Range: </span>
                                    <input type="text" id="tg-consultationfeeamount" readonly>
                                </div>
                                <div class="tg-padding">
                                    <div id="tg-consultationfeerangeslider"
                                        class="tg-consultationfeerangeslider tg-themerangeslider"></div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <h4>Brand</h4>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="allbrands" name="brand" value="all" checked>
                                    <label for="allbrands">
                                        <span>All</span>
                                        <span>(256)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="male" name="brand" value="consectetur">
                                    <label for="male">
                                        <span>Consectetur</span>
                                        <span>(521)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="adipiscivelit" name="brand" value="Adipisci Velit">
                                    <label for="adipiscivelit">
                                        <span>Adipisci Velit</span>
                                        <span>(314)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="numquameiusmodi" name="brand" value="Numquam Eius Modi">
                                    <label for="numquameiusmodi">
                                        <span>Numquam Eius Modi</span>
                                        <span>(65)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="temporaincidunt" name="brand" value="Tempora Incidunt">
                                    <label for="temporaincidunt">
                                        <span>Tempora Incidunt</span>
                                        <span>(127)</span>
                                    </label>
                                </span>
                                <span class="tg-checkbox">
                                    <input type="checkbox" id="laboreetdolore" name="brand" value="Labore Et Dolore">
                                    <label for="laboreetdolore">
                                        <span>Labore Et Dolore</span>
                                        <span>(621)</span>
                                    </label>
                                </span>
                            </fieldset>
                        </form>
                        <div class="tg-advertisement">
                            <a href="javascript:void(0);"><img src="images/adds/img-01.jpg" alt="image description"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
				Main End
		*************************************-->
@endsection
