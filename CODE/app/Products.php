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
    public static function MinPrice() {
        $minPrice = DB::table('san_pham')
            ->min('giasp');
        return $minPrice;
    }
    public static function MaxPrice() {
        $maxPrice = DB::table('san_pham')
            ->max('giasp');
        return $maxPrice;
    }
    public static function SearchProduct($keyword) {
        $keySearch = DB::table('san_pham')
            ->where('code',$keyword)

            ->get();
        return $keySearch;
    }

}
