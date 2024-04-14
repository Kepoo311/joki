<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\chat;
use App\Models\LastMsg;
use App\Models\Order;
use App\Models\orderDone;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home.home',[
            'title' => 'Joki Arceus :)',
            'category' => Product::with('game')->get(),
            'product' => Product::all()->find(1),
            'AllProduct' => Product::all(),
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
            "riwayat" => Order::latest()->paginate(10),
            "riwayatDone" => orderDone::latest()->paginate(10)
        ]);
    }

    public function show(Product $product){
        return view('home.home',[
            'title' => $product->name,
            'category' => Product::all(),
            'product' => $product,
            'chat'  => chat::all()
        ]);
    }
}
