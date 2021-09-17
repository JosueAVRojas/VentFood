<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;


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
    return view('auth.login');
});

Route::get('/agregarCliente', function(){
    return view('agregarCliente');
});

Route::get('/listarCliente', function(){
    return view('listarCliente');
});

Route::get('/listarProductos', function(){
    return view('productos.listarProductos');
});

Route::resource('/listarCliente', ClienteController::class);

Route::resource('/listarProductos', ProductoController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
