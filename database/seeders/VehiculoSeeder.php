<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiculo = [
            [
                'placa' => 'CZR263',
                'cliente_id' => 3,
                'registro_id' => 1,
                'vehiculo_id' => 1,
                'marca_veh' => 'Mercedes-Benz',
                'color_veh' => 'Negro'
            ],

            [
                'placa' => 'P1027',
                'cliente_id' => 1,
                'registro_id' => 3,
                'vehiculo_id' => 3,
                'marca_veh' => 'ABUS',
                'color_veh' => 'Rojo'
            ],

            [
                'placa' => 'DPZ723',
                'cliente_id' => 5,
                'registro_id' => 2,
                'vehiculo_id' => 2,
                'marca_veh' => 'Kawasaki',
                'color_veh' => 'Blanco'
            ],

            [
                'placa' => 'WHI000',
                'cliente_id' => 4,
                'registro_id' => 5,
                'vehiculo_id' => 1,
                'marca_veh' => 'Volvo',
                'color_veh' => 'Gris'
            ],

            [
                'placa' => 'GTQ07D',
                'cliente_id' => 2,
                'registro_id' => 3,
                'vehiculo_id' => 2,
                'marca_veh' => 'Ducati',
                'color_veh' => 'Gris'
            ]
        ];
        DB::table('vehiculo')->insert($vehiculo);
    }
}