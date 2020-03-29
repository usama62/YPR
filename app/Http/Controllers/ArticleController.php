<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Helper;
use Auth;

class ArticleController extends Controller
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
        $data['categories'] = Category::where('parent_id', null)->get();
        $data['status'] = Helper::getStatus();
        return view('admin.article.create',$data);
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
            'description'=>'required',
            'category'=>'required',
            // 'status'=>'required',
            // 'video_link'=>'required',
        ]);

        $founder_image_Name = '';
        if ($request->hasFile('uploadimg')) {
            $founder_image = $request->file('uploadimg');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }

        $data = new Article();
        $data->user_id=Auth::User()->id;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->status=(Auth::user()->role != 1 )? "pending" : $request->status;
        $data->category=implode(',' , $request->category);
        // $data->video_link=$request->video_link;
        $data->image=$founder_image_Name;

        if($data->save()){
            session()->flash('message','Blog has been created successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Failed to create article');
            session()->flash('class','danger');
        }

        return redirect('blogs');
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
            $data['posts'] = Article::paginate(6);
            return view('admin.article.manage',$data);
        }else{
            $data['posts'] = Article::where('user_id', Auth::User()->id)->paginate(6);
            return view('admin.article.manage',$data);
        }
    }

    public function details($id)
    {
        $data['details'] = Article::find($id);
        return view('article_detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['posts'] = Article::find($id);
        $data['categories'] =Category::where('parent_id', null)->get();
        $data['status'] = Helper::getStatus();
        return view('admin.article.update',$data);
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
            'description'=>'required',
            'category'=>'required',
            // 'status'=>'required',
            // 'video_link'=>'required',
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

        $data = Article::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->category=implode(',' , $request->category);
        $data->image=$founder_image_Name;

        if($data->save()){
            session()->flash('message','Blog has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }

        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Article::find($id);
        if( $data->delete()){
            session()->flash('message','Blog has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
