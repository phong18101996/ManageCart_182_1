<?php

namespace App\Http\Controllers;

use App\Carts;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Index;
use DB;
use Session;



class ProductsController extends Controller
{
    public static function getDataProductsDetail($idsp)
    {
        $valueProductsDetail = Products::DataProductsDetail($idsp);
        return view('layouts/product-detail')->with('valueProductsDetail', $valueProductsDetail);
    }
    public static function getDataProducts($tl)
    {
        $valueProducts = Products::DataProducts($tl);

        $valueType  = Index::getTypeOfProducts($tl);
        $typeInProductPage = Index::getTypeOfProductsIndex();
        $getMinPrice = Products::MinPrice();
        $getMaxPrice = Products::MaxPrice();


        return view('layouts/products')->with('valueProducts', $valueProducts)
            ->with('valueType', $valueType)
            ->with('typeInProductPage', $typeInProductPage)
            ->with('getMinPrice', $getMinPrice)
            ->with('getMaxPrice', $getMaxPrice);
    }
    //search value

    public static function getValueKeySearch(Request $req)
    {
        $getValue = Products::SearchProduct($req->keysearch);
        return view('layouts/products')->with('value', $getValue);
    }


    public function muahang($id)
    {


        //    code giỏ hàng bằng session



        $product_buy = DB::table('san_pham')->where('code', $id)->first();
        Cart::add(array('id' => $id, 'name' => $product_buy->tensp, 'qty' => 1, 'price' => $product_buy->giasp, 'options' => array('img' => $product_buy->hinh)));

        $content = Cart::content();
        $new_temp = 0;


        foreach ($content as $v) {
            $new_temp += $v->qty;
        }
        return redirect()->back()
            ->with(['flag-cart' => 'success', 'alert-cart' => 'Sản phẩm đã được thêm vào giỏ hàng .  '])
            ->with('content', $content)
            ->with('new_temp', $new_temp);








        //        end code giỏ hàng bằng session



    }






    public function muahangtutrangchitiet(Request $request, $id)
    {
        $product_buy = DB::table('san_pham')->where('code', $id)->first();
        $valQty = $request->detail;
        if ($valQty == '') {
            Cart::add(array('id' => $id, 'name' => $product_buy->tensp, 'qty' => 1, 'price' => $product_buy->giasp, 'options' => array('img' => $product_buy->hinh)));
        } else {
            Cart::add(array('id' => $id, 'name' => $product_buy->tensp, 'qty' => $valQty, 'price' => $product_buy->giasp, 'options' => array('img' => $product_buy->hinh)));
        }

        $content = Cart::content();


        return redirect()->back()
            ->with(['flag-cart' => 'success', 'alert-cart' => 'Sản phẩm đã được thêm vào giỏ hàng .  '])
            ->with('content', $content);
    }
    public function giohang()
    {
        $content = Cart::content();
        $total = Cart::subtotal();



        return view('layouts/cart', compact('content', 'total'));
    }
    public function xoasanpham($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function xoahet()
    {
        Cart::destroy();
        return redirect()->back();
    }
    public function capnhat(Request $request)
    {


        $rowid = $request->id;
        $qty = $request->qty;
        //        $proid = $request->id;
        //        $id = Request::get('id');
        //        $qty =Request::input('qty');
        Cart::update($rowid, $qty);
        return redirect()->back();
    }
}
