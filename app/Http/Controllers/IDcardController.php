<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IDcardController extends Controller
{
    // direct route id card list page
    public function idCardListPage(){
        return view('admin.idCard.list');
    }

    // direct route id card create page
    public function idCardCreatePage(){
        return view('admin.idCard.create');
    }
}
