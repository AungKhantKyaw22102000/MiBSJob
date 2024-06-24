<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IDcard extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','name','department','address','employee_photo'];
}
