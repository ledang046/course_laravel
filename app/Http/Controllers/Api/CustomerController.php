<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Lấy tất cả bản ghi trong bảng customer
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($number = 9)
    // {
    //     return News::where('display', '=', 1)
    //                ->take($number)
    //                ->get();
    // }

    public function create(Request $request) {
        $customer              = new Customer();
        $customer->name        = $request->name;
        $customer->email       = $request->email;
        $customer->username    = $request->username;
        $customer->password    = Hash::make($request->password);
        $customer->address     = $request->address;
        $customer->phonenumber = $request->phonenumber;
        if($request->gender == "Male") {
            $customer->gender = 1;
        } else if($request->gender == "Female") {
            $customer->gender = 0;
        } else {
            $customer->gender = 2;
        }
        if($customer->save()) {
            $customer1 = Customer::where('email', '=', $customer->email)->first();
            return [
                "status"   => "200",
                "customer" => $customer1
            ];
        }
        return [
            "status" => "500"
        ];
    }
    public function login(Request $request) {
        $customers = Customer::all();
        foreach($customers as $row) {
            if($row->email == $request->email && Hash::check($request->password, $row->password)) {
                return (["customer" => $row, "status" => "200"]);
            }
        }
        return (["status" => "500"]);
    }
    public function editPassword(Request $request) {
        $customer = Customer::find($request->id);
        if(Hash::check($request->oldPassword, $customer->password)) {
            $customer1           = Customer::find($request->id);
            $customer1->password = Hash::make($request->newPassword);
            if($customer1->save()) {
                return [
                    "status" => "200"
                ];
            } 
        }
        return ["status" => "500"];
    }
}
