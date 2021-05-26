<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resource::paginate(10);
        return view('admin.resources_index', ['resources'=>$resources]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex()
    {
        $resources = Resource::all();
        return view('front.recursos', ['resources'=>$resources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $resource = new Resource();
      $resource->title = $request->get('title');
      $resource->description = $request->get('description');
      $resource->button = $request->get('button');
      $resource->save(); /* pre save to get resource id */

      $extension = $request->file('image')->getClientOriginalExtension();
      $image_path = $request->file('image')->storeAs('img/resources', $resource->id.".".$extension, "public");
      $resource->image = "storage/".$image_path;
      $filename = $request->file('file')->getClientOriginalName();
      $filename_path = $request->file('file')->storeAs('files/', $filename, "public");
      $resource->file = "storage/".$filename_path;
      $resource->save();
      $message = 'Nuevo recurso "'.$resource->title.'" creado.';

      return redirect()->route('admin.resources.index')->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('admin.resources_edit', ['resource'=>$resource]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
      $resource->title = $request->get('title');
      $resource->description = $request->get('description');
      $resource->button = $request->get('button');
      $resource->save(); /* pre save to get resource id */

      if (!empty($request->file('image'))) {
        $extension = $request->file('image')->getClientOriginalExtension();
        if(is_file($resource->image)){
          unlink($resource->image);
        };

        $image_path = $request->file('image')->storeAs('img/resources', $resource->id.".".$extension, "public");
        $resource->image = "storage/".$image_path;
      }
      if (!empty($request->file('file'))) {
        $filename = $request->file('file')->getClientOriginalName();
        if(is_file($resource->file)){
          unlink($resource->file);
        };
        $filename_path = $request->file('file')->storeAs('files/', $filename, "public");
        $resource->file = "storage/".$filename_path;
      }

      $resource->save();
      $message = 'Recurso "'.$resource->title.'" actualizado.';

      return redirect()->route('admin.resources.index')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
      $message = 'Recurso "'.$resource->title.'" borrado.';
      if(is_file($resource->image)){
        unlink($resource->image);
      };
      if(is_file($resource->file)){
        unlink($resource->file);
      };
      $resource->delete();

      return redirect()->route('admin.posts.index')->withMessage($message);
    }
}
