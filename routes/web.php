<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEjercicio1;

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

Route::get('/ej1', [controladorEjercicio1::class, 'ej1']);
Route::get('/ej2/{textoEj2}', [controladorEjercicio1::class, 'ej2']);
Route::get('/ej3/primeraView', [controladorEjercicio1::class, 'ej3']);
Route::get('/parametros/{param1}/{param2}/{param3}/{param4}',  [controladorEjercicio1::class, 'ej4']);
