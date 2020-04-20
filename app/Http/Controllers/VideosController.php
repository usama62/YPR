<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use App\Helper;
use Auth;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::User()->role == 1){
            $data['videos'] = Videos::paginate(6);
            return view('admin.videos.manage_videos',$data);
        }else{
            $data['videos'] = Videos::where('user_id', Auth::User()->id)->paginate(6);
            return view('admin.videos.manage_videos',$data);
        }
    }

    public function search(Request $request)
    {
        // return $request;
        if(Auth::User()->role == 1){
            $data['videos'] = Videos::where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.videos.manage_videos',$data);
        }else{
            $data['videos'] = Videos::where('user_id', Auth::User()->id)->where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.videos.manage_videos',$data);
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
        return view('admin.videos.upload_videos',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
            'video_link'=>'required',
        ]);

        $data = new Videos();
        $data->user_id=Auth::User()->id;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->description=$request->description;
        $data->video_link=$request->video_link;
        
        if($data->save()){
            session()->flash('message','Video has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Upload failed');
            session()->flash('class','danger');
        }
        
        return redirect('videos');
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
        $data['video'] = Videos::find($id);
        $data['status'] = Helper::getStatus();
        return view('admin.videos.update',$data);
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
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'video_link'=>'required',
            'description'=>'required',
        ]);

        $data = Videos::find($id);
        $data->title=$request->title;
        $data->status=$request->status;
        $data->description=$request->description;
        $data->video_link=$request->video_link;;
        
        if($data->save()){
            session()->flash('message','Video has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }
        
        return redirect('videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // return $id;
        $data = Videos::find($id);
        if( $data->delete()){
            session()->flash('message','Video has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
