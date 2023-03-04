<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\TipoProducto;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Productos $producto)
    {
        $producto = $producto->attributesToArray();
        // session()->flush();
        if(session()->missing('carrito')===true){
            session()->put('carrito',[]);
        }
        $productoExistente = false;
        // dd(session('carrito'));

        foreach(session('carrito') as $key => $value){
            // crear una copia de session carrito para modificar datos
            $copiacarrito[$key] = [
                'producto' => $value['producto'],
                'id' => $value['id'],
                'cantidad' => $value['cantidad']
            ];
            if($value['producto'] == $producto['nombre']){
                $productoExistente = true;
                $copiacarrito[$key]['cantidad'] = $value['cantidad'] + 1;
            };
            // sesion -> put sobreescribe el array carrito por el nuevo
            session()->put('carrito', $copiacarrito);            
        }
        
        if($productoExistente === false){
            $lineaPedido = array(
            "producto"=>$producto['nombre'],
            "id"=>$producto['id'],
            "cantidad" => 1
            );
            // sesion -> push añade un dato nuevo al array carrito
            session()->push('carrito', $lineaPedido);
        }

        return redirect(route('productos.index'));
    }

    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $tipos = TipoProducto::all();
        return view('pages.carrito.show',["tipos"=>$tipos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
