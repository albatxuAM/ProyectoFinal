<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TipoProducto;
use App\Models\Productos;
use App\Models\EstadoPedido;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        DB::table('datos_personas')->insert([
            'id' =>  1,
            'nombre' =>  $faker->firstName(),
            'telefono' => $faker->randomNumber(8),
            'email' => 'admin@gmail.com',
            'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
        ]);

        DB::table('users')->insert([
            'id_persona' =>  1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('test'),
            'admin' => 1
        ]);


        for($i=2;$i<=10;$i++){
            DB::table('datos_personas')->insert([
                'id' =>  $i,
                'nombre' =>  $faker->firstName(),
                'telefono' => $faker->randomNumber(8),
                'email' => $faker->email(),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            DB::table('users')->insert([
                'id_persona' =>  $i,
                'email' => $faker->email(),
                'password' => Hash::make($faker->password()),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);
        } 

        $faker = \Faker\Factory::create();
        DB::table('tipo_productos')->delete();
        $json = File::get("database/data/TipoProducto.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            TipoProducto::create(array(
                'id' => $obj->id,
                'nombre' => $obj->nombre,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ));
        }
        
        DB::table('productos')->delete();
        $json = File::get("database/data/Productos.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Productos::create(array(
                'id' => $obj->id,
                'nombre' => $obj->nombre,
                'pedidoMinimo' => $obj->pedidoMinimo,
                'precio' => $obj->precio,
                'idTipo' => $obj->idTipo,
                'observacion' => "pedido minimo: 2 raciones" /*$faker->realText(80,2)*/,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ));
        }

        DB::table('estado_pedidos')->delete();
        $json = File::get("database/data/EstadoPedidos.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            EstadoPedido::create(array(
                'id' => $obj->id,
                'nombre' => $obj->nombre,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ));
        }

        $faker = \Faker\Factory::create();
        for($i=1;$i<=30;$i++){
            DB::table('pedidos')->insert([
                'id' =>  $i,
                'idEstado' => $faker->numberBetween(1, 5),
                'observacion' =>  $faker->realText(40,2),
                'fecha' =>  $faker->dateTimeBetween('-1 years', '+1 weeks'),
                'idPersona' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            for($j=0; $j<$faker->numberBetween(1,5); $j++) {
                DB::table('productos_pedidos')->insert([
                    'cantidad' => $faker->numberBetween(1,10),
                    'idProducto' => $faker->numberBetween(1,74),
                    'idPedido' => $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                ]);
            }
        } 

        $faker = \Faker\Factory::create();
        for($i=31;$i<=50;$i++){
            DB::table('pedidos')->insert([
                'id' =>  $i,
                'idEstado' => $faker->numberBetween(1, 5),
                'observacion' =>  $faker->realText(40,2),
                'fecha' =>  $faker->dateTimeBetween('-3 weeks', '+1 weeks'),
                'idPersona' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            for($j=0; $j<$faker->numberBetween(1,5); $j++) {
                DB::table('productos_pedidos')->insert([
                    'cantidad' => $faker->numberBetween(1,10),
                    'idProducto' => $faker->numberBetween(1,74),
                    'idPedido' => $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                ]);
            }
        } 
    }
}
