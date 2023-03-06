<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tipos = TipoProducto::all();
        return view('index', ["tipos" => $tipos]);
    }
    
}
