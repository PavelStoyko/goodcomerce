<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function showChangeUserName()
    {

        $user = Auth()->user();
        return view('parts.profile_user', ['user' => $user]);
    }

    public function changeUserName(Request $request)
    {
        $user = Auth()->user();

        if (strcmp($user->name, $request->get('userName')) == 0){
            return redirect()->back()->with("error","New Name cannot be the same as your current Name. Please choose another!");
        }

        //Change Name
        $user->name = $request->get('userName');
        $user->save();

        return redirect()->back()->with("success","Name changed successfully !");
    }


    public function changeUserPassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error2","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error2","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");

    }




}
