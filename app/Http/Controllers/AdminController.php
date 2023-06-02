<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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

    //create_admin
    public function create_admin()
    {
        return view('backend.create_admin');
    }

    //Make_admin
    public function Make_admin(Request $request)
    {
        //validate user form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);

        //Checks if the user already exist b4 adding to the database
        $email =  User::where('email', $request->email)->exists();

        if ($email) {
            Alert::error('Email Already Exist');
            return redirect()->back();
        } else {

            $data  = new User();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone_number = $request->phone_number;
            $data->password = Hash::make($request->password);
            $data->image = 'default.png';
            $data->user_type = '2ru';

            $data->save();

            Alert::success('Admin created successfully');
            return redirect()->route('admin_users');
        }
    }


}
