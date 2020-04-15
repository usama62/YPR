<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Posts;
use App\TypeDisease;

class DiseasefrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posts::where(['post_type'=>"Disease",'status'=>"publish"])->paginate(6);
        $type_diseases = TypeDisease::All();
        return view('disease_listing',compact('data','type_diseases'));
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
        $data = Posts::select('*');
        if(!empty($request->s)){
            $data = $data->Where('title', 'like', '%' . $request->s . '%');
        }
        if(count($request->bycondition)){
            $arr = implode(',',$request->bycondition);
            $data = $data->Where('type_disease', 'like', '%' . $arr . '%');
        }
        if(count($request->literal)){
            $literal = implode(',',$request->literal);
            $data = $data->Where('literal_group', 'like', '%' . $literal . '%');
        }
        $data = $data->where('post_type', 'Disease')->paginate(6);
        $type_diseases = TypeDisease::All();

        return view('disease_listing',compact('data','type_diseases'));
    }
}
