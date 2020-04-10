<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Saved;
use Auth;

class SavedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::User()->role == 1){
            $data['saved_items'] = Saved::paginate(6);
            return view('saved',$data);
        }else{
            $data['saved_items'] = Saved::where('user_id', Auth::User()->id)->paginate(6);
            return view('saved',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entry = Saved::where(['user_id' => Auth::user()->id, 'post_id' =>$request->item_id])->get();

        if(count($entry) == 0){
            $data = new Saved();
            $data->user_id= Auth::user()->id;
            $data->post_id=$request->item_id;
            
            if($data->save()){
                return $request->item_id;
            }else{
                return 0;
            }
        }else{
            return "id already exist";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {        if(Auth::User()->role == 1){
                $data['saved_items'] = Saved::paginate(6);
                return view('admin.saveditems',$data);
            }else{
                $data['saved_items'] = Saved::where('user_id', Auth::User()->id)->paginate(6);
                return view('admin.saveditems',$data);
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
        $data = Saved::find($id);
        if( $data->delete()){
            session()->flash('message','Item has been removed successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Remove failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
