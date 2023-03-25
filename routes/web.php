<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\ProduitController;
// use App\Http\Controllers\VentesController;
use Illuminate\Support\Facades\Auth;



Route::post('/contacts/ajouter_client', [ContactController::class, 'add_client']);
Route::post('sauvegarder_client', [ContactController::class, 'save_client']);
Route::post('/update_client',[ContactController::class , 'update_client']);
Route::post('/update_employe',[ContactController::class , 'update_employe']);
Route::post('save_fournisseur', [ContactController::class, 'save_fournisseur']);
Route::post('/update_fournisseur',[ContactController::class , 'update_fournisseur']);

Auth::routes();

Route::get('/home',[ContactController::class, 'clients'])->name('/home');


Route::fallback([Controller::class , 'error404']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
