<?php

namespace App\Http\Controllers;

use DB;
use File;
use Auth;
use Session;
use App\User;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function bookAppointment(Request $request)
    {
        return view('book-appointment');
    }

    public function addAppointment(Request $request)
    {
        DB::beginTransaction();
        $validator = Validator::make($request->all(), [
            'date' => 'required|string',
            'time' => 'required|string',
            'name' => 'required|string',
            'age' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|unique:users',
            'gender' => 'required|string',
            'family_members_count' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'category' => 'required|string',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            Session::flash('error_message', 'Invalid Parameters!'); 
            return back()->withErrors($errors)->withInput();
        }
        $user = User::where('email', $request->email)->first();
        if(!$user) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $appointment = new Appointment();
            $appointment->user_id = $user->id;
            $appointment->date = $request->date;
            $appointment->time = $request->time;
            $appointment->name = $request->name;
            $appointment->age = $request->age;
            $appointment->phone = $request->phone;
            $appointment->email = $request->email;
            $appointment->gender = $request->gender;
            $appointment->family_members_count = $request->family_members_count;
            $appointment->address = $request->address;
            $appointment->category = $request->category;
            $appointment->save();
            
        } else {
            $appointment = new Appointment();
            $appointment->user_id = $user->id;
            $appointment->date = $request->date;
            $appointment->time = $request->time;
            $appointment->name = $request->name;
            $appointment->age = $request->age;
            $appointment->phone = $request->phone;
            $appointment->email = $request->email;
            $appointment->gender = $request->gender;
            $appointment->family_members_count = $request->family_members_count;
            $appointment->address = $request->address;
            $appointment->save();
        }
        DB::commit();
        Session::flash('message', 'Appointment have been booked successfully!'); 
        return view('book-appointment')->with('message', 'Appointment have been booked successfully.');
    }
}
