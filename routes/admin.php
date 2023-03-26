<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\routing\ProduitController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth' , "user-role:admin"])->group(function()
    {
        Route::get('/home',[ContactController::class, 'clients'])->name('home.admin');

        Route::get('home.admin',[ HomeController::class, "adminHome"])->name('home.admin');
        Route::get('admin/contacts/clients', [ContactController::class, 'clients'])->name('admin/contacts/clients');
        Route::get('admin/contacts/ajouter-client', [ContactController::class, 'add_client'])->name('admin/contacts/ajouter_client');
        Route::get('admin/contacts/client/{id}', [ContactController::class, 'client_profile'])->name('admin/contacts/client');
        Route::get('admin/contacts/employes/ajouter-client', [ContactController::class, 'add_client'])->name('admin/contacts/employes/ajouter_client');

        Route::get('delete-fournisseur/{id}',[ContactController::class , 'delete_fournisseur']);


        // EMPLOYEES
        Route::post('/contacts/ajouter-employe', [ContactController::class, 'add_employe']);
        Route::post('save_employe', [ContactController::class, 'save_employe']);
        Route::get('admin/contacts/employes', [ContactController::class, 'employes'])->name('admin/contacts/employes');
        Route::get('admin/contacts/employes/ajouter-employe', [ContactController::class, 'add_employe'])->name('admin/contacts/employes/ajouter_employe');
        Route::get('admin/contacts/employes/{id}', [ContactController::class, 'employee_profile'])->name('admin/contacts/employes/profile');
        // FOURNISSUERS
        Route::get('admin/contacts/fournisseurs', [ContactController::class, 'fournisseurs'])->name('admin/contacts/fournisseurs');
        Route::get('admin/contacts/fournisseurs/ajouter-fournisseur', [ContactController::class, 'add_fournisseur'])->name('admin/contacts/fournisseurs/ajouter_fournisseur');
        Route::get('admin/contacts/fournisseurs/{id}', [ContactController::class, 'fournisseur_profile'])->name('admin/contacts/fournisseurs/profile');
        // routes Produit
        // PRODUCTS
        Route::get('admin/produits-et-services/liste-produits', [ ProductController::class, 'produits'])->name('admin/produits-et-services/liste-produits');
        Route::get('admin/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('admin/produits-et-services/produits/ajouter-produit');
        Route::get('admin/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('admin/produits-et-services/produits/{id}');

        // SERVICES
        Route::get('admin/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('admin/produits-et-services/produits/services');
        Route::get('admin/produits-et-services/services/ajouter_service', [ProduitController::class, 'add_services'])->name('admin/produits-et-services/services/ajouter_service');
        Route::get('admin/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('admin/produits-et-services/services/{id}');
        // MISE A JOUR DES PRIX

        //---------------------------         price-update   -------------------------------------

        Route::get('admin/produits-et-services/mise-a-jour-prix',[ProduitController::class,'price_update'])->name('admin/produits-et-services/price-update/edit');

        //---------------------------         price_rules   -------------------------------------
        Route::get('admin/produits-et-services/regles-de-prix',[ProduitController::class,'price_rules'])->name('admin/produits-et-services/regles-de-prix/list');

        Route::get('admin/produits-et-services/regles-de-prix/create',[ProduitController::class,'add_price_rule'])->name('admin/produits-et-services/regles-de-prix/create');

        Route::get('admin/produits-et-services/regles-de-prix/{id}',[ProduitController::class,'price_rule_profile'])->name('admin/produits-et-services/regles-de-prix/edit');

        Route::get('admin/produits-et-services/products-settings/product-tags',[ProduitController::class,'product_tags'])->name('admin/produits-et-services/products-settings/product-tags');

        // MISE A JOUR DES PRIX
        Route::get('admin/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('admin/produits-et-services/maj_prix');



        Route::get('admin/produits-et-services/liste-produits', [ ProduitController::class, 'produits'])->name('admin/produits-et-services/liste-produits');

        Route::get('admin/produits-et-services/produits/ajouter-produit', [ProduitController::class, 'add_product'])->name('admin/produits-et-services/produits/ajouter-produit');

        Route::get('admin/produits-et-services/produits/{id}', [ProduitController::class, 'product_profile'])->name('admin/produits-et-services/produits/edit');

        // SERVICES
        Route::get('admin/produits-et-services/services/liste-services', [ProduitController::class, 'services'])->name('admin/produits-et-services/produits/services');

        Route::get('/produits-et-services/service/ajouter_service', [ProduitController::class, 'add_service'])->name('admin/produits-et-services/service/ajouter_service');

        Route::get('/produits-et-services/services/{id}', [ProduitController::class, 'service_profile'])->name('admin/produits-et-services/services/edit');


        //---------------------------         price-update   -------------------------------------

        Route::get('/produits-et-services/mise-a-jour-prix',[ProduitController::class,'price_update'])->name('admin/produits-et-services/price-update/edit');

        //---------------------------         price_rules   -------------------------------------
        Route::get('/produits-et-services/regles-de-prix',[ProduitController::class,'price_rules'])->name('admin/produits-et-services/regles-de-prix/list');

        Route::get('/produits-et-services/regles-de-prix/create',[ProduitController::class,'add_price_rule'])->name('admin/produits-et-services/regles-de-prix/create');

        Route::get('/produits-et-services/regles-de-prix/{id}',[ProduitController::class,'price_rule_profile'])->name('admin/produits-et-services/regles-de-prix/edit');

        Route::get('/produits-et-services/products-settings/product-tags',[ProduitController::class,'product_tags'])->name('admin/produits-et-services/products-settings/product-tags');

        // MISE A JOUR DES PRIX
        Route::get('/produits-et-services/maj_prix', [ProduitController::class, 'maj_prix'])->name('admin/produits-et-services/maj_prix');


        // VENTES
        //
        Route::get('ventes/devis/list',[VentesController::class,'list_devis'])->name('admin/ventes/devis/list');

        Route::get('admin/ventes/devis/ajouter_devis',[VentesController::class,'create_devis'])->name('admin/ventes/devis/create_devis');

        Route::get('admin/ventes/devis/edit/{id}',[VentesController::class,'devisProfile'])->name('admin/ventes/devis/devisProfile');

        Route::get('admin/ventes/devis/pdf',[VentesController::class,'imprimerPdf'])->name('ventes/devis/pdf');


        // //Bons de commande
        Route::get('admin/ventes/bons-commande/ajouter-bon-commande',[VentesController::class,'createBonCommande'])->name('admin/ventes/bons-commande/ajouter-bon-commande');
        Route::get('admin/ventes/bons-commande/{id}',[VentesController::class,'bonCommandeProfile'])->name('admin/ventes/bons-commande/profile');
        Route::get('admin/ventes/bons-commande',[VentesController::class,'bonsCommande'])->name('admin/ventes/bons-commande');
        Route::get('admin/ventes/bons-commande/edit/{id}',[VentesController::class,'editBoncommande'])->name('admin/ventes/bons-commande/edit');
        Route::get('admin/ventes/bons-commande/pdf',[VentesController::class,'imprimerPdfBonCommande'])->name('admin/ventes/bons-commande/pdf');

}
);
