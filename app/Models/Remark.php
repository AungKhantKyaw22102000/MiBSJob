<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

    protected $fillable = ['hr_remark','tl_remark','hr_decision','tl_decision','hr_id','tl_id','applyer_id'];
}
