<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Eugenio',
                'descripcion' => 'planta de cercado',
                'precio' => 500,
                'stock' => 50,
                'categoria_id' => 1,
                'imagen' => 'https://eugeniasdelasabana.com/wp-content/uploads/2017/12/eu-5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Guayacán',
                'descripcion' => 'arbol de sombra',
                'precio' => 15000,
                'stock' => 30,
                'categoria_id' => 2,
                'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-IKIbygAX3bOHwShV16q8Wl3foHz8zwHpGw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Eucalipto',
                'descripcion' => 'arbol de sombra',
                'precio' => 20000,
                'stock' => 20,
                'categoria_id' => 1,
                'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlrfNDAFLzwI89bLWJu_0G0n0AxdWNfGp3Yw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}