<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Factura;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function validator(Request $param){
        return $param->validate([
            'name_pro' => 'required|max:20',
            'code_pro' => 'required|max:11|unique:products,code_pro',
            'quanty' => 'required|min:5|max:30',
            'type_pro' => 'required',
            'marca' => 'required'
        ]);
    }
    public function create(){
        $validation = $this->validator(request());
        if($validation){
           $this->errors = $validation; 
        }
            $path = request()->file('imagen')->store('');  
            $product = new product;
            $product->name_pro = request()->name_pro;
            $product->code_pro = request()->code_pro; 
            $product->quanty = request()->quanty; 
            $product->marca = request()->marca; 
            $product->type_pro = request()->type_pro; 
            $product->imagen = $path; 
            $product->save();
        return redirect()->to('home');
    }
    public function show(){
        $product = DB::table('products')->get();
        return view('listaProduct', ['product' => $product]);
    }
    public function tienda(){
        $product = product::get();
        return view('tienda', ['product' => $product]);
    }
    public function edit($id){
        $product = DB::table('products')->where('id_prod', $id)->get();
        return view('editProduct', ['product' => $product]);
    }
    public function update($id){
        $this->validator(request());
        $product = product::where("id_prod",$id);
        $product->update([
            "name_pro" => request()->name_pro,
            "code_pro" => request()->code_pro,
            "quanty" => request()->quanty,
            "type_pro" => request()->type_pro,
            "marca" => request()->marca
            ]);
        return redirect()->to('listaP');
    }
    public function buscar(Request $request){
    if($request->get('buscar')){
        $product = product::where("code_pro", "LIKE", "%{$request->buscar}%")
        ->orwhere("name_pro", "LIKE", "%{$request->buscar}%")
        ->paginate(5);
    }
    else{
        $product = product::paginate(5);
    }
    return view('tienda', ['product' => $product]);

    }

    public function destroy($id){
        $product = product::where('id_prod', $id);
        $product->delete();
        return redirect()->to('listaP');
    }
    public function showById($id){
        $product = DB::table('products')->where('id_prod', $id)->get();
        return view('productStatus', ['product' => $product]);
    }
}
