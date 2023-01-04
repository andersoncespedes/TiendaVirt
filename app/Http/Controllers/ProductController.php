<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return product::create(request()->all());
    }
    public function show(){
        $product = DB::table('products')->get();
        return view('listaProduct', ['product' => $product]);
    }
}
