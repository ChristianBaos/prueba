<?php

use Illuminate\Support\Facades\Route;
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

/*Route::get('/', function () {
     return view('auth/login');
     //return view('welcome');
});*/
/*
Route::get('/', function () {
     $tarifa = App\Tipo_vehiculo::findOrFail();
     //$tarifa = App\Tipo_vehiculo::All();
     return $tarifa;
});*/

// Route::resource('vehiculo', 'VehiculoController');
// Route::resource('tarifa','TarifaController');

// Route::resource('ingresoV','Ingreso_vehiculoController');
// Route::resource('ticket','TicketController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// LAB 15 //

Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


//LAB 16 //

//Route::get('/', function() {
  //   return view('Practicasjq/index2');});
