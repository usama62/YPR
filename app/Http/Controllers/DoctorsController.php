<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctors;

class DoctorsController extends Controller
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
        return view('admin.doctor.create');
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
            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
        ]);
    
        $founder_image_Name = '';
        if ($request->hasFile('profile_image')) {
            $founder_image = $request->file('profile_image');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }
    
    
        $data = new Doctors();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->experience=$request->experience;
        $data->speciality=$request->speciality;
        $data->description=$request->description;
        $data->profile_image=$founder_image_Name;
        
        if($data->save()){
            session()->flash('message','Doctor has been added successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }
        
        return redirect('doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['doctors'] = Doctors::paginate(6);
        return view('admin.doctor.manage',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['doctors'] = Doctors::find($id);
        return view('admin.doctor.update',$data);
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
            'description'=>'required',
        ]);
        
        $founder_image_Name = '';
        if ($request->hasFile('profile_image')) {
            $founder_image = $request->file('profile_image');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }else{
            $founder_image_Name = $request->hiddenimage;
        }
    
    
        $data = Doctors::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->experience=$request->experience;
        $data->speciality=$request->speciality;
        $data->description=$request->description;
        $data->profile_image=$founder_image_Name;
        
        if($data->save()){
            session()->flash('message','Doctor Profile has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','update failed');
            session()->flash('class','danger');
        }
        
        return redirect('doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Doctors::find($id);
        if( $data->delete()){
            session()->flash('message','Company has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
