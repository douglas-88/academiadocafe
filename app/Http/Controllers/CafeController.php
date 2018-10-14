<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cafe;

class CafeController extends Controller
{
    

    
    


    public function indexView()//Verbo HTTP: GET
    {
        
        return view("site.home");
    }
    
    public function index()//Verbo HTTP: GET
    {
        $cafes = Cafe::orderBy('id', 'desc')->paginate(3);
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

   
    public function showJson($id)//Verbo HTTP: GET
    {
        $cafe = Cafe::find($id);
        if(is_null($cafe)){

            
            $array["descricao"] = "Não existe dados para consulta, tente outro ID";
            $array["nome"] = "Café Inexistente, tente outro";
            return $array;
        }else{
            return $cafe;
        }
           
            
       
    }

    public function show($id)//Verbo HTTP: GET
    {
        $cafe = Cafe::find($id);
        return view("site.post",compact("cafe"));
    }

   
}
