<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pago =[
            [
                'forma_pago' => 'Efectivo'
            ],

            [
                'forma_pago' => 'Tarjeta Debito'
            ],

            [
                'forma_pago' => 'Tarjeta Credito'
            ]
        ];
        DB::table('pago')->insert($pago);
    }
}