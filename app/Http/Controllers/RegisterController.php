<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $titulo = "Registrar";
         $marcas=$this->getMarcas();
         $tipos_clientes=$this->getTipocliente();
        return view('register.register',compact('titulo','marcas','tipos_clientes'));
    }
    public function exception(Request $request)
    {
        $titulo = "Registrar";
    
        $user = $request->user;
        $employee = $request->employee;
        $tipos_clientes=$this->getTipocliente();
        $marcas=$this->getMarcas();
        return  redirect()->to(route('register.register',compact('titulo','marcas','user','employee','tipos_clientes')));
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
public function getTipocliente()
{
    try {
        $apiUrl = "https://digitalteiperu.com/api/tipo_clientes";
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
