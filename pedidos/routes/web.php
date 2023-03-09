<?php

use App\Http\Controllers\FilesController;
use App\Http\Controllers\ControlUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\ChartJSController;

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DatosPersonaController;
use App\Models\DatosPersona;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Auth::routes();
Route::get('/sendmail',[mailController::class,'index'])->name('sendmail.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/{pedido}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::post('/pedidos/store', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{pedido}/{estado}', [PedidoController::class, 'updateEstado'])->name('pedidos.update');
Route::get('/pedidos/disponibles',[PedidoController::class,'selectDisponibles'])->name('pedidos.selectDisponibles');

Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('/productos/create', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::post('/productos/{producto}/edit', [ProductosController::class, 'update'])->name('productos.update');

Route::get('/productos/{id?}', [ProductosController::class,'index'])->name('productos.index');
Route::get('productos/{producto}',[ProductosController::class,'show'])->name('productos.show');

Route::get('/catalogo/{id?}', [ProductosController::class,'catalogo'])->name('productos.catalogo');
Route::delete('/catalogo/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');

//CARRITO
Route::get('/carrito',[CarritoController::class,'show'])->name('carrito.show');
Route::get('/carrito/{producto}',[CarritoController::class,'index'])->name('carrito.index');
Route::get('/carrito/update/{nombre}',[CarritoController::class,'update'])->name('carrito.update');
Route::get('/carrito/restar/{nombre}',[CarritoController::class,'restar'])->name('carrito.restar');
Route::get('/carrito/delete/{nombre}',[CarritoController::class,'destroy'])->name('carrito.borrar');

Route::get('/cesta', [ControlUsuarioController::class, 'cesta'])->name('cesta.lista');
Route::get('/cesta/formal',[ControlUsuarioController::class, 'formarusu'])->name('cesta.formalizar');
Route::post('/cesta/formal/ver', [ControlUsuarioController::class, 'finalizarpedporusucreado'])->name('cesta.ver');
Route::post('/cesta/crearusu', [ControlUsuarioController::class, 'crearusunormal'])->name('crearusu.normal');


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/invitado', [DatosPersonaController::class, 'store'])->name('datosPersona.store');
Route::get('/invitado', [DatosPersonaController::class, 'index'])->name('datosPersona.index');

//ESTADISTICAS
Route::get('estadisticas', [ChartJSController::class, 'index'])->name('estadisticas.index');
Route::get('estadisticas/productosPedido', [ChartJSController::class, 'productosPedido'])->name('estadisticas.productosPedido');
Route::get('estadisticas/ventas', [ChartJSController::class, 'ventas'])->name('estadisticas.ventas');
Route::get('estadisticas/ventasSemana', [ChartJSController::class, 'ventasSemana'])->name('estadisticas.ventasSemana');
Route::get('estadisticas/productosTipo', [ChartJSController::class, 'productosTipo'])->name('estadisticas.productosTipo');