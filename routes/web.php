<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelController;
use App\Http\Middleware\Middleware1;
use App\Http\Middleware\Middleware2;
use App\Http\Middleware\Middleware3;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProduitController;

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

//Question 11 

Route::get('/showProd', [ProduitController::class, 'index'])->name('afficher');
Route::get('/nouveau', [ProduitController::class, 'Nouveau_produit']);
Route::post('/creation', [ProduitController::class, 'Creation_produit'])->name('creationProd');
Route::get('/edition/{id}', [ProduitController::class, 'Edition_produit']);
Route::put('/edit/{id}', [ProduitController::class, 'Edit_produit']);
Route::delete('/delete/{id}', [ProduitController::class, 'Delete_produit']);
Route::get('/categorie/{id}', [CategorieController::class, 'ProduitsCategorie']);
