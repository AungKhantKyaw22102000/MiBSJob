<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    // direct user list page
    public function userListPage(){
        $users = User::get();
        return view('admin.user.list', compact('users'));
    }

    // direct user profile page
    public function userProfilePage(){
        return view('admin.profile.profile');
    }

}
