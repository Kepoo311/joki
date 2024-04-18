<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\chat;
use App\Models\LastMsg;
use App\Models\Order;
use App\Models\orderDone;
use App\Models\Product;
use App\Models\RiviewAuth;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $notif = 0;
        if(auth()->user()){
        $notif = RiviewAuth::where('user_id', '=', auth()->user()->id)->count();
        }

        return view('home.home',[
            'title' => 'Joki Arceus :)',
            'category' => Product::with('game')->get(),
            'product' => Product::all()->find(1),
            'AllProduct' => Product::all(),
            'notifCount' => $notif,
            'chat'  => chat::all()
        ]);
    }
    

    public function kirimpesan(Request $request){
        $validasi = $request->validate([
            "message" => ['required']
        ]);

        $validasi['from_user_id']=auth()->user()->id;
        $validasi['to_user_id']=999;

        chat::create($validasi);

        LastMsg::updateOrCreate([
            'user_id' => auth()->user()->id,
        ],
        [
            'message' => $request->message
        ]
    );
        
        return redirect('/');
    }

    public function riwayat(){
        return view('home.riwayat',[
            "title" => "Riwayat Pembelian",
            "riwayat" => Order::latest()->paginate(10)
        ]);
    }

    public function show(Product $product){
        $notif = 0;
        if(auth()->user()){
        $notif = RiviewAuth::where('user_id', '=', auth()->user()->id)->count();
        }

        return view('home.home',[
            'title' => $product->name,
            'category' => Product::all(),
            'product' => $product,
            'notifCount' => $notif,
            'chat'  => chat::all()
        ]);
    }
}
