<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);
        return view('admin.events_index', ['events'=>$events]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex()
    {
        $events = Event::whereDate('date', '>=', Carbon::today()->format('Y-m-d'))->get();
        //$events = Event::all();

        return view('front.events_index', ['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $event = new Event();
      $event->title = $request->get('title');
      $event->slug = Str::slug($event->title);
      $event->description = $request->get('description');
      $event->date = $request->get('date');
      $event->time = $request->get('time');
      $event->lecturer = $request->get('lecturer');
      $event->host = $request->get('host');
      $event->inscription = ($request->get('inscription') == 'on');
      $event->url = $request->get('url');
      $event->about = $request->get('about');
      $event->save(); /* pre save to get event id */
      $extension = $request->file('image')->getClientOriginalExtension();
      $image_path = $request->file('image')->storeAs('img/events', $event->id.".".$extension, "public");
      $event->image = "storage/".$image_path;
      $event->save();
      $message = 'Nuevo evento "'.$event->title.'" creado.';

      return redirect()->route('admin.events.index')->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function frontShow($slug)
    {
        $event = Event::where('slug',$slug)->first();

        return view('front.events_show', ['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events_edit', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
      $event->title = $request->get('title');
      $event->slug = Str::slug($event->title);
      $event->description = $request->get('description');
      $event->date = $request->get('date');
      $event->time = $request->get('time');
      $event->lecturer = $request->get('lecturer');
      $event->host = $request->get('host');
      $event->inscription = ($request->get('inscription') == 'on');
      $event->url = $request->get('url');
      $event->about = $request->get('about');

      if (!empty($request->file('image'))) {
        $extension = $request->file('image')->getClientOriginalExtension();
        $image_path = $request->file('image')->storeAs('img/events', $event->id.".".$extension, "public");
        $event->image = "storage/".$image_path;
      }

      $event->save();
      $message = 'Nuevo evento "'.$event->title.'" actualizado.';

      return redirect()->route('admin.events.index')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
      $message = 'Evento "'.$event->title.'" borrado.';
      $event->delete();

      return redirect()->route('admin.events.index')->withMessage($message);
    }
}
