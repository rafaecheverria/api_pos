<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'api'],function(){

    //Marcas
    Route::get('/marcas', 'MarcaController@index');
    Route::post('/marcas/add', 'MarcaController@store');
    Route::get('/marcas/{id}', 'MarcaController@getMarca');

    Route::apiResource('usuarios', 'UsuarioController');
    //Route::apiResource('marcas', 'MarcaController');
    Route::apiResource('/medidas', 'MedidaController');
    Route::apiResource('/categorias', 'CategoriaController');
    Route::apiResource('/documentos', 'DocumentoController');
    Route::apiResource('/articulos', 'ArticuloController');



    // Users
    /*Route::get('/auth/user', 'App\Http\Controllers\UserController@userAuth');  
    Route::get('/api', 'App\Http\Controllers\UserController@getApi');
    Route::post('/users/add', 'App\Http\Controllers\UserController@addUser');
    Route::get('/user/{id}', 'App\Http\Controllers\UserController@getUser');
    Route::put('/user/update/{id}', 'App\Http\Controllers\UserController@update');
    Route::post('/user/delete/{id}', 'App\Http\Controllers\UserController@destroy');
    Route::post('/user/agregarRolUsuario/{id}', 'App\Http\Controllers\UserController@AgregarRolUsuario');*/

});


Route::get('/', function () {
    return view('welcome');
});
