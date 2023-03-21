<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Country;
use App\Models\Fournisseur;
use App\Models\Taxe;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produits()
    {
        // $data = Product::get();
        $data = Product::with('getFournisseur')->get();
        return view('./dashboard/produits/produits/productsList' , compact('data'));
    }
    public function add_product()
    {
        // $data = Product::with('getFournisseur')->get();
        $countries = Country::get();
        $taxes = Taxe::get();
        $fournisseurs = Fournisseur::get();
        return view('./dashboard/produits/produits/addProduct',['countries'=>$countries , 'fournisseurs'=>$fournisseurs , 'taxes'=>$taxes]);
    }
    public function save_product(Request $request){
        $file = $request->hasFile('image');
        if($file){
            $newFile = $request->file('image');
            $fileName = time().$newFile->getClientOriginalName();
            $path = $newFile->storeAs('images',$fileName,'public');
        }

        $request->validate([
            'sku' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'buying_price' => 'required|string',
            'fournisseur' => 'required|integer',
            'marque'=>'required|string',
            'pays_origine'=>'required|string',
            'poids'=>'required|string'
        ],
        [
            'sku.required'=>'ce champ est obligatoire',
            'name.required'=>'ce champ est obligatoire',
            'description.required'=>'ce champ est obligatoire',
            'price.required'=>'ce champ est obligatoire',
            'buying_price.required'=>'ce champ est obligatoire',
            'fournisseur.required'=>'ce champ est obligatoire',
            'marque.required'=>'ce champ est obligatoire',
            'pays_origine.required'=>'ce champ est obligatoire',
            'poids.required'=>'ce champ est obligatoire'
        ]);
        $product = new Product();
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price." ".$request->devise;
        $product->buying_price = $request->buying_price." ".$request->devise;
        $product->fournisseur = $request->fournisseur;
        $product->taxes = $request->taxes;
        if($file){
            $product->image = './storage/'.$path;
        }else{
            $product->image = null;
        }
        $product->marque = $request->marque;
        $product->pays_origine  = $request->pays_origine;
        $product->poids = $request->poids." ".$request->poids_unit;
        $product->save();
        return redirect()->back()->with('success' , "Produit ajouté avec succés");
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
