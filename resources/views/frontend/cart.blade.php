@extends('frontend.layouts1.master')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Page du panier</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Page du panier</li>
            </ul>
        </div>
    </div>
</div>

<div class="th-cart-wrapper space-top space-extra-bottom">
    <div class="container">
        <form action="#" class="woocommerce-cart-form">
            <div class="cart-wrapper">
                <div class="cart-header">
                    <div class="cart-col cart-col-image">Image</div>
                    <div class="cart-col cart-col-productname">Nom du produit</div>
                    <div class="cart-col cart-col-price">Prix</div>
                    <div class="cart-col cart-col-quantity">Quantité</div>
                    <div class="cart-col cart-col-total">Total</div>
                    <div class="cart-col cart-col-remove">Retirer</div>
                </div>

                @foreach (Cart::content() as $item)
                <div class="cart-item">
                    <div class="cart-col cart-col-image">
                        <img src="{{ $item->options->image }}" alt="{{ $item->name }}" class="cart-item-image">
                    </div>
                    <div class="cart-col cart-col-productname">{{ $item->name }}</div>
                    <div class="cart-col cart-col-price">${{ number_format($item->price, 2) }}</div>
                    <div class="cart-col cart-col-quantity">
                        <div class="quantity">
                            <button type="button" class="qty-btn quantity-minus" data-rowid="{{ $item->rowId }}">-</button>
                            <input type="text" id="qty-{{ $item->rowId }}" value="{{ $item->qty }}" readonly>
                            <button type="button" class="qty-btn quantity-plus" data-rowid="{{ $item->rowId }}">+</button>
                        </div>
                    </div>
                    <div class="cart-col cart-col-total" id="total-{{ $item->rowId }}">
                        ${{ number_format($item->price * $item->qty, 2) }}
                    </div>
                    <div class="cart-col cart-col-remove">
                        <a href="{{ route('remove.item', $item->rowId) }}" class="remove-btn">×</a>
                    </div>
                </div>
                @endforeach
            </div>
        </form>

        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title">Totaux du panier</h2>
                <table class="cart_totals">
                    <tbody>
                        <tr>
                            <td>Total de la commande</td>
                            <td>
                                <span class="amount"><bdi>$<span id="cart-subtotal">{{ Cart::subtotal() }}</span></bdi></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="wc-proceed-to-checkout mb-30">
                    <a href="#" class="th-btn">Passer à la caisse</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.qty-btn').on('click', function (e) {
            e.preventDefault();

            let $btn = $(this);
            let rowId = $btn.data('rowid');
            let $qtyInput = $('#qty-' + rowId);
            let action = $btn.hasClass('quantity-plus') ? 'increase' : 'decrease';
            let qty = parseInt($qtyInput.val());

            if (action === 'increase') {
                qty++;
            } else if (action === 'decrease' && qty > 1) {
                qty--;
            }

            $.ajax({
                url: "{{ route('cart.update.quantity') }}", // Ensure this route exists
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    rowId: rowId,
                    qty: qty
                },
                success: function (response) {
                    if (response.success) {
                        // Update the input field and totals
                        $qtyInput.val(qty);
                        $('#total-' + rowId).text('$' + response.totalPrice);
                        $('#cart-subtotal').text('$' + response.cartTotal);
                        $('#order-total').text('$' + response.orderTotal);
                    } else {
                        alert(response.error); // Handle any errors returned
                    }
                },
                error: function (xhr) {
                    console.error('Error:', xhr.responseText);
                    alert('There was an error updating the quantity.');
                }
            });
        });
    });
</script>

<style>
    .cart-wrapper {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .cart-header {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
        font-weight: bold;
    }

    .cart-item {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
        align-items: center;
    }

    .cart-col {
        padding: 10px;
    }

    .cart-item-image {
        width: 50px;
        height: auto;
    }

    .quantity {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .qty-btn {
        background-color: #ddd;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        font-size: 16px;
    }

    .qty-btn:hover {
        background-color: #bbb;
    }

    .remove-btn {
        color: red;
        text-decoration: none;
        font-size: 18px;
    }

    .remove-btn:hover {
        color: darkred;
    }

    @media (max-width: 768px) {
        .cart-header {
            grid-template-columns: 1fr 3fr 1fr;
        }

        .cart-item {
            grid-template-columns: 1fr 3fr 1fr;
        }

        .cart-col-quantity,
        .cart-col-total,
        .cart-col-remove {
            text-align: center;
        }

        .cart-wrapper {
            gap: 20px;
        }
    }
</style>
