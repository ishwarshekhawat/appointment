<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Appointment extends Authenticatable
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'doctor_id',
        'appointment_time',
        'patient_name',
        'email',
        'phone',
    ];
}
