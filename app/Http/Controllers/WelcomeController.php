<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->forget('event');
        return view('welcome');
    }

    public function landingPage()
    {
        return view('landing-page');
    }
}
