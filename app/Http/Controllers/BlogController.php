<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog = BLOG::all();
        return view('blog.blog',['blog'=>$blog]);
    }

    public function create()
    {
        return view('blog.newBlog');
    }
    
    public function edit(request $id)

    { 
        $blog = Blog::findOrFail($id);
        dd($blog);
        return view('blog.editPost',compact('blog'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


}
