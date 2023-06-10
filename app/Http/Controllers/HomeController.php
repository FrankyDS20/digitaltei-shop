<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function __invoke()
    {
        $titulo = "Inicio";
        return view('home.home',compact('titulo'));
    }
}
