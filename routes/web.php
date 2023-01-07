<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/listaP', [ProductController::class, 'show'])->name('listaP');
Route::get('/productoVisual/{id}', [ProductController::class, 'showById'])->name('showById');
Route::post('/productoC', [ProductController::class, 'create'])->name('productR');
Route::delete('productD/{id}', [ProductController::class, 'destroy'])->name('destroyProd');




