<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('categorias')->insert([
            'nombre' => 'Televisores',
            'descripcion' => 'Descripcion televisores'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Computadoras',
            'descripcion' => 'Descripcion computadoras'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Laptops',
            'descripcion' => 'Descripcion Laptops'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Batidoras',
            'descripcion' => 'Descripcion Batidoras'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Lavadoras',
            'descripcion' => 'Descripcion Lavadoras'
        ]);
    }
}
