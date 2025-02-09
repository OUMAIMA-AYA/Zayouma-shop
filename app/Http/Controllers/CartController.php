<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
{
    $product = Product::findOrFail($productId);
    $quantity = $request->input('quantity', 1); // Default to 1 if no quantity is provided

    // Add the product to the cart (could be a session or a database entry)
    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
        $cart[$productId]['quantity'] += $quantity; // Update the quantity
    } else {
        $cart[$productId] = [
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'image_path' => $product->image_path
        ];
    }

    session()->put('cart', $cart);

    return redirect()->route('cart');
}

}
