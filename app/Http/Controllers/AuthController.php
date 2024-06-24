<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Direct login page
    public function loginPage()
    {
        return view('auth.login');
    }

    // Direct register page
    public function registerPage()
    {
        return view('auth.register');
    }

    // Direct admin dashboard page
    public function adminDashboard()
    {
        switch (Auth::user()->role) {
            case 'it':
                return redirect()->route('admin#userListPage');
            case 'hr':
                return redirect()->route('admin#idCardListPage');
            case 'admin':
                return redirect()->route('admin#gatePassListPage');
            case 'tl':
                return redirect()->route('admin#jobSeekerListPage');
            default:
                return redirect('/');
        }
    }
}
