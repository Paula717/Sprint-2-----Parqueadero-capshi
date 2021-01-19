<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function prin()
    {
        return view('principal');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
