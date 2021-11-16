<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =
    [
        'name','code','time','number','condition'
    ];
    protected $table = 'discounts';
    public function orders()
    {
        return $this->hasMany(Order::class,'discount_id');
    }
}
