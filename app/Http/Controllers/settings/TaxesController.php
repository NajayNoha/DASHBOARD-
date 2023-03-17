<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function taxes()
    {
        return view('./dashboard/settings/taxes/taxes');
    }
}