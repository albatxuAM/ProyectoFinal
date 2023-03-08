<?php

namespace App\Http\Controllers;
 
use App\Models\EstadoPedido;
use App\Models\TipoProducto;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartJSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Pedido::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(fecha) as month_name"), DB::raw("MONTH(fecha) as month"))
        ->groupBy('month_name','month')
        ->orderBy('month')
        ->get();


        foreach($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
        }

    
        // $record = Pedido::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(fecha) as month_name"), DB::raw("MONTH(fecha) as month"))
            
        //     ->groupBy('month_name','month')
        //     ->orderBy('month')
        //     ->get();
    
        // $data = [];
    
        // foreach($record as $row) {
        //     $data['label'][] = $row->month_name;
        //     $data['data'][] = (int) $row->count;
        // }
    
        //$data['chart_data'] = json_encode($data);

        // dd($data);

        $tipos = TipoProducto::all();

        return view('pages.estadisticas.index', [
            // "chart_data" => $data,
            "tipos" => $tipos,
            "estados" => $nombres,
            "pedidos" => $pedidos,
            "categoria" => $categoria,
            "productosTipo" => $productosTipo
            
        ]);
    }

    public function productosPedido()
    {
        $estados = EstadoPedido::all();
        foreach ($estados as $e) {
            $nombres[] = $e->nombre;
            $pedidos[] = Pedido::all()->where('idEstado', $e->id)->count();
        }
        return ['success' => true, 
                "estados" => $nombres,
                "pedidos" => $pedidos
                ];
    }

    public function ventas()
    {
        $record = Pedido::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(fecha) as month_name"), DB::raw("MONTH(fecha) as month"))
            ->groupBy('month_name','month')
            ->orderBy('month')
            ->get();

        foreach($record as $row) {
            $label[] = $row->month_name;
            $data[] = (int) $row->count;
        }

        return ['success' => true, 
                "mes" => $label,
                "data" => $data,
                ];
    }

}
