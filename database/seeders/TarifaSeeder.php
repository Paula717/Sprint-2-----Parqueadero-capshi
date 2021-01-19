<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class TarifaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarifa = [
            [
                'precio' => 20000,
                'tipo' => 'Carro'
            ],

            [
                'precio' => 14200,
                'tipo' => 'Moto'
            ],

            [
                'precio' => 3000,
                'tipo' => 'Bicicleta'
            ]
        ];
        DB::table('tarifa')->insert($tarifa);
    }
}
