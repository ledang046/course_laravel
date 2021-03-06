<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy("id","desc")->paginate(5);
        return view('backend.product_read', ["data" => $data]);
    }

    /**
     * Sắp xếp theo request
     *
     * return data được sắp xếp
     */

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
        $product->content     = $request->content;
        $product->display     = $request->has('display') ? 1 : 0;
        $product->hot         = $request->has('hot') ? 1 : 0;
        if (!$request->hasFile('photo')) {
            $product->photo = '';
          } else {
            $destinationPath = public_path('upload/products/');
            $newPath = 'D:\Xampp\htdocs\fe_course_laravel\src\assets\images/';  
            $image = $request->file('photo');
            $storedPath = $image->move('upload/products', $image->getClientOriginalName());
            File::copy($destinationPath.$image->getClientOriginalName(), $newPath.$image->getClientOriginalName());
            $product->photo = $image->getClientOriginalName();
          }
        $product->save();
        return redirect(url('admin/categories/'.$request->parent_id));
        echo $request->content;
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
        $product->discount    = $request->discount;
        $product->content     = $request->content;
        $product->display     = $request->has('display') ? 1 : 0;
        $product->hot         = $request->has('hot') ? 1 : 0;
        $product->created_at  = $request->created_at;
        if($request->photo != ''){        
            $path = public_path().'/upload/products/';
          //code for remove old file
          if($product->photo != '' && $product->photo != null){
               unlink($path.$product->photo);
          }
          //upload new file
            $destinationPath = public_path('upload/products/');
            $newPath = 'D:\Xampp\htdocs\fe_course_laravel\src\assets\images/';  
            $image = $request->file('photo');
            $storedPath = $image->move('upload/products', $image->getClientOriginalName());
            File::copy($destinationPath.$image->getClientOriginalName(), $newPath.$image->getClientOriginalName());
            $product->photo = $image->getClientOriginalName();

        }
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
