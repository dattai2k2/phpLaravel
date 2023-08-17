@extends('layouts.main')
@section('content')
<section id="aa-catg-head-banner">
    <img src="{{ URL::asset('public/assets/img/fashion/1920x300-water-background.jpg') }}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>T-Shirt</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Product</a></li>
                    <li class="active">T-shirt</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container"><a
                                                    data-lens-image="../public/images/{{ $product->image }}"
                                                    class="simpleLens-lens-image"><img
                                                        src="../public/images/{{ $product->image }}"
                                                        class="simpleLens-big-image"
                                                        style="width:250px;height:300px"></a></div>
                                        </div>
                                        <div class="simpleLens-thumbnails-container">
                                            <a data-big-image="../public/images/{{ $product->image }}"
                                                data-lens-image="../public/images/{{ $product->image }}"
                                                class="simpleLens-thumbnail-wrapper" href="#">
                                                <img src="../public/images/{{ $product->image }}"
                                                    style="width:45px;height:55px">
                                            </a>
                                            @foreach($productimgs as $productimg)
                                            <a data-big-image="../public/images/{{ $productimg->image }}"
                                                data-lens-image="../public/images/{{ $productimg->image }}"
                                                class="simpleLens-thumbnail-wrapper" href="#">
                                                <img src="../public/images/{{ $productimg->image }}"
                                                    style="width:45px;height:55px">
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3>T-Shirt</h3>
                                    <div class="aa-price-block">
                                        <span class="aa-product-view-price">$34.99</span>
                                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi,
                                        veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                    <h4>Size</h4>
                                    <div class="aa-prod-view-size">
                                        <a href="#">S</a>
                                        <a href="#">M</a>
                                        <a href="#">L</a>
                                        <a href="#">XL</a>
                                    </div>
                                    <h4>Color</h4>
                                    <div class="aa-color-tag">
                                        <a href="#" class="aa-color-green"></a>
                                        <a href="#" class="aa-color-yellow"></a>
                                        <a href="#" class="aa-color-pink"></a>
                                        <a href="#" class="aa-color-black"></a>
                                        <a href="#" class="aa-color-white"></a>
                                    </div>
                                    <div class="aa-prod-quantity">
                                        <form action="">
                                            <select id="" name="quantity">
                                                <option selected="1" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </form>
                                        <p class="aa-prod-category">
                                            Category: <a href="#">{{ $product->catname->cat_name }}</a>
                                        </p>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a class="aa-add-to-cart-btn" href="{{route('cart.add',$product->id) }}">Add To
                                            Cart</a>
                                        <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                                        <a class="aa-add-to-cart-btn" href="#">Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-product-details-bottom">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#review" data-toggle="tab">Reviews</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                {!!$product->description!!}
                            </div>
                            <div class="tab-pane fade " id="review">
                                <div class="aa-product-review-area">
                                    <h4>2 Reviews for T-Shirt</h4>
                                    <ul class="aa-review-nav">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/testimonial-img-3.jpg"
                                                            alt="girl image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March
                                                            26, 2016</span></h4>
                                                    <div class="aa-product-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/testimonial-img-3.jpg"
                                                            alt="girl image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March
                                                            26, 2016</span></h4>
                                                    <div class="aa-product-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h4>Add a review</h4>
                                    <div class="aa-your-rating">
                                        <p>Your Rating</p>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                    </div>
                                    <!-- review form -->
                                    <form action="" class="aa-review-form">
                                        <div class="form-group">
                                            <label for="message">Your Review</label>
                                            <textarea class="form-control" rows="3" id="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="example@gmail.com">
                                        </div>

                                        <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related product -->
                    <div class="aa-product-related-item">
                        <h3>Related Products</h3>
                        <ul class="aa-product-catg aa-related-item-slider">
                            <!-- start single product item -->
                            @foreach($data as $product)
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="productdetail/{{$product->id}}"><img
                                            src="../public/images/{{ $product->image }}" alt="polo shirt img"
                                            style="width:250px;height:300px"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">{{ $product->pro_name }}</a></h4>
                                        <span class="aa-product-price">VND {{ $product->price }}</span><span
                                            class="aa-product-price">
                                            @if($product['saleprice'])
                                            <del>VND {{ $product->saleprice }}</del>
                                            @endif
                                        </span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                            class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                            class="fa fa-search"></span></a>
                                </div>
                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-subscribe />
@stop