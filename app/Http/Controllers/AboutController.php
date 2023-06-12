<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $titulo = "Nosotros";
         $marcas=$this->getMarcas();
        return view('about.index',compact('titulo','marcas'));
    }
    public function getMarcas()
    {
        $apiUrl = "https://digitalteiperu.com/api/marcas";
        $jsonData = file_get_contents($apiUrl);
        return json_decode($jsonData);
    }
}
