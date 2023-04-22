<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //register route
    public function Register(){

        return view('frontend.register');
    }
}
