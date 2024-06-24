<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatepassController extends Controller
{
    // direct route gate pass list page
    public function gatePassListPage(){
        return view('admin.gatepass.list');
    }

    // direct route gate pass create page
    public function gatePassCreatePage(){
        return view('admin.gatepass.create');
    }
}
