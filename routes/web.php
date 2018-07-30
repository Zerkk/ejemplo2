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

Route::resource('cuadrados', 'CuadradosMediosController');
Route::resource('productos', 'ProductosMediosController');
Route::resource('constante', 'MultiplicacionConstanteController');
Route::resource('congruencia/lineal', 'CongruenciaLinealController');
Route::resource('congruencia/cuadratica', 'CongruenciaCuadraticaController');
Route::resource('pruebas/medias', 'PruebasMediasController');
Route::resource('chi_cuadrado', 'ChiCuadradoController');
Route::resource('promedioCntr', 'PromedioController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
