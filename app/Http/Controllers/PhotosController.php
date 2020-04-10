<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use App\Helper;
use Auth;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::User()->role == 1){
            $data['photos'] = Photos::paginate(6);
            return view('admin.photos.manage_photos',$data);
        }else{
            $data['photos'] = Photos::where('user_id', Auth::User()->id)->paginate(6);
            return view('admin.photos.manage_photos',$data);
        }
        
    }

    public function search(Request $request)
    {
        // return $request;
        if(Auth::User()->role == 1){
            $data['photos'] = Photos::where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.photos.manage_photos',$data);
        }else{
            $data['photos'] = Photos::where('user_id', Auth::User()->id)->where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.photos.manage_photos',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['status'] = Helper::getStatus();
        return view('admin.photos.upload_photos',$data);
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
        $data->user_id=Auth::User()->id;
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
        
        return redirect('photos');
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
        $data['status'] = Helper::getStatus();
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

        $founder_image_Name = '';
        if ($request->hasFile('uploadimg')) {
            $founder_image = $request->file('uploadimg');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }else{
            $founder_image_Name = $request->hiddenimage;
        }

        $data = Photos::find($id);
        $data->title=$request->title;
        $data->status=$request->status;
        $data->description=$request->description;
        $data->image_path=$founder_image_Name;;
        
        if($data->save()){
            session()->flash('message','Photo has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }
        
        return redirect('photos');
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
