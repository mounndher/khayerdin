<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart()
    {
        // Get the total price of all items in the cart
        
        $carts = Cart::content();
        $cartTotal = Cart::total();
        $cartQty = Cart::count();

        // Get categories with children
        $categoriess = Category::with('children')->whereNull('parent_id')->get();

        // Return the view with cart items, total, and categories
        return view('frontend.cart', compact('carts','cartTotal', 'cartQty', 'categoriess'));
    }

    public function addCart(Request $request, $productId)
    {
        
        
        // Find the product by ID
        $product = Listing::findOrFail($productId);

        // Add the product to the cart
        Cart::add([
            'id' => $productId,
            'name' => $product->title,
            'price' => $product->price,
            'qty' => 1,
            'weight' => 1, 
            'options' => [
                'image' => $product->images,
               
            ],
           
           
        ]);

        return redirect()->route('cart')->with('success', 'Item has been added to the cart');
    }

    public function updateQuantity(Request $request)
    {
        $cartItemId = $request->input('rowId');
        $quantity = $request->input('qty');
    
        // Validate the quantity
        if (!is_numeric($quantity) || $quantity <= 0) {
            return response()->json(['error' => 'Invalid quantity'], 400);
        }
    
        // Fetch the cart item from the session
        $cartItem = Cart::get($cartItemId);
        if (!$cartItem) {
            return response()->json(['error' => 'Item not found'], 404);
        }
    
        // Update the cart item quantity
        Cart::update($cartItemId, $quantity);
    
        // Recalculate the item total
        $totalPrice = number_format($cartItem->price * $quantity, 2);
    
        // Recalculate the cart subtotal and total
        $cartSubtotal = Cart::subtotal();
        $orderTotal = Cart::total();
    
        return response()->json([
            'success' => true,
            'totalPrice' => $totalPrice,
            'cartTotal' => $cartSubtotal,
            'orderTotal' => $orderTotal,
        ]);
    }
    
    

    
    
    

    public function removeItem($productId)
    {
        // Remove the item from the cart by its product ID
        Cart::remove($productId);

        return back()->with('success', 'Item has been removed from the cart');
    }

    public function clearCart()
    {
        // Clear all items in the cart
        Cart::clear();

        return back()->with('success', 'There is no item in your cart');
    }
}