<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function paginaInicial()
    {
        return view('paginaInicial');
    }

    public function catalogo()
    {
        return view('catalogo');
    }

    public function loginAdmin()
    {
        return view('login administrador');
    }

    public function loginUser()
    {
        return view('login usuario');
    }

    public function recomendados()
    {
        return view('recomendados');
    }

    public function sobre()
    {
        return view('sobre');
    }
}

