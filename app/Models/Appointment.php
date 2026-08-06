<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [

        'full_name',
        'email',

        'phone',

        'department',

        'appointment_date',

        'appointment_time',

        'consultation_type',

        'additional_information',

        'status'

    ];
}