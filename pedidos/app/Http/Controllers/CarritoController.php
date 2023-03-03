<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Productos;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $producto =  Productos::findOrFail($id);

        $carrito = session()->get('carrito', []);

        if(isset($carrito[$id])){
            $carrito[$id]['cantidad']++;
        }
        else{
            $carrito[$id] = [
                "id_producto" => $producto->id,
                "nombre" => $producto->nombre,
                "cantidad" => 1,
                "precio" => $producto->precio,
            ];
        }

        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto agregado al carrito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
        if($request->id && $request->cantidad){
            $carrito = session()->get('carrito');
            $carrito[$request->id]["cantidad"] = $request->cantidad;
            session()->put('carrito', $carrito);
            session()->flash('success', 'Carrito actualizado');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if($request->id){
            $carrito = session()->get('carrito');
            if(isset($carrito[$request->id])){
                unset($carrito[$request->id]);
                session()->put('carrito', $carrito);
            }
            session()->flash('success', 'Producto eliminado del carrito');
        }
    }
}
