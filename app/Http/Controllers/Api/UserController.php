<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_list = User::all();
        $html = $this->ajax($user_list);
        return (["html" => $html, "status" => "200 OK"]);
    }

    /**
     * Cấu hình khối html trả về
     *
     * @param Collection
     * @return String
     */
    public function ajax($user_list)
    {
        $html = '';
        foreach($user_list as $rows) {
            $src_image = asset('backend/images/avatar/'. $rows->photo .'');
            $action = url('admin/users/'. $rows->id .'');
            $update_link = url('admin/users/'. $rows->id .'/edit');

            $html .= '<tr>';
            $html .= '<td>'. $rows->id. '</td>';
            $html .= '<td class="avatar"><div class="round-img">';
            $html .= '<a href="#">';
            $html .= '<img style="width: 100%;" class="rounded-circle" src="'.$src_image.'" alt="">';
            $html .= '</a></div>';
            $html .= '</td>';
            $html .= '<td>'. $rows->name    .'</td>';
            $html .= '<td>'. $rows->email   .'</td>';
            $html .= '<td>'. $rows->address .'</td>';
            $html .= '<td>'. $rows->phone   .'</td>';
            $html .= '<td>';
            $html .= '<a class="badge badge-complete" style="color:white;" href="'.$update_link.'">';
            $html .= '<i class="fas fa-pencil-alt"></i></a>';
            $html .= '<p id='. $rows->id .' style="background-color:gray;border:none;cursor:pointer;" class="badge">';
            $html .= '<i class="fas fa-trash-alt"></i></p>';
            $html .= '</td></tr>';
        }
        return $html;
    }

    /** 
     * Sắp xếp
     *  
     */
    public function arrangeUser($cate, $type)
    {
        $user_list = User::orderBy($cate,$type)->get();
        $html = $this->ajax($user_list);
        return (["html" => $html, "status" => "200 OK"]);
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
