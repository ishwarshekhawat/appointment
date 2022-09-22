<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\DoctorAvailability;

class DoctorAvailabilityController extends Controller
{
    
    public function index()
        {
            return view('doctor-availability-form');
        }

    public function store(Request $request)
        {
            $input = $request->all();
            $validator = Validator::make($input, [
                    'doctor_id' => 'required',
                    'date' => 'required',
                    'start_time' => 'required|date_format:H:i',
                    'end_time' => 'required|date_format:H:i|after:start_time',
                    'duration' => 'required',
                ]);
            if ($validator->fails()) 
                {
                    $errors = $validator->errors();
                    return back()->withErrors($errors)->withInput($request->all());
                } 
            else 
                {
                    if(DoctorAvailability::where('doctor_id', $request->doctor_id)->where('date', $request->date)->count())
                        {
                            $request->session()->flash('alert-success', "Doctor availability already exists");
                        }
                    else
                        {
                            $doctorAvailability = DoctorAvailability::create($input);
                            $request->session()->flash('alert-success', "Doctor Availability add successfully");
                        }
                    return redirect('/doctor-availability-form');
                }
        }
}
