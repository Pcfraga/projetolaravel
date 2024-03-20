<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller


{
   

    public function paginaInicial()
    {
        return view('Página Inicial');
    }

    public function catalogo()
    {
        return view('Catálogo');
    }

    public function loginAdmin()
    {
        return view('Login administrador');
    }

    public function loginUser()
    {
        return view('Login Usuário');
    }

    public function recomendados()
    {
        return view('Recomendados');
    }

    public function sobre()
    {
        return view('Sobre');
    }
}




