<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Helper;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Pages::paginate(6);
        return view('admin.website_management.pages.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['status'] = Helper::getStatus();
        return view('admin.website_management.pages.create',$data);
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
            'name'=>'required',
            'description'=>'required',
        ]);

        $slug = '';
        if(empty($request->slug)){
            $slug = str_slug($request->title, "-");
        }else{
            $slug = str_slug($request->slug, "-");
        }
     
        $data = new Pages();
        $data->name=$request->name;
        $data->status=$request->status;
        $data->content=$request->description;
        $data->slug=$slug;
        
        if($data->save()){
            session()->flash('message','Page has been Created successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }
        
        return redirect('/pages-listing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data['pages'] = Pages::where('slug',$slug)->first();
        return view('page',$data);
    }

    public function search(Request $request)
    {
        // return $request;
            $data['pages'] = Pages::where('name', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.website_management.pages.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pages'] = Pages::find($id);
        $data['status'] = Helper::getStatus();
        return view('admin.website_management.pages.update',$data);
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
            'name'=>'required',
            'description'=>'required',
        ]);

        $slug = '';
        if(empty($request->slug)){
            $slug = str_slug($request->title, "-");
        }else{
            $slug = str_slug($request->slug, "-");
        }
     
        $data = Pages::find($id);
        $data->name=$request->name;
        $data->status=$request->status;
        $data->content=$request->description;
        $data->slug=$slug;
        
        if($data->save()){
            session()->flash('message','Page has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }
        
        return redirect('/pages-listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pages::find($id);
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
