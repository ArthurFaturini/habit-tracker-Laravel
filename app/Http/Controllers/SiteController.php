<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {

        $name = "Arthur";
        $habits = ['Ler', 'Correr', "Estudar"];
        //Forma completa:
        // return view('home', [
        //     'name' => $name,
        //     'habits' => $habits
        // ]);
        //Forma Reduzida(Só funciona se os nomes forem iguais):
        return view('home', compact('name', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
