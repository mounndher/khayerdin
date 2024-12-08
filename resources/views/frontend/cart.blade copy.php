@extends('frontend.layouts1.master')

@section('content')
<div class="cart-page-banner" style="background: url('assets/img/bg/cart-banner.jpg') no-repeat center center; background-size: cover; padding: 80px 0;">
    <div class="container text-center">
        <h1 class="breadcumb-title">Your Cart</h1>
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Cart</li>
        </ul>
    </div>
</div>

<div class="cart-wrapper">
    <div class="container">
        <div class="cart-notices">
            <div class="notice-message">Shipping costs updated.</div>
        </div>
        
        <form action="#" method="POST" class="cart-form">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th class="cart-image">Image</th>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-price">Price</th>
                        <th class="cart-quantity">Quantity</th>
                        <th class="cart-total">Total</th>
                        <th class="cart-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $cartItem)
                    <tr class="cart-item">
                        <td class="cart-image">
                            <img src="{{ asset('storage/'.$cartItem->options->image) }}" alt="{{ $cartItem->name }}" class="cart-product-image">
                        </td>
                        <td class="cart-product-name">{{ $cartItem->name }}</td>
                        <td class="cart-price">${{ number_format($cartItem->price, 2) }}</td>
                        <td class="cart-quantity">
                            <div class="quantity-control">
                                
                                
                               

                                <form action="{{ route('add.quantity', $cartItem->rowId) }}" method="POST" class="quantity-form">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="qty-btn qty-plus"><i class="fas fa-plus"></i></button>
                                </form>
                                <input type="number" class="qty-input" value="{{ $cartItem->qty }}" min="1" max="99" readonly>
                                <form action="{{ route('decrease.quantity', $cartItem->rowId) }}" method="POST" class="quantity-form">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="qty-btn qty-minus"><i class="fas fa-minus"></i></button>
                                </form>
                            </div>
                        </td>
                        <td class="cart-total">${{ number_format($cartItem->price * $cartItem->qty, 2) }}</td>
                        <td class="cart-remove">
                            <form action="{{ route('remove.item', $cartItem->rowId) }}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit" class="remove-item-btn"><i class="fal fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Total Cart Price -->
                    <tr class="cart-summary">
                        <td colspan="5" class="text-right"><strong>Total:</strong></td>
                        <td class="cart-total">
                            <strong><span>${{ Cart::total() }}</span></strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <div class="cart-summary-section">
            <div class="cart-totals">
                <h3 class="cart-totals-title">Cart Totals</h3>
                <table class="totals-table">
                    <tr>
                        <td>Subtotal</td>
                        <td>${{ number_format($cartTotal, 2) }}</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>
                            <select class="shipping-method-select">
                                <option value="free">Free Shipping</option>
                                <option value="flat">Flat Rate</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>${{ number_format($cartTotal, 2) }}</strong></td>
                    </tr>
                </table>
                <div class="proceed-to-checkout">
                    <a href="checkout.html" class="btn checkout-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    /* Cart Page Styles */
.cart-page-banner {
    text-align: center;
    padding: 80px 0;
    color: white;
    font-size: 28px;
}

.cart-table {
    width: 100%;
    border-collapse: collapse;
}

.cart-table th, .cart-table td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #f1f1f1;
}

.cart-image img {
    width: 91px;
    height: 91px;
    object-fit: cover;
}

.cart-product-name {
    font-weight: 600;
}

.cart-price, .cart-total {
    font-weight: bold;
}

.cart-quantity .qty-input {
    width: 40px;
    height: 30px;
    text-align: center;
    border: 1px solid #ddd;
}

.cart-quantity .qty-btn {
    background-color: #007BFF;
    color: white;
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.cart-quantity .qty-btn:hover {
    background-color: #0056b3;
}

.remove-item-btn {
    background: none;
    border: none;
    color: #dc3545;
    font-size: 18px;
    cursor: pointer;
}

.cart-summary-section {
    margin-top: 40px;
}

.cart-totals {
    width: 100%;
    text-align: right;
}

.cart-totals-table td {
    padding: 10px 20px;
}

.checkout-btn {
    background-color: #28a745;
    color: white;
    padding: 10px 30px;
    text-align: center;
    border-radius: 30px;
    font-size: 16px;
    text-transform: uppercase;
    cursor: pointer;
    transition: 0.3s;
}

.checkout-btn:hover {
    background-color: #218838;
}

    </style>