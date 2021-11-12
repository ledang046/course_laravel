<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Lấy tất cả bản ghi trong bảng banners
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Banner::where('display', '=', 1)->limit(3)->get();
    }
}
