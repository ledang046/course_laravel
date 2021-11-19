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
    public function index($number = 4)
    {
        return News::where('display', '=', 1)
                   ->orderBy('created_at', 'desc')
                   ->take($number)
                   ->get();
    }

    /**
     * Lấy các bản ghi trong news với phân trang
     *
     * @return \Illuminate\Http\Response
     */
    public function getNews(Request $request)
    {
        return News::where('display', '=', 1)
                        ->orderBy('created_at', 'desc')
                        ->paginate(4);
    }
}
