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
// Voy a crear mi propia ruta API con muchos saludos y exitos 
Route::get('prueba', function(){
    return("Mensaje desde web.php");
});

Route::get('/', function () {
    return view('welcome');
});
