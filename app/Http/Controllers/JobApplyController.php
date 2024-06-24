<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobApplyController extends Controller
{
    // direct route job seeker page
    public function jobSeekerListPage(){
        return view('admin.applyer.jobSeeker');
    }
}
