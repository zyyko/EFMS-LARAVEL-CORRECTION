<?php

use App\Http\Controllers\RendezVousController;
use App\Http\Middleware\Authenticate;
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


Route::get('/', [RendezVousController::class, 'index'])->name('home');
Route::get('/ajout', [RendezVousController::class, 'create']);
Route::post('/ajout', [RendezVousController::class, 'enregistrer'])->name('enregistrer');
