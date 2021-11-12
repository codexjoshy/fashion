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
                    @if ($gallery)
                    <div class="tg-product tg-productdetail">
                        <div class="tg-productbox">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                                <div class="tg-productgallery">
                                    <div id="tg-viewslider" class="tg-viewslider tg-productgalleryslider owl-carousel">
                                        <figure class="item"><img src="{{ Storage::url($gallery->image) }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img src="{{ Storage::url($gallery->image) }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img src="{{ Storage::url($gallery->image) }}"
                                                alt="image description"></figure>
                                        <figure class="item"><img src="{{ Storage::url($gallery->image) }}"
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
                                            <h1>{{ $gallery->name }}</h1>
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-rightbox">
                                            <span>&#8358; {{ number_format($gallery->price, 2) }}</span>
                                            <span>Available In Stock</span>
                                        </div>
                                    </div>
                                    <div class="tg-description">
                                        <p>{{ $gallery->description }}</p>
                                    </div>
                                    <div class="tg-producttextboxfoot">
                                        <a class="tg-btn" href="javascript:void(0);">Select This Design</a>
                                        {{-- <a class="tg-btn" href="#" target="_blank">Start Customizing</a> --}}
                                        <div class="tg-productshare">
                                            <span>Share:</span>
                                            <ul class="tg-socialicons">
                                                <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li class="tg-dribbble"><a href="javascript:void(0);"><i
                                                            class="fa fa-dribbble"></i></a>
                                                </li>
                                                <li class="tg-rss"><a href="javascript:void(0);"><i
                                                            class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-pagehead">
                            <h2 class="text-center">Place An Order For This Design</h2>

                        </div>
                        <div class="tg-producttabs">
                            <ul class="tg-producttabnav" role="tablist">
                                <li id="contact" role="presentation" class="active switch-tab"><a
                                        href="#tg-deescription" role="tab" data-toggle="tab">Contact Information</a>
                                </li>
                                <li id="measure" class="switch-tab" role="presentation"><a href="#tg-reviews" role="tab"
                                        data-toggle="tab">Measurements</a>
                                </li>
                            </ul>
                            <div class="tab-content tg-tabcontent">
                                <div role="tabpanel" class="tab-pane fade in active" id="tg-deescription">
                                    <form class="tg-themeform tg-formcontactus" action={{ route('order.store') }}
                                        method="POST">
                                        @csrf
                                        <figure class="tg-alignleft row" style="width: 300px;"><img
                                                src="{{ Storage::url($gallery->image) }}" alt="image description"
                                                class="w-100 h-100"></figure>
                                        <div class="tg-description">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <input rel='0' type="text" class="form-control contacts"
                                                            name="name" placeholder="Your Name">
                                                        @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group  col-sm-6">
                                                        <input rel="1" type="email" class="form-control contacts"
                                                            name="email" placeholder="Email">
                                                        @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input rel="2" type="text" class="form-control contacts"
                                                            name="phone" placeholder="Phone">
                                                        @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <input rel="3" type="text" class="form-control contacts"
                                                            name="address" placeholder="Subject">
                                                        @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <a rel="measure" href="#tg-reviews" role="tab" data-toggle="tab"
                                                    type="button" class="tg-btn switch">Provide Measurements</a>
                                                <button type="submit" class="tg-btn submit">Submit</button>
                                            </div>
                                        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tg-reviews">
                                    <figure class="tg-alignright" style="width: 300px;"><img
                                            src="{{ Storage::url($gallery->image) }}" alt="image description">
                                    </figure>
                                    <div class="tg-description">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <form class="tg-themeform tg-formcontactus">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <input rel="0" type="text" class="form-control measurements"
                                                            name="yourname" placeholder="Your Name">
                                                    </div>
                                                    <div class="form-group  col-sm-6">
                                                        <input rel="1" type="email" class="form-control measurements"
                                                            name="email" placeholder="Email">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input rel="2" type="text" class="form-control measurements"
                                                            name="phone" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <input rel="3" type="text" class="form-control measurements"
                                                            name="subject" placeholder="Subject">
                                                    </div>

                                                </div>

                                                <a rel="contact" href="#tg-deescription" role="tab" data-toggle="tab"
                                                    type="button" class="tg-btn switch">Provide Contact
                                                    Information</a>
                                                <button type="submit" class="tg-btn submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else

                    @endif

                    <div class="tg-relatedproducts">
                        <h2>Related Products</h2>
                        <div class="row">
                            @forelse ($similarProducts as $product)
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="tg-product">
                                    <figure class="tg-productimg">
                                        <a
                                            href="{{ route('frontend.product.show', [$gallery->slug, $product->slug]) }}"><img
                                                src="{{ Storage::url($product->image) }}" alt="image description"></a>
                                        {{-- <figcaption>
                                            <div class="tg-hoverimglink">
                                                <img src="images/products/img-10.png" alt="image description">
                                                <a href="shopdetail.html">
                                                    <span>View Detail</span>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </figcaption> --}}
                                    </figure>
                                    <div class="tg-productcontent">
                                        <div class="tg-producttitle">
                                            <h3><a
                                                    href="{{ route('frontend.product.show', [$gallery->slug, $product->slug]) }}">{{ $product->name }}</a>
                                            </h3>
                                        </div>
                                        <div class="tg-rating">
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div class="tg-price">
                                            <h4><a href="javascript:void(0);">&#8358;
                                                    {{  number_format($product->price, 2) }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@push('scripts')
<script>
    $(function(){
        var contact = []
        var measure = [];
        let contactLength = $('.contacts').length;
        let measureLength = $('.measurements').length;
        // $('.switch').show();
        $('.submit').hide();
        for (let index = 0; index < contactLength; index++) {
            contact.push(index)
        }
        for (let i = 0; i < measureLength; i++) {
            measure.push(i)
        }
        $('.contacts').keyup(function() {
            let anInput = parseInt($(this).attr('rel'));
            let val = $(this).val();
            if(!val){
                 contact.push(anInput);
            }
            $('.contacts').each(function(index, elem) {
                if(elem.value && anInput == elem.getAttribute('rel')){
                    if(contact.includes(anInput)){
                        contact = contact.filter(item=> item != anInput)
                    }
                }else{

                }
            })
            if(contact.length < 1 && measure.length < 1){
                //show submit button
                $('.switch').hide();
                $('.submit').show()
            }else{
                $('.switch').show();
                $('.submit').hide()
            }
        })
        $('.measurements').keyup(function() {
            let anInputs = parseInt($(this).attr('rel'));
            let val = $(this).val();
            if(!val){
                 measure.push(anInputs);
            }
            $('.measurements').each(function(index, elem) {
                if(elem.value && anInputs == elem.getAttribute('rel')){
                    if(measure.includes(anInputs)){
                        measure = measure.filter(item=> item != anInputs)
                    }
                }
            })
            if(contact.length < 1 && measure.length < 1){
                //show submit button
                $('.switch').hide();
                $('.submit').show()
            }else{
                $('.switch').show();
                $('.submit').hide()
            }
        })

        $('.switch').click(function() {
            let rel = $(this).attr('rel');
            $('.switch-tab').removeClass('active');
            $(`#${rel}`).addClass('active')
        })

    })
</script>
@endpush
