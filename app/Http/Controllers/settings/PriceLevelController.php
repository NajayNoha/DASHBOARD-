<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\NiveauPrix;
use Illuminate\Http\Request;

class PriceLevelController extends Controller
{
    public function getPriceLevels(){
        return NiveauPrix::all();
    }
    public function priceLevels()
    {
        $priceLevels = $this -> getPriceLevels();
        return view('./dashboard/settings/niveaux_prix/price_levels',compact('priceLevels'));
    }
    public function creatPriceLevel(Request $request){
        $request ->validate([
            'nom'=>'required',
            'type'=>'required'
        ],[
            'nom.required'=>'Le champ Nom est requis.',
            'type.required'=>'Le champ type est requis.'
        ]);

        $priceLevel =new  NiveauPrix();
        $priceLevel -> nom = $request -> nom ;
        $priceLevel -> type_niveau = $request -> type;
        $save =  $priceLevel -> save();
        if($save){
            return back()->with('success','le Niveaux de prix');
        }
    }
    
    public function editPriceLevel(Request $request,$id){
        $request ->validate([
            'nom'=>'required',
            'type'=>'required'
        ],[
            'nom.required'=>'Le champ Nom est requis.',
            'type.required'=>'Le champ type est requis.'
        ]);
        $priceLevel = NiveauPrix::find($id);
        $priceLevel -> nom = $request -> nom ;
        $priceLevel -> type_niveau = $request -> type;
        $save =  $priceLevel -> save();
        if($save){
            return redirect()->route('settings.price-levels');
        }else{
            return back()->with('fail',"le Niveaux de prix n'a pas changé");
        }
    }

    public function changeActive(Request $request ,  $id){
        $priceLevel = NiveauPrix::find($id);
        if($request->actif == 0){
            $priceLevel -> actif = 1 ;
            $priceLevel ->save();
        }
        if($request->actif == 1){
            $priceLevel -> actif = 0 ;
            $priceLevel -> save() ;
        }
        return redirect()->route('settings.price-levels');
    }
}