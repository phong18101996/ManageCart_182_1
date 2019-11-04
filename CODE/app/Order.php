<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Order extends Model
{
    protected $table = 'orders';
    public static function showOrder($idUser) {
       

    $value = DB::table('orders')
            ->join('users','users.id','=','orders.idUser')
            ->where('users.id',$idUser)
            ->select('orders.id_order', 'orders.date', 'orders.total','orders.status')
            ->get();
            return $value;
    }
    public static function showOrderDetail($idOrder) {
        $value = DB::table('orders')
        ->join('users','users.id','=','orders.idUser')
        ->where('orders.id_order',$idOrder)
        ->select('orders.id_Order','orders.status','orders.date','users.address','users.name','users.mobile','orders.type','orders.total','orders.method')
        ->get();
        return $value;
    }
    public static function showProductFromOrder($idOrder) {
        $value = DB::table('order_details')
        ->join('san_pham','san_pham.code','=','order_details.idProducts')
        ->join('orders','orders.id_order','=','order_details.id_Order')
        ->where('order_details.id_Order',$idOrder)
        ->select('san_pham.code','san_pham.tensp','order_details.qty','san_pham.giasp','orders.total','orders.method')
        ->get();
        return $value;
    }
} 
