<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CochesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/crearCoche', [CochesController::class, 'create'])->name('crearCoche');

Route::delete('/deleteCoche/{id}', [CochesController::class, 'destroy'])->name('deleteCoche');

Route::post('/editarCoche/{id}', [CochesController::class, 'editCar'])->name('editarCoche');

Route::post('/buscarCoches', [CochesController::class, 'buscarCochesByMatricula'])->name('buscarCochesByMatricula');

Route::post('/buscarCochesFiltro', [CochesController::class, 'buscarCochesConFiltro'])->name('buscarCochesConFiltro');