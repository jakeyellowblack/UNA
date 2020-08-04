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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

///Rutas regulares hacia Home y Login
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'Auth\LoginController@login')->name('login');

///Importaciones y exportaciones de archivos
Route::get('presu-list-excel',    'PresupuestoController@exportExcel')->name('presupuesto.presupuesto');
Route::post('import-list-excel', 'PresupuestoController@importExcel')->name('presupuesto.import');

Route::get('nomi-list-excel',    'NominaController@exportExcel')->name('nomina.nomina');
Route::post('import-list-excel', 'NominaController@importExcel')->name('nomina.import');

//Index y Show de Presupuesto
Route::get('tpresupuesto','PresupuestoController@index')->name('tpresupuesto');
Route::get('tpresupuesto','PresupuestoController@show')->name('tpresupuesto');

Route::get('tnomina','NominaController@index')->name('tnomina');
Route::get('tnomina','NominaController@show')->name('tnomina');

///RRutas de controladores creados
Route::resource('/user', 'UserController')->names('user');
Route::resource('presupuesto', 'PresupuestoController');
