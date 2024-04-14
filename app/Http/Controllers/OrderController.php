<?php

namespace App\Http\Controllers;

use App\Models\Logging;
use App\Models\Order;
use App\Models\RiviewAuth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request){
        $validate = $request->validate([
            'nickname' => ['required'],
            'product_id' => ['required'],
            'logVia' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'reqHero' => ['required'],
            'pesan' => ['required'],
            'paket-joki' => ['required'],
            'payment' => ['required'],
            'noTelpon' => ['required'],
        ]);

        $ledak = explode(',', $validate["paket-joki"]);
        $validate["harga"] = $ledak[0];
        $validate["rank"]= $ledak[1];

        if(auth()->user()){
            $validate['customer_id'] =  auth()->user()->id;
        }
        
        Order::create($validate);
        return redirect('/')->with('orderGG','GELOOOOO');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    }
}
