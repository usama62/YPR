<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Helper;
use App\Saved;
use App\TypeDisease;
use Auth;

class DiseaseController extends Controller
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
        $data['categories'] = Category::where('parent_id', 5)->get();
        $data['status'] = Helper::getStatus();
        return view('admin.disease.create',$data);
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
        
        $founder_image_Name = '';
        if ($request->hasFile('uploadimg')) {
            $founder_image = $request->file('uploadimg');
            $founder_image_Name = time() . '.' . $founder_image->getClientOriginalExtension();
            $founder_image->move(public_path().'/assets/uploads/', $founder_image_Name); 
            $founder_image_Name = "/assets/uploads/{$founder_image_Name}";
        }

        if($request->signed == "on"){
            $signed = 1;
        }else{
            $signed = 0;
        }

        $data = new Posts();
        $data->user_id=Auth::User()->id;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->categories=$request->categories;
        $data->slug=$slug;
        $data->tags=$request->tags_input;  
        $data->literal_group=$request->literal_group;
        $data->disease_code=$request->disease_code;
        $data->specialized_docs=$request->specialized_docs;
        $data->hide_publisher=$signed;
        $data->prohibited_drugs=$request->prohibited_drugs;
        $data->related_drugs=$request->related_drugs;
        $data->type_disease=$request->type_disease;
        $data->description=$request->description;
        $data->image=$founder_image_Name;
        $data->post_type="Disease";
        
        if($data->save()){
            session()->flash('message','Disease info has been uploaded successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Creation failed');
            session()->flash('class','danger');
        }
        
        return redirect('disease');
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
            $data['posts'] = Posts::where('post_type', 'Disease')->paginate(6);
            return view('admin.disease.manage',$data);
        }else{
            $data['posts'] = Posts::where(['user_id'=> Auth::User()->id,'post_type'=>'Disease'])->paginate(6);
            return view('admin.disease.manage',$data);
        }
    }

    public function search(Request $request)
    {
        // return $request;
        if(Auth::User()->role == 1){
            $data['posts'] = Posts::where('post_type',"Disease")->where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.disease.manage',$data);
        }else{
            $data['posts'] = Posts::where(['user_id'=> Auth::User()->id,'post_type'=>'Disease'])->where('title', 'LIKE', '%' . $request->s . '%')->paginate(6);
            return view('admin.disease.manage',$data);
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
        $data['categories'] =Category::where('parent_id', 5)->get();
        $data['status'] = Helper::getStatus();
        return view('admin.disease.update',$data);
    }

    public function details($id){
        $data['saved'] =Saved::where('post_id', $id)->get();
        $data['posts'] = Posts::find($id);
        $data['recents'] = Posts::where('post_type','Disease')->orderBy('id','desc')->limit(4)->get(); 
      
        return view('disease_detail',$data);
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
        $data->disease_code=$request->disease_code;
        $data->specialized_docs=$request->specialized_docs;
        $data->hide_publisher=$signed;
        $data->prohibited_drugs=$request->prohibited_drugs;
        $data->related_drugs=$request->related_drugs;
        $data->type_disease=$request->type_disease;
        $data->description=$request->description;
        $data->image=$founder_image_Name;
        $data->post_type="Disease";

        if($data->save()){
            session()->flash('message','Disease info has been updated successfully');
            session()->flash('class','success');
        }else{
            session()->flash('message','Update failed');
            session()->flash('class','danger');
        }

        return redirect('disease');
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
            session()->flash('message','Disease info has been deleted successfully');
            session()->flash('class','danger');
        }else{
            session()->flash('message','Delete failed');
            session()->flash('class','danger');
        }
        return back();
    }

     //Type_Disease

     public function type_Disease()
     {
         $data['type_diseases'] = TypeDisease::paginate(15);
         return view('admin.disease.type_disease',$data);
     }
 
     public function type_Disease_store(Request $request)
     {
         // return $request;
         $request->validate([
             'type_disease'=>'required',
         ]);
      
         $data = new TypeDisease();
         $data->name=$request->type_disease;
         
         if($data->save()){
             session()->flash('message','New Disease type has been added successfully');
             session()->flash('class','success');
         }else{
             session()->flash('message','Creation failed');
             session()->flash('class','danger');
         }
         
         return redirect('type-disease');
     }
 
     public function delete_type($id)
     {
         $data = TypeDisease::find($id);
         if( $data->delete()){
             session()->flash('message','Disease type has been deleted successfully');
             session()->flash('class','danger');
         }else{
             session()->flash('message','Delete failed');
             session()->flash('class','danger');
         }
         return back();
     }

     public function type_search(Request $request)
     {
        // return $request;
        $data['type_diseases'] = TypeDisease::where('name', 'LIKE', '%' . $request->s . '%')->paginate(10);
        return view('admin.disease.type_disease',$data);
     }
}
