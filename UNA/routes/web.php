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

///Rutas de controladores creados

//Ingreso
Route::resource('ingreso','IngresoController')->names('ingreso');
//Egreso
Route::resource('egreso','EgresoController')->names('egreso');
//Cierre
Route::resource('cierre','CierreController')->names('cierre');
//User
Route::resource('user', 'UserController')->names('user');

///PRESUPUESTO
Route::resource('presupuesto', 'PresupuestoController')->names('presupuesto');
Route::get('home','PresupuestoController@chart')->name('home');

///NOMINA
Route::resource('nomina', 'NominaController')->names('nomina');


Route::middleware(['auth'])->group(function(){
	//User
	Route::get('user', 'UserController@index')->name('user.index')->middleware('can:users.index');
	Route::get('user_create', 'UserController@create')->name('user.create')->middleware('can:users.create');
	Route::post('user','UserController@store')->name('user.store')->middleware('can:users.store');
	//show
	//edit
	Route::put('user', 'UserController@update')->name('user.update')->middleware('can:users.update');
	Route::delete('user', 'UserController@destroy')->name('user.destroy')->middleware('can:users.destroy');

	//Cuenta
	Route::get('cuenta','CuentaController@index')->name('cuenta.index')->middleware('can:cuenta.index');
	Route::get('cuenta_create','CuentaController@create')->name('cuenta.create')->middleware('can:cuenta.create');
	Route::post('cuenta_store', 'CuentaController@store')->name('cuenta.store')->middleware('can:cuenta.store');
	Route::get('cuenta','CuentaController@show')->name('cuenta.index')->middleware('can:cuenta.show');
	//edit
    Route::put('cuenta', 'CuentaController@update')->name('cuenta.update')->middleware('can:cuenta.update');
	Route::delete('cuenta', 'CuentaController@destroy')->name('cuenta.destroy')->middleware('can:cuenta.destroy');

	//Cuenta export
	Route::get('cuenta-list-excel','CuentaController@exportExcel')->name('cuenta.cuenta')->middleware('can:cuenta.cuenta');

	//Reformulación
	Route::get('reformulacion', 'ReformulacionController@index')->name('reformulacion.index')->middleware('can:reformulacion.index');
	Route::get('reformulacion_create', 'ReformulacionController@create')->name('reformulacion.create')->middleware('can:reformulacion.create');
	Route::post('reformulacion_store', 'ReformulacionController@store')->name('reformulacion.store')->middleware('can:reformulacion.store');
	//show
	//edit
	Route::put('reformulacion', 'ReformulacionController@update')->name('reformulacion.update')->middleware('can:reformulacion.update');
	Route::delete('reformulacion', 'ReformulacionController@destroy')->name('reformulacion.destroy')->middleware('can:reformulacion.destroy');

	//Movimiento Reformulación
	Route::get('reformulacion_movimiento', 'ReformulacionController@movimiento')->name('reformulacion.movimiento')->middleware('can:reformulacion.movimiento');
	Route::put('reformulacion_movimiento', 'ReformulacionController@update_movimiento')->name('refmovimiento.update')->middleware('can:refmovimiento.update');
	Route::delete('reformulacion_movimiento', 'ReformulacionController@destroy_movimiento')->name('refmovimiento.destroy')->middleware('can:refmovimiento.destroy');

	//Presupuesto
	Route::get ('tpresupuesto','PresupuestoController@index')->name('tpresupuesto')->middleware('can:presupuesto.index');
	Route::post('tpresupuesto','PresupuestoController@store')->name('tpresupuesto.store')->middleware('can:presupuesto.store');
	Route::get('listpresupuesto','PresupuestoController@show')->name('listpresupuesto')->middleware('can:presupuesto.show');

	//Presupuesto Export e Import
	Route::get('presu-list-excel',    'PresupuestoController@exportExcel')->name('presupuesto.presupuesto')->middleware('can:presupuesto.presupuesto');
	Route::post('presu-import-list-excel', 'PresupuestoController@importExcel')->name('presupuesto.import')->middleware('can:presupuesto.import');

	//Nomina
	Route::get('nomina','NominaController@index')->name('nomina.index')->middleware('can:nomina.index');
	Route::post('nomina_store','NominaController@store')->name('nomina.store')->middleware('can:nomina.store');
	Route::get('nomina_create','NominaController@create')->name('nomina.create')->middleware('can:nomina.create');

	//Nomina Export e Import
	Route::get('nomi-list-excel',    'NominaController@exportExcel')->name('nomina.nomina')->middleware('can:nomina.nomina');
	Route::post('import-list-excel', 'NominaController@importExcel')->name('nomina.import')->middleware('can:nomina.import');

	//Movimiento de Nomina
	Route::get('nomina_movimiento', 'NominaController@movimiento')->name('nomina.movimiento')->middleware('can:nomina.movimiento');
	Route::put('nomina_movimiento', 'NominaController@update_movimiento')->name('nomovimiento.update')->middleware('can:nomovimiento.update');
	Route::delete('nomina_movimiento', 'NominaController@destroy_movimiento')->name('nomovimiento.destroy')->middleware('can:nomovimiento.destroy');


});