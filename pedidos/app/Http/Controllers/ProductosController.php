<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = 0)
    {
        $builder = Productos::orderBy('idTipo');

        if($id != 0){
            $builder->where('idTipo','=',$id);
        }
        $busqueda = "";
        if (isset($_REQUEST['busqueda'])) {
            $busqueda = $_REQUEST['busqueda'];
        }

        if ($busqueda) {
            # Si hay búsqueda, agregamos el filtro
            $builder->where("nombre", "LIKE", "%$busqueda%");       
        }
        $productos = $builder->paginate(12);  

        $tipos = TipoProducto::all();
        return view('pages.productos.index', [
            "productos" => $productos,
            "tipos" => $tipos
        ]);
    }

    public function catalogo($id = 0)
    {
        $builder = Productos::orderBy('idTipo');
        $productos = $builder->paginate(8);  

        $tipos = TipoProducto::all();
        return view('pages.productos.catalogo', [
            "productos" => $productos,
            "tipos" => $tipos
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = TipoProducto::all();
        return view('pages.productos.create', [
            "producto" => null,
            'tipos' => $tipos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nombre' => 'required|unique:productos',
            'idTipo' => 'required|in:1,2,3,4,5,6,7',
            'pedidoMinimo' => 'required|min:1',
            'precio' => 'required|numeric|gt:0',
            'foto' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'nombre.required' => 'Nombre es obligatorio.',
            'nombre.unique' => 'Nombre ya existe.',
            'idTipo.in' => 'Tipo es obligatorio.', 
            'pedidoMinimo.required' => 'Pedido minimo es obligatorio.',
            'precio.required' => 'Precio es obligatorio.',
            'foto.image' => 'El archivo tiene que se una foto en formato jpeg,png,jpg,gif,svg'
        ]);

        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        if($request->hasFile('foto')){
            $request->file('foto')->store('public');
            dd("subido y guardado");
        }
        // script para subir la imagen
        // if($request->hasFile("imagen")){

        //     $imagen = $request->file("imagen");
        //     $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
        //     $ruta = public_path("img/post/");

        //     //$imagen->move($ruta,$nombreimagen);
        //     copy($imagen->getRealPath(),$ruta.$nombreimagen);

        //     $producto->imagen = $nombreimagen;            
        // }
        $imagen = $request->file("foto");
        $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
        $producto = Productos::create($validatedData);
        dd($nombreimagen);
        return back()->with('success', 'producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        $idTipo = $producto->idTipo;
        $relacionados = Productos::where('idTipo','=',$idTipo)
                        ->take(4)
                        ->get();
        
        $tipos = TipoProducto::all();
        return view('pages.productos.show', [
            "producto" => $producto,
            "relacionados" => $relacionados,
            "tipos" => $tipos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto)
    {
        $tipos = TipoProducto::all();
        return view('pages.productos.create', [
            'producto' => $producto,
            "tipos" => $tipos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $producto)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'idTipo' => 'in:1,2,3,4,5,6,7',
            'pedidoMinimo' => 'required|min:1',
            'precio' => 'required|numeric|gt:0',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'nombre.required' => 'Nombre es obligatorio.',
            'idTipo.in' => 'Tipo es obligatorio.', 
            'pedidoMinimo.required' => 'Pedido minimo es obligatorio.',
            'foto.mimes' => 'El archivo tiene que se una foto en formato jpeg,png,jpg,gif,svg'
        ]);
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        //if($request->hasFile('foto')){
            $request->file('foto')->store('public');
            dd("subido y guardado");
        //}

        $producto->update($validatedData);
        return back()->with('success', 'producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('productos.catalogo');
    }
}
