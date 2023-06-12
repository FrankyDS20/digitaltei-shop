<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $titulo = "Registrar";
        // $empresa = "DIGITALTEI";
        return view('register.register',compact('titulo'));
    }
    public function exception(Request $request)
    {
        $titulo = "Registrar";
    
        $user = $request->user;
        $employee = $request->employee;
        return  redirect()->to(route('register.register',compact('titulo','user','employee')));
    }
}
