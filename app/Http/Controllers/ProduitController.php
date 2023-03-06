<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produits()
    {
        return view('./dashboard/produits/produits/productsList');
    }
    public function add_product()
    {
        return view('./dashboard/produits/produits/addProduct');
    }
    public function product_profile($id)
    {
        return view('./dashboard/produits/produits/productProfile', ['id'=>$id]);
    }

    public function services()
    {
        return view('./dashboard/produits/produits/servicesList');
    }
    public function add_service()
    {
        return view('./dashboard/produits/produits/addService');
    }
    public function service_profile($id)
    {
        return view('./dashboard/produits/produits/serviceProfile', ['id'=> $id ]);
    }
}
