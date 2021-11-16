<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function orders()
    {
        return $this->hasMany(Order::class,'product_id');
    }
}
