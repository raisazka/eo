<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;

class EventStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:event_organizer');
    }

    public function showEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('eo.show-event', compact('event'));
    }

    public function receiveEvent($id)
    {
        $event = Event::findOrFail($id);

        $event->event_organizer_id = Auth::user()->id;
        $event->status = 'Received by '.Auth::user()->eo_name;
        $event->save();

        return redirect()->route('eo.dashboard')->with('success', 'Success Receive Event, Please Check Profile');
    }

    public function confirmCancelEvent($id)
    {
        $events = Event::findOrFail($id);

        $events->delete();

        return back()->with('success', 'Success Cancel Event');
    }

    public function updateEventStatus(Request $request)
    {
        $events = Event::findOrFail($request->event_id);

        $events->status = $request->status;
        $events->save();

        return back();
    }

}
