<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Order;

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
    public function getDiscoutPrice($userid, $code)
    {
        $price = Discount::where('code', '=', $code)->first();
        $check = Order::where('customer_id', '=', $userid)
                      ->where('discount_id', '=', $price->id)
                      ->get();
        if(count($check) > 0) {
            return ['status' => 200, 'price' => null];
        }
        return ['status' => 200, 'price' => $price];
    }
}
