<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Functioncontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function storeUser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
        ]);

        $Data = new User();
        $Data->name=$request->name;
        $Data->email=$request->email;
        $Data->password=Hash::make($request->password);
        $Data->save();
        return redirect('login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
            'captcha' => 'required|captcha'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {

        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
