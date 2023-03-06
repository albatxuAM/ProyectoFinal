<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Testing\MimeType;
use Illuminate\Http\Request;
use Image;


class FilesController extends Controller
{
    private $disk = "public";
    /**
     * Display a listing of the resource.
     */
    public function loadView()
    {
        $files = [];
        //ESTA PARTE DE CÓDIGO ES PARA MOSTRAR LA IMAGEN EN LA VISTA.
        //Se guardan en variables los datos de la imagen que se necesitan y se crea un array con todas las imagenes  
        //almacenadas en storage.
        //Lo devuelve con la vista

        foreach(storage::disk($this->disk)->files()as $file){
            $name = str_replace("$this->disk/","",$file);

            $type = pathinfo(storage_path('storage/app/public/archivo1.png'));
            $picture = "";
             //dump($file);
             //dump($name);
            // dd($type);
            if(strpos($type["filename"],"archivo")!==false){
                //$picture = ".".Storage::url($file);

                $picture = asset(storage::disk($this->disk)->url($name));
             
               // dd($picture);
               $files[] = [
                "picture"=>$picture,
                "name"=>$name,
                "size"=>storage::disk($this->disk)->size($name)
               ];
            
            }
         
        }
        
        return view('pages.productos.prueba', ['files' => $files]);
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function storeFile(Request $request)
    {
        //Crea el fichero prueba.txt y su contenido
       // Storage::put("prueba.txt","Esto es una prueba");
       //se guarda en storage/public
      // Storage::disk('public')->put("prueba.txt","sigo probando");

      //Si recibe un POST
      if($request->isMethod('POST')){
        //con el método getMimeType() obtengo el tipo de archivo "image/png"
        //dd($request->file('file')->getMimeType());

        //Si el archivo que suben no es una imagen png no permite subirla.
        if($request->file('file')->getMimeType()!=="image/png"){
            echo "El tipo de archivo no es válido";
        }else{
            
            // $manager = Image([]);
            // $image = $manager->make('public/images/croqueta.png')->resize(100,100);
            // $image->store($image);

            $file = $request->file('file');
            //Cogemos el nombre que el usuario a introducido
            $name = $request->input('name');
            //Para almacenar la imagen poniendole un nombre
            $file->storeAs('',$name.".".$file->extension(),'public');
        }
      }
        return $this->loadView();
    }

    /**
     * Display the specified resource.
     */
    public function downloadFile(string $id)
    {
         
    }

 
}
