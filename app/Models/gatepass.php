<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gatepass extends Model
{
    use HasFactory;

    protected $fillable = ['pass_id','process','valid','employee_id'];
}
