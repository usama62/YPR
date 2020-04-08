<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;

class AdminController extends Controller
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
        //  return view('admin.index');
        return view('profile');
    }
 
    public function users()
    {
        $data['users'] = User::paginate(10);
        return view('admin.users.manage',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create_users');
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
            'email'=>'required',
            'password'=>'required',
        ]);

        if($request->alert == "on"){
            $alert = 1;
        }else{
            $alert = 0;
        }

        if($request->agree_terms == "on"){
            $agree_terms = 1;
        }else{
            $agree_terms = 0;
        }

        $founder_image_Name = '';
        if ($request->hasFile('profile_image')) {
            $founder_image = $request->file('profile_image');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }

        $data = new User();
        $data->name=$request->name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->phone=$request->phone;
        $data->dob=$request->dob;
        $data->age=$request->age;
        $data->gender=$request->gender;
        $data->disease=$request->disease;
        $data->pills=$request->pills;
        $data->address=$request->address;
        $data->interest=$request->interest;
        $data->alert=$alert;
        $data->agree_terms=$agree_terms;
        $data->profile_image=$founder_image_Name;

        if($data->save()){
            session()->flash('message','User has been created successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Failed to create user');
            session()->flash('class','danger');
        }

        return redirect('manage-users');
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
        $data['user'] = User::find($id);
        return view('admin.users.edit',$data);
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
            'email'=>'required',
            'password'=>'required',
        ]);

        if($request->alert == "on"){
            $alert = 1;
        }else{
            $alert = 0;
        }
                
        if($request->agree_terms == "on"){
            $agree_terms = 1;
        }else{
            $agree_terms = 0;
        }

        $founder_image_Name = '';
        if ($request->hasFile('profile_image')) {
            $founder_image = $request->file('profile_image');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }else{
            $founder_image_Name = $request->profile_image_hidden;
        }

        $data = User::find($id);
        $data->name=$request->name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->phone=$request->phone;
        $data->dob=$request->dob;
        $data->age=$request->age;
        $data->gender=$request->gender;
        $data->disease=$request->disease;
        $data->pills=$request->pills;
        $data->address=$request->address;
        $data->interest=$request->interest;
        $data->alert=$alert;
        $data->agree_terms=$agree_terms;
        $data->profile_image=$founder_image_Name;

        if($data->save()){
            session()->flash('message','User has been Updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Failed to update user');
            session()->flash('class','danger');
        }

        return redirect('manage-users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        if( $data->delete()){
            session()->flash('message','User has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
