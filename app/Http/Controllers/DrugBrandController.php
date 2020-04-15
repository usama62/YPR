<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Posts;
use App\Category;
use App\Helper;
use App\DrugBrand;
// use App\Saved;
use Auth;

class DrugBrandController extends Controller
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
        return view('admin.drugs_brand.create',$data);
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

        if($request->ads == "on"){
            $ads = 1;
        }else{
            $ads = 0;
        }
        
        $founder_image_Name = '';
        if ($request->hasFile('image')) {
            $founder_image = $request->file('image');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }
     
        $data = new DrugBrand();
        $data->name=$request->name;
        $data->category=$request->categories;
        $data->slug=$slug;
        $data->tags=$request->tags_input;
        $data->status=$request->status;
        $data->hide_publisher=$signed;
        $data->ads=$ads;
        $data->barcode=$request->barcode;
        $data->drugs_company=$request->drugs_company;
        $data->drug_price=$request->price;
        $data->description=$request->description;
        $data->drug_brand_type=$request->drug_brand_type;
        $data->related_drugs=$request->related_drugs;
        $data->image=$founder_image_Name;
        
        if($data->save()){
            session()->flash('message','Drug brand has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }
        
        return redirect('drugs-brands');
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
            $data['posts'] = DrugBrand::paginate(6);
            return view('admin.drugs_brand.manage',$data);
        }else{
            $data['posts'] = DrugBrand::where('user_id', Auth::User()->id)->paginate(6);
            return view('admin.drugs_brand.manage',$data);
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
        $data['posts'] = DrugBrand::find($id);
        $data['categories'] =Category::where('parent_id', 1)->get();
        $data['status'] = Helper::getStatus();
        return view('admin.drugs_brand.update',$data);
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
            'name'=>'required',
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

        if($request->ads == "on"){
            $ads = 1;
        }else{
            $ads = 0;
        }

        $founder_image_Name = '';
        if ($request->hasFile('image')) {
            $founder_image = $request->file('image');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }else{
            $founder_image_Name = $request->hiddenimage;
        }

        $data = DrugBrand::find($id);
        $data->name=$request->name;
        $data->category=$request->categories;
        $data->slug=$slug;
        $data->tags=$request->tags_input;
        $data->status=$request->status;
        $data->hide_publisher=$signed;
        $data->ads=$ads;
        $data->barcode=$request->barcode;
        $data->drugs_company=$request->drugs_company;
        $data->drug_price=$request->price;
        $data->description=$request->description;
        $data->drug_brand_type=$request->drug_brand_type;
        $data->related_drugs=$request->related_drugs;
        $data->image=$founder_image_Name;

        if($data->save()){
            session()->flash('message','Drugs brand info has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }

        return redirect('drugs-brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DrugBrand::find($id);
        if( $data->delete()){
            session()->flash('message','Drug brand has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }
}
