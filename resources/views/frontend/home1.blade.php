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
                            <a href="{{ route('frontend.shop') }}" class="th-btn style4" data-ani="slideinup" data-ani-delay="0.6s">
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
                            <a href="{{ route('frontend.shop') }}" class="th-btn style4" data-ani="slideinup" data-ani-delay="0.6s"><i class="fas fa-shopping-cart me-2"></i>Shop Now</a>
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
                            <a href="{{ route('frontend.shop') }}" class="th-btn style4" data-ani="slideinup" data-ani-delay="0.6s"><i class="fas fa-shopping-cart me-2"></i>Achetez maintenant</a>
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
                @foreach($categories as $category)
                <div class="swiper-slide">
                    <div class="category-card">
                        <div class="box-icon">
                            <img src="{{ asset($category->image) }}" alt="Image">
                        </div>
                        <h3 class="box-title">
                            <a href="{{ route('frontend.shop', ['category' => $category->id]) }}">
                                {{ $category->name }}
                            </a>
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
                <h3 class="sec-title text-center">Nos derniers produits</h3>
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
                            <a href="{{ route('productDetail',$product->id) }}"><i class="far fa-eye"></i></a>
                            <a href="{{ route('add.cart',$product->id) }}">
                                <i class="far fa-cart-plus"></i>
                            </a>
                            
                            
                            
                          
                        </div>
                    </div>
                    <div class="product-content">
                        <a href="" class="product-category">
                            {{ $product->category->name ?? 'Category' }}
                        </a>
                        <h3 class="product-title">
                            <a href="{{ route('productDetail',$product->id) }}">{{ $product->title }}</a>
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
Product Area
==============================-->
<section class="space-top">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-6">
                <h3 class="sec-title has-line mb-35">Produits les mieux notés</h3>
                <div class="row gy-4">
                    @foreach ($productsBest as $best)
                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="{{ asset($best->images) }}" alt="Product Image">
                                <div class="actions">
                                    <a href="{{ route('add.cart',$best->id) }}" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="" class="product-category">{{ $best->category->name ?? 'Catégorie' }}</a>
                                <h3 class="product-title"><a href="{{ route('productDetail',$best->id) }}">{{ $best->title }}</a></h3>
                                <span class="price">${{ $best->price }}</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   


                    

                </div>
            </div>
            <div class="col-xl-6">
                <h3 class="sec-title has-line mb-35">Produits les plus vendus</h3>
                <div class="row gy-4">
                    @foreach ($productsRate as $rate)
                    <div class="col-md-6">
                        <div class="th-product list-view">
                            <div class="product-img">
                                <img src="{{ asset($rate->images) }}" alt="Product Image">
                                <div class="actions">
                                    <a href="{{ route('add.cart',$rate->id) }}" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="" class="product-category">{{ $rate->category->name ?? 'Catégorie' }}</a>
                                <h3 class="product-title"><a href="{{ route('productDetail',$best->id) }}">
                                    {{ $best->title }}</a></h3>
                                <span class="price">${{ $rate->price }}</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  


                  


                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Blog Area  
==============================-->

@endsection