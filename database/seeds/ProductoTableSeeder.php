<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     

        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'LG 32',
            'precio' => '2000',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 3,
            'nombre' => 'Laptop HP',
            'precio' => '3000',
            'stock' => '5'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 4,
            'nombre' => 'Batidora LG',
            'precio' => '250',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'televisor Sony 65',
            'precio' => '7200',
            'stock' => '5'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 5,
            'nombre' => 'Lavadora LG 12',
            'precio' => '4300',
            'stock' => '6'
        ]); 
              
    }
}
