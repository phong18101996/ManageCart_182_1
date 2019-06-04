<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'the_loai';
    public static function getTypeOfProductsIndex()
    {
        $value = DB::table('the_loai')->get();
        return $value;
    }

    public static function getTypeOfProducts($tl)
    {
        $value = DB::table('the_loai')
            ->where('id',$tl)
            ->get();
        return $value;
    }
}
