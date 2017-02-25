<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //

    public function index(){
       return view('sitio/index');
    }

    public function saludar(Request $request,$nombre){
        return view('sitio/saludar', ['elNombre' => $nombre]);

    }
}
