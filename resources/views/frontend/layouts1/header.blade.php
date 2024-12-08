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
                    <form class="search-form">
                        <input type="text" placeholder="Search Here...">
                        <button type="submit"><i class="far fa-search"></i></button>
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
                                <li><a href="">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Catégorie</a>
                                    <ul class="sub-menu">
                                        @foreach ($categoriess as $category)
                                            <li class="{{ $category->children->isNotEmpty() ? 'menu-item-has-children' : '' }}">
                                                <a href="#">{{ $category->name }}</a>
                                                @if ($category->children->isNotEmpty())
                                                    <ul class="sub-menu">
                                                        @foreach ($category->children as $subCategory)
                                                            <li class="{{ $subCategory->children->isNotEmpty() ? 'menu-item-has-children' : '' }}">
                                                                <a href="#">{{ $subCategory->name }}</a>
                                                                @if ($subCategory->children->isNotEmpty())
                                                                    <ul class="sub-menu">
                                                                        @foreach ($subCategory->children as $child)
                                                                            <li><a href="#">{{ $child->name }}</a></li>
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
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-inline-block d-lg-none">
                        <div class="header-logo">
                            <a href="home-medical-clinic.html"><img src="assets/img/logo-white.svg" alt="Mediax"></a>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <div class="header-button">
                            
                            <button type="button" class="icon-btn sideMenuCart">
                                <span class="badge">5</span>
                                <i class="fal fa-cart-shopping"></i>
                            </button>
                            
                            <button type="button" class="icon-btn sideMenuInfo d-none d-lg-inline-block"><i class="fal fa-bars"></i></button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>