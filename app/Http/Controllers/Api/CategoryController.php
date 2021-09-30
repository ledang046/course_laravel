<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Lấy danh sách danh mục 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::select('id', 'name')
                        ->where('display', '=', 1)
                        ->get();
        return $data;
    }

    /**
     * Lấy products theo category id
     */
    public function show($id)
    {
        $data = Category::find($id)->products;
        return $data;
    }
}
