<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function create(Request $request)
    {
        $factura = new Factura;
        $factura->code = $request->code;
        $factura->id_prod = $request->producto;
        $factura->fecha = $request->fecha;
        $factura->save(); 
        return redirect()->to('facturaC');
    }
}
