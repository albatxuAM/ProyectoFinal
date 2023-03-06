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
        if (session()->missing('carrito') === true) {
            session()->put('carrito', []);
        }
        $productoExistente = false;
        // dd(session('carrito'));

        foreach (session('carrito') as $key => $value) {
            // crear una copia de session carrito para modificar datos
            $copiacarrito[$key] = [
                'producto' => $value['producto'],
                'precio' => $value['precio'],
                'id'=>$value['id'],
                'cantidad' => $value['cantidad']
            ];

            if ($value['id'] == $producto['id']) {
                $productoExistente = true;
                $copiacarrito[$key]['cantidad'] = $value['cantidad'] + 1;
            };
            // sesion -> put sobreescribe el array carrito por el nuevo
            session()->put('carrito', $copiacarrito);
        }

        if ($productoExistente === false) {
            $lineaPedido = array(
                "producto" => $producto['nombre'],
                "precio" => $producto['precio'],
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
        return view('pages.carrito.show', ["tipos" => $tipos]);
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
    public function update($id)
    {
        foreach (session('carrito') as $key => $value) {
            // crear una copia de session carrito para modificar datos
            $copiacarrito[$key] = [
                'producto' => $value['producto'],
                'precio' => $value['precio'],
                'id'=>$value['id'],
                'cantidad' => $value['cantidad']
            ];

            if ($value['id'] == $id) {
                
                $copiacarrito[$key]['cantidad'] = $value['cantidad'] + 1;
            };
            // sesion -> put sobreescribe el array carrito por el nuevo
            session()->put('carrito', $copiacarrito);
        }


        $tipos = TipoProducto::all();
        return redirect(route('carrito.show'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //get the id of the product to delete
        $id = $id;
        //get the cart
        $cart = session()->get('carrito');
        //remove the product from the cart
        unset($cart[$id]);
        //reset the cart
        session()->put('carrito', $cart);
        //return to the cart
        return redirect(route('carrito.show'));

    }
}
