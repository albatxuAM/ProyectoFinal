<?php

use App\Http\Controllers\FilesController;
use App\Http\Controllers\ControlUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CarritoController;
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
Route::get('/carrito/show',[CarritoController::class,'show'])->name('carrito.show');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/{pedido}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{pedido}/{estado}', [PedidoController::class, 'updateEstado'])->name('pedidos.update');

Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('/productos/create', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/producto/{producto}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::post('/producto/{producto}/edit', [ProductosController::class, 'update'])->name('productos.update');

Route::get('/productos/{id?}', [ProductosController::class,'index'])->name('productos.index');
Route::get('productos/show/{producto}',[ProductosController::class,'show'])->name('productos.show');

Route::get('/catalogo/{id?}', [ProductosController::class,'catalogo'])->name('productos.catalogo');
Route::delete('/catalogo/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');


//PRUEBAS FILES

Route::get('/files',[FilesController::class,'loadView'])->name('files.loadView');

Route::post('/files',[FilesController::class,'storeFile'])->name('files.storeFile');

Route::get('/descargar/{name}',[FilesController::class,'downloadFile'])->name('files.downloadFile');

//CARRITO

Route::get('/carrito/{producto}',[CarritoController::class,'index'])->name('carrito.index');
Route::get('/carrito/update/{nombre}',[CarritoController::class,'update'])->name('carrito.update');

Route::get('/cesta', [ControlUsuarioController::class, 'cesta'])->name('cesta.lista');
Route::get('/cesta/formal',[ControlUsuarioController::class, 'formarusu'])->name('cesta.formalizar');
Route::post('/cesta/formal/ver', [ControlUsuarioController::class, 'finalizarpedporusucreado'])->name('cesta.ver');
Route::post('/cesta/crearusu', [ControlUsuarioController::class, 'crearusunormal'])->name('crearusu.normal');