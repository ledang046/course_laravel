<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    /**
     * Lấy tất cả bản ghi trong bảng news
     *
     * @return \Illuminate\Http\Response
     */
    public function index($number = 9)
    {
        return Discount::where('display', '=', 1)
                   ->take($number)
                   ->get();
    }

    /**
     * Lấy bản ghi theo code
     *
     * @return \Illuminate\Http\Response
     */
    public function getDiscoutPrice($code)
    {
        $price = Discount::where('code', '=', $code)->select('number', 'condition', 'id')->first();
        if($price == null) {
            return ['status' => 500];
        } 
        return ['status' => 200, 'price' => $price];
    }
}
