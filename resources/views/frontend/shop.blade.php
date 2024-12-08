@extends('frontend.layouts1.master')
@section('content')

<!--==============================
Product Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="th-sort-bar">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                </div>

                <div class="col-md-auto">
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Default Sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="row gy-40">

            @foreach ($products as $product)
        <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat3">
            <div class="th-product product-grid">
                <div class="product-img">
                    <!-- Product Image -->
                    <img src="{{ asset($product->images) }}" alt="Product Image">
                    <!-- Product Tag, e.g., Sale -->
                   
                    <div class="actions">
                        <a href="#QuickView" class="icon-btn popup-content">
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="cart.html" class="icon-btn">
                            <i class="far fa-cart-plus"></i>
                        </a>
                       
                    </div>
                </div>
                <div class="product-content">
                    <!-- Product Category -->
                    <a href="" class="product-category">{{ $product->category->name ?? 'Uncategorized' }}</a>
                    <!-- Product Title -->
                    <h3 class="product-title"><a href="{{ route('productDetail',$product->id) }}">{{ $product->title }}</a></h3>
                    <!-- Product Price -->
                    <span class="price">
                        ${{ number_format($product->price) }}
                        
                    </span>
                </div>
            </div>
        </div>
    @endforeach


          

            


            


            

            

        </div>
        <div class="th-pagination text-center pt-50">
            <ul>
                <li><a href="blog.html">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!--==============================
Footer Area
==============================-->
    
@endsection