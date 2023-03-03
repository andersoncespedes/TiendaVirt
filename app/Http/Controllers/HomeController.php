<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Factura;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function factura(){
        $product = product::get();
        $factura = Factura::select('*')
        ->join('products', 'facturas.id_prod', '=', 'products.id_prod')
        ->get();
        return view('factura', ['product' => $product, 'factura' => $factura]);
    }
    public function registro(){
        return view('auth\register');
    }
    public function login(){
        return view('auth\login');
    }
    public function producto(){
        return view('producto');
    }
    public function cliente(){
        return view('cliente');
    }
    public function perform(){
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
