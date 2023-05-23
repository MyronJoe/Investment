<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //register route
    public function Register()
    {

        return view('frontend.register');
    }


    //add user to DB
    public function AddUser(Request $request)
    {
        //validate user form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);

        //Checks if the user already exist b4 adding to the database
        $email =  User::where('email', $request->email)->exists();

        if ($email) {
            // Alert::error('Email Already Exist');
            return redirect()->back();
        } else {

            $data  = new User();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->image = 'default.png';

            // auth()->login($data);

            $data->save();

            // Alert::success('Admin Created Successfully');
            return redirect()->back();
        }
    }


    //Edit user to DB
    public function Edit_user($id)
    {
        $user = User::findOrFail($id);

        return view('frontend.update_user', compact('user'));
    }

    //Update_User
    public function Update_User($id, Request $request)
    {
        //validate update form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);

        $data = User::findOrFail($id);

        //checks if the email already exist && != any other email in the database b4 adding to database
        $email = User::where('email', $request->email)->exists();

        if ($email && $data->email !== $request->email) {
            return redirect()->back();
        } else {
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            $data->save();
        }
        
    }
}
