<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('detalles')->insert([
            'id_factura' => 1,
            'id_producto' => 1,
            'cantidad' => 2,
            'precio' => 4000
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 2,
            'id_producto' => 2,
            'cantidad' => 1,
            'precio' => 3000
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 3,
            'id_producto' => 3,
            'cantidad' => 2,
            'precio' => 500
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 4,
            'id_producto' => 4,
            'cantidad' => 1,
            'precio' => 7200
        ]);
        DB::table('detalles')->insert([
            'id_factura' => 5,
            'id_producto' => 5,
            'cantidad' => 1,
            'precio' => 4300
        ]);   
        DB::table('detalles')->insert([
            'id_factura' => 6,
            'id_producto' => 1,
            'cantidad' => 2,
            'precio' => 4000
        ]);      
    }
}
