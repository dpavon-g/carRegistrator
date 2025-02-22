<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CochesController;

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

Route::get('/coches', [CochesController::class, 'index'])->name('index');

Route::get('/coches/{idMatricula}', [CochesController::class, 'show'])->name('coches');

Route::get('/buscarCoches', [CochesController::class, 'buscar'])->name('buscarCoches');

Route::get('/filtrarCoches', [CochesController::class, 'filtrar'])->name('filtrarCoches');