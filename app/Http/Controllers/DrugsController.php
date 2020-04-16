<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Helper;
use App\Saved;
use App\DrugConsumption;
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
        $data['status'] = Helper::getStatus();
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
        // return $request;
        $request->validate([
            'title'=>'required',
            'categories'=>'required',
        ]);

        $slug = '';
        if(empty($request->slug)){
            $slug = str_slug($request->title, "-");
        }else{
            $slug = str_slug($request->slug, "-");
        }

        if($request->signed == "on"){
            $signed = 1;
        }else{
            $signed = 0;
        }
        
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
        $data->categories=$request->categories;
        $data->slug=$slug;
        $data->tags=$request->tags_input;
        $data->literal_group=$request->literal_group;
        $data->types_drugs=$request->types_drugs;
        $data->hide_publisher=$signed;
        $data->drugs_barcode=$request->drugs_barcode;
        $data->drug_consumption=$request->drug_consumption;
        $data->drugs_company=$request->drugs_company;
        $data->drugs_price=$request->drugs_price;
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

    public function newDrugConsumption(Request $request){
        return $request;
        $request->validate([
            'new_drug_consumption'=>'required',
        ]);

        $data = new DrugConsumption();
        $data->name=$request->new_drug_consumption;

        if($data->save()){
            session()->flash('message','Drug has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }

        return back();
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

    public function search(Request $request)
    {
        // return $request;
        if(Auth::User()->role == 1){
            $data['posts'] = Posts::where('post_type',"Drugs")->where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.drugs.manage',$data);
        }else{
            $data['posts'] = Posts::where(['user_id'=> Auth::User()->id,'post_type'=>'Drugs'])->where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
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
        $data['status'] = Helper::getStatus();
        return view('admin.drugs.update',$data);
    }

    public function details($id){
        $data['saved'] =Saved::where('post_id', $id)->get();
        $data['posts'] = Posts::find($id);
        $data['recents'] = Posts::where('post_type','Drugs')->orderBy('id','desc')->limit(4)->get(); 
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
            'categories'=>'required',
        ]);

        $slug = '';
        if(empty($request->slug)){
            $slug = str_slug($request->title, "-");
        }else{
            $slug = str_slug($request->slug, "-");
        }

        if($request->signed == "on"){
            $signed = 1;
        }else{
            $signed = 0;
        }

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
        $data->title=$request->title;
        $data->status=$request->status;
        $data->categories=$request->categories;
        $data->slug=$slug;
        $data->tags=$request->tags_input;
        $data->literal_group=$request->literal_group;
        $data->types_drugs=$request->types_drugs;
        $data->hide_publisher=$signed;
        $data->drugs_barcode=$request->drugs_barcode;
        $data->drug_consumption=$request->drug_consumption;
        $data->drugs_company=$request->drugs_company;
        $data->drugs_price=$request->drugs_price;
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
