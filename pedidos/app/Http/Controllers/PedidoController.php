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
        // $pedidos = Pedido::all()->whereNotIn('idEstado', [3,5]);
        // // $pedidos = $pedidosP->paginate(10);
        // return view('pages.pedidos.index', [
        //     'pedidos' => $pedidos
        // ]);

        $busqueda = "";
        if (isset($_REQUEST['idPedido'])) {
            $busqueda = $_REQUEST['idPedido'];
        }
        # Exista o no exista búsqueda, los ordenamos
        $builder = Pedido::all()->sortBy('idEstado');
        if ($busqueda) {
            # Si hay búsqueda, agregamos el filtro
            $builder->where("id", "LIKE", "%$busqueda%");
        }
        # Al final de todo, invocamos a paginate que tendrá todos los filtros
        $pedidos = $builder->whereNotIn('idEstado', [3,5]);
        //$pedidos = $builder->paginate(5);
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
        $pedido->idEstado = $estado;
        $pedido->save();
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
