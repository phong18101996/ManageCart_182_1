<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    public static function dataCart()
    {
        $value = DB::table('cart')->get();
        return $value;
    }
}
