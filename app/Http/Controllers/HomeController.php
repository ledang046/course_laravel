<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customer = DB::table('customers')->get();
        $product = DB::table("products")->get();
        $order = DB::table('orders')->get();
        $price = DB::table('orders')->sum('price');
        return view('backend.home',['customer' => $customer,'order' => $order, 'price'=>$price,'product'=>$product]);
    }
}
