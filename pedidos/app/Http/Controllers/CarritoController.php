<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;
use App\Models\Productos;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Productos $producto)
    {
        //dd(session("carrito"));
        
        if(session()->missing('carrito')===true){
            
            echo "estoy donde no debo";
            session()->put('carrito',[]);
           
        }
        session()->push('carrito',$producto);
        

        return redirect(route('productos.index'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
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
