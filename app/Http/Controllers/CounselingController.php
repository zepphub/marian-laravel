<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use App\Models\CounselingDescription;
use Illuminate\Http\Request;
use App\Http\Requests\CounselingUpdateRequest;

class CounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $counselings = Counseling::all();
      return view('admin.counselings_index', ['counselings'=>$counselings]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex()
    {
      $counselings = Counseling::all();
      return view('front.consultorias', ['counselings'=>$counselings]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function show(Counseling $counseling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function edit(Counseling $counseling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function update(CounselingUpdateRequest $request, Counseling $counseling)
    {
      $counseling->description = $request->get('description');
      $counseling->price_ars = $request->get('price_ars');
      $counseling->price_usd = $request->get('price_usd');
      $counseling->video = $request->get('video');

      $counseling->save();

      for ($i = 0; $i < $counseling->descriptions->count(); $i++){
        $description = $counseling->descriptions[$i];
        if(isset($request['content-'.$description->id])){
          $description->content = $request['content-'.$description->id];
          $description->save();
        }
      }
      for ($i = 1; $i <= $request['new-descriptions']; $i++){
        if(isset($request['content-new-'.$i])){
          $description = new CounselingDescription();
          $description->counseling_id = $counseling->id;
          $description->content = $request['content-new-'.$i];
          $description->save();
        }
      }

      if($request->file('image')){
        $extension = $request->file('image')->getClientOriginalExtension();
        $image_path = $request->file('image')->storeAs('img/counselings', $counseling->id.".".$extension, "public");
        $counseling->image = "storage/".$image_path;
        $counseling->save();
      }

      $message = 'Artículo "'.$counseling->title.'" actualizado';

      return redirect()->route('admin.counselings.index')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counseling  $counseling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counseling $counseling)
    {
        //
    }
}
