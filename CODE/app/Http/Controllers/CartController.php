<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

use Cart;
class CartController extends Controller
{
    public function getCart()
    {
        $dataCart = Cart::dataCart();
        return view('layouts/cart')->with('dataCart',$dataCart);
    }

}
