<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $titulo = "login";
        // $empresa = "DIGITALTEI";
        return view('home',compact('titulo'));
    }
}
