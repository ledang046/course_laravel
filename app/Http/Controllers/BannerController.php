<?php
namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::orderBy("id","desc")
            ->paginate(5);
        return view('backend.banner_read', ["data" => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = url('admin/banners');
        return view('backend.banner_create_update',["action"=>$action]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banners = new Banner();
        $banners->name = $request->name;
        $banners->display = isset($request->display) != "" ? 1 : 0;
        if (!$request->hasFile('photo')) {
          $banners->photo = '';
        } else {
          $image = $request->file('photo');
          $storedPath = $image->move('upload/banners', $image->getClientOriginalName());
          $banners->photo = $image->getClientOriginalName();
        }
        $banners->save();
        return redirect(url('admin/banners'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}