<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Products;
use Cart;
class CartController extends Controller
{
    public function cart()
    {
//        if (Request::isMethod('post')) {
//            $this->data['title'] = 'Giỏ hàng của bạn';
//            $product_id = Request::get('product_id');
//            $product = Products::where('code',$product_id)->get()->first();
//            $cartInfo = [
//                'id' => $product_id,
//                'image'=>$product->hinh,
//                'name' => $product->tensp,
//                'price' => $product->giasp,
//                'qty' => '1'
//            ];
//            Cart::add($cartInfo);
//        }
//        $cart = Cart::content();
//        $this->data['cart'] = $cart;
//
//        return view('layouts.cart', $this->data);
        //increment the quantity
//        if (Request::get('product_id') && (Request::get('increment')) == 1) {
//            $rows = Cart::search(function($key, $value) {
//                return $key->id == Request::get('product_id');
//            });
//            $item = $rows->first();
//            Cart::update($item->rowId, $item->qty + 1);
//        }

        //decrease the quantity
//        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
//            $rows = Cart::search(function($key, $value) {
//                return $key->id == Request::get('product_id');
//            });
//            $item = $rows->first();
//            Cart::update($item->rowId, $item->qty - 1);
//        }
//        $cart = Cart::content();
//        $this->data['cart'] = $cart;
//
//        return view('layouts.cart', $this->data);
    }
}
