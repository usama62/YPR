<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use Auth;


class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::where('parent_id', 1)->get();
        return view('admin.drugs.create',$data);
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
            'status'=>'required',
            'description'=>'required',
            'category'=>'required',
        ]);

        
        $founder_image_Name = '';
        if ($request->hasFile('uploadimg')) {
            $founder_image = $request->file('uploadimg');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }

        $data = new Posts();
        $data->user_id=Auth::User()->id;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->categories=implode(',' , $request->category);
        $data->description=$request->description;
        $data->image=$founder_image_Name;
        $data->post_type="Drugs";
        
        if($data->save()){
            session()->flash('message','Drug has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }
        
        return redirect('drugs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::User()->role == 1){
            $data['posts'] = Posts::where('post_type', 'Drugs')->paginate(6);
            return view('admin.drugs.manage',$data);
        }else{
            $data['posts'] = Posts::where(['user_id'=> Auth::User()->id,'post_type'=>'Drugs'])->paginate(6);
            return view('admin.drugs.manage',$data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['posts'] = Posts::find($id);
        $data['categories'] =Category::where('parent_id', 1)->get();
        return view('admin.drugs.update',$data);
    }

    public function details($id){
        $data['posts'] = Posts::find($id);
        return view('drug_detail',$data);
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
            'category'=>'required',
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

        $data = Posts::find($id);
        $data->user_id=Auth::User()->id;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->categories=implode(',' , $request->category);
        $data->description=$request->description;
        $data->image=$founder_image_Name;
        $data->post_type="Drugs";

        if($data->save()){
            session()->flash('message','Drugs info has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }

        return redirect('drugs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Posts::find($id);
        if( $data->delete()){
            session()->flash('message','Drug has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
