<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function add()
    {
        return $this->belongsTo(Cart::class);
    }
}