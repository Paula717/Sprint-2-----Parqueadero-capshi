<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro = [
            [
                'empleado_id' => 1,
                'pago_id' => 1,
                'entrada' => '2021-01-16',
                'salida' => '2021-01-18',
                'total' => '40000'
            ],

            [
                'empleado_id' => 1,
                'pago_id' => 3,
                'entrada' => '2021-01-11',
                'salida' => '2021-01-16',
                'total' => '71000' 
            ],

            [
                'empleado_id' => 2,
                'pago_id' => 1,
                'entrada' => '2020-12-31',
                'salida' => '2021-01-04',
                'total' => '56800'
            ],

            [
                'empleado_id' => 2,
                'pago_id' => 1,
                'entrada' => '2021-01-04',
                'salida' => '2021-01-12',
                'total' => '24000'
            ],

            [
                'empleado_id' => 1,
                'pago_id' => 3,
                'entrada' => '2020-12-24',
                'salida' => '2021-01-03',
                'total' => '200000'
            ]
        ];
        DB::table('registro')->insert($registro);
    }
}
