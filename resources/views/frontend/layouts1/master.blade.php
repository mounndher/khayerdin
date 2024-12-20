@php
    $generalSetting = \App\Models\GeneralSetting::first();
    $seoSetting = \App\Models\SeoSetting::first();
@endphp
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{@$seoSetting->title}}</title>
    <meta name="author" content="Mediax">
    <meta name="description" content="{{@$seoSetting->description}}">
    <meta name="keywords" content="{{@$seoSetting->keywords}}">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend1/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend1/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend1/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend1/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend1/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend1/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend1/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend1/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend1/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend1/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend1/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend1/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend1/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset($generalSetting->favicon)}}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend1/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend1/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend1/assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('frontend1/assets/css/swiper-bundle.min.css') }}">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="{{ asset('frontend1/assets/css/jquery.datetimepicker.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend1/assets/css/style.css') }}">

</head>

<body>

   

  
    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white rounded-10">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="{{ asset('frontend1/assets/img/product/product_details_1_1.jpg') }}" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$120.85<del>$150.99</del></p>
                        <h2 class="product-title">Surgery Hands Gloves</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>
                        </div>
                        <p class="text">Prepare to embark on a sensory journey with the Bosco Apple, a fruit that transcends the ordinary and promises an unparalleled taste experience. These apples are nothing short of nature’s masterpiece, celebrated for their distinctive blend of flavors and their captivating visual allure.</p>
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
                            <span class="sku_wrapper">SKU: <span class="sku">Bosco-Apple-Fruit</span></span>
                            <span class="posted_in">Category: <a href="shop.html">Fresh Fruits</a></span>
                            <span>Tags: <a href="shop.html">Fruits</a><a href="shop.html">Organic</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div><!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-cart ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_1.jpg" alt="Cart Image">Surgery Hands Gloves</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_2.jpg" alt="Cart Image">D-Ribose Drug Medicine</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_3.jpg" alt="Cart Image">CAD Dentistry Prosthesis</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_4.jpg" alt="Cart Image">Surgery Safety Mask</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_5.jpg" alt="Cart Image">Infrared Thermometers</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div><!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-info ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="home-medical-clinic.html"><img src="assets/img/logo.svg" alt="Mediax"></a>
                    </div>
                    <p class="about-text">Subscribe to out newsletter today to receive latest news administrate cost effective for tactical data.</p>
                    <p class="footer-info">
                        <i class="fal fa-location-dot"></i>
                        2478 Street City Ohio 90255
                    </p>
                    <p class="footer-info">
                        <i class="fal fa-envelope"></i>
                        <a href="mailto:info@mediax.com" class="info-box_link">info@mediax.com</a>
                    </p>
                    <p class="footer-info">
                        <i class="fal fa-phone"></i>
                        <a href="tel:+40276328246" class="info-box_link">+(402) 763 282 46</a>
                    </p>
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Let’s Stay In Touch</h3>
                <div class="newsletter-widget">
                    <p class="footer-text">Subscribe for newsletter</p>
                    <form action="#" class="newsletter-form">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Enter Email" required="">
                        </div>
                        <button type="submit" class="simple-icon"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                    <div class="form-group">
                        <input type="checkbox" id="checkboxagree" name="checkboxagree">
                        <label for="checkboxagree">I agree with the terms & conditions</label>
                    </div>
                    <div class="btn-group">
                        <a href="https://play.google.com/" class="img-btn">
                            <img src="assets/img/normal/apple_store.png" alt="icon">
                        </a>
                        <a href="https://play.google.com/" class="img-btn">
                            <img src="assets/img/normal/play_store.png" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="{{ route('frontend.shop') }}" method="GET">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}" 
                placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
        
        
    </div>
    
    
    
    
    <!--==============================
    Mobile Menu
  ============================== -->
    <!--==============================
	Header Area
==============================-->
    @include('frontend.layouts1.header')

   @yield('content')
    <!--==============================
	Footer Area
==============================-->
     @include('frontend.layouts1.footer')
    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('frontend1/assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('frontend1/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend1/assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend1/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('frontend1/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- datetimepicker -->
    <script src="{{ asset('frontend1/assets/js/jquery.datetimepicker.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('frontend1/assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('frontend1/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend1/assets/js/isotope.pkgd.min.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('frontend1/assets/js/main.js') }}"></script>
    
    @push('script')
</body>

</html>