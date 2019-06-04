<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
class Products extends Model
{
    protected $table = 'san_pham';
    public static function DataProductsDetail($idsp)
    {
        $value = DB::table('san_pham')
            ->where('code',$idsp)
            ->get();
        return $value;
    }
    public static function DataProducts($tl)
    {
        $products = DB::table('san_pham')
            ->where('idTL',$tl)
            ->paginate(8);
        return $products;
    }

}
