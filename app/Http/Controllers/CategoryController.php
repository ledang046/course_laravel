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
        return view('backend.category_read', ["data" => $data, 'nameType' => 'category']);
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
        $category              = new Category;
        $category->name        = $request->input('name');
        $category->description = $request->input('description');
        $category->display     = $request->has('display') ? 1 : 0;
        $category->save();
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
        $data = Category::find($id)->products()->paginate(5);
        return view('backend.category_read', ["data" => $data, 'nameType' => 'product']);
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
        $category              = Category::find($id);
        $category->name        = $request->input('name');
        $category->description = $request->input('description');
        $category->display     = $request->has('display') ? 1 : 0;
        $category->created_at  = $request->input('created_at');
        $category->save();
        return redirect(route('categories.index'));
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
