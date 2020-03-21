<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['photos'] = Photos::all();
        return view('admin.photos.manage_photos',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.upload_photos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // return $request;
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'description'=>'required',
        ]);

        
        $founder_image_Name = '';
        if ($request->hasFile('uploadimg')) {
            $founder_image = $request->file('uploadimg');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }

        $data = new Photos();
        $data->title=$request->title;
        $data->status=$request->status;
        $data->description=$request->description;
        $data->image_path=$founder_image_Name;
        
        if($data->save()){
            session()->flash('message','Photo has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Upload failed');
            session()->flash('class','danger');
        }
        
        return back();
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
        $data['photo'] = Photos::find($id);
        return view('admin.photos.update',$data);
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
        // return $request;
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'description'=>'required',
        ]);

        $data = new Photos();
        $data->title=$request->title;
        $data->status=$request->status;
        $data->description=$request->description;
        $data->image_path=null;
        
        if($data->save()){
            session()->flash('message','Photo has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Upload failed');
            session()->flash('class','danger');
        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Photos::find($id);
        if( $data->delete()){
            session()->flash('message','Photo has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
