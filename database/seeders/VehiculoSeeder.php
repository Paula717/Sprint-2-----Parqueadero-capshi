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
                'tarifa_id' => 1,
                'marca_veh' => 'Mercedes-Benz',
                'color_veh' => 'Negro'
            ],

            [
                'placa' => 'P1027',
                'cliente_id' => 1,
                'tarifa_id' => 3,
                'marca_veh' => 'ABUS',
                'color_veh' => 'Rojo'
            ],

            [
                'placa' => 'DPZ723',
                'cliente_id' => 5,
                'tarifa_id' => 2,
                'marca_veh' => 'Kawasaki',
                'color_veh' => 'Blanco'
            ],

            [
                'placa' => 'WHI000',
                'cliente_id' => 4,
                'tarifa_id' => 1,
                'marca_veh' => 'Volvo',
                'color_veh' => 'Gris'
            ],

            [
                'placa' => 'GTQ07D',
                'cliente_id' => 2,
                'tarifa_id' => 2,
                'marca_veh' => 'Ducati',
                'color_veh' => 'Gris'
            ]
        ];
        DB::table('vehiculo')->insert($vehiculo);
    }
}