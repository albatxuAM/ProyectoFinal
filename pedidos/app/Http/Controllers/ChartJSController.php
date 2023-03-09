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
        $tipos = TipoProducto::all();
        return view('pages.estadisticas.index', [ 
            "tipos" => $tipos
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

    public function ventasSemana()
    {
        $lastWeek = Pedido::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(fecha) as day_name"), \DB::raw("DAYOFWEEK(fecha) as day"))
            ->whereBetween('fecha', 
                [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]
            )    
            ->groupBy('day_name','day')
            ->get();

        $thisWeek = Pedido::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(fecha) as day_name"), \DB::raw("DAYOFWEEK(fecha) as day"))
            ->whereBetween('fecha', 
                [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
            )    
            ->groupBy('day_name','day')
            ->get();

        $dataPast = array_fill(0, 7, 0);
        $dataCurr = array_fill(0, 7, 0);

        foreach($lastWeek as $row) {
            $dataPast[$row->day] = (int) $row->count;
        }

        foreach($thisWeek as $row) {
            $dataCurr[$row->day] = (int) $row->count;
        }

        return ['success' => true, 
                "dataPast" => $dataPast,
                "dataCurr" => $dataCurr
            ];
    }

}
