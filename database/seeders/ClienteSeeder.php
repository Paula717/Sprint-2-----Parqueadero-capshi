<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = [
            [
                'nombre' => 'Maria Hernandez', 
                'cedula' => '1144587962', 
                'celular' => '3102569856',
                'direccion' => 'Av los estudiantes',
                'correo' => 'maria@hotmail.com' 
            ],

            [
                'nombre' => 'Daniela Preciado', 
                'cedula' => '1203658920', 
                'celular' => '3178569523',
                'direccion' => 'Av la Playa',
                'correo' => 'daniela@hotmail.com' 
            ],

            [
                'nombre' => 'Jose Gomez', 
                'cedula' => '1125692003', 
                'celular' => '3159652320',
                'direccion' => 'El Modelo',
                'correo' => 'jose@hotmail.com' 
            ],

            [
                'nombre' => 'Jhoan Torres', 
                'cedula' => '1032598741', 
                'celular' => '314526987',
                'direccion' => 'Calle san Marcos',
                'correo' => 'jhoan@hotmail.com' 
            ],

            [
                'nombre' => 'Anguie Garcia', 
                'cedula' => '1087205496', 
                'celular' => '3164589623',
                'direccion' => 'El Triunfo',
                'correo' => 'anguie@hotmail.com' 
            ]
        ];
        DB::table('cliente')->insert($cliente);
    }
}