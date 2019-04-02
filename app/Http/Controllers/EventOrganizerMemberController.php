<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventOrganizerMember;
use Auth;
use App\EventOrganizer;
use App\Event;

class EventOrganizerMemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:event_organizer');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }else{
            $fileNameToStore = "no-image.jpg";
        }

        $members = new EventOrganizerMember;

        $members->event_organizer_id = Auth::user()->id;
        $members->member_name = $request->name;
        $members->image = $fileNameToStore;
        $members->save();

        return back();
    }

    public function profile()
    {
        $count = Event::where('event_organizer_id', Auth::user()->id)->count();
        $events = Event::where('event_organizer_id', Auth::user()->id)->get();
        $members = EventOrganizer::findOrFail(Auth::user()->id)->members;
        return view('eo.profile', compact('members', 'count', 'events'));
    }
}
