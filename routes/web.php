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
    return view('index');
});



  Route::get('/clear-cache', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
    });

Route::name('/')->get('/','InicioController@INDEX');

Route::get('login','AccesoController@login')->name('login');
Route::POST('/valida','AccesoController@valida')->name('valida');
Route::get('recuperar','AccesoController@recuperar')->name('recuperar');
Route::post('restaurar', 'AccesoController@restaurar')->name('restaurar');

Route::get('/cerrarsesion','AccesoController@cerrarsesion')->name('cerrarsesion');
Route::get('/principal','AccesoController@principal')->name('principal');

  Route::get('/clear-cache', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
    });

//usuarios

Route::get('altau','UsuariosC@altau')->name('altau');
Route::get('guardaru','UsuariosC@guardaru')->name('guardaru');
Route::get('consultau','UsuariosC@consultau')->name('consultau');
Route::get('/editaru/{id}','UsuariosC@editaru')->name('editaru');
Route::get('/modificau/{id}','UsuariosC@modificau')->name('modificau');
Route::get('/eliminaru/{id}','UsuariosC@eliminaru')->name('eliminaru');

//Clientes
Route::get('altac','ClientesC@altac')->name('altac');
Route::get('guardarc','ClientesC@guardarc')->name('guardarc');
Route::get('consultac','ClientesC@consultac')->name('consultac');
Route::get('/editarc/{id}','ClientesC@editarc')->name('editarc');
Route::get('/modificac/{id}','ClientesC@modificac')->name('modificac');
Route::get('/eliminarc/{id}','ClientesC@eliminarc')->name('eliminarc');


// Empleados
Route::get('altae','EmpleadosC@altae')->name('altae');
Route::get('guardare','EmpleadosC@guardare')->name('guardare');
Route::get('consultae','EmpleadosC@consultae')->name('consultae');
Route::get('/editare/{id}','EmpleadosC@editare')->name('editare');
Route::get('/modificae/{id}','EmpleadosC@modificae')->name('modificae');
Route::get('/eliminare/{id}','EmpleadosC@eliminare')->name('eliminare');

// Productos
Route::get('altap','ProductosC@altap')->name('altap');
Route::get('guardarp','ProductosC@guardarp')->name('guardarp');
Route::get('consultap','ProductosC@consultap')->name('consultap');
Route::get('/editarp/{id}','ProductosC@editarp')->name('editarp');
Route::get('/modificap/{id}','ProductosC@modificap')->name('modificap');
Route::get('/eliminarp/{id}','ProductosC@eliminarp')->name('eliminarp');

// Ventas
Route::get('altav','VentasC@altav')->name('altav');
Route::get('guardarv','VentasC@guardarv')->name('guardarv');
Route::get('consultav','VentasC@consultav')->name('consultav');
Route::get('/editarv/{id}','VentasC@editarv')->name('editarv');
Route::get('/modificav/{id}','VentasC@modificav')->name('modificav');
Route::get('/eliminarv/{id}','VentasC@eliminarv')->name('eliminarv');






















