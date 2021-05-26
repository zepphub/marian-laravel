<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.posts_index', ['posts'=>$posts]);
    }
    /**
     * Display a listing of the resource on the frontend.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex($category = Null)
    {
        if (!empty($category)) {
          $category = Category::where('slug', $category)->first();
          $posts = Post::where("category_id", $category->id)->paginate(10);
        } else {
          $posts = Post::paginate(10);
        };

        $categories = Category::all();
        return view('front.blog', ['posts'=>$posts, 'categories'=>$categories, 'current_category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
      $post = new Post();
      $post->title = $request->get('title');
      $post->body = $request->get('body');
      $post->slug = Str::slug($post->title);
      $post->category_id = $request->get('category_id');
      $post->save(); /* pre save to get post id */
      $extension = $request->file('image')->getClientOriginalExtension();
      $image_path = $request->file('image')->storeAs('img/posts', $post->id.".".$extension, "public");
      $post->image = "storage/".$image_path;
      $post->save();
      $message = 'Nuevo articulo "'.$post->title.'" creado.';

      return redirect()->route('admin.posts.index')->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::all();
        return view('front.blog_post', ['post'=>$post, 'categories'=>$categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function frontShow($category_slug, $post_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        $post = Post::where('slug', $post_slug)->first();
        $categories = Category::all();
        return view('front.blog_post', ['post'=>$post, 'categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts_edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
      $post->title = $request->get('title');
      $post->body = $request->get('body');
      $post->slug = Str::slug($post->title);
      $post->category_id = $request->get('category_id');
      if (!empty($request->file('image'))) {
        $extension = $request->file('image')->getClientOriginalExtension();
        $image_path = $request->file('image')->storeAs('img/posts', $post->id.".".$extension, "public");
        $post->image = "storage/".$image_path;
      }

      $post->save();
      $message = 'Artículo "'.$post->title.'" actualizado';

      return redirect()->route('admin.posts.index')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $message = 'Artículo "'.$post->title.'" borrado.';
      if(is_file($post->image)){
        unlink($post->image);
      };
      $post->delete();

      return redirect()->route('admin.posts.index')->withMessage($message);
    }

}
