<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventType;

class EventSearchController extends Controller
{
    public function index()
    {
        $type = EventType::all();
        $events = Event::where('event_organizer_id', null)->paginate(12);
        return view('eo.events', compact('events', 'type'));
    }

    public function search(Request $request)
    {
        $types = EventType::all();
        $events;
        if($request->type != 'all' && $request->location != 'all'){
            $events = Event::where('event_type_id', $request->type)->where('location', $request->location)->where('event_organizer_id', null)->get();
        }else if($request->type != 'all' && $request->location == 'all'){
            $events = Event::where('event_type_id', $request->type)->where('event_organizer_id', null)->get();
        }else if($request->type == 'all' && $request->location != 'all'){
            $events = Event::where('location', $request->location)->where('event_organizer_id', null)->get();
        }else{
            $events = Event::where('event_organizer_id', null)->get();
        }
        return view('eo.search', compact('events', 'types'));
    }
}
