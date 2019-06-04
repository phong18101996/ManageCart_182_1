<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'san_pham';
    public static function getProductsIndex()
    {
        $value = DB::table('san_pham')->get();
        return $value;
    }
}
