<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = ['prescription_no','doctor_name','patient_name','patient_age','patient_weight','patient_gender','patient_email','diseases_name','description','medicine','appointment_date'];
}
