<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewController extends Controller
{
    /**
     * Lấy tất cả bản ghi trong bảng news
     *
     * @return \Illuminate\Http\Response
     */
    public function index($number = 9)
    {
        return News::where('display', '=', 1)
                   ->take($number)
                   ->get();
    }
}
