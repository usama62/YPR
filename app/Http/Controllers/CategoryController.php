<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Posts;
use App\TypeDisease;
use App\TypeDrugs;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::where('parent_id', null)->get();
        return view('admin.category.create',$data);
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
            // 'slug'=>'required|unique:posts',
            'slug' => 'unique:category'
        ]);
        
        $slug = '';
        if(empty($request->slug)){
            $slug = str_slug($request->title, "-");
        }else{
            $slug = str_slug($request->slug, "-");
        }

        $data = new Category();
        $data->user_id=Auth::User()->id;
        $data->name=$request->name;
        $data->parent_id=$request->parent;
        $data->slug=$slug;
        $data->tags=$request->tags_input;
        $data->description=$request->description;
        $data->access_level=$request->access_level;

        if($data->save()){
            session()->flash('message','Category has been created successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Failed to create category');
            session()->flash('class','danger');
        }

        return redirect('category');
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
            $data['category'] = Category::paginate(6);
            return view('admin.category.manage',$data);
        }else{
            $data['category'] = Category::where('user_id', Auth::User()->id)->paginate();
            return view('admin.category.manage',$data);
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
        $data['category'] =Category::find($id);
        $data['categories'] =Category::where('parent_id', null)->get();
        return view('admin.category.update',$data);
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
        ]);

        $data = Category::find($id);
        $data->name=$request->name;
        $data->parent_id=$request->parent;
        $data->slug=$request->slug;
        $data->tags=$request->tags_input;
        $data->description=$request->description;
        $data->access_level=$request->access_level;

        if($data->save()){
            session()->flash('message','CAtegory has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        if( $data->delete()){
            session()->flash('message','Category has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }

    public function getcategories(Request $request){
        // return $request;
        $data['drugs'] =Category::where('parent_id', 1)->get(['id','name']);
        $data['disease'] =Category::where('parent_id', 5)->get(['id','name']);
        $data['health'] =Category::where('parent_id', 3)->get(['id','name']);

        $data['doctors'] =User::where('role', 3)->get(['id','name']);

        $drugs =Posts::where('post_type', "Drugs")->get(['id','title']);

        $data['types'] =TypeDisease::All();
        $data['types_drugs'] =TypeDrugs::All();

        $arr = [];
        foreach ($drugs as $key => $value) {
            $item['name']  = $value->title;
            $arr[] = $item;

        }
        $data['drugs_list']= $arr;
        return $data;
    }
}
