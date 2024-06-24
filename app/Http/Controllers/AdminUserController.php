<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    // direct user list page
    public function userListPage(){
        return view('admin.user.list');
    }

    // direct user profile page
    public function userProfilePage(){
        return view('admin.profile.profile');
    }

}
