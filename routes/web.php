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
    return view('welcome');
});

//Rutas del Api
Route::get('/usuario/pruebas', 'User@pruebas');
//Ruta de productos
Route::get('/producto/productos', 'Productos@verpruductos');
//Rutas de usuario
Route::post('/usuario/registro', 'User@register');
Route::post('/usuario/login', 'User@login');