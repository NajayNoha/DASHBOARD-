<?php

use App\Http\Controllers\settings\CompanySettingsController;
use Illuminate\Support\Facades\Route; 

Route::get('settings/company-settings',[CompanySettingsController::class,'createCompanySitting'])->name('setting.company-settings.create');


?>