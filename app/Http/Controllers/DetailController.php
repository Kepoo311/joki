<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(Request $request, Product $product){
        $jasa = $product->jasa;
        return view('detail.index',[
            'title' => $product->name,
            'product' => $product,
            'jasas' => $jasa
        ]);
    }
}
