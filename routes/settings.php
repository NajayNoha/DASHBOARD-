<?php

use App\Http\Controllers\settings\CompanySettingsController;
use App\Http\Controllers\settings\DeviseController;
use App\Http\Controllers\settings\PaymentMethodController;
use App\Http\Controllers\settings\PriceLevelController;
use App\Http\Controllers\settings\TaxesController;
use App\Http\Controllers\settings\UserController;
use App\Http\Controllers\settings\UserSettingController;
use Illuminate\Support\Facades\Route; 

Route::get('settings/company-settings',[CompanySettingsController::class,'createCompanySitting'])->name('setting.company-settings.create');

/*
*Taxes
*/
Route::get('settings/taxes',[TaxesController::class,'taxes'])->name('settings.taxes');
/*
*Devise
*/
Route::get('settings/currencies',[DeviseController::class,'Devises'])->name('settings.currencies');
/*
*Price Levels
*/
Route::get('settings/price-levels',[PriceLevelController::class,'priceLevels'])->name('settings.price-levels');
/*
*Price Levels
*/
Route::get('settings/payment-methods',[PaymentMethodController::class,'paymentMethods'])->name('settings.payment-methods');
/*
*Utilisateurs
*/
Route::get('settings/users',[UserSettingController::class,'users'])->name('settings.users');
Route::get('settings/users/create',[UserSettingController::class,'createUser'])->name('settings.users.create');
Route::get('settings/users/edit/{id}',[UserSettingController::class,'editUser'])->name('settings.users.edit');

?>