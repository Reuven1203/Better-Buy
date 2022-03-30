<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {

        $userId = auth()->user()->id;
        \Cart::session($userId)->add([
            'id' => $request->id,
            'name' => $request->name,

        ]);
        $cartItems = \Cart::session($userId)->getContent();
        return view('cart', compact('cartItems'));
    }
    public function cartList()
    {
        $userId = auth()->user()->id;
        $cartItems = \Cart::session($userId)->getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }
}
