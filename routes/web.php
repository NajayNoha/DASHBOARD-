<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/app/{op}', [Controller::class , 'index'])->name('/app/{op}');


// Contacts Route
// CLIENTS
Route::get('/contacts/clients', [ContactController::class, 'clients'])->name('/contacts/clients');

Route::get('/contacts/ajouter-client', [ContactController::class, 'add_client'])->name('/contacts/ajouter_client');

Route::get('/contacts/clients/{id}', [ContactController::class, 'client_profile'])->name('/contacts/clients/profile');

// EMPLOYEES
Route::get('/contacts/employes', [ContactController::class, 'employes'])->name('/contacts/employes');

Route::get('/contacts/employes/ajouter-employe', [ContactController::class, 'add_employe'])->name('/contacts/employes/ajouter_employe');

Route::get('/contacts/employes/{id}', [ContactController::class, 'employee_profile'])->name('contacts/employes/profile');

// FOURNISSUERS
Route::get('/contacts/fournisseur', [ContactController::class, 'fournisseurs'])->name('/contacts/fournisseurs');

Route::get('/contacts/fournisseurs/ajouter-fournisseur', [ContactController::class, 'add_fournisseur'])->name('/contacts/fournisseurs/ajouter_fournisseur');

Route::get('/contacts/fournisseurs/{id}', [ContactController::class, 'fournisseur_profile'])->name('contacts/fournisseurs/profile');

// Produit routes
// PRODUCTS

Route::get('/produits-et-services/liste-produits', [ ProduitController::class, 'produits'])->name('/produits-et-services/liste-produits');

Route::get('/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('/produits-et-services/produits/ajouter-produit');

Route::get('/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('/produits-et-services/produits/edit');

// SERVICES
Route::get('/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('/produits-et-services/produits/services');

Route::get('/produits-et-services/service/ajouter_service', [ProduitController::class, 'add_service'])->name('/produits-et-services/service/ajouter_service');

Route::get('/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('/produits-et-services/services/edit');


//---------------------------         price-update   -------------------------------------

Route::get('/produits-et-services/mise-a-jour-prix',[ProduitController::class,'price_update'])->name('/produits-et-services/price-update/edit');

//---------------------------         price_rules   -------------------------------------
Route::get('/produits-et-services/regles-de-prix',[ProduitController::class,'price_rules'])->name('/produits-et-services/regles-de-prix/list');

Route::get('/produits-et-services/regles-de-prix/create',[ProduitController::class,'add_price_rule'])->name('/produits-et-services/regles-de-prix/create');

Route::get('/produits-et-services/regles-de-prix/{id}',[ProduitController::class,'price_rule_profile'])->name('/produits-et-services/regles-de-prix/edit');

Route::get('/produits-et-services/products-settings/product-tags',[ProduitController::class,'product_tags'])->name('produits-et-services/products-settings/product-tags');


Route::fallback([Controller::class , 'error404']);
