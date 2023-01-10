<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        product::create(request()->all());
        return redirect()->to('home');
    }
    public function show(){
        $product = DB::table('products')->get();
        return view('listaProduct', ['product' => $product]);
    }
    public function edit($id){
        $product = DB::table('products')->where('id', $id)->get();
        return view('editProduct', ['product' => $product]);
    }
    public function update($id){
        $product = product::find($id);
        $product->update(request()->all());
        return redirect()->to('listaP');
    }
    public function destroy($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->to('listaP');
    }
    public function showById($id){
        $product = DB::table('products')->where('id', $id)->get();
        return view('productStatus', ['product' => $product]);
    }
}
