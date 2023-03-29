<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactController;
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

Auth::routes();

// Route::get('/home',[ContactController::class, 'clients'])->name('/home');
Route::get('/home',[Controller::class, 'index'])->name('/home');



Route::fallback([Controller::class , 'error404']);
Route::get('/', function(){
    return view('index');
});



// Produit routes
// PRODUCTS

// Route::get('/produits-et-services/liste-produits', [ ProduitController::class, 'produits'])->name('/produits-et-services/liste-produits');

// Route::get('/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('/produits-et-services/produits/ajouter-produit');
// // add product post request:
// Route::post('/sauvegarder_produit', [ProduitController::class, 'save_product']);

// Route::get('/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('/produits-et-services/produits/edit');

// // SERVICES
// Route::get('/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('/produits-et-services/produits/services');

// Route::get('/produits-et-services/service/ajouter_service', [ProduitController::class, 'add_service'])->name('/produits-et-services/service/ajouter_service');

// Route::get('/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('/produits-et-services/services/edit');


// //---------------------------         price-update   -------------------------------------

// Route::get('/produits-et-services/mise-a-jour-prix',[ProduitController::class,'price_update'])->name('/produits-et-services/price-update/edit');

// //---------------------------         price_rules   -------------------------------------
// Route::get('/produits-et-services/regles-de-prix',[ProduitController::class,'price_rules'])->name('/produits-et-services/regles-de-prix/list');

// Route::get('/produits-et-services/regles-de-prix/create',[ProduitController::class,'add_price_rule'])->name('/produits-et-services/regles-de-prix/create');

// Route::get('/produits-et-services/regles-de-prix/{id}',[ProduitController::class,'price_rule_profile'])->name('/produits-et-services/regles-de-prix/edit');

// Route::get('/produits-et-services/products-settings/product-tags',[ProduitController::class,'product_tags'])->name('produits-et-services/products-settings/product-tags');

// // MISE A JOUR DES PRIX
// Route::get('/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('/produits-et-services/maj_prix');
