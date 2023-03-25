<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\ProduitController;
// use App\Http\Controllers\VentesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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

Route::get('/home',[ContactController::class, 'clients'])->name('/home');


Route::fallback([Controller::class , 'error404']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Produit routes
// PRODUCTS

Route::get('/produits-et-services/liste-produits', [ ProduitController::class, 'produits'])->name('/produits-et-services/liste-produits');

Route::get('/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('/produits-et-services/produits/ajouter-produit');
// add product post request:
Route::post('/sauvegarder_produit', [ProduitController::class, 'save_product']);

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
Route::get('/ventes/bons-commande/ajouter-bon-commande',[VentesController::class,'createBonCommande'])->name('ventes.bons-commande.ajouter-bon-commande');
Route::get('/ventes/bons-commande/{id}',[VentesController::class,'bonCommandeProfile'])->name('ventes.bons-commande.profile');
Route::get('/ventes/bons-commande',[VentesController::class,'bonsCommande'])->name('ventes.bons-commande');
Route::get('/ventes/bons-commande/edit/{id}',[VentesController::class,'editBoncommande'])->name('ventes.bons-commande.edit');
Route::get('/ventes/bons-commande/pdf',[VentesController::class,'imprimerPdfBonCommande'])->name('ventes.bons-commande.pdf');


//Factures
Route::get('/ventes/factures',[VentesController::class,'factures'])->name('ventes.factures');
Route::get('/ventes/factures/pdf',[VentesController::class,'imprimerPdffacture'])->name('ventes.factures.pdf');
Route::get('/ventes/factures/ajouter-facture',[VentesController::class,'createFacture'])->name('ventes.factures.ajouter-facture');
Route::get('/ventes/factures/{id}',[VentesController::class,'factureProfile'])->name('ventes.factures.edit');

// Bons de livraison
Route::get('/ventes/bons-livraison/ajouter-bon-livraison',[VentesController::class,'createBonLivraison'])->name('ventes.Bons-livraison.ajouter-bon-livraison');
Route::get('/ventes/bons-livraison',[VentesController::class,'bonslivraison'])->name('ventes.Bons-livraison');
Route::get('/ventes/bons-livraison/pdf',[VentesController::class,'bonsLivrainsonPdf'])->name('ventes.Bons-livraison.pdf');
Route::get('/ventes/bons-livraison/edit/{id}',[VentesController::class,'editBonLivraison'])->name('ventes.Bons-livraison.edit');
Route::get('/ventes/bons-livraison/{id}',[VentesController::class,'profileBonLivraison'])->name('ventes.Bons-livraison.profileBonsLivraison');


Route::controller(VentesController::class)
        ->prefix('ventes')
        ->group(function(){

            /*-----------------------------Product Returns-------------------------------*/
            Route::get('/product-returns','productReturns')->name('ventes.product-returns.list');
            Route::get('/product-returns/create','createProductReturn')->name('ventes.product-returns.create');
            Route::get('/product-returns/pdf','productReturnPdf')->name('ventes.product-returns.Pdf');
            Route::get('/product-returns/edit/{id}','editProductReturn')->name('ventes.product-returns.edit');
            Route::get('/product-returns/{id}','profileProductReturn')->name('ventes.product-returns.profile');

            /*--------------------------Avoirs--------------------------------*/
            Route::get('/avoirs','listAvoirs')->name('ventes.avoirs');
            Route::get('/avoirs/pdf','avoirPdf')->name('ventes.avoirs.pdf');
            Route::get('/avoirs/edit/{id}','editAvoir')->name('ventes.avoirs.edit');
            Route::get('/avoirs/{id}','profiletAvoir')->name('ventes.avoirs.profile');

            /*-----------------------Remboursements-----------------------------*/
            Route::get('/refunds','listRefunds')->name('ventes.refunds');
            Route::get('/refunds/pdf','refundsPdf')->name('ventes.refunds.pdf');
            Route::get('/refunds/edit/{id}','editRefunds')->name('ventes.refunds.edit');
            Route::get('/refunds/{id}','profileRefunds')->name('ventes.refunds.profile');

        });
Route::fallback([Controller::class , 'error404']);
