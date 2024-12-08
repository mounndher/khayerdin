@extends('frontend.layouts1.master')
@section('content')


<section class="product-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="product-big-img">
                    <div class="img"><img src="{{ asset($productprof->images) }}" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="product-about">
                    <p class="price">$20.00<del>$30.00</del></p>
                    <h2 class="product-title">{{ $productprof->title }}</h2>
                    <div class="product-rating">
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                        <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>
                    </div>
                    <p class="text">
                        {{ $productprof->shortdescription }}</p>
                    <div class="mt-2 link-inherit">
                        <p>
                            <strong class="text-title me-3">Availability:</strong>
                            <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span>
                        </p>
                    </div>
                    <div class="actions">
                        <div class="quantity">
                            <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                            <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                            <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                        </div>
                        <button class="th-btn">Add to Cart</button>
                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">Surgery-Hands-Gloves</span></span>
                        <span class="posted_in">Category: <a href="shop.html">Accessories</a></span>
                        <span>Tags: <a href="shop.html">Medical</a><a href="shop.html">Accessories</a></span>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav product-tab-style1" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Product Description</a>
            </li>
           
        </ul>
        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p>{!! $productprof->description !!}</p>
                
            </div>
            
        </div>

        
    </div>
</section>
@endsection