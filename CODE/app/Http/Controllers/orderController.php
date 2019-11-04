<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public static function getOrder($idUser) {
        $valueOrder = Order::showOrder($idUser);
        return view('layouts/order')->with('valueOrder',  $valueOrder);
    }
    public static function getOrderDetail($idOrder) {
        $valueUserAndOrders = Order::showOrderDetail($idOrder);
        $valueOrderAndProducts = Order::showProductFromOrder($idOrder);
 
        return view('layouts/order-detail')->with('valueUserAndOrders', $valueUserAndOrders)
                                           ->with('valueOrderAndProducts', $valueOrderAndProducts);
    }
}
