<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Data;


class IndexController extends Controller
{
    public function dataIndex()
    {
        $valueType = Index::getTypeOfProductsIndex();
        $valueProduct = Data::getProductsIndex();
        return view('layouts/index')->with('valueType',$valueType)
                                            ->with('valueProduct',$valueProduct);
    }
}
