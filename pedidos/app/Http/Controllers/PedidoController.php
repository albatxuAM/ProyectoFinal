<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\DatosPersona;
use App\Models\TipoProducto;
use App\Models\EstadoPedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pedidos = Pedido::whereNotIn('idEstado', [3,5]);
        // $pedidos = $pedidos->paginate(6);
        // $tipos = TipoProducto::all();
        // return view('pages.pedidos.index', [
        //     'pedidos' => $pedidos,
        //     'tipos' => $tipos,
        // ]);

        $busqueda = "";
        if (isset($_REQUEST['idPedido'])) {
            $busqueda = $_REQUEST['idPedido'];
        }
        # Exista o no exista búsqueda, los ordenamos
        // $builder = Pedido::orderBy('idEstado');
        $builder = Pedido::orderBy('id');
        if ($busqueda) {
            $builder->where("id", "LIKE", "%$busqueda%"); 
        }

        $estado = "";
        if (isset($_REQUEST['estadoP'])) {
           
            if($_REQUEST['estadoP'] != 0)
                // $options = implode(',', $_POST['estadoP']);
                $estado = $_REQUEST['estadoP'];
        }
        if ($estado) {
            # Si hay búsqueda, agregamos el filtro
            $builder->where("idEstado", $estado);   
        }
        else {
            $builder->whereNotIn('idEstado', [3,5]);
        }
        
        # Al final de todo, invocamos a paginate que tendrá todos los filtros
        //$pedidos = $builder->whereNotIn('idEstado', [3,5]);
        $pedidos = $builder->paginate(5);
        // $pedidos = $builder->simplePaginate(5);

        $tipos = TipoProducto::all();
        $estados = EstadoPedido::all();
        return view('pages.pedidos.index', [
            'pedidos' => $pedidos,
            'tipos' => $tipos,
            'estados' => $estados
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
        
        $persona =DatosPersona::where('id','=',$pedido->idPersona)->first();
        // $pedidos = $builder->simplePaginate(5);

        $tipos = TipoProducto::all();
        $estados = EstadoPedido::all();
        return view('pages.pedidos.detalle', [
            'pedido' => $pedido,
            'persona' => $persona,
            'tipos' => $tipos,
            'estados' => $estados
        ]);
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
        return redirect()->route('pedidos.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
