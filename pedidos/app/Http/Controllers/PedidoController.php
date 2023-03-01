<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all()->where('idEstado', '!=' , 3);
        return view('pages.pedidos.index', [
            'pedidos' => $pedidos
        ]);
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
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }
    public function updateEstado(Pedido $pedido, $estado)
    {
        // $validated = $request->validate([
        //     'nombre' => 'required|max:255',
        //     'apellido' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'telefono' => 'required|max:255',
        //     'direccion' => 'required|max:255',
        // ]);

        $pedido->idEstado = $estado;
        $pedido->save();
        // $pedido->update($validated);
        return redirect()->route('pedidos.pendientes');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
