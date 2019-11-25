<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        DB::table('clientes')->insert([
            'nombre' => 'Maira',
            'apellido' => 'Quiroz Acevedo',
            'direccion' => 'Pasaje H, av. Segunda casi Dorvigny',
            'fecha_nacimiento' => '1987-01-12',
            'telefono' => '65748047',
            'email' => 'mairaquiroz6@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Ligia',
            'apellido' => 'Acevedo Zambrana',
            'direccion' => 'Pasaje H, av. Segunda casi Dorvigny',
            'fecha_nacimiento' => '1962-04-22',
            'telefono' => '79896529',
            'email' => 'ligiacevedo22040@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Jhonny',
            'apellido' => 'Quiroz Pericon',
            'direccion' => 'Pasaje H, av. Segunda casi Dorvigny',
            'fecha_nacimiento' => '1961-08-05',
            'telefono' => '79896530',
            'email' => 'jhonyquiroz0805@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Marco',
            'apellido' => 'Quiroga Fuentes',
            'direccion' => 'Calle Villa Granada n455',
            'fecha_nacimiento' => '1981-11-07',
            'telefono' => '70356658',
            'email' => 'marcoquiroga555@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Javier',
            'apellido' => 'Soliz Acevedo',
            'direccion' => 'Av. Blanco Galindo Km 5.5',
            'fecha_nacimiento' => '1986-07-06',
            'telefono' => '69508525',
            'email' => 'jsoliz1986@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Marianela',
            'apellido' => 'Navia Alba',
            'direccion' => 'Av. Blanco Galindo Km 5.5',
            'fecha_nacimiento' => '1986-07-06',
            'telefono' => '71722566',
            'email' => 'navia1986@gmail.com'
        ]);
    }
}
