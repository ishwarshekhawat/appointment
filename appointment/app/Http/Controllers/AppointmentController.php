<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Appointment;
use App\Models\DoctorAvailability;

class AppointmentController extends Controller
{
    
    public function index()
        {
            $doctorlist = DoctorAvailability::where('date', '>=', date('Y-m-d'))->get();
            return view('welcome', compact('doctorlist'));
        }
    
    public function available_slots(Request $request)
        {
            $already_booked=[];
            $getAppointment = Appointment::where('doctor_id', $request->doctor_id)->get();
            foreach ($getAppointment as $key => $value) {
                $already_booked[]=$value->appointment_time;
            }
            $total_minutes = round(abs(strtotime($request->start_time) - strtotime($request->end_time)) / 60, 2);
            $availability_time = array();
            $availability_time[0] = date("g:i A", strtotime(date("H:i", strtotime('0 minutes', strtotime($request->start_time)))));
            for ($i = 1; $i < $total_minutes / $request->duration; $i++) {
                $x = $i - 1;
                $availability_time[] = date("g:i A", strtotime(date("H:i", strtotime('+'.$request->duration.' minutes', strtotime($availability_time[$x])))));
            }
            $ajexdata = view('ajexdata', compact('availability_time', 'already_booked'));
            return $ajexdata->render();
        }

    public function store(Request $request)
        {
            $input = $request->all();
            $validator = Validator::make($input, [
                    'doctor_id' => 'required',
                    'appointment_time' => 'required',
                    'patient_name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                ]);
            if ($validator->fails()) 
                {
                    $errors = $validator->errors();
                    return back()->withErrors($errors)->withInput($request->all());
                } 
            else 
                {
                    $appointment = Appointment::create($input);
                    $request->session()->flash('alert-success', "Appointment add successfully");
                    return redirect('/');
                }
        }
}
