<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function empresa()
    {
        return "Página da Empresa";
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function equipe()
    {
        return view('equipe');
    }
    public function produto($id)
    {
        return 'O id do produto é: '.$id;
    }
}