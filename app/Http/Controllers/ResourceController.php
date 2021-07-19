<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\ResourceSubscription;
use Illuminate\Http\Request;
use App\Mail\ResourceMail;
use Illuminate\Support\Facades\Mail;

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
    public function frontIndex(Request $request)
    {
        $resources = Resource::all();
        $registered = $request->session()->get('registered', false );

        return view('front.recursos', ['resources'=>$resources, 'registered'=>$registered]);
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

      return redirect()->route('admin.resources.index')->withMessage($message);
    }

    public function download(Request $request){
      $resource = Resource::where('id', $request->resource)->first();
      $registered = $request->session()->get('registered', false);
      if (!$registered) {
        if(empty(ResourceSubscription::where('email', $request->email))){
          $resource_subscription  = new ResourceSubscription();
          $resource_subscription->firstname = $request->firstname;
          $resource_subscription->lastname = $request->lastname;
          $resource_subscription->email = $request->email;
          $resource_subscription->save();
        };
        $email = $request->session()->put('email', $request->email);
        $registered = $request->session()->put('registered', true);
      }

      $resource->downloads = $resource->downloads + 1;
      $resource->save();
      $email = $request->session()->get('email', false);
      if ($email){
        Mail::to([$email])->send(new ResourceMail($resource->file));
      }
      $message = 'Te enviamos un mail con tu recurso.';

      //return response()->download($resource->file);
      return response()->json(['success'=>$message]);
    }

    public function csv()
    {
      $form_queries = ResourceSubscription::all('firstname','lastname','email','created_at');

      $headers = array(
              "Content-type" => "text/csv",
              "Pragma" => "no-cache",
              "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
              "Expires" => "0"
          );

      $columns = array('Nombre', 'Apellido', 'E-mail', 'Fecha');

      $callback = function() use ($form_queries, $columns)
      {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($form_queries as $form_query) {
            fputcsv($file, $form_query->toArray());
        }
        fclose($file);
      };

      return response()->streamDownload($callback, 'suscripciones-recursos-' . date('d-m-Y-H:i:s').'.csv', $headers);
    }
}
