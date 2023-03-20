<?php

namespace App\Http\Controllers\rapports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function listReservedProducts()
    {
        return view('./dashboard/rapports/bons_commande/reserved_products');
    }
    public function listUninvoicedproducts()
    {
        return view('./dashboard/rapports/bons_commande/uninvoiced_products');
    }
}
