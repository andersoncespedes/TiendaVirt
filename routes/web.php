<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

use App\Models\product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'perform'])->name('logout');
Route::get('/producto', [HomeController::class, 'producto'])->name('registrarP');
Route::get('/cliente', [HomeController::class, 'cliente'])->name('cliente');

Route::get('/listaP', [ProductController::class, 'show'])->name('listaP');
Route::get('/editp/{id}', [ProductController::class, 'edit'])->name('editP');
Route::put('/updateP/{id}', [ProductController::class, 'update'])->name('updateP');

Route::get('/productoVisual/{id}', [ProductController::class, 'showById'])->name('showById');
Route::get('/tienda', [ProductController::class, 'tienda'])->name('tienda');

Route::post('/productoC', [ProductController::class, 'create'])->name('productR');
Route::get('/buscarp', [ProductController::class, 'buscar'])->name('buscar');
Route::delete('productD/{id}', [ProductController::class, 'destroy'])->name('destroyProd');

Route::post('/cliente', [ClientController::class, 'create'])->name('crearClient');
Route::get('/Listcliente', [ClientController::class, 'show'])->name('listClient');
Route::get('/clienteVisual/{id}', [ClientController::class, 'showById'])->name('showClientById');
Route::delete('dcliente/{id}', [ClientController::class, 'delete'])->name('dcliente');





