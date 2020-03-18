<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
           (object) ["nome" => "Mauriene", "tel" => "12345678"],
            (object) ["nome" => "Savio", "tel" => "87654321"],
            
        ];
        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req)
    {
        return $req->nome;
    }

    public function editar()
    {
        return "doly";
    }


}
