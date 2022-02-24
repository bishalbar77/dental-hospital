<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function bookAppointment(Request $request)
    {
        return view('book-appointment');
    }
}
