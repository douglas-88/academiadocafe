<?php

use Illuminate\Http\Request;
use App\Cafe;

/*
Os endpoints ficariam, por exemplo:
    1.academiadocafe.com.br/api/cafe - POST     (Para INSERIR NO BANCO)
    2.academiadocafe.com.br/api/cafe - GET      (Para LISTAR NO BANCO)
    3.academiadocafe.com.br/api/cafe/{id} - GET (Para LISTAR UM CAFÉ em específico)
*/

/*1.*/Route::post("/cafe","CafeController@store")->name("json-insere-cafe");
/*2.*/Route::get("/cafe","CafeController@index")->name("json-lista-cafe");
/*3.*/Route::get("/cafe/{cafe}","CafeController@showJson")->name("json-lista-cafe-id");
