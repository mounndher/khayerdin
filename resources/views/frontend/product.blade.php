@extends('frontend.layouts1.master')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Détails de la boutique</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Détails de la boutique</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Product Details
==============================-->
<section class="product-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="product-big-img">
                    <div class="img">
                        <img src="{{ asset($product->images) }}" alt=image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="product-about">
                    <p class="price">${{ $product->price }} </p>
                    <h2 class="product-title">{{ $product->title }}</h2>
                    
                    <p class="text">{{ $product->shortdescription }}</p>
                    
                    <form action="{{ route('add.cartproduct', $product->id) }}" method="POST">
                        @csrf
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button type="submit" class="th-btn">Add to Cart</button>
                        </div>
                    </form>
                    
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">{{ $product->sku }}</span></span>
                        <span class="posted_in">Category: <a href="">{{ $product->category->name }}</a></span>
                     
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
                <p>{{ $product->description }}</p>
            </div>
        </div>

        <!--==============================
        Related Product
        ==============================-->
        <div class="space-extra-top mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto">
                    <h2 class="sec-title text-center">Produits connexes</h2>
                </div>
                <div class="col-md d-none d-sm-block">
                    <hr class="title-line">
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach($relatedProducts as $related)
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="{{ asset($related->images) }}" alt="{{ $related->title }}">
                                <span class="product-tag">Vente!</span>
                                <div class="actions">
                                    <a href="{{ route('productDetail', $related->id) }}" class="icon-btn"><i class="far fa-eye"></i></a>
                                
                                   
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="" class="product-category">{{ $related->category->name }}</a>
                                <h3 class="product-title"><a href="{{ route('productDetail', $related->id) }}">{{ $related->title }}</a></h3>
                                <span class="price">${{ $related->price }} </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
