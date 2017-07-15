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
//creamos nuestro primer grupo de rutas para el panel de adminstracion
Route::group(['prefix'=>'admin'], function(){
 	//creamos las rutas del grupo
 	Route::resource('users','UsersController'); // toma los metodos de un controlador y los define como rutas automaticamente mapea todos los metodos crud de user controller
 	Route::get('users/destroy/{id?}',[
 		'uses'=> 'UsersController@destroy',
 		'as'=>		'admin.users.destroy'
 		]);

 	//agregamos otro route para que pueda mapear y retornar un usuario por medio de get
 	Route::get('users/show/{id}',[
 		'uses'	=>	'UsersController@show',
 		'as'	=>	'admin.user.show'
 		]);
 	//agregamos otro route para que pueda mapear y retornar un usuario por medio de get
 	Route::get('users/edit/{id}',[
 		'uses'	=>	'UsersController@edit',
 		'as'	=>	'admin.user.edit'
 		]);
});







//creamos una ruta de prueba para ver si nos redirige 
Route::get('arti',function(){
	echo 'esta es la seccion de articulos';
});
//creamos una ruta con parametros
Route::get('ruta/{nombre?}', function($nombre="no coloco nombre"){ // el signo de interrogacion es para parametros opcionales, si no imgresa ningun nombre, le asignamos uno en la funcion.
	echo "se ha ingresado el nombre $nombre";
});

//creamos un grupo de rutas para probar el controlador test
Route::group(['prefix'=>'test'],function(){
	//creamos la primera ruta
	Route::get('articles/{id}',[
		'uses'=>'TestController@details', //el nombre del controlador y la vista a utilizar
		'as'=>	'articlesDetails'
		]);
});