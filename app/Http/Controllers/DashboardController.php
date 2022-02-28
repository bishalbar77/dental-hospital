<?php

namespace App\Http\Controllers;

use DB;
use File;
use Auth;
use Session;
use App\User;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

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

    public function allAppointment()
    {
        $application = Appointment::all();
        return view('pages.all-applications')->with([
            'application' => $application,
        ]);
    }

    public function myAppointment()
    {
        $application = Appointment::where('user_id',Auth::id())->get();
        return view('pages.my-applications')->with([
            'application' => $application,
        ]);
    }

    public function updateAppointment($id)
    {
        $application = Appointment::where('id',$id)->first();
        $application->status = $application->status == 0 ? 1 : 0;
        $application->save();
        return redirect()->back();
    }
}
