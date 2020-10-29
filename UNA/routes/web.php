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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function () {
    return redirect('login');
});

app('view')->addNamespace('views', resource_path('views'));

///Rutas regulares hacia Home y Login
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'Auth\LoginController@login')->name('login');

///Importaciones y exportaciones de archivos
Route::get('presu-list-excel',    'PresupuestoController@exportExcel')->name('presupuesto.presupuesto');
Route::post('presu-import-list-excel', 'PresupuestoController@importExcel')->name('presupuesto.import');

Route::get('nomi-list-excel',    'NominaController@exportExcel')->name('nomina.nomina');
Route::post('import-list-excel', 'NominaController@importExcel')->name('nomina.import');

//Index y Show de Presupuesto
Route::get('tpresupuesto','PresupuestoController@index')->name('tpresupuesto');
Route::get('tpresupuesto','PresupuestoController@show')->name('tpresupuesto');
Route::resource('listpresupuesto', 'PresupuestoController')->names('listpresupuesto');

Route::get('tnomina','NominaController@index')->name('tnomina');
Route::get('tnomina','NominaController@show')->name('tnomina');
Route::resource('listnomina', 'NominaController')->names('listnomina');


///Rutas de controladores creados

//Ingreso
Route::resource('ingreso','IngresoController')->names('ingreso');
//Egreso
Route::resource('/egreso','EgresoController')->names('egreso');
//Cierre
Route::resource('/cierre','CierreController')->names('cierre');

///USER
Route::get('user', 'UserController@index')->name('user');
Route::get('create', 'UserController@create')->name('user.create');
//Route::get('useredit/{user_id}/edit', 'UserController@edit')->name('users.edit');
//Route::get('users/{user_id}/destroy', 'UserController@destroy')->name('users.destroy');
Route::resource('user', 'UserController')->names('user');

///PRESUPUESTO
Route::resource('/presupuesto', 'PresupuestoController')->names('presupuesto');


//Route::resource('/presupuesto', 'PresupuestoController');
//Route::put('presupuesto/{id}','PresupuestoController@update')->name('presupuesto.update');

///NOMINA
Route::resource('/nomina', 'NominaController')->names('nomina');


