<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserValidate;
use DB;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class UsersController extends Controller
{
    /**
     * hehehe
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = User::orderBy("id","desc")->paginate(5);
            return view('backend.user_read')->with(['data' => $data]);
    }

    // Sắp xếp user theo name
    public function arrangeUser($cate, $type)
    {
        $data = User::orderBy($cate,$type)
            ->paginate(5);
        return view('backend.user_read', ["data" => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $action = url('admin/users');
        $record = User::where("id","=",$id)->first();
        return view("backend.user_create_update",["record"=>$record,"action"=>$action]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserValidate $request, $id)
    {
        $users = User::find($id);
        //update name
        $users->name = $request->name;
       if($request->password != ""){
                //mã hóa password
               $users->password = FacadesHash::make($request->password);
            }
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->role = $request->role;
           if($request->photo != ''){        
            $path = public_path().'/upload/users/';
          //code for remove old file
          if($users->photo != '' && $users->photo != null){
               unlink($path.$users->photo);
          }

          //upload new file
          $image = $request->file('photo');
          $storedPath = $image->move('upload/users', $image->getClientOriginalName());
          
          if($image->getClientOriginalName() != null) 
            $users->photo = $image->getClientOriginalName(); 
          else 
            $users->photo = '';

        }
        $users->save();
        return redirect(url("admin/users"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect(url('admin/users'));
    }
}
