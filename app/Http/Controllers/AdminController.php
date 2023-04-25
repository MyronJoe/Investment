<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Profile
    public function Profile(){
        return view('backend.profile');
    }
}
