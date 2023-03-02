<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $builder = Productos::orderBy('idTipo');

        if($id != 0){
            $builder->where('idTipo','=',$id);

        }
            $productos = $builder->paginate(10);
           // $productos = Productos::paginate(10);  
        
        $tipos = TipoProducto::all();
        return view('productos.index',["productos"=>$productos,"tipos"=>$tipos]);
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
    public function show(Productos $producto)
    {
        return view('productos.show',[])
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
