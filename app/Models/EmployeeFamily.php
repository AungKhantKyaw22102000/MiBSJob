<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFamily extends Model
{
    use HasFactory;

    protected $fillable = ['father_name','mother_name','spouser_name','father_age','mother_age','spouse_age','father_occupation','mother_occupation','spouse_occupation','father_depen','mother_depen','spouse_depen','employee_id'];
}
