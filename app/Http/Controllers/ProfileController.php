<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
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
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'disease'=>'required',
            'pills'=>'required',
            'address'=>'required',
        ]);

        $user = User::find($id);
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->age=$request->age;
        $user->gender=$request->gender;
        $user->disease=$request->disease;
        $user->pills=$request->pills;
        $user->address=$request->address;
        
        if($user->save()){
            session()->flash('message','your details have been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
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
        //
    }

    public function update_pass(){
        return view('update_pass');
    }

    public function change_pass(Request $request, $id){
        // return $request->old_password;
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = User::find($id);

        // if (Hash::check($request->old_password, $data->password)) {
        //     // The passwords match...
        // }

        if(Hash::check($request->old_password, $data->password)){
            $data->password=Hash::make($request->password);

            if($data->save()){
                session()->flash('message','Password has been updated successfully');
                session()->flash('class','success');
            }else{
                session()->flash('message','Password Update failed');
                session()->flash('class','danger');
            }
        }else{
            session()->flash('message','Please enter correct old password');
            session()->flash('class','danger');
        }

        
        
        return back();
        
    }
}
