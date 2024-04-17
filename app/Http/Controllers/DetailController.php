<?php

namespace App\Http\Controllers;

use App\Models\JokiRule;
use App\Models\payment;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(Request $request, Product $product){
        $reqHero = false;
        if($product->name == "Joki Rank S-13" || $product->name == "Joki Competitive"){
            $reqHero = true;
        }

        $jasa = $product->jasa;
        $riviews = $product->riview;
        $rules = $product->rules;
        $logvia = $product->loginVia;
        return view('detail.index',[
            'title' => $product->name,
            'product' => $product,
            'jasas' => $jasa,
            'rules' => $rules,
            'logins' => $logvia, 
            'payments' => payment::all(),
            'reqHero' => $reqHero,
            'riviews' => $riviews
        ]);
    }
}
