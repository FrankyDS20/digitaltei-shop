<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function __invoke()
    {
        $titulo = "Inicio";
        $marcas=$this->getMarcas();
        return view('home.home',compact('titulo','marcas'));
    }
 public function getMarcas()
{
    try {
        $apiUrl = "https://digitalteiperu.com/api/marcas";
        $jsonData = file_get_contents($apiUrl);
        $data = json_decode($jsonData);
        return $data;
    } catch (\Exception $e) {
        // Manejo del error de conexión
        // Puedes mostrar un mensaje de error, registrar el error en un archivo de registro, etc.
        return null;
    }
}
  
}
