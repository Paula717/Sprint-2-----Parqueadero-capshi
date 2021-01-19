<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class parqueaderoController extends Controller
{
    public function registrar()
    {
        return view('parqueadero.registro');
    }

    public function mensaje()
    {
        return view('parqueadero.mensaje');
    }

    public function consultar()
    {
        return view('parqueadero.consultar');
    }

    public function listar()
    {
        $cliente = DB::table('cliente')->orderBy('nombre','ASC')->get();
        return view('parqueadero.listar',['clientes' => $cliente]);
    }
}
