<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviseController extends Controller
{
    //
    public function devises(){
        return view('./dashboard/settings/devises/devises');
    }
}