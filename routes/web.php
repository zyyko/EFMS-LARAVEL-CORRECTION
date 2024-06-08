<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelController;
use App\Http\Middleware\Middleware1;
use App\Http\Middleware\Middleware2;
use App\Http\Middleware\Middleware3;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LivreController;

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


Route::get('/', [LivreController::class, 'index']);
Route::get('/ajouter', [LivreController::class, 'create']);
Route::post('/ajouter', [LivreController::class, 'store']);
Route::get('/edit/{id}', [LivreController::class, 'edit']);
Route::put('/update/{id}', [LivreController::class, 'update']);
Route::delete('/delete/{id}', [LivreController::class, 'destroy']);



Route::get('/login', function () {
    return "u must connect";
})->name('login');
