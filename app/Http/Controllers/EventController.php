<?php

namespace App\Http\Controllers;

use App\Event;
use App\Venue;
use Auth;
use App\EventType;
use Calendar;
use Illuminate\Http\Request;

class EventController extends Controller
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
    public function createForm1(Request $request)
    {
        $event = $request->session()->get('event');
        $event_type = EventType::all();
        return view('create-event', compact('event', $event, 'event_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeForm1(Request $request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required',
            'target' => 'required',
            'event_type_id' => 'required',
            'budget' => 'required',
            'location' => 'required',
            'description' => 'required'
        ]);

        if(empty($request->session()->get('event'))){
            $event = new Event;
            $event->fill($validatedData);
            $event->user_id = Auth::user()->id;
            $request->session()->put('event', $event);
        }else{
            $event = $request->session()->get('event');
            $event->fill($validatedData);
            $event->user_id = Auth::user()->id;
            $request->session()->put('event', $event);
        }
        return redirect()->route('event.create.2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */

    public function createForm2(Request $request)
    {
        $event = $request->session()->get('event');
        $venues = Venue::where('address', 'LIKE' ,'%'.$event->location.'%')->where('price', '<=', $event->budget)->get();
        return view('create-event-2', compact('event', $event, 'venues'));
    }

    public function showVenue(Request $request, $id)
    {   
        $venues = Venue::findOrFail($id);
        $events = Event::where('venue_id', $id)->get();
        $event = $request->session()->get('event');
        return view('create-event-venue', compact('venues', 'event', $event, 'calendar_details', 'events'));
    }

    public function show360Venue()
    {
        return view('venue-360');
    }

    public function storeFormVenue(Request $request, $id)
    {
        $validatedData = $request->validate([
            'dateStart' => 'required',
            'dateEnd' => 'required|after:dateStart',
        ]);
        
        $event = $request->session()->get('event');
        $event->fill($validatedData);
        $event->venue_id = Venue::findOrFail($id);
        $request->session()->put('event', $event);

        return redirect()->route('event.summary');
    }


    public function createFormSummary(Request $request)
    {
        $event = $request->session()->get('event');
        return view('event-summary', compact('event', $event));
    }

    public function storeFormSummary(Request $request)
    {
        $event = $request->session()->get('event');
        $event->venue_id = $event->venue_id->id;
        $event->save();
        return redirect('/profile');
    }
}
