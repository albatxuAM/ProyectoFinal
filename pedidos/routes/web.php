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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/{pedido}/{estado}', [PedidoController::class, 'updateEstado'])->name('pedidos.update');

Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('/productos/create', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::post('/productos/{producto}/edit', [ProductosController::class, 'update'])->name('productos.update');

Route::get('/productos/{id?}', [ProductosController::class,'index'])->name('productos.index');
Route::get('productos/show/{producto}',[ProductosController::class,'show'])->name('productos.show');

Route::get('/catalogo/{id?}', [ProductosController::class,'catalogo'])->name('productos.catalogo');
Route::delete('/catalogo/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');
