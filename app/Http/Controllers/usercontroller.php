<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usercontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //user view profile
    public function viewprofile()
    {
        $user = auth()->user();
        return view('user.viewprofile',compact('user'));
    }
    //user edit profile page
    public function editprofile()
    {
        $user = auth()->user();
        return view('user.editprofile',compact('user'));
    }
    //user update profile
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
            'country'=>'required'
        ]);
        $user = auth()->user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phonenumber=$request->phonenumber;
        $user->Country=$request->country;
        $user->save();

        return redirect('/user/viewprofile.blade.php');
    }

}
