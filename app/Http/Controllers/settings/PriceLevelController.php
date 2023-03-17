<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceLevelController extends Controller
{
    
    public function priceLevels()
    {
        return view('./dashboard/settings/niveaux_prix/price_levels');
    }
}