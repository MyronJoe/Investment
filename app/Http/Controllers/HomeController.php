<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    //Home redirect

    public function Home()
    {
        $userType = Auth::user()->user_type;

        if ($userType === '2ru') {

            return view('backend.home');
        } else {

            return view('frontend.home');
        }
    }


    //user dashboard
    public function UserDashboard()
    {

        return view('frontend.dashboard');
    }

    //About
    public function About(){

        return view('frontend.about');
    }


}
