<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
    public function arrangeProduct($cate_id, $cate, $type)
    {
        $data = Product::where('parent_id', '=', $cate_id)
            ->select('id', 'name', 'display', 'price')
            ->orderBy($cate,$type)
            ->paginate(5);
        return view('backend.product_read', ["data" => $data, "id" => $cate_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $action = route('products.store');
        return view('backend.product_create_update', ['action' => $action, 'category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product              = new Product;
        $product->name        = $request->name;
        $product->parent_id   = $request->parent_id;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->content = $request->content;
        $product->display     = $request->has('display') ? 1 : 0;
        $product->save();
        return redirect(url('admin/categories/'.$request->parent_id));
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
        $product = Product::find($id);
        $category = Category::all();
        $action = url('admin/products/'.$product->id);
        return view('backend.product_create_update', ['category' => $category,'record' => $product, 'action' => $action]);
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
        $product              = Product::find($id);
        $product->name        = $request->name;
        $product->price       = $request->price;
        $product->parent_id   = $request->parent_id;
        $product->description = $request->description;
        $product->content     = $product->content;
        $product->display     = $request->has('display') ? 1 : 0;
        $product->created_at  = $request->created_at;
        $product->save();
        return redirect(url('admin/categories/'.$request->parent_id)); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = Product::find($id);
        $parent_id = $x->parent_id;
        $x->delete();
        return redirect(url('admin/categories/'.$parent_id)); 
    }
}
