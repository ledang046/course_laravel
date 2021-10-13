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
     * Lấy 4 products theo category id để hiện thị trang home nổi bật 
     */
    public function show($id)
    {
        $data = Category::find($id)->products;
        return $data;
    }

    /**
     * Lấy tên category theo id
     */
    public function getAcategory($id)
    {
        $data = Category::find($id);
        return $data;
    }
}
