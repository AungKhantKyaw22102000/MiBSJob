<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // direct route index page
    public function index(){
        return view('user.main.home');
    }

    // direct route contact page
    public function contactPage(){
        return view('user.contact.contact');
    }

    // direct route joining page
    public function joiningPage(){
        return view('user.joining.joiningForm');
    }
}
