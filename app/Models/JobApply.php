<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;

    protected $fillable = ['name','phone','desired_position','nrc','education_purpose','shift','cv','education_lv','work_experience','english_skill','computer_skill','burmese_speed','english_speed','current_salary','current_salary_upload','expected_salary','nearest_bus_station','noticed_time','confirm','hr_id','tl_id'];
}
