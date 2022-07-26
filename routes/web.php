<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('/',[PostController::class,'accueil']);


Route::get('categorie',[PostController::class,'categorie']);


Route::get('connexion',[PostController::class,'connexion']);


Route::get('contact',[PostController::class,'contact']);

Route::get('paiement',[PostController::class,'paiement']);

Route::get('detailproduit',[PostController::class,'detailproduit']);

Route::get('panier',[PostController::class,'panier']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
