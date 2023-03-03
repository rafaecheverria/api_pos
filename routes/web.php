<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'api'],function(){
    Route::apiResource('usuarios', 'UsuarioController');
    Route::apiResource('marcas', 'MarcaController');
    Route::apiResource('/medidas', 'MedidaController');
    Route::apiResource('/categorias', 'CategoriaController');
    Route::apiResource('/documentos', 'DocumentoController');
    Route::apiResource('/articulos', 'ArticuloController');

});


Route::get('/', function () {
    return view('welcome');
});
