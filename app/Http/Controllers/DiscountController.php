<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Discount::orderBy("id","asc")
            ->paginate(5);
            
        return view('backend.discount_read', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('discounts.store');
        return view('backend.discount_create_update', ['action' => $action]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $discount = new Discount();

        $discount->name = $data['name'];
        $discount->number = $data['number'];
        $discount->code = $data['code'];
        $discount->time = $data['time'];
        $discount->condition = $data['condition'];
        $discount->save();

        return redirect(route('discounts.index')); 
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
        $record = Discount::where("id","=",$id)->first();
        $action = url('admin/discounts/'.$record->id);
        return view("backend.discount_create_update",["record"=>$record,"action" => $action]);
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
        $data = $request->all();
        $discount = Discount::find($id);
        //update name
        $discount->name = $data['name'];
        $discount->number = $data['number'];
        $discount->code = $data['code'];
        $discount->time = $data['time'];
        $discount->condition = $data['condition'];
        $discount->save();
        return redirect(url("admin/discounts"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Discount::where('id', '=', $id)->delete();

        return redirect(route('discounts.index')); 
    }   
}
