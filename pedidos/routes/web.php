<?php

use App\Http\Controllers\CarritoController;
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

Route::get('/producto/create', [ProductosController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductosController::class, 'store'])->name('producto.store');

Route::get('add/{id}', [CarritoController::class, 'store'])->name('store.carrito');
Route::put('carrito/update', [CarritoController::class, 'update'])->name('update.carrito');
Route::delete('carrito/remove', [CarritoController::class, 'remove'])->name('remove.carrito');