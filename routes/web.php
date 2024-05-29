<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


/*

//muestra una lista de usuarios
Route::get('/usuarios','usuarioController@index')->name('usuarios.index');

//muestra el formulariopar crear un nuevo usuario
Route::get('/usuarios/create','usuarioController@index')->name('usuarios.create');

//almacena un nuevo usuario
Route::get('/usuarios','usuarioController@store')->name('usuarios.store');

//muestra un usuario especifico
Route::get('/usuarios/{id}','usuarioController@show')->name('usuarios.show');

//muestra el formulario para editar un usuario
Route::get('/usuarios/{id}/edit','usuarioController@edit')->name('usuarios.edit');

//actualiza un usuario especifico
Route::put('/usuarios/{id}','usuarioController@update')->name('usuarios.update');
Route::patch('/usuarios/{id}','usuarioController@update');

//elimina un usuario especifico
Route::get('/usuarios/{id}','usuarioController@destroy')->name('usuarios.destroy');


*/



Route::resource('/usuarios',usuarioController::class);

Route::resource('/paises',paisController::class);

Route::resource('/inquilinos',inquilinoController::class);

Route::resource('/alquileres',alquilerController::class);

Route::resource('/propietarios',propietarioController::class);

Route::resource('/departamentos',departamentoController::class);

//Route::resource('/propietarios',PropietarioController::class);
