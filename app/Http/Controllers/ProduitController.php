<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Country;
use App\Models\Fournisseur;
use App\Models\Taxe;
use App\Models\PriceLevel;
use App\Models\PriceRule;
use App\Models\Marque;

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

        $request->validate([
            'sku' => 'required|unique:products,sku',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'buying_price' => 'required',
            'fournisseur' => 'required',
            'marque'=>'required',
            'pays_origine'=>'required',
            'poids'=>'required'
        ],
        [
            'sku.required'=>'ce champ est obligatoire',
            'sku.unique'=>'cet SKU est déja utilisé',
            'name.required'=>'ce champ est obligatoire',
            'description.required'=>'ce champ est obligatoire',
            'price.required'=>'ce champ est obligatoire',
            'buying_price.required'=>'ce champ est obligatoire',
            'fournisseur.required'=>'ce champ est obligatoire',
            'marque.required'=>'ce champ est obligatoire',
            'pays_origine.required'=>'ce champ est obligatoire',
            'poids.required'=>'ce champ est obligatoire'
        ]);

        // insertion:
        $product = new Product();
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price ;
        $product->devise1 = $request->devise1;
        $product->buying_price = $request->buying_price;
        $product->devise2 = $request->devise2;
        $product->fournisseur = $request->fournisseur;
        $product->marque = $request->marque;
        $product->pays_origine = $request->pays_origine;
        $product->poids = $request->poids;
        $product->poids_unit = $request->poids_unit;
        $product->tax = $request->tax;
        if($file){
            $newFile = $request->file('image');
            $fileName = time().$newFile->getClientOriginalName();
            $path = $newFile->storeAs('products',$fileName,'public');
            $product->image = $path;
        }elseif(!$file){
            $product->image = null;
        }
        $product->save();
        // dd($product);
        return redirect()->back()->with('success' , "Produit ajouté avec succés");
    }
    public function product_profile($id)
    {
        $data = Product::where('id' , '=' , $id)->first();
        $countries = Country::get();
        $fournisseurs = Fournisseur::get();
        $taxes = Taxe::get();
        return view('./dashboard/produits/produits/productProfile', compact('data' , 'countries' , 'fournisseurs' , 'taxes'));
    }

    public function updateProduct(Request $request){
        $product = Product::where('id', $request->id)->first();
        // dd($product);
        // dd($request);
        $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'description' => 'required',
            'buying_price' => 'required',
            'fournisseur' => 'required',
            'marque'=>'required',
            'pays_origine'=>'required',
            'poids'=>'required'
        ],
        [
            'sku.required'=>'ce champ est obligatoire',
            'name.required'=>'ce champ est obligatoire',
            'description.required'=>'ce champ est obligatoire',
            'buying_price.required'=>'ce champ est obligatoire',
            'fournisseur.required'=>'ce champ est obligatoire',
            'marque.required'=>'ce champ est obligatoire',
            'pays_origine.required'=>'ce champ est obligatoire',
            'poids.required'=>'ce champ est obligatoire'
        ]);
        $name = $request->name;
        $description = $request->description;
        $buying_price = $request->buying_price;
        $devise2 = $request->devise2;
        $fournisseur = $request->fournisseur;
        $marque = $request->marque;
        $pays_origine = $request->pays_origine;
        $poids = $request->poids;
        $poids_unit = $request->poids_unit;
        $price_level = $request->price_level;
        $file = $request->hasFile('image');
        if($file){
            $newFile = $request->file('image');
            $fileName = time().$newFile->getClientOriginalName();
            $path = $newFile->storeAs('products',$fileName,'public');
            $image = $path;
        }else{
            $image = null;
        };
        // check if toggle tax is enabled
        if($request->has('toggle_apply_tax')){
            // taxes are enabled
            $tax = $request->tax;

        }else{
            //taxes are disabled
            $tax = null;
        };
        $data = [
            'name' => $name,
            'description'=>$description,
            'buying_price' => $buying_price,
            'devise2'=>$devise2,
            'fournisseur' => $fournisseur,
            'marque' => $marque,
            'pays_origine'=>$pays_origine,
            'poids'=>$poids,
            'poids_unit'=>$poids_unit,
            'image'=>$image,
            'tax'=>$tax,
            'price_level'=>$price_level
        ];
        // dd($data);
        $product->update($data);
        return redirect()->back()->with('success' , "Produit modifié avec succés");
    }

    public function delete_produit($id){
        Product::where('id','=',$id)->delete();
        return redirect()->back()->with('success' , "Produit supprimé avec succés");
    }

    public function price_update(){
        $data = Product::get();
        return view('./dashboard/produits/price-update/price-update',compact('data'));
    }

    public function save_price_update(Request $request){
        $product = Product::where('id','=',$request->id)->first();
        // dd($product);
        $product->update([
            'price' => $request->price,
            'devise1'=>$request->devise1
        ]);
        return redirect()->back();
    }

    //---------------------------         price_rules   -------------------------------------
    public function price_rules(){
        $data = PriceRule::with('getPriceLevels')->get();
        return view('./dashboard/produits/price-rules/price-rules' , ['data'=>$data]);
    }

    public function add_price_rule(){
        $price_levels = PriceLevel::get();
        return view('./dashboard/produits/price-rules/addPriceRule',compact('price_levels'));
    }
    public function save_priceRule(Request $request){
        $request->validate([
            'selection'=>'required',
            'libelle'=>'required',
            'price_level'=>'required',
            'price_type'=>'required',
            'valeur'=>'required'
        ],[
            'selection.required'=>'ce champ est obligatoire',
            'libelle.required'=>'ce champ est obligatoire',
            'price_level.required'=>'ce champ est obligatoire',
            'price_type.required'=>'ce champ est obligatoire',
            'valeur.required'=>'ce champ est obligatoire'
        ]);
        $priceRule = new PriceRule();
        $priceRule->selection = $request->selection;
        $priceRule->libelle = $request->libelle;
        $priceRule->price_level = $request->price_level;
        $priceRule->price_type = $request->price_type;
        $priceRule->prix_base = $request->base_price;
        $priceRule->operation = $request->operation;
        $priceRule->valeur = $request->valeur;
        if($request->has('toggle_season')){
            $priceRule->saison = $request->saison;
        }else{
            $priceRule->saison = null;
        }
        if($request->has('devise_toggle')){
            $priceRule->devise = $request->devise;
        }else{
            $priceRule->devise = null;
        }
        if($request->has('clientTag_toggle')){
            $priceRule->tag_client = $request->clientTag;
        }else{
            $priceRule->tag_client = null;
        }
        if($request->has('toggle_period')){
            $priceRule->date_debut = $request->date_debut;
            $priceRule->date_fin = $request->date_fin;
        }else{
            $priceRule->date_debut = null;
            $priceRule->date_fin = null;
        }
        if($request->has('toggle_lieu')){
            $priceRule->lieu_stockage = $request->lieu_stockage;
        }else{
            $priceRule->lieu_stockage = null;
        }
        $priceRule->save();
        // dd($priceRule);
        return redirect()->back()->with('success' , "Règle De Prix ajoutée avec succès");
    }

    public function price_rule_profile($id){
        $data = PriceRule::where('id',$id)->first();
        $priceLevels = PriceLevel::get();
        return view('./dashboard/produits/price-rules/priceRuleProfile', compact('data','priceLevels'));
    }
    public function update_priceRule(Request $request){
        $priceRule = PriceRule::where('id', $request->id)->first();
        $selection = $request->selection;
        $libelle = $request->libelle;
        $price_level = $request->price_level;
        $price_type = $request->price_type;
        $prix_base = $request->base_price;
        $operation = $request->operation;
        $valeur = $request->valeur;
        if($request->has('toggle_season')){
            $saison = $request->saison;
        }else{
            $saison = null;
        }
        if($request->has('devise_toggle')){
            $devise = $request->devise;
        }else{
            $devise = null;
        }
        if($request->has('clientTag_toggle')){
            $tag_client = $request->clientTag;
        }else{
            $tag_client = null;
        }
        if($request->has('toggle_period')){
            $date_debut = $request->date_debut;
            $date_fin = $request->date_fin;
        }else{
            $date_debut = null;
            $date_fin = null;
        }
        if($request->has('toggle_lieu')){
            $lieu_stockage = $request->lieu_stockage;
        }else{
            $lieu_stockage = null;
        }
        $priceRule->update([
            'selection'=>$selection,
            'libelle'=>$libelle,
            'price_level'=>$price_level,
            'price_type'=>$price_type,
            'prix_base'=>$prix_base,
            'operation'=>$operation,
            'valeur'=>$valeur,
            'saison'=>$saison,
            'devise'=>$devise,
            'tag_client'=>$tag_client,
            'date_debut'=>$date_debut,
            'date_fin'=>$date_fin,
            'lieu_stockage'=>$lieu_stockage
        ]);
        return redirect()->back()->with('success' , 'Règle de prix modifiée avec succès');
    }
    public function delete_priceRule($id){
        PriceRule::where('id',$id)->delete();
        return redirect()->back()->with('success','Règle De Prix supprimée avec succès');
    }

    // -----------------------   product_tags -----------------------------------------

    public function product_tags(){
        return view('/dashboard/produits/products_settings/product_tags');
    }
    public function ajouter_marque(Request $request){
        // dd($request);
        $name = $request->name;
        if($name == null){
            return response()->json([
                'status'=>'error',
                'message'=>'veuillez entrer un libelle valide'
            ]);
        }
        // $marque = new Marque();
        return response()->json([
            'status'=>'success',
            'message'=>'Brand added successfully'
        ]);
    }
}
