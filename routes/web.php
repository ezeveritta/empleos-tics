<?php

use App\Http\Controllers\BusquedasController;
use App\Http\Controllers\InscripcionesController;
use App\Http\Controllers\RubrosController;
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


Route::get('/', [RubrosController::class, 'show']);

Route::get('/busquedas/{rubros:descripcion}', [BusquedasController::class, 'show']);

Route::post('inscribirse', [InscripcionesController::class, 'store']);
