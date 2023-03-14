<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactController;


// home page routes
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

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

