<?php

namespace App\Http\Controllers;

use App\Models\Logging;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('userManage.register',[
            'title' => 'Register User'
        ]);
    }

    public function storeData(Request $req):RedirectResponse {
        $validated = $req->validate([
           "fullname" => ['required', 'min:2', 'max:255'],
           "username" => ['required', 'unique:users' , 'min:2', 'max:255'],
           "role" => ['required'],
           "email" => ['required', 'unique:users' , 'email:dns'],
           "noTelpon" => ['required', 'numeric', 'min:12', 'unique:users'],
           "password" => ['required', 'confirmed', 'min:5', 'max:255'],
        ]); 

        User::create($validated);

        Logging::create([
            "userid" => 99999999999999999,
            "username" => $req->username,
            "role" => null,
            "activity" => "User baru melakukan register",
        ]);
        return redirect('/login')->with('succesMSG','Register berhasil, Silahkan login!!');
    }
}
