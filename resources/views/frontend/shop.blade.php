@extends('frontend.layouts1.master')
@section('content')

<!--==============================
Product Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <!-- Sort and Filter Bar -->
        <div class="th-sort-bar">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <p class="woocommerce-result-count">
                        @if ($products->total() > 0)
                        Affichage de {{ $products->firstItem() }}–{{ $products->lastItem() }} sur {{ $products->total() }} résultats
                        @else
                        Aucun produit disponible.
                        @endif
                    </p>
                </div>
                
            </div>
        </div>

        <!-- Product Grid -->
        @if($products->count() > 0)
            <div class="row gy-40">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <!-- Product Image -->
                                <img src="{{ asset($product->images) }}" alt="{{ $product->title }}">
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
                                <!-- Product Details -->
                                <a href="" class="product-category">{{ $product->category->name ?? 'Uncategorized' }}</a>
                                <h3 class="product-title">
                                    <a href="{{ route('productDetail', $product->id) }}">{{ $product->title }}</a>
                                </h3>
                                <span class="price">${{ number_format($product->price) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="th-pagination text-center pt-50">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        @else
            <!-- No Products Found -->
            <p class="text-center mt-5">Aucun produit trouvé correspondant à votre recherche.</p>
        @endif
    </div>
</section>

@endsection

<!-- Additional Styles -->
<style>
    .th-pagination ul {
        list-style: none;
        padding: 0;
        display: inline-flex;
        gap: 8px;
    }

    .th-pagination ul li {
        display: inline-block;
    }

    .th-pagination ul li a,
    .th-pagination ul li span {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 35px;
        height: 35px;
        font-size: 16px;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-decoration: none;
    }

    .th-pagination ul li .active {
        font-weight: bold;
        background-color: #28a745;
        color: #fff;
    }

    .th-pagination ul li .disabled {
        color: #aaa;
        pointer-events: none;
        background-color: #f5f5f5;
    }

    .woocommerce-result-count {
        font-size: 16px;
        color: #333;
    }

    .product-grid {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        text-align: center;
        background: #fff;
    }

    .product-grid img {
        max-width: 100%;
        border-radius: 5px;
    }

    .product-title {
        font-size: 16px;
        font-weight: bold;
        margin: 10px 0;
    }

    .price {
        color: #28a745;
        font-size: 18px;
        font-weight: bold;
    }
</style>
