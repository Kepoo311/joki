<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('userManage.login');
    }

    public function authData(Request $req):RedirectResponse{
        $credentials = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'errorLogin' => "username/password salah!!"
        ]);
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
     
        $req->session()->regenerateToken();
     
        return redirect('/');
    }
}
