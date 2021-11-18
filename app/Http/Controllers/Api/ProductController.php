<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lấy tất cả bản ghi trong products
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Lấy các khóa học thep parent_id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCourse(Request $request, $parent_id)
    {
        $name = $request->name;
        $order = $request->order;
        if($name == '' || $order == '') {
            $name = 'id';
            $order = 'asc';
        }
        $courses = Product::where('parent_id', '=', $parent_id)
                        ->orderBy($name, $order)                
                        ->get();
        return $courses;
    }

    /**
     * Lấy 1 khóa học theo id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getACourse($id)
    {
        $course = Product::find($id);
        return $course;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
