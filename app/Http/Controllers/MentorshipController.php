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
      //$mentorships = Mentorship::all();
      //return view('admin.mentorships_index', ['mentorships'=>$mentorships]);
      return view('admin.mentorships_index');
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
        //
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
        //
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
}
