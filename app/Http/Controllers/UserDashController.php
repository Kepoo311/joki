<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Riview;
use App\Models\RiviewAuth;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class UserDashController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        $ortal = Order::where('customer_id', $id)->where('status', 'Done');

        return view('user.account', [
            'title' => "User Dashboard",
            'user' => $user,
            'ortal' => $ortal->count(),
            'riviews' => RiviewAuth::where('user_id', '=', $id)->get()
        ]);
    }

    public function update_account(Request $request)
    {
        $user = User::find($request->id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $rules = [
            'fullname' => ['required'],
            'profil' => ['image','mimes:jpg,jpeg,png,gif,svg,webp,avif','max:1048'] 
        ];

        // Check if the username has changed or is being used by someone else
        if ($request->username !== $user->username || User::where('username', $request->username)->where('id', '!=', $user->id)->exists()) {
            $rules['username'] = ['required', 'unique:users'];
        } else {
            $rules['username'] = ['required'];
        }

        // Check if the email has changed or is being used by someone else
        if ($request->email !== $user->email || User::where('email', $request->email)->where('id', '!=', $user->id)->exists()) {
            $rules['email'] = ['required', 'email', 'unique:users', 'email:dns'];
        } else {
            $rules['email'] = ['required', 'email', 'email:dns'];
        }

        // Check if the noTelpon has changed or is being used by someone else
        if ($request->noTelpon !== $user->noTelpon || User::where('noTelpon', $request->noTelpon)->where('id', '!=', $user->id)->exists()) {
            $rules['noTelpon'] = ['required', 'unique:users'];
        } else {
            $rules['noTelpon'] = ['required'];
        }

        $request->validate($rules);

        if($request->profil == null) {
            $user->fullname = $request->fullname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->noTelpon = $request->noTelpon;
            $user->save();
            return redirect('/user/dash')->with('success', 'Account has been changed');
        }


       
        $lastPP = $user->profil;
        $profil = $request->file('profil');
        $profil_name = time().'_'.$profil->getClientOriginalName();
        $Oripath = public_path('img/oriPP/');
        $ComPath = public_path('img/ComPP/');

        if($lastPP != 'potoPP.png'){
            unlink($ComPath.$lastPP);
        } 
 
        $profil->move($Oripath,$profil_name);

        $optimize = OptimizerChainFactory::create();
        $optimize->optimize($Oripath.$profil_name, $ComPath.$profil_name);

        unlink($Oripath.$profil_name);

        
        $user->profil = $profil_name;
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->noTelpon = $request->noTelpon;
        $user->save();

        return redirect('/user/dash')->with('success', 'Account has been changed');
    }


    public function riview(Request $request)
    {
        $Riview = RiviewAuth::where("token", "=", $request->token)->get();
        if ($Riview->isEmpty()) {
            return redirect('/');
        } else {
            return view('user.riview', [
                "title" => "Riview our product",
                'user' => auth()->user(),
                'riviews' => $Riview,
                'token' => $request->token
            ]);
        }


    }

    public function kirimRiview(Request $request)
    {
        $cekToken = RiviewAuth::where("token", "=", $request->token)->get();

        if ($cekToken->isEmpty()) {
            return redirect('/');
        } else {
            $validasi = $request->validate([
                'product_id' => ['required'],
                'rank' => ['required'],
                'bintang' => ['required'],
                'comment' => ['required'],
            ]);

            $validasi['user_id'] = auth()->user()->id;
            $validasi['noTelp'] = auth()->user()->noTelpon;

            RiviewAuth::where("token", "=", $request->token)->delete();
            Riview::create($validasi);
            return redirect('/user/dash')->with('succesRiview', 'Thanks for the riview!!');
        }


    }
}
