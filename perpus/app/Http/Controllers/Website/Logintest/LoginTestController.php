<?php

namespace App\Http\Controllers\Website\Logintest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class LoginTestController extends Controller
{
    //
	public function index(){
        return view('website.logintest.index');
    }
	public function store(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
        $remember = $request->remember;

        if(auth()->guard('admin')->attempt($credentials,$remember)){
            return redirect()->route('logintest.landing');
        }

        return redirect()->back()->withInput($request->only('username','remember'));
    }
	public function landing(){
        return view('website.logintest.landing');
    }
}
