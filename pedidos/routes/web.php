<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/productos', function () {
    return view('productos.index');
});
Route::get('/productos/{id}',[ProductosController::class,'index'])->name('productos.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/{pedido}/{estado}', [PedidoController::class, 'updateEstado'])->name('pedidos.update');

Route::get('/productos/create', [ProductosController::class, 'create'])->name('producto.create');
Route::post('/productos', [ProductosController::class, 'store'])->name('producto.store');

