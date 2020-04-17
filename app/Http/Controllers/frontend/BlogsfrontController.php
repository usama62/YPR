<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Article;
use App\Category;

class BlogsfrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::where('status',"publish")->paginate(10);
        $type_blog = Category::where('parent_id',null)->get();
        return view('blog_listing',compact('data','type_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function getdata(Request $request){
        $data = Article::select('*');
        if(!empty($request->s)){
            $data = $data->Where('name', 'like', '%' . $request->s . '%');
        }
        if(count($request->bycondition)){
            $arr = implode(',',$request->bycondition);
            $data = $data->Where('category', 'like', '%' . $arr . '%');
        }
        $data = $data->paginate(6);
        $type_blog = Category::where('parent_id',null)->get();

        return view('blog_listing',compact('data','type_blog'));
    }
}
