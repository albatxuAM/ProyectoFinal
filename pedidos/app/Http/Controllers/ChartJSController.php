<?php

namespace App\Http\Controllers;
 
use App\Models\EstadoPedido;
use App\Models\TipoProducto;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect,Response;
Use DB;
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
 
    $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();
    
        $data = [];
    
        foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->count;
        }
    
        $data['chart_data'] = json_encode($data);

        $tipos = TipoProducto::all();

        $estados = EstadoPedido::all();
        foreach ($estados as $e) {
            $nombres[] = $e->nombre;
            $pedidos[] = Pedido::all()->where('idEstado', $e->id)->count();
        }

        return view('pages.estadisticas.index', [
            "chart_data" => $data,
            "tipos" => $tipos,
            "estados" => $nombres,
            "pedidos" => $pedidos
        ]);
    }
}
