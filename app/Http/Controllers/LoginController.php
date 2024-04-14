<?php

namespace App\Http\Controllers;

use App\Models\Logging;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('userManage.login',[
            "title" => "Login",
        ]);
    }

    public function authData(Request $req):RedirectResponse{
        $remember = $req->remember;
        $credentials = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials,$remember)){
            $req->session()->regenerate();
            $id = Auth::user()->id;
            $user = User::find($id);

            if(!$user->hasAnyRole(["user","worker","admin"])){
                $user->syncRoles(['user']);
            }

            Logging::create([
                "userid" => $id,
                "username" => auth()->user()->username,
                "role" => auth()->user()->getRoleNames(),
                "activity" => "Melakukan Login",
            ]);
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'errorLogin' => "username/password salah!!"
        ]);
    }

    public function logout(Request $req){
        Logging::create([
            "userid" => auth()->user()->id,
            "username" => auth()->user()->username,
            "role" => auth()->user()->getRoleNames(),
            "activity" => "Melakukan Logout",
        ]);
        
        Auth::logout();
        $req->session()->invalidate();
     
        $req->session()->regenerateToken();
     
        return redirect('/');
    }
}
