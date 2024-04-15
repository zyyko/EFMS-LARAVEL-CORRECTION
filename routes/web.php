<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelController;
use App\Http\Middleware\Middleware1;
use App\Http\Middleware\Middleware2;
use App\Http\Middleware\Middleware3;
use App\Http\Controllers\FormController;
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

// Controle laravel 1 :
// Route::get("/home", [LaravelController::class, "index"]);
// Route::get("/affichage", [LaravelController::class, "show"])->name("affichage")
// ->middleware(Middleware1::class, Middleware2::class, Middleware3::class);

Route::resource('Produit', FormController::class);
