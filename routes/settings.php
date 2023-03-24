<?php

use App\Http\Controllers\settings\CompanySettingsController;
use App\Http\Controllers\settings\DeviseController;
use App\Http\Controllers\settings\PaymentMethodController;
use App\Http\Controllers\settings\PriceLevelController;
use App\Http\Controllers\settings\TaxesController;
use App\Http\Controllers\settings\UserController;
use App\Http\Controllers\settings\UserSettingController;
use Illuminate\Support\Facades\Route;

/*
*company settings
*/
Route::get('settings/company-settings', [CompanySettingsController::class, 'createCompanySitting'])->name('setting.company-settings.create');
Route::post('settings/company-settings/store', [CompanySettingsController::class, 'storeCompanySitting'])->name('setting.company-settings.store');
Route::post('settings/company-settings/edit/{id}', [CompanySettingsController::class, 'editCompanySitting'])->name('setting.company-settings.edit');
/*
*Taxes
*/
Route::get('settings/taxes', [TaxesController::class, 'taxes'])->name('settings.taxes');
Route::post('settings/taxes/store', [TaxesController::class, 'createTaxe'])->name('settings.taxes.store');
Route::post('settings/taxes/edit/{id}', [TaxesController::class, 'editTaxe'])->name('settings.taxes.updatet');
Route::post('settings/taxes/change-active/{id}', [TaxesController::class, 'changeActive'])->name('settings.taxes.change-active');

/*
*Devise
*/
Route::get('settings/currencies', [DeviseController::class, 'Devises'])->name('settings.currencies');
Route::post('settings/currencies/store', [DeviseController::class, 'createDeviseSetting'])->name('settings.currencies.store');
Route::post('settings/currencies/edit/{id}', [DeviseController::class, 'editDeviseSetting'])->name('settings.currencies.edit');
Route::post('settings/currencies/change-active/{id}', [DeviseController::class, 'changeActive'])->name('settings.currencies.change-active');
/*
*Price Levels
*/
Route::get('settings/price-levels', [PriceLevelController::class, 'priceLevels'])->name('settings.price-levels');
Route::post('settings/price-levels/store',[PriceLevelController::class, 'creatPriceLevel'])->name('settings.price-levels.store');
Route::post('settings/price-levels/edit/{id}',[PriceLevelController::class, 'editPriceLevel'])->name('settings.price-levels.edit');
Route::post('settings/price-levels/change-active/{id}',[PriceLevelController::class, 'changeActive'])->name('setting.price-levels.change-active');
/*
*Payment Methods
*/
Route::get('settings/payment-methods', [PaymentMethodController::class, 'paymentMethods'])->name('settings.payment-methods');
Route::post('settings/payment-methods/create',[PaymentMethodController::class,'createPaymentMethod'])->name('settings.payment-methods.create');
Route::post('settings/payment-methods/edit/{id}',[PaymentMethodController::class,'editPaymentMethod'])->name('settings.payment-methods.edit');
Route::post('settings/payment-methods/change-active/{id}', [PaymentMethodController::class, 'changeActive'])->name('settings.payment-methods.change-active');

/*
*Utilisateurs
*/
Route::get('settings/users', [UserSettingController::class, 'users'])->name('settings.users');
Route::get('settings/users/create', [UserSettingController::class, 'createUser'])->name('settings.users.create');
Route::get('settings/users/edit/{id}', [UserSettingController::class, 'editUser'])->name('settings.users.edit');
