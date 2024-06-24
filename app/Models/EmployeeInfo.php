<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','current_address','employee_photo','ssb','nrc','date_of_birth','religion','employee_process','nationality','emergency_contact','email','place_of_birth','gender','marital_status','blood_group','no_of_children','hr_policies','job_rotation','applyer_id'];
}
