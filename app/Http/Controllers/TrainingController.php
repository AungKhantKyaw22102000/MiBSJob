<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    // direct route training page
    public function trainingCardListPage(){
        return view('admin.training.list');
    }
}
