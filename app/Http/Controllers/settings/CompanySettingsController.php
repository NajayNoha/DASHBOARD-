<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanySettingsController extends Controller
{

    public function createCompanySitting(){
        return view('./dashboard/settings/company_settings/company');
    }

}