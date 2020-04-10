<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Category;
use Auth;

class CompanyController extends Controller
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
        $data['company_type'] = Category::where('parent_id',null)->get();
        return view('admin.company.create',$data);
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
            'description'=>'required',
        ]);
        
        $founder_image_Name = '';
        if ($request->hasFile('company_logo')) {
            $founder_image = $request->file('company_logo');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }
    
    
        $data = new Company();
        $data->name=$request->name;
        $data->description=$request->description;
        $data->company_type=$request->company_type;

        $data->logo=$founder_image_Name;
        
        if($data->save()){
            session()->flash('message','Company has been added successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }
        
        return redirect('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['companies'] = Company::paginate(6);
        return view('admin.company.manage',$data);
    }

    public function search(Request $request)
    {
        // return $request;
        if(Auth::User()->role == 1){
            $data['companies'] = Company::where('name', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.company.manage',$data);
        }else{
            $data['companies'] = Company::where('user_id', Auth::User()->id)->where('name', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.company.manage',$data);
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
        $data['company'] = Company::find($id);
        return view('admin.company.update',$data);
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
        
        $founder_image_Name = '';
        if ($request->hasFile('company_logo')) {
            $founder_image = $request->file('company_logo');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }else{
            $founder_image_Name = $request->hiddenimage;
        }
    
    
        $data = Company::find($id);
        $data->name=$request->name;
        $data->description=$request->description;
        $data->company_type=$request->company_type;
        $data->logo=$founder_image_Name;
        
        if($data->save()){
            session()->flash('message','Company has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','update failed');
            session()->flash('class','danger');
        }
        
        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::find($id);
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
