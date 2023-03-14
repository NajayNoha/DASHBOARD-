<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VentesController;


// home page routes
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/app/{op}', [Controller::class , 'index'])->name('/app/{op}');

// authentication request routes
Route::post('register' , [AuthController::class , 'register']);
Route::post("login", [AuthController::class,'login']);
Route::redirect('/login', 'contacts/clients');

// Contact Routes
Route::get('/app/{op}', [Controller::class , 'index'])->name('/app/{op}');

    // client list
Route::get('/contacts/clients', [ContactController::class, 'clients'])->name('/contacts/clients');

    // add client
Route::get('/contacts/ajouter_client', [ContactController::class, 'add_client'])->name('/contacts/ajouter_client');
Route::post('/contacts/ajouter_client', [ContactController::class, 'add_client']);
Route::post('sauvegarder_client', [ContactController::class, 'save_client']);

    // client profile
Route::get('/contacts/clients/{id}', [ContactController::class, 'client_profile'])->name('/contacts/clients/profile');
Route::post('/update_client',[ContactController::class , 'update_client']);

    // delete client
Route::get('delete-client/{id}',[ContactController::class , 'delete_client']);


    // employee list
Route::get('/contacts/employes', [ContactController::class, 'employes'])->name('/contacts/employes');

    // add employee

Route::get('/contacts/employes/ajouter_employe', [ContactController::class, 'add_employe'])->name('/contacts/employes/ajouter_employe');
Route::post('/contacts/ajouter_employe', [ContactController::class, 'add_employe']);
Route::post('save_employe', [ContactController::class, 'save_employe']);

    // delete employee
Route::get('delete-employe/{id}',[ContactController::class , 'delete_employe']);

    // employee profile
Route::get('/contacts/employes/{id}', [ContactController::class, 'employee_profile'])->name('contacts/employes/profile');
Route::post('/update_employe',[ContactController::class , 'update_employe']);

Route::get('/contacts/fournisseur', [ContactController::class, 'fournisseurs'])->name('/contacts/fournisseurs');
    // add fournisseur
Route::post('save_fournisseur', [ContactController::class, 'save_fournisseur']);
    // delete fournisseur
Route::get('delete-fournisseur/{id}',[ContactController::class , 'delete_fournisseur']);
    // update fournisseur
Route::post('/update_fournisseur',[ContactController::class , 'update_fournisseur']);

Route::get('/contacts/fournisseurs/ajouter_fournisseur', [ContactController::class, 'add_fournisseur'])->name('/contacts/fournisseurs/ajouter_fournisseur');

Route::get('/contacts/fournisseurs/{id}', [ContactController::class, 'fournisseur_profile'])->name('contacts/fournisseurs/profile');


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
Route::get('/contacts/fournisseurs', [ContactController::class, 'fournisseurs'])->name('/contacts/fournisseurs');

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

// MISE A JOUR DES PRIX
Route::get('/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('/produits-et-services/maj_prix');


// VENTES
//
Route::get('/ventes/devis',[VentesController::class,'list_devis'])->name('ventes.devis.list');

Route::get('/ventes/devis/ajouter_devis',[VentesController::class,'create_devis'])->name('ventes.devis.create_devis');

Route::get('/ventes/devis/edit/{id}',[VentesController::class,'devisProfile'])->name('ventes.devis.devisProfile');

Route::get('/ventes/devis/pdf',[VentesController::class,'imprimerPdf'])->name('ventes.devis.pdf');


//Bons de commande  
Route::get('/ventes/bons-commande',[VentesController::class,'bonsCommande'])->name('ventes.bons-commande');
Route::get('/ventes/bons-commande/{id}',[VentesController::class,'bonCommandeProfile'])->name('ventes.bons-commande.edit');
Route::get('/ventes/bons-commande/ajouter-bon-commande',[VentesController::class,'createBonCommande'])->name('ventes.bons-commande.ajouter-bon-commande');
Route::get('/ventes/bons-commande/pdf',[VentesController::class,'imprimerPdfBonCommande'])->name('ventes.bons-commande.pdf');

//Factures
Route::fallback([Controller::class , 'error404']);
