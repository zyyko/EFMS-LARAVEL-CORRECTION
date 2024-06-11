<?php

use App\Http\Controllers\BatimentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelController;
use App\Http\Middleware\Middleware1;
use App\Http\Middleware\Middleware2;
use App\Http\Middleware\Middleware3;
use App\Http\Controllers\FormController;
use App\Models\Batiment;

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




//Route::resource('batiments', BatimentsController::class)->middleware('auth');


Route::resource('batiments', BatimentsController::class);
Route::get('/batiments/filter/{type}', [BatimentsController::class, 'filter']);
