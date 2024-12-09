@php
    // Get the cart count directly in the frontend using @php
    $cartCount = Cart::count(); 
@endphp
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="home-medical-clinic.html"><img src="{{ asset('frontend1/assets/img/logo.svg') }}" alt="Mediax"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}">Home</a>
                    
                </li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                
                <li class="menu-item-has-children">
                    <a href="#">Catégorie</a>
                    <ul class="sub-menu">
                        @foreach ($categoriess as $category)
                            <li class="{{ $category->children->isNotEmpty() ? 'menu-item-has-children' : '' }}">
                                <!-- Link to the shop page filtered by category -->
                                <a href="{{ route('shop.category', $category->id) }}">{{ $category->name }}</a>
                                @if ($category->children->isNotEmpty())
                                    <ul class="sub-menu">
                                        @foreach ($category->children as $subCategory)
                                            <li class="{{ $subCategory->children->isNotEmpty() ? 'menu-item-has-children' : '' }}">
                                                <!-- Link to the shop page filtered by subcategory -->
                                                <a href="{{ route('shop.category', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                                @if ($subCategory->children->isNotEmpty())
                                                    <ul class="sub-menu">
                                                        @foreach ($subCategory->children as $child)
                                                            <li>
                                                                <!-- Link to the shop page filtered by child category -->
                                                                <a href="{{ route('shop.category', $child->id) }}">{{ $child->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('contect') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<header class="th-header header-layout2">
    <div class="menu-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-logo">
                        <a href=""><img src="{{ asset('frontend1/assets/img/logo.svg') }}" alt="Mediax"></a>
                    </div>
                </div>
                <div class="col-auto">
                    <form action="{{ route('frontend.shop') }}" method="GET" class="search-form">
                        <input 
                            type="text" 
                            name="search" 
                            value="{{ request('search') }}" 
                            placeholder="Search Here...">
                        <button type="submit">
                            <i class="far fa-search"></i>
                        </button>
                    </form>
                    
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="info-card-wrap">
                        <div class="info-card">
                            <div class="box-icon">
                                <i class="fal fa-headset"></i>
                            </div>
                            <div class="box-content">
                                <p class="box-text">Contactez-nous</p>
                                <h4 class="box-title"><a href="tel:+1636543569">+163-654-3569</a></h4>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="box-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="box-content">
                                <p class="box-text">Lundi - vendredi</p>
                                <h4 class="box-title">Ouvert 24h/24 et 7j/7</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto d-none d-lg-inline-block">
                        <nav class="main-menu menu-style1">
                            <ul>
                                <li class="">
                                    <a href="{{ route('home') }}">Home</a>
                                  
                                </li>
                                <li><a href="{{ Route('about') }}">About Us</a></li>
                                
                                <li class="menu-item-has-children">
                                    <a href="#">Catégorie</a>
                                    <ul class="sub-menu">
                                        @foreach ($categoriess as $category)
                                            <li class="{{ $category->children->isNotEmpty() ? 'menu-item-has-children' : '' }}">
                                                <!-- Link to the shop page filtered by category -->
                                                <a href="{{ route('shop.category', $category->id) }}">{{ $category->name }}</a>
                                                @if ($category->children->isNotEmpty())
                                                    <ul class="sub-menu">
                                                        @foreach ($category->children as $subCategory)
                                                            <li class="{{ $subCategory->children->isNotEmpty() ? 'menu-item-has-children' : '' }}">
                                                                <!-- Link to the shop page filtered by subcategory -->
                                                                <a href="{{ route('shop.category', $subCategory->id) }}">{{ $subCategory->name }}</a>
                                                                @if ($subCategory->children->isNotEmpty())
                                                                    <ul class="sub-menu">
                                                                        @foreach ($subCategory->children as $child)
                                                                            <li>
                                                                                <!-- Link to the shop page filtered by child category -->
                                                                                <a href="{{ route('shop.category', $child->id) }}">{{ $child->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contect') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-inline-block d-lg-none">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('frontend1/assets/img/logo-white.svg') }}" alt="Mediax"></a>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <div class="header-button">
                            <!-- Cart button with cart count -->
                            <a href="{{ route('cart') }}">
                                <button type="button" class="icon-btn">
                                    <span class="badge">{{ $cartCount }}</span>  <!-- Display cart count -->
                                    <i class="fal fa-cart-shopping"></i>
                                </button>
                            </a>
                            
                            
                            <button type="button" class="icon-btn sideMenuInfo d-none d-lg-inline-block"><i class="fal fa-bars"></i></button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
