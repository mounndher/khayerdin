@extends('frontend.layouts1.master')
@section('content')
<div class="th-hero-wrapper hero-1" id="hero" data-bg-src="assets/img/hero/hero_bg_1_1.jpg">
    <div class="swiper th-slider" id="heroSlide1" data-slider-options='{"effect":"fade","autoHeight":true}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style1">
                            <span class="hero-subtitle" data-ani="slideinup" data-ani-delay="0.2s">Produits 100% de qualité supérieure</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Masque chirurgical N95</h1>
                            <h2 class="hero-heading" data-ani="slideinup" data-ani-delay="0.4s">Obtenez <span class="text-theme">25 %</span> de réduction, dépêchez-vous !</h2>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">Grâce à un masque chirurgical à 5 ​​couches, nous pouvons nous protéger de divers germes. Tout le monde devrait utiliser ce masque chirurgical à 5 ​​couches.</p>
                            <a href="{{ route('shop') }}" class="th-btn style4" data-ani="slideinup" data-ani-delay="0.6s">
                                <i class="fas fa-shopping-cart me-2"></i>Achetez maintenant
                            </a>
                            
                        </div>
                    </div>
                    <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                        <img src="{{ asset('frontend1/assets/img/product/dd.jpg') }}" alt="Image">
                    </div>
                </div>

            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style1">
                            <span class="hero-subtitle" data-ani="slideinup" data-ani-delay="0.2s">Produits importés 100% premium</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Gants de chirurgie</h1>
                            <h2 class="hero-heading" data-ani="slideinup" data-ani-delay="0.4s">Obtenez <span class="text-theme">25 %</span> de réduction, dépêchez-vous !</h2>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">Grâce à un masque chirurgical à 5 ​​couches, nous pouvons nous protéger de divers germes. Tout le monde devrait utiliser ce masque chirurgical à 5 ​​couches.</p>
                            <a href="{{ route('shop') }}" class="th-btn style4" data-ani="slideinup" data-ani-delay="0.6s"><i class="fas fa-shopping-cart me-2"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                        <img src="{{ asset('frontend1/assets/img/product/dd3.jpg') }}" alt="Image">
                    </div>
                </div>

            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style1">
                            <span class="hero-subtitle" data-ani="slideinup" data-ani-delay="0.2s">Produits 100% de qualité supérieure</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Tensiomètre</h1>
                            <h2 class="hero-heading" data-ani="slideinup" data-ani-delay="0.4s">Obtenez <span class="text-theme">25 %</span> de réduction, dépêchez-vous !</h2>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">Grâce à un masque chirurgical à 5 ​​couches, nous pouvons nous protéger de divers germes. Tout le monde devrait utiliser ce masque chirurgical à 5 ​​couches.</p>
                            <a href="{{ route('shop') }}" class="th-btn style4" data-ani="slideinup" data-ani-delay="0.6s"><i class="fas fa-shopping-cart me-2"></i>Achetez maintenant</a>
                        </div>
                    </div>
                    <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                        <img src="{{ asset('frontend1/assets/img/product/dd4.jpg') }}" alt="Image">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="hero-thumb-wrap">
        <div class="hero-thumb" data-slider-tab="#heroSlide1">
            <div class="tab-btn active">
                <img src="{{ asset('frontend1/assets/img/product/dd.jpg') }}" alt="Image">
            </div>
            <div class="tab-btn">
                <img src="{{ asset('frontend1/assets/img/product/dd3.jpg') }}" alt="Image">
            </div>
            <div class="tab-btn">
                <img src="{{ asset('frontend1/assets/img/product/dd4.jpg') }}" alt="Image">
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Feature Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="feature-list-wrap">
            <div class="feature-list">
                <div class="box-icon">
                    <img src="{{ asset('frontend1/assets/img/icon/shop_feature_1.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h3 class="box-title">Politique de retour</h3>
                    <p class="box-text">Garantie de remboursement</p>
                </div>
            </div>
            <div class="feature-list-line"></div>
            <div class="feature-list">
                <div class="box-icon">
                    <img src="{{ asset('frontend1/assets/img/icon/shop_feature_2.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h3 class="box-title">Livraison gratuite</h3>
                    <p class="box-text">Sur toutes les commandes de plus de 50,00$</p>
                </div>
            </div>
            <div class="feature-list-line"></div>
            <div class="feature-list">
                <div class="box-icon">
                    <img src="{{ asset('frontend1/assets/img/icon/shop_feature_3.svg') }}" alt="icon">
                </div>
                <div class="media-body">
                    <h3 class="box-title">Store locator</h3>
                    <p class="box-text">Localisateur de magasin</p>
                </div>
            </div>
            <div class="feature-list-line"></div>
            <div class="feature-list">
                <div class="box-icon">
                    <img src="{{ asset('frontend1/assets/img/icon/shop_feature_4.svg')}}" alt="icon">
                </div>
                <div class="media-body">
                    <h3 class="box-title">Assistance 24h/24 et 7j/7</h3>
                    <p class="box-text">Contactez-nous 24h/24</p>
                </div>
            </div>
            <div class="feature-list-line"></div>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->

<!--==============================
Category Area  
==============================-->
<section class="space-top">
    <div class="container">
        <div class="row justify-content-md-between justify-content-center align-items-center">
            <div class="col-md-auto">
                <h3 class="sec-title text-center">Magasiner par catégorie</h3>
            </div>
            <div class="col-md-auto mt-n3 mt-md-0">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#catSlide1" class="slider-arrow icon-sm default"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#catSlide1" class="slider-arrow icon-sm default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="swiper th-slider" id="catSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <div class="category-card">
                            <div class="box-icon">
                                @if ($category->image)
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                                @else
                                    <img src="path/to/default/image.png" alt="Default Image">
                                @endif
                            </div>
                            <h3 class="box-title">
                                <a href="">{{ $category->name }}</a>
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        

    </div>
</section>
<!--==============================
Product Area
==============================-->
<section class="space" id="shop-sec">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-auto">
                <h3 class="sec-title text-center">Our Latest Products</h3>
            </div>
            <div class="col-lg-auto">
                <div class="filter-menu filter-menu-active">
                    <button data-filter="*" class="th-btn active" type="button">All Products</button>
                   
                </div>
            </div>
        </div>
        <div class="row gy-40 filter-active">
            @foreach ($products as $product)
            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat3">
                <div class="th-product product-grid">
                    <div class="product-img">
                        @if ($product->images)
                            <img src="{{ asset($product->images) }}" alt="{{ $product->name }}">
                        @else
                            <img src="path/to/default/image.jpg" alt="Default Image">
                        @endif
                       
                        <div class="actions">
                            <a href="" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                            <a href="{" class="icon-btn popup-content">
                                <i class="far fa-cart-plus"></i>
                            </a>
                            
                            
                            
                          
                        </div>
                    </div>
                    <div class="product-content">
                        <a href="" class="product-category">
                            {{ $product->category->name ?? 'Category' }}
                        </a>
                        <h3 class="product-title">
                            <a href="{{ route('add.cart',$product->id) }}">{{ $product->title }}</a>
                        </h3>
                        <span class="price">
                            ${{ $product->price }}
                           
                        </span>
                    </div>
                </div>
            </div>
        @endforeach

           

            

            

        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->

<!--==============================
Product Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="row justify-content-md-between justify-content-center align-items-center">
                    <div class="col-md">
                        <h3 class="sec-title has-line">Our Top Medicine</h3>
                    </div>
                    <div class="col-md-auto mt-n3 mt-md-0">
                        <div class="sec-btn">
                            <a href="shop.html" class="th-btn style-smoke">VIEW ALL PRODUCTS</a>
                        </div>
                    </div>
                </div>
                <div class="row gy-40">

                    <div class="col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                                <span class="product-tag">Sale!</span>
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Accessories</a>
                                <h3 class="product-title"><a href="shop-details.html">Surgery Hands Gloves</a></h3>
                                <span class="price">$20.00 - <del>$30.00</del></span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="assets/img/product/product_1_2.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Medicine</a>
                                <h3 class="product-title"><a href="shop-details.html">D-Ribose Drug Medicine</a></h3>
                                <span class="price">$39.85</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="assets/img/product/product_1_3.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Equipment</a>
                                <h3 class="product-title"><a href="shop-details.html">CAD Dentistry Prosthesis</a></h3>
                                <span class="price">$96.85</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 mt-40 mt-xl-0">
                <div class="offer-grid mega-hover text-center text-xl-start" data-bg-src="assets/img/bg/cta_bg_2_1.jpg">
                    <span class="h6 box-subtitle text-white">EXRTA 9% SAVING ON ORDER</span>
                    <p class="price text-white">$80.00 - <del>$120.00</del></p>
                    <h3 class="box-title text-white">For Weight Gain</h3>
                    <a href="shop-details.html" class="th-btn btn-sm style4">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->

<!--==============================
Product Area  
==============================-->

<!--==============================
Testimonial Area  
==============================-->
<section class="" id="testi-sec" data-bg-src="assets/img/bg/testi_bg_1.jpg">
    <div class="container space">
        <h2 class="sec-title text-center">What Our Customers Says?</h2>
        <div class="swiper th-slider has-shadow" id="testiSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="box-review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="box-quote">
                            <img src="assets/img/icon/quote_1.svg" alt="Icon">
                        </div>
                        <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth. Compellingly coordinate business deliverables rather equity invested technologies. Phosfluorescently reinvent maintainable.”</p>
                        <div class="box-profile">
                            <div class="box-img">
                                <img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Pelican Steve</h3>
                                <span class="box-desig">Neurologist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="box-review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="box-quote">
                            <img src="assets/img/icon/quote_1.svg" alt="Icon">
                        </div>
                        <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth. Compellingly coordinate business deliverables rather equity invested technologies. Phosfluorescently reinvent maintainable.”</p>
                        <div class="box-profile">
                            <div class="box-img">
                                <img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Alexa Milton</h3>
                                <span class="box-desig">Physiotherapist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="box-review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="box-quote">
                            <img src="assets/img/icon/quote_1.svg" alt="Icon">
                        </div>
                        <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth. Compellingly coordinate business deliverables rather equity invested technologies. Phosfluorescently reinvent maintainable.”</p>
                        <div class="box-profile">
                            <div class="box-img">
                                <img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Pelican Steve</h3>
                                <span class="box-desig">Neurologist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="box-review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="box-quote">
                            <img src="assets/img/icon/quote_1.svg" alt="Icon">
                        </div>
                        <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth. Compellingly coordinate business deliverables rather equity invested technologies. Phosfluorescently reinvent maintainable.”</p>
                        <div class="box-profile">
                            <div class="box-img">
                                <img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Alexa Milton</h3>
                                <span class="box-desig">Physiotherapist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
Brand Area  
==============================-->
    <div class="brand-sec1">
        <div class="container th-container">
            <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"420":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_7.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_8.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_7.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <img src="{{ asset('frontend1/assets/img/brand/brand_1_8.svg') }}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Product Area
==============================-->
<section class="space-top">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-6">
                <h3 class="sec-title has-line mb-35">Top Rated Products</h3>
                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="assets/img/product/product_list_1.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Medicine</a>
                                <h3 class="product-title"><a href="shop-details.html">Ciprofloxacin Drug</a></h3>
                                <span class="price">$177.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="{{ asset('frontend1/assets/img/product/dd.jpg') }}" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Accessories</a>
                                <h3 class="product-title"><a href="shop-details.html">Surgery Face Mask</a></h3>
                                <span class="price">$39.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="{{ asset('frontend1/assets/img/product/product_list_3.jpg') }}" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Equipment</a>
                                <h3 class="product-title"><a href="shop-details.html">Dentist Chair</a></h3>
                                <span class="price">$96.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="{{ asset('frontend1/assets/img/product/product_list_4.jpg') }}" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Medicine</a>
                                <h3 class="product-title"><a href="shop-details.html">Paracetamol Drug</a></h3>
                                <span class="price">$08.85<del>$06.99</del></span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6">
                <h3 class="sec-title has-line mb-35">Best Selling Products</h3>
                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="assets/img/product/product_list_5.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Equipment</a>
                                <h3 class="product-title"><a href="shop-details.html">Presser Meter</a></h3>
                                <span class="price">$32.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="assets/img/product/product_list_6.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Accessories</a>
                                <h3 class="product-title"><a href="shop-details.html">Surgery Hand Glove</a></h3>
                                <span class="price">$30.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="assets/img/product/product_list_7.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Equipment</a>
                                <h3 class="product-title"><a href="shop-details.html">N95-Face Mask</a></h3>
                                <span class="price">$232.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="assets/img/product/product_list_8.jpg" alt="Product Image">
                                <div class="actions">
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="shop-details.html" class="product-category">Medicine</a>
                                <h3 class="product-title"><a href="shop-details.html">Infared Thermometer</a></h3>
                                <span class="price">$30.85</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Blog Area  
==============================-->

@endsection