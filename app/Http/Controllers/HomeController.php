<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Tracker\Vendor\Laravel\Facade as Tracker;

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
        $visitor = Tracker::currentSession();

        //$users = Tracker::onlineUsers();
        $users = "";
        return view('home', ['users' => $visitor]);
    }
    public function image(){
        return view('image');
    }

    public function video(){
        return view('video');

    }
    public function login_image(){
        return view('login_image');

    }

    public function login_video(){
        return view('login_video');

    }
}
