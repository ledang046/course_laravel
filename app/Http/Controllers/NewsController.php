<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::orderBy("id","desc")->paginate(5);
        return view('backend.new_read')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = url('admin/news');
        return view('backend.new_create_update',["action"=>$action]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News;
        $news->name = $request->name;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->display = isset($request->display) != "" ? 1 : 0;
        if (!$request->hasFile('photo')) {
          $news->photo = '';
        } else {
          $image = $request->file('photo');
          $storedPath = $image->move('upload/news', $image->getClientOriginalName());
          $news->photo = $image->getClientOriginalName();
        }
        $news->save();
        return redirect(url('admin/news'));
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
        $record = News::where("id","=",$id)->first();
        return view("backend.new_create_update",["record"=>$record]);
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
        $news = News::find($id);
        //update name
        $news->name = $request->name;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->display = isset($request->display) != "" ? 1 : 0;
           if($request->photo != ''){        
            $path = public_path().'/upload/news/';
          //code for remove old file
          if($news->photo != '' && $news->photo != null){
               unlink($path.$news->photo);
          }
          //upload new file
          $image = $request->file('photo');
          $storedPath = $image->move('upload/news', $image->getClientOriginalName());
          $news->photo = $image->getClientOriginalName();

        }
        $news->save();
        return redirect(url("admin/news"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect(url('admin/news'));
    }
}
