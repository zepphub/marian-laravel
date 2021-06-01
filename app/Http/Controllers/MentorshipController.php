<?php

namespace App\Http\Controllers;

use App\Models\Mentorship;
use Illuminate\Http\Request;

class MentorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mentorships = Mentorship::all();

      return view('admin.mentorships_index', ['mentorships' => $mentorships]);
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
     * @param  \App\Models\Mentorship  $mentorship
     * @return \Illuminate\Http\Response
     */
    public function show(Mentorship $mentorship)
    {
      $mentorships = Mentorship::all();

      return view('admin.mentorships_index', ['mentorships' => $mentorships ,'current_mentorship' => $mentorship->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mentorship  $mentorship
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentorship $mentorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mentorship  $mentorship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentorship $mentorship)
    {
      $mentorship->service->price_ars = $request->get('price_ars');
      $mentorship->service->price_usd = $request->get('price_usd');

      $mentorship->service->save();


      for ($i = 0; $i < $mentorship->descriptions->count(); $i++){
        $description = $mentorship->descriptions[$i];
        if(isset($request['content-'.$description->id])){
          $description->content = $request['content-'.$description->id];
          //if(isset($request['description-'.$i.'-icon'])){
            //$description->icon_id = $request['content-'.$i];
          //}
        }
        if(isset($request['description-'.$description->id.'-icon-id'])){
          $description->icon_id = $request['description-'.$description->id.'-icon-id'];
        }
        $description->save();
      }

      $message = 'Mentoría"'.$mentorship->title.'" actualizada.';

      return redirect()->route('admin.mentorships.show', $mentorship)->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mentorship  $mentorship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentorship $mentorship)
    {
        //
    }

    public function showSingle ()
    {
      $mentorship = Mentorship::where('id','1')->first(); // Hardcoded

      return view('front.programa-intensivo', ['mentorship' => $mentorship]);
    }
    
    public function showGroup ()
    {
      $mentorship = Mentorship::where('id','2')->first(); // Hardcoded

      return view('front.mentoria-grupal', ['mentorship' => $mentorship]);
    }
}
