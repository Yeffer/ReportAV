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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
//Route::get('home/home', 'HomeController@index');
Route::get('rrhh', 'RrhhController@index');
Route::get('cargo', 'CargoController@index');
Route::get('tecnologia', 'TecnologiaController@index');
Route::get('financiero', 'FinancieroController@index');
Route::get('direccion', 'DireccionController@index');
Route::get('coordinador', 'CoordinadorController@index');
Route::get('inscripcion','InscripcionController@index');
Route::get('campaña','CampañaController@index');
Route::get('perfil','PerfilController@index');

//Guardar Datos Formulario De Perfiles

Route::post('rrhh/save', 'CargoController@save');
Route::post('rrhh/guardar', 'InscripcionController@guardar');

/**********************/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('searchUser', 'WelcomeController@SearchUser');