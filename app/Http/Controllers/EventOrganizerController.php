<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EventOrganizer;
use App\EventOrganizerMember;
use App\Event;
use Auth;


class EventOrganizerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:event_organizer',['only' => 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('event_organizer_id', null)->get();
        return view('eo.dashboard', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eo.auth.register');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
          'name'          => 'required',
          'email'         => 'required',
          'password'      => 'required',
          'phone'         => 'required'
        ]);
        // store in the database
        $event_organizers = new EventOrganizer;
        $event_organizers->eo_name = $request->name;
        $event_organizers->eo_email = $request->email;
        $event_organizers->password=bcrypt($request->password);
        $event_organizers->phone = $request->phone;
        $event_organizers->save();
        $request->session()->flush();
        return redirect()->route('eo.auth.login');
    }
}