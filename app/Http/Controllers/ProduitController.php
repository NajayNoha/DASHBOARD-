<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produits()
    {
        $data = Product::get();
        return view('./dashboard/produits/produits/productsList' , compact('data'));
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
        return view('./dashboard/produits/services/servicesList');
    }
    public function add_service()
    {
        return view('./dashboard/produits/services/addService');
    }
    public function service_profile($id)
    {
        return view('./dashboard/produits/services/serviceProfile', ['id'=> $id ]);
    }
    public function price_update(){
        return view('./dashboard/produits/price-update/price-update');
    }

    //---------------------------         price_rules   -------------------------------------
    public function price_rules(){
        return view('./dashboard/produits/price-rules/price-rules');
    }

    public function add_price_rule(){
        return view('./dashboard/produits/price-rules/addPriceRule');
    }

    public function price_rule_profile(){
        return view('./dashboard/produits/price-rules/priceRuleProfile');
    }

    // -----------------------   product_tags -----------------------------------------

    public function product_tags(){
        return view('/dashboard/produits/products_settings/product_tags');
    }
}
