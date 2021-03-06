<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles/{nombre}', function($nombre){
	echo 'El nombre que has colocado es: ' . $nombre;
});

Route::get('/view/{id}', [
	"uses"	=>	"TestController@view"
]);