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


Route::get('/principal', 'CRUDController@index');

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password' =>'Auth\PasswordController',
]);

//ruta para el formulario de crear plato
Route::get('/platoForm', function () {
    $plats = DB::table('plats')->distinct()->lists('tipus');
    return view('crearPlatoForm',compact('plats'));
});

//ruta para el formulario de borrar plato
Route::get('/deletePlatoForm', function () {
    $plats = DB::table('plats')->distinct()->lists('nom');
    return view('deletePlatoForm',compact('plats'));
});

//ruta para crear plato
Route::get('/crearPlato', function () {
    return view('crearPlato');
});

Route::get('/mesa', function () {
    $mesas = DB::table('comanda')->distinct()->orderBy('taula', 'asc')->lists('taula');
    return view('mesa',compact('mesas'));
});

//Route::get('/pedido', function () {
//    return view('pedido');
//});

Route::get('borrar/{id}','CRUDController@borrarPedido');

Route::match(['get', 'post'], '/pedido', 'CRUDController@pedir');

Route::match(['get', 'post'], '/pedir', 'CRUDController@pedir');

Route::match(['get', 'post'], '/confirmar', 'CRUDController@confirmar');

//Route::match(['get', 'post'], '/borrar', 'CRUDController@borrarPedido');

//Route::get('/prueba', function () {
//    $plats = DB::table('plats')->distinct()->lists('tipus');
//    return view('prueba',compact('plats'));
//});
Route::match(['get', 'post'], '/prueba', 'CRUDController@prueba');

//ruta de crear plato y guardar en bbdd
Route::match(['get', 'post'], '/crearPlato', 'CRUDController@crear');

//ruta de borrar plato en bbdd
Route::match(['get', 'post'], '/deletePlato', 'CRUDController@borrar');

//ruta de leer datos de bbdd y mostrar en formato tabla
Route::match(['get', 'post'], '/showPlats', 'CRUDController@leer');

//ruta de leer platos de bbdd filtrados por AMANIDES
Route::match(['get', 'post'], '/amanides', 'CRUDController@amanides');
//ruta de leer platos de bbdd filtrados por BUTIFARRES
Route::match(['get', 'post'], '/butifarres', 'CRUDController@butifarres');
//ruta de leer platos de bbdd filtrados por COMPARTIR
Route::match(['get', 'post'], '/compartir', 'CRUDController@compartir');
//ruta de leer platos de bbdd filtrados por HAMBURGUESES
Route::match(['get', 'post'], '/hamburgueses', 'CRUDController@hamburgueses');
//ruta de leer platos de bbdd filtrados por SUGERENCIES
Route::match(['get', 'post'], '/sugerencies', 'CRUDController@sugerencies');

//ruta de leer platos de bbdd filtrados por numero de mesa
Route::match(['get', 'post'], '/showPlatTaula/{i}', 'CRUDController@mesa');


//ruta de pruebas
Route::get('/pruebasPlatos', function(){
    $plats = DB::table('plats')->distinct()->lists('tipus');
    dd($plats);
});

Route::group(['middleware'=>'web'], function() {
Route::auth();
Route::get('/','WelcomeController@index');
Route::get('/home', 'HomeController@index');
});
