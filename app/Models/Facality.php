<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facality extends Model
{
    use HasFactory;

    protected $fillable = ['basic_salary','mobile','meal','incentive','transportation','ctc','remarks','employee_id'];
}
