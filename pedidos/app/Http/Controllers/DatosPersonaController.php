<?php

namespace App\Http\Controllers;

use App\Models\DatosPersona;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\TipoProducto;

class DatosPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = TipoProducto::all();
        $persona = DatosPersona::latest('id')->first();

        return view('pages.carrito.index', ["tipos" => $tipo,"persona"=>$persona]);
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
       $validate = $request->validate([
            'nombre' => 'required|string|max:30',
            'correo' => 'required|email',
            'telefono' => 'required|digits:9'
        ]);

        DatosPersona::create([
            'nombre'  => $validate['nombre'],
            'email' => $validate['correo'],
            'telefono'  => $validate['telefono'],
        ]);
        $persona = DatosPersona::latest('id')->first();

        $tipos = TipoProducto::all();
        
        return redirect(route('datosPersona.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(DatosPersona $datosPersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DatosPersona $datosPersona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DatosPersona $datosPersona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DatosPersona $datosPersona)
    {
        //
    }
}
