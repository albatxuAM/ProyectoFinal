<?php

namespace App\Http\Controllers;

use App\Models\DatosPersona;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\TipoProducto;
use Illuminate\Support\Facades\Auth;

class DatosPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = TipoProducto::all();
        if (Auth::user()) {
            $persona = DatosPersona::where('email', Auth::user()->email)->first();
            if ($persona) {
                    //if session called carrito is empty then redirect productos
                if (session('carrito') != null) {
                    return view('pages.carrito.index', ["tipos" => $tipo, "persona" => $persona]);
                } else {
                    return redirect(route('productos.index'));
                }
                return view('pages.carrito.index', ["tipos" => $tipo, "persona" => $persona]);
            }
        } else {
            $persona = session('persona');
                if (session('carrito') != null) {
                    return view('pages.carrito.index', ["tipos" => $tipo, "persona" => $persona]);
                } else {
                    return redirect(route('productos.index'));
                }
            return view('pages.carrito.index', ["tipos" => $tipo, "persona" => $persona]);
        }
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
        session()->put(['persona' => $persona]);
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
