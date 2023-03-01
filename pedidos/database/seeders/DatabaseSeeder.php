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
        for($i=1;$i<=5;$i++){
            DB::table('users')->insert([
                'id' =>  $i,
                'email' => $faker->email(),
                'password' => Hash::make($faker->password()),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            DB::table('datos_personas')->insert([
                'id' =>  $i,
                'nombre' =>  $faker->firstName(),
                'telefono' => $faker->randomNumber(8),
                'email' => $faker->email(),
                'idUser' => $i,
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
        for($i=1;$i<=11;$i++){
            DB::table('pedidos')->insert([
                'id' =>  $i,
                'idEstado' => $faker->numberBetween(1, 4),
                'observacion' =>  $faker->realText(40,2),
                'fecha' =>  $faker->dateTimeBetween('-1 years', 'now'),
                'idPersona' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);

            for($j=0; $j<$faker->numberBetween(1,5); $j++) {
                DB::table('productos_pedidos')->insert([
                    'cantidad' => $faker->numberBetween(1,5),
                    'idProducto' => $faker->numberBetween(1,46),
                    'idPedido' => $i,
                    'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
                ]);
            }
        } 
    }
}
