<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\ProduitController;
// use App\Http\Controllers\VentesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VentesController;
use Illuminate\Routing\Events\Routing;



Route::post('/contacts/ajouter_client', [ContactController::class, 'add_client']);
Route::post('sauvegarder_client', [ContactController::class, 'save_client']);
Route::post('/update_client',[ContactController::class , 'update_client']);
Route::post('/update_employe',[ContactController::class , 'update_employe']);
Route::post('save_fournisseur', [ContactController::class, 'save_fournisseur']);
Route::post('/update_fournisseur',[ContactController::class , 'update_fournisseur']);
Route::post('/update_service',[ServiceController::class , 'update_service']);
Route::post('/save_service',[ServiceController::class , 'save_service']);
Route::post('/sauvegarder_produit', [ProduitController::class, 'save_product']);
Route::post('/update_produit', [ProduitController::class, 'updateProduct']);
Route::get('delete-produit/{id}',[ProduitController::class , 'delete_produit']);
Route::post('/save_priceRule',[ProduitController::class , 'save_priceRule']);
Route::get('delete-pricerule/{id}',[ProduitController::class , 'delete_priceRule']);
Route::post('update_priceRule',[ProduitController::class , 'update_priceRule']);
Route::post('ajouter_marque',[ProduitController::class , 'ajouter_marque']);

Auth::routes();

// Route::get('/home',[ContactController::class, 'clients'])->name('/home');
Route::get('/home',[Controller::class, 'index'])->name('/home');


Route::fallback([Controller::class , 'error404']);
Route::get('/', function(){
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
