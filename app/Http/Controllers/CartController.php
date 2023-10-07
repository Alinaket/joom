<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        if($request->input("product_id")){
            $cart = new Cart();
            $cart->product_id = $request->input("product_id");
            $cart->save();
        }
        return back();
    }

}
