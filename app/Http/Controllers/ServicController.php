<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicController extends Controller
{
    public function index()
    {
        $titulo = "Servicios";
         $marcas=$this->getMarcas();
        return view('servic.index',compact('titulo','marcas'));
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
