<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cafe;
use \Exception;

class CafeController extends Controller
{
    public function indexView()//Verbo HTTP: GET
    {
        return view("site.home");
    }

    public function index()//Verbo HTTP: GET
    {
        $cafes = Cafe::orderBy('id', 'desc')->get();
        return $cafes;//Retorna um JSON com os cafés cadastrados.
    }

    public function store(Request $request)//Verbo HTTP: POST
    {
        $request->validate([
            "nome" => "unique:cafes|required",
            "descricao" => "required"
        ]);
        $cafe = new Cafe();
        $cafe->nome = $request->input("nome");
        $cafe->descricao = $request->input("descricao");
        $cafe->save();
        return $cafe;
    }


    public function showJson(Cafe $cafe)//Verbo HTTP: GET
    {
        return $cafe;
    }

    public function show(Cafe $cafe)//Verbo HTTP: GET
    {
        return view('site.post', compact('cafe'));
    }
}
