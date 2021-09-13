<?php

namespace App\Http\Controllers;

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
        $data = Product::where('parent_id', '=', 0)
            ->select('id', 'name', 'display')
            ->orderBy("id","desc")
            ->paginate(5);
        return view('backend.product_read', ["data" => $data]);
    }

    /**
     * Sắp xếp theo request
     *
     * return data được sắp xếp
     */
    public function arrangeCategory($cate, $type)
    {
        $data = Product::where('parent_id', '=', 0)
            ->select('id', 'name', 'display')
            ->orderBy($cate,$type)
            ->paginate(5);
        return view('backend.product_read', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product_create_update', );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product          = new Product;
        $product->name    = $request->input('name');
        $product->parent_id    = 0;
        $product->description = $request->input('description');
        $product->display = $request->has('display') ? 1 : 0;
        $product->save();
        return redirect(route('products.index')); 
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
        $deletedProducts = Product::where('id', '=', $id)->delete();
        return redirect(route('products.index')); 
    }
}
