<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile(Request $request)
    {
        $request->session()->forget('event');
        $count =  Event::where('user_id', Auth::user()->id)->count();
        $events = Event::where('user_id', Auth::user()->id)->get();
        return view('profile', compact('events', 'count'));
    }

    public function cancelEvent($id)
    {
        $events = Event::findOrFail($id);

        $events->delete();

        return back()->with('success', 'Success Cancel Event');
    }
}
