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

Route::get('/contacts/clients/{id}', [ContactController::class, 'client_profile'])->name('/contacts/clients');

// EMPLOYEES
Route::get('/contacts/employes', [ContactController::class, 'employes'])->name('/contacts/employes');

Route::get('/contacts/employes/ajouter-employe', [ContactController::class, 'add_employe'])->name('/contacts/employes/ajouter_employe');

Route::get('/contacts/employes/{id}', [ContactController::class, 'employee_profile'])->name('contacts/employes/profile');

// FOURNISSUERS
Route::get('/contacts/fournisseurs', [ContactController::class, 'fournisseurs'])->name('/contacts/fournisseurs');

Route::get('/contacts/fournisseurs/ajouter-fournisseur', [ContactController::class, 'add_fournisseur'])->name('/contacts/fournisseurs/ajouter_fournisseur');

Route::get('/contacts/fournisseurs/{id}', [ContactController::class, 'fournisseur_profile'])->name('contacts/fournisseurs/profile');

// Produit routes
// PRODUCTS

Route::get('/produits-et-services/liste-produits', [ ProduitController::class, 'produits'])->name('/produits-et-services/liste-produits');

Route::get('/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('/produits-et-services/produits/ajouter-produit');

Route::get('/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('/produits-et-services/produits/{id}');

// SERVICES
Route::get('/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('/produits-et-services/produits/services');

Route::get('/produits-et-services/services/ajouter_service', [ProduitController::class, 'add_services'])->name('/produits-et-services/services/ajouter_service');

Route::get('/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('/produits-et-services/services/{id}');

// MISE A JOUR DES PRIX
Route::get('/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('/produits-et-services/maj_prix');


// VENTES
//




Route::fallback([Controller::class , 'error404']);
