<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;

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

Route::get('/contacts/clients', [ContactController::class, 'clients'])->name('/contacts/clients');


Route::get('/contacts/ajouter_client', [ContactController::class, 'add_client'])->name('/contacts/ajouter_client');

Route::get('/contacts/clients/{id}', [ContactController::class, 'client_profile'])->name('/contacts/clients/profile');

Route::get('/contacts/employes', [ContactController::class, 'employes'])->name('/contacts/employes');

Route::get('/contacts/employes/ajouter_employe', [ContactController::class, 'add_employe'])->name('/contacts/employes/ajouter_employe');

Route::get('/contacts/employes/{id}', [ContactController::class, 'employee_profile'])->name('contacts/employes/profile');



Route::get('/contacts/fournisseur', [ContactController::class, 'fournisseurs'])->name('/contacts/fournisseurs');

Route::get('/contacts/fournisseurs/ajouter_fournisseur', [ContactController::class, 'add_fournisseur'])->name('/contacts/fournisseurs/ajouter_fournisseur');

Route::get('/contacts/fournisseurs/{id}', [ContactController::class, 'fournisseur_profile'])->name('contacts/fournisseurs/profile');

