<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

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

Route::get('/',[PublicController::class,'homepage'])->name('homepage');

Route::get('/categoria/{category}',[PublicController::class,'categoryShow'])->name('categoryShow');

Route::get('/Products/Create',[ProductController::class,'create'])->middleware(Authenticate::class)->name('Products.create');

Route::get('/Dettaglio/prodotto/{product}',[ProductController::class,'show'])->name('Products.show');

Route::get('/tutti/prodotti',[ProductController::class,'index'])->name('Products.index');

//Ricerca annuncio
Route::get('/ricerca/annuncio',[PublicController::class,'searchProducts'])->name('Products.search');

// rotte revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accetta/annuncio/{product}',[RevisorController::class,'acceptProduct'])->middleware('isRevisor')->name('revisor.accept_product');

Route::patch('/rifiuta/annuncio/{product}',[RevisorController::class,'rejectProduct'])->middleware('isRevisor')->name('revisor.reject_product');

Route::get('richiesta/revisore',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('rendi/revisore{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

//Rotta per annullare l'operazione
Route::patch('/resume/annuncio/{product}',[RevisorController::class,'resumeProduct'])->middleware('isRevisor')->name('revisor.resume_product');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');
