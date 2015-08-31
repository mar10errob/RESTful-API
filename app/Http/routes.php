<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('vehiculos', 'VehiculoController',['only'=>['index','show']]);
Route::resource('fabricantes', 'FabricanteController',['except' => ['create','edit']]);
Route::resource('fabricantes.vehiculos', 'FabricanteVehiculoController',['except' => ['show','create','edit']]);

Route::pattern('other', '.*');

Route::any('/{other}',function(){
    return response()->json(['mensaje' => 'Rutas o metodos incorrectos', 'codigo' => 400],400);
});
