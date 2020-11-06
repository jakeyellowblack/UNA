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
Route::post('tpresupuesto','PresupuestoController@store')->name('tpresupuesto.store');
Route::get('listpresupuesto','PresupuestoController@show')->name('listpresupuesto');
Route::get('home','PresupuestoController@chart')->name('home');

///Rutas de controladores creados

//Ingreso
Route::resource('ingreso','IngresoController')->names('ingreso');
//Egreso
Route::resource('egreso','EgresoController')->names('egreso');
//Egreso
Route::resource('cierre','CierreController')->names('cierre');

//Cuentas
Route::get('cuenta','CuentaController@index')->name('cuenta.index');
Route::get('cuenta','CuentaController@show')->name('cuenta.index');
Route::get('cuenta_create','CuentaController@create')->name('cuenta.create');
Route::post('cuenta_store', 'CuentaController@store')->name('cuenta.store');
Route::get('cuenta-list-excel','CuentaController@exportExcel')->name('cuenta.cuenta');
Route::put('cuenta', 'CuentaController@update')->name('cuenta.update');
Route::delete('cuenta', 'CuentaController@destroy')->name('cuenta.destroy');


///USER
Route::get('user', 'UserController@index')->name('user');
Route::get('user_create', 'UserController@create')->name('user.create');
Route::resource('user', 'UserController')->names('user');

///REFORMULACIÓN
Route::get('reformulacion', 'ReformulacionController@index')->name('reformulacion.index');
Route::post('reformulacion_store', 'ReformulacionController@store')->name('reformulacion.store');
Route::get('reformulacion_movimiento', 'ReformulacionController@movimiento')->name('reformulacion.movimiento');
Route::get('reformulacion_create', 'ReformulacionController@create')->name('reformulacion.create');
Route::put('reformulacion', 'ReformulacionController@update')->name('reformulacion.update');
Route::delete('reformulacion', 'ReformulacionController@destroy')->name('reformulacion.destroy');
Route::put('reformulacion_movimiento', 'ReformulacionController@update_movimiento')->name('refmovimiento.update');
Route::delete('reformulacion_movimiento', 'ReformulacionController@destroy_movimiento')->name('refmovimiento.destroy');

///PRESUPUESTO
Route::resource('presupuesto', 'PresupuestoController')->names('presupuesto');
Route::resource('nomina', 'NominaController')->names('nomina');


///NOMINA
Route::get('nomina', 'NominaController@index')->name('nomina.index');
Route::post('nomina_store', 'NominaController@store')->name('nomina.store');
Route::get('nomina_create', 'NominaController@create')->name('nomina.create');
Route::get('nomina_movimiento', 'NominaController@movimiento')->name('nomina.movimiento');
Route::put('nomina_movimiento', 'NominaController@update_movimiento')->name('nomovimiento.update');
Route::delete('nomina_movimiento', 'NominaController@destroy_movimiento')->name('nomovimiento.destroy');