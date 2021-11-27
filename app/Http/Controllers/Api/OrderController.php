<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Jobs\SendEmail;

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

        if($order->save()) {
            $customerEmail = $order->customer->email;
            $productName   = $order->product->name;
            $orderPrice    = $order->price;
            $message = [
                'type' => 'Register successsfully',
                'content' => 'Welcome to KOURSES, from Team 13 with love <3!',
                'productName' => $productName,
                'orderPrice'  => $orderPrice
            ];
            SendEmail::dispatch($message, $customerEmail)->delay(now()->addMinute(1));

            return [
                "status" => "200",
                "email"  => $customerEmail
            ];
        } else {
            return [
                "status" => "500"
            ];
        }
    }
    
    /**
     * Lấy các order theo id user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOrder($id)
    {
        $orderList = Order::where('customer_id', '=', $id)->get();
        foreach($orderList as $order) {
            $order->productId = $order->product->id;
            $order->productName = $order->product->name;
        }
        return [
            'status'     => "200",
            'listObject' => $orderList
        ];
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
        Order::where('id', '=', $id)->delete();
        return [
            'status' => '200'
        ]; 
    }
}
