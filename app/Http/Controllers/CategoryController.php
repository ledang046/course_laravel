<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::select('id', 'name', 'display')
            ->orderBy("id","desc")
            ->paginate(5);
        return view('backend.category_read', ["data" => $data]);
    }

    /**
     * Sắp xếp theo request
     *
     * return data được sắp xếp
     */
    public function arrangeCategory($cate, $type)
    {
        $data = Category::select('id', 'name', 'display')
            ->orderBy($cate,$type)
            ->paginate(5);
        return view('backend.category_read', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category_create_update', ['nameType' => 'category']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product          = new Category;
        $product->name    = $request->input('name');
        $product->description = $request->input('description');
        $product->display = $request->has('display') ? 1 : 0;
        $product->save();
        return redirect(route('categories.index')); 
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category_create_update', ['record' => $category, 'nameType' => 'category']);
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
        $deletedCategorys = Category::where('id', '=', $id)->delete();
        return redirect(route('categories.index')); 
    }
}
