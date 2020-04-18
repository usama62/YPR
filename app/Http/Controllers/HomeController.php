<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Posts;
use App\Videos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data['recents'] = Posts::where('post_type','Disease')->orderBy('id','desc')->limit(6)->get(); 
        $data['videos'] = Videos::orderBy('id','desc')->limit(6)->get(); 
        $data['articles'] = Article::orderBy('id','desc')->limit(3)->get(); 
        
        return view('index',$data);
    }

    public function search(Request $request){
        // return $request;
        $data['values'] = Posts::where('post_type',$request->category)->where('title', 'LIKE', '%' . $request->search . '%')->paginate(6);
        $data['post_type'] = $request->category;

        return view('search_listing',$data);
    }
}
