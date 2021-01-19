<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;


class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado =[
            [
                'nombre' => 'Mario Lopez',
                'cedula' => '1125486930',
                'celular' => '3125698547',
                'direccion' => 'Av la playa',
                'correo' => 'mariol@hotmail.com'
            ],

            [
                'nombre' => 'Fabian Garcia',
                'cedula' => '102589632',
                'celular' => '3135698523',
                'direccion' => 'Puente Ortiz',
                'correo' => 'fabian@hotmail.com'
            ],
        ];
        DB::table('empleado')->insert($empleado);
    }
}
