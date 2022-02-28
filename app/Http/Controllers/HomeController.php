<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointment;
use Illuminate\Http\Request;

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
        $user = User::all()->count();
        $application = Appointment::all()->count();
        $applicationActive = Appointment::where('status',0)->count();
        $applicationCancelled = Appointment::where('status',-1)->count();
        return view('home')->with([
            'application' => $application,
            'user' => $user,
            'applicationActive' => $applicationActive,
            'applicationCancelled' => $applicationCancelled,
        ]);
    }
}
