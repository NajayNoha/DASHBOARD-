<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\routing\ProduitController;
use App\Http\Controllers\VentesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth' , "user-role:employe"])->group(function()
    {
        // Route::get('/home',[ HomeController::class, "employeHome"])->name('home.employe');
        Route::get('/home',[ContactController::class, 'clients'])->name('home.employe');
        Route::get('employe/contacts/clients', [ContactController::class, 'clients'])->name('employe/contacts/clients');
        Route::get('employe/contacts/ajouter_client', [ContactController::class, 'add_client'])->name('employe/contacts/ajouter_client');
        Route::get('employe/contacts/client/{id}', [ContactController::class, 'client_profile'])->name('employe/contacts/client');

        // EMPLOYEES
        Route::get('employe/contacts/employes', [ContactController::class, 'employes'])->name('employe/contacts/employes');
        Route::get('employe/contacts/employes/{id}', [ContactController::class, 'employee_profile'])->name('employe/contacts/employes/profile');
        // FOURNISSUERS
        Route::get('employe/contacts/fournisseurs', [ContactController::class, 'fournisseurs'])->name('employe/contacts/fournisseurs');
        Route::get('employe/contacts/fournisseurs/ajouter-fournisseur', [ContactController::class, 'add_fournisseur'])->name('employe/contacts/fournisseurs/ajouter_fournisseur');
        Route::get('employe/contacts/fournisseurs/{id}', [ContactController::class, 'fournisseur_profile'])->name('employe/contacts/fournisseurs/profile');
        // routes Produit
        // PRODUCTS
        Route::get('employe/produits-et-services/liste-produits', [ ProductController::class, 'produits'])->name('employe/produits-et-services/liste-produits');
        Route::get('employe/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('employe/produits-et-services/produits/ajouter-produit');
        Route::get('employe/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('employe/produits-et-services/produits/{id}');

        // SERVICES
        Route::get('employe/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('employe/produits-et-services/produits/services');
        Route::get('employe/produits-et-services/services/ajouter_service', [ProduitController::class, 'add_services'])->name('employe/produits-et-services/services/ajouter_service');
        Route::get('employe/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('employe/produits-et-services/services/{id}');
        // MISE A JOUR DES PRIX

        //---------------------------         price-update   -------------------------------------

        Route::get('employe/produits-et-services/mise-a-jour-prix',[ProduitController::class,'price_update'])->name('employe/produits-et-services/price-update/edit');

        //---------------------------         price_rules   -------------------------------------
        Route::get('employe/produits-et-services/regles-de-prix',[ProduitController::class,'price_rules'])->name('employe/produits-et-services/regles-de-prix/list');

        Route::get('employe/produits-et-services/regles-de-prix/create',[ProduitController::class,'add_price_rule'])->name('employe/produits-et-services/regles-de-prix/create');

        Route::get('employe/produits-et-services/regles-de-prix/{id}',[ProduitController::class,'price_rule_profile'])->name('employe/produits-et-services/regles-de-prix/edit');

        Route::get('employe/produits-et-services/products-settings/product-tags',[ProduitController::class,'product_tags'])->name('employe/produits-et-services/products-settings/product-tags');

        // MISE A JOUR DES PRIX
        Route::get('employe/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('employe/produits-et-services/maj_prix');



        Route::get('employe/produits-et-services/liste-produits', [ ProduitController::class, 'produits'])->name('employe/produits-et-services/liste-produits');

        Route::get('employe/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('employe/produits-et-services/produits/ajouter-produit');

        Route::get('employe/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('employe/produits-et-services/produits/edit');

        // SERVICES
        Route::get('employe/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('employe/produits-et-services/produits/services');

        Route::get('/produits-et-services/service/ajouter_service', [ProduitController::class, 'add_service'])->name('employe/produits-et-services/service/ajouter_service');

        Route::get('/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('employe/produits-et-services/services/edit');


        //---------------------------         price-update   -------------------------------------

        Route::get('/produits-et-services/mise-a-jour-prix',[ProduitController::class,'price_update'])->name('employe/produits-et-services/price-update/edit');

        //---------------------------         price_rules   -------------------------------------
        Route::get('/produits-et-services/regles-de-prix',[ProduitController::class,'price_rules'])->name('employe/produits-et-services/regles-de-prix/list');

        Route::get('/produits-et-services/regles-de-prix/create',[ProduitController::class,'add_price_rule'])->name('employe/produits-et-services/regles-de-prix/create');

        Route::get('/produits-et-services/regles-de-prix/{id}',[ProduitController::class,'price_rule_profile'])->name('employe/produits-et-services/regles-de-prix/edit');

        Route::get('/produits-et-services/products-settings/product-tags',[ProduitController::class,'product_tags'])->name('employe/produits-et-services/products-settings/product-tags');

        // MISE A JOUR DES PRIX
        Route::get('/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('employe/produits-et-services/maj_prix');


        // VENTES
        //
        Route::get('ventes/devis/list',[VentesController::class,'list_devis'])->name('employe/ventes/devis/list');

        Route::get('employe/ventes/devis/ajouter_devis',[VentesController::class,'create_devis'])->name('employe/ventes/devis/create_devis');

        Route::get('employe/ventes/devis/edit/{id}',[VentesController::class,'devisProfile'])->name('employe/ventes/devis/devisProfile');

        Route::get('employe/ventes/devis/pdf',[VentesController::class,'imprimerPdf'])->name('ventes/devis/pdf');


        // //Bons de commande
        Route::get('employe/ventes/bons-commande/ajouter-bon-commande',[VentesController::class,'createBonCommande'])->name('employe/ventes/bons-commande/ajouter-bon-commande');
        Route::get('employe/ventes/bons-commande/{id}',[VentesController::class,'bonCommandeProfile'])->name('employe/ventes/bons-commande/profile');
        Route::get('employe/ventes/bons-commande',[VentesController::class,'bonsCommande'])->name('employe/ventes/bons-commande');
        Route::get('employe/ventes/bons-commande/edit/{id}',[VentesController   ::class,'editBoncommande'])->name('employe/ventes/bons-commande/edit');
        Route::get('employe/ventes/bons-commande/pdf',[VentesController::class,'imprimerPdfBonCommande'])->name('employe/ventes/bons-commande/pdf');

});
