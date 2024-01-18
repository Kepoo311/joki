<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home.home',[
            'title' => 'Joki Arceus :)',
            'category' => Product::all(),
            'product' => Product::filter(request(['product']))->get(),
        ]);
    }

    public function show(Product $product){
        return view('home.home',[
            'title' => $product->name,
            'category' => Product::all(),
            'product' => $product
        ]);
    }
}
