<?php

namespace App\Http\Controllers;

use App\Models\CounselingDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CounselingDescriptionController extends Controller
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
     * @param  \App\Models\CounselingDescription  $counselingDescription
     * @return \Illuminate\Http\Response
     */
    public function show(CounselingDescription $counselingDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CounselingDescription  $counselingDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(CounselingDescription $counselingDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CounselingDescription  $counselingDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CounselingDescription $counselingDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CounselingDescription  $counselingDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy($counselingDescription)
    {
      CounselingDescription::destroy($counselingDescription);

      return redirect()->route('admin.counselings.index');
    }
}
