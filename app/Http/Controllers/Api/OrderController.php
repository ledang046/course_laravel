<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lấy tất cả bản ghi trong Orders
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $order              = new Order();
        $order->product_id  = $request->product_id;
        $order->customer_id = $request->customer_id;
        $order->discount_id = $request->discount_id;
        $order->price       = $request->price;
        $order->save();
        return (["status" => "200"]);
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
        $courses = Order::where('parent_id', '=', $parent_id)
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
        $course = Order::find($id);
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
