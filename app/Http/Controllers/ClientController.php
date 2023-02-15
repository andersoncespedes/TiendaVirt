<?php

namespace App\Http\Controllers;
use  App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Validator(Request $request)
    {
        return $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required',
            'cedula' => 'required|min:5|max:30|unique:clients,cedula'
        ]);
        
    }
    public function create(Request $param){
        $validation = $this->Validator($param);
        if($validation){
            $this->errors = $validation;
        }
        Client::create($param->all());
        return redirect()->to('home');
    }
    public function show(){
        $cliente = Client::get();
        return view('listaClient', ['cliente' => $cliente]);
    }
    public function showById($id){
        $cliente = Client::findOrFail($id)->get();
        return view('clieneStatus', ['cliente' => $cliente[0]]);
    }
}
