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
                'nombre' => 'Eugenio de 1 metro',
                'descripcion' => 'Descripción del producto 1',
                'precio' => 500,
                'stock' => 50,
                'categoria_id' => 1,
                'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRGs8B_eZ_dYF66cuT0YUchLycHAskB_7qgg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Bulto de tierra abonada de 40kg',
                'descripcion' => 'Descripción del producto 2',
                'precio' => 11500,
                'stock' => 30,
                'categoria_id' => 2,
                'imagen' => 'https://eugeniasdelasabana.com/wp-content/uploads/2021/03/tierra-1-600x600.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Eugenio de 25cm',
                'descripcion' => 'Descripción del producto 3',
                'precio' => 20000,
                'stock' => 20,
                'categoria_id' => 1,
                'imagen' => 'https://eugeniasdelasabana.com/wp-content/uploads/2021/03/tierra-1-600x600.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}