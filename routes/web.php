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
use app\Http\Providers\usuario;
/*Route::get('prueba', function(){
	return "llamada desde el ruter";
});
Route::get('nombre/{nombre}',function($nombre){
	return "Mi nombre es: ".$nombre;
});
Route::get('edad/{edad}',function($edad){
	return "Mi edad es: ".$edad;
});
Route::get('nombreopcional/{nombre?}', function($nombre = "jonh"){
	return "mi nombre es: ".$nombre;
});*/
Route::get('/', function () {
    return view('auth/login');
});

//Route::get('/', 'frontController@index');
Route::get('/index', 'frontController@index');
Route::get('/crearAdo', 'frontController@crearAdo');
Route::get('/informes', 'frontController@Informes');
Route::get('/crearUsuario', 'frontController@crearUsuario');
Route::get('/buscarAdo', frontController@buscarAdo);

//Route::resource('usuario', 'UsuarioController');
Auth::routes();


