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

Route::get('/', function () {
    return view('productos.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [PedidoController::class, 'index'])->name('pedidos.pendientes');
Route::get('/pedidos/{pedido}/{estado}', [PedidoController::class, 'updateEstado'])->name('pedidos.update');

Route::get('/producto/create', [ProductosController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductosController::class, 'store'])->name('producto.store');

