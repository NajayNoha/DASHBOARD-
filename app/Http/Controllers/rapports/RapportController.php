<?php

namespace App\Http\Controllers\rapports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    public function rapports()
    {
        return view('./dashboard/rapports/rapports');
    }
}
