<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    // direct route interview appointment page
    public function interviewAppointListPage(){
        return view('admin.applyer.appointInterview');
    }

    // direct route selected applicants page
    public function selectedApplicantListPage(){
        return view('admin.applyer.selectionApplicant');
    }
}
