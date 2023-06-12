<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $titulo = "Contactanos";
         $marcas=$this->getMarcas();
        return view('contact.contact-us',compact('titulo','marcas'));
    }
    public function getMarcas()
    {
        $apiUrl = "https://digitalteiperu.com/api/marcas";
        $jsonData = file_get_contents($apiUrl);
        return json_decode($jsonData);
    }
}