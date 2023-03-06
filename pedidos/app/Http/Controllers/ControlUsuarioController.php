<?php

namespace App\Http\Controllers;

use App\Models\DatosPersona;
use App\Models\TipoProducto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControlUsuarioController extends Controller
{
    public function cesta()
    {
        $tipos = TipoProducto::all();
        return view('cestaindex', ["tipos" => $tipos]);
    }
    public function formarusu()
    {
         $tipos = TipoProducto::all();
        if (Auth::user()) {
            # code...
        } 
        else {
        return view('FormalizarPedido', ["tipos" => $tipos]);
        }
    }

    public function finalizarpedporusucreado(Request $request)
    {
        Auth::attempt([
            'email' => $request['correo'],
            'password' => $request['password']
        ]);
        if(Auth::user())
        {
            $tipos = TipoProducto::all();
            return view('cestaindex', ["tipos" => $tipos]);
        }
        else{
            return redirect()->back()->withInput()->withErrors(['status' => 'La contraseña o el correo es incorrecto']);
        }
    }
    public function crearusunormal(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:30',
            'correo' =>'required|email',
            'telefono'=>'required|digits:9',
            'contrasena' =>'required|string|min:8|max:15',
            'confirmar' => 'required|same:contrasena'
        ]);
        //comprobacion de existencia de usuario
        $usuariodato = User::where('email', '=', $validated['correo'])->first();
        if ($usuariodato) {
            return redirect()->back()->withInput()->withErrors(['status' => 'ya existe un usuario']);
        }
        $datousuario = DatosPersona::where(
            [
                ['nombre', '=', $validated['nombre']],
                ['email', '=', $validated['correo']],
                ['telefono', '=', $validated['telefono']]
            ]
        )->first();
        if ($datousuario) {
            $datonuevo = DatosPersona::where('email', '=', $validated['correo'])->first();
            if ($datonuevo) {
                DatosPersona::where('id', $datonuevo->id)->update([
                    'nombre'  => $request['nombre'],
                    'email' => $request['correo'],
                    'telefono'  => $request['telefono'],
                ]);
            } else {
                DatosPersona::create([
                    'nombre'  => $validated['nombre'],
                    'email' => $validated['correo'],
                    'telefono'  => $validated['telefono'],
                ]);
            }
            $datousuario = DatosPersona::where('email', '=', $validated['correo'])->first();
        }
        $datousuario = DatosPersona::where('email', '=', $validated['correo'])->first();
        User::create([
            'id_persona' => $datousuario->id,
            'email' => $validated['correo'],
            'password' => Hash::make($validated['contrasena']),
        ]);
        $tipos = TipoProducto::all();
        return view('cestaindex', ["tipos" => $tipos]);
    }
}
