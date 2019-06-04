<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Products;
use App\Index;
use DB;
use Session;


class ProductsController extends Controller
{
    public static function getDataProductsDetail($idsp)
    {
        $valueProductsDetail = Products::DataProductsDetail($idsp);
        return view('layouts/product-detail')->with('valueProductsDetail',$valueProductsDetail);
    }
    public static function getDataProducts($tl)
    {
        $valueProducts = Products::DataProducts($tl);

        $valueType  = Index::getTypeOfProducts($tl);
        return view('layouts/products')->with('valueProducts',$valueProducts)
                                             ->with('valueType',$valueType);
    }
//    chức năng giỏ hàng ko sử dụng thư viện :2 hàm dưới


//    public static function getAddToCart(Request $request, $id)
//    {
//        $product = Products::where('code',$id)->get()->first();
//        $oldCart = Session::has('cart') ? Session::get('cart') : null ;
//        $cart = new Cart($oldCart);
//        $cart->add($product , $product->code);  // here
//        $request->session()->put('cart',$cart);
//
//        return redirect()->back();
//
//    }
//    public static function getCart()
//    {
//        if(!Session::has('cart')) {
//            return view('layouts/cart',['products'=>null]);
//        }
//        $oldCart = Session::get('cart');
//        $cart = new Cart($oldCart);
//        return view('layouts/cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
//    }

public function muahang($id)
{
    $product_buy = DB::table('san_pham')->where('code',$id)->first();
    Cart::add(array('id'=>$id,'name'=>$product_buy->tensp,'qty'=>1,'price'=>$product_buy->giasp,'options'=>array('img'=>$product_buy->hinh)));
    $content = Cart::content();

//   dd($content);
    return redirect()->back()
        ->with(['flag-cart'=>'success','alert-cart'=>'Sản phẩm đã được thêm vào giỏ hàng'])
        ->with('content',$content);
}
public function giohang()
{
    $content = Cart::content();
    $total = Cart::total();

    return view('layouts/cart',compact('content','total'));

}
public function xoasanpham($id)
{
    Cart::remove($id);
    return redirect()->back();
}
public function capnhat(Request $rq)
{


        $rowid=$rq->id;
        $qty=$rq->qty;
//        $id = Request::get('id');
//        $qty =Request::input('qty');
        Cart::update($rowid,$qty);



}
}
