<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{
    //direct route joining form page
    public function joiningFormListPage(){
        return view("admin.applyer.joiningForm");
    }
}
