<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TipoProducto;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        DB::table('tipo_productos')->delete();
        $json = File::get("database/data/TipoProducto.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            TipoProducto::create(array(
                'id' => $obj->id,
                'nombre' => $obj->nombre,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now')
            ));
        }
    }
}
