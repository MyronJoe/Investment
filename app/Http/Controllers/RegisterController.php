<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'phone_number' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
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
            $data->phone_number = $request->phone_number;
            $data->country = $request->country;
            $data->state = $request->state;
            $data->city = $request->city;
            $data->address = $request->address;
            $data->password = Hash::make($request->password);
            $data->image = 'default.png';

            $data->save();

            // Alert::success('Admin Created Successfully');
            Auth::login($data, $remember = true);
            return redirect()->route('home');
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
            'phone_number' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
        ]);

        $datas = User::findOrFail($id);

        //checks if the email already exist && != any other email in the database b4 adding to database
        $email = User::where('email', $request->email)->exists();

        if ($email && $datas->email !== $request->email) {
            return redirect()->back();
        } else {
            $datas->name = $request->name;
            $datas->email = $request->email;
            $datas->phone_number = $request->phone_number;
            $datas->country = $request->country;
            $datas->state = $request->state;
            $datas->city = $request->city;
            $datas->address = $request->address;

            if ($request->image) {
                $imageName = time() . '_' . $request->image->getClientOriginalName();
                $request->image->move('assets/images/profile', $imageName);
                $datas->image = $imageName;
            }

            $datas->save();

            return redirect()->route('user_dashboard');
        }
    }

    //Update user password to DB
    public function change_password($id)
    {
        $user = User::findOrFail($id);

        return view('frontend.update_password', compact('user'));
    }


    //Update_Password
    public function update_pass($id, Request $request)
    {
        //validate update form
        $request->validate([
            'old_password' => 'required|string|min:8',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);

        $datas = User::findOrFail($id);

        $datas->password = Hash::make($request->password);

        $datas->save();

        return redirect()->route('login');
    }
}
