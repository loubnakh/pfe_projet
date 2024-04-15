<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\headerController;
use App\Http\Controllers\emprunteursController;
Route::get('/', [homeController::class, 'index'])->name('library.index');
Route::get('/Type-employe', [UserController::class, 'type_employe'])->name('type_employe');
Route::get('/login/{type}', [LoginController::class, 'show'])->name('login.type');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/forgot', [UserController::class, 'forgot']);
Route::get('/reset', [UserController::class, 'reset']);
Route::get('/books', [bookController::class, 'index'])->name('library.main');
Route::get('/Contact', [headerController::class, 'Contact']);


Route::resource('Emprunteurs', 'App\Http\Controllers\emprunteursController');

Route::get('/Emprunteur', [emprunteursController::class, 'index'])->name('Emprunteurs.index');

Route::get('/Emprunteur/create', [emprunteursController::class, 'create'])->name('Emprunteurs.create');
Route::post('/Emprunteur', [emprunteursController::class, 'store'])->name('Emprunteurs.store');

Route::get('/Emprunteur/{emprunteur}', [emprunteursController::class, 'show'])->name('Emprunteurs.show');

Route::put('/Emprunteurs/{emprunteurs}', [emprunteursController::class, 'update'])->name('Emprunteurs.update');
Route::delete('/Emprunteurs/{emprunteurs}', [emprunteursController::class, 'destroy'])->name('Emprunteurs.destroy');


use App\Http\Controllers\OuvragesController;

Route::resource('ouvrage', 'App\Http\Controllers\OuvragesController');

Route::get('/ouvrage', [OuvragesController::class, 'index'])->name('ouvrages.index');

Route::get('/ouvrage/create', [OuvragesController::class, 'create'])->name('ouvrages.create');
Route::post('/ouvrage', [OuvragesController::class, 'store'])->name('ouvrages.store');

Route::get('/ouvrage/{ouvrage}', [OuvragesController::class, 'show'])->name('ouvrages.show');
Route::get('/ouvrage/{ouvrage}/edit', [OuvragesController::class, 'edit'])->name('ouvrages.edit');

Route::put('/ouvrage/{ouvrage}', [OuvragesController::class, 'update'])->name('ouvrages.update');
Route::delete('/ouvrage/{ouvrage}', [OuvragesController::class, 'destroy'])->name('ouvrages.destroy');




