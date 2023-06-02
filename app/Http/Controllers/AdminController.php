<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Profile
    public function Profile()
    {
        return view('backend.profile');
    }

    //Admin_users page
    public function Admin_users()
    {
        $admin_users = User::where('user_type', '=', '2ru')->get();

        return view('backend.admin_users', compact('admin_users'));
    }
}
