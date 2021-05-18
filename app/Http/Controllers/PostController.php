<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //public function __construct()
    //{
        //$this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts_list', ['posts'=>$posts]);
    }

    public function create()
    {
        return view('admin.posts_new');
    }

    public function edit(Post $post)
    {
        return view('admin.posts_edit', ['post'=>$post]);
    }

    public function show(Post $post)
    {
        return view('admin.posts_show', ['post'=>$post]);
    }
}
