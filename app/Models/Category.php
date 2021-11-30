<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'parent_id', 'id')
                    ->where('display', '=', 1)
                    ->limit(4)
                    ->orderBy('id');
    }
    public function products1()
    {
        return $this->hasMany('App\Models\Product', 'parent_id', 'id')
                    ->orderBy('id');
    }
}
