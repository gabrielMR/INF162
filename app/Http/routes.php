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


Route::get('/login', function () {
    return view('login');
});
/*login XD*/
Route::get('/',"Auth\AuthController@getLogin");
Route::post('/',"Auth\AuthController@postLogin");
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/*login xd end*/
/*por favor no se rian de mis comentarios*/


Route::get('/empleado',"EmpleadoController@getIndex");
Route::get('/regi', "RegistrarController@getindex");
Route::post('/regi', "RegistrarController@postindex");

Route::get('/cargar/{fe}', "CambiarController@cambio");
Route::get('/cargar1/{mes}', "CambiarController@cambio1");

