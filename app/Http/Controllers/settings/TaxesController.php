<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\Taxe;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function getTaxes(){
        return Taxe::all();
    }

    public function taxes()
    {
        $taxes = $this -> getTaxes();
        return view('./dashboard/settings/taxes/taxes',compact('taxes'));
    }
    public function createTaxe(Request $request){
        $request ->validate([
            'nom'=>'required',
            'abreviation'=>'required',
            'taux'=>'required',
        ],[
            'nom.required'=>'Le champ Nom est requis.',
            'abreviation.required' => 'Le champ Abrévation est requis.',
            'taux.required' => 'Le champ Taux de taxe est requis',
        ]
        );

        $taxe = new Taxe();
        $taxe -> nom = $request -> nom;
        $taxe ->abreviation = $request -> abreviation ;
        $taxe ->taux = $request -> taux;
        $save =  $taxe -> save();

        if($save){
            return back()->with('success','La taxe a été ajoutée avec succès');
        }
    }
    public function editTaxe(Request $request , $id){
        $request ->validate([
            'nom'=>'required',
            'abreviation'=>'required',
            'taux'=>'required',
        ],[
            'nom.required'=>'Le champ Nom est requis.',
            'abreviation.required' => 'Le champ Abrévation est requis.',
            'taux.required' => 'Le champ Taux de taxe est requis',
        ]
        );
        $taxe = Taxe::find($id);
        $taxe -> nom = $request ->nom;
        $taxe -> abreviation = $request -> abreviation ;
        $taxe -> taux = $request -> taux;
        $save = $taxe -> save();

        $taxes = $this -> getTaxes();
        
        if($save){
            return redirect()->route('settings.taxes');
        }else{
            return back()->with('fail',"La taxe n'a pas changé");
        }

    }
    public function changeActive(Request $request ,  $id){
        $taxe = Taxe::find($id);
        if($request->actif == 0){
            $taxe -> actif = 1 ;
            $taxe ->save();
        }
        if($request->actif == 1){
            $taxe -> actif = 0 ;
            $taxe -> save() ;
        }
        return redirect()->route('settings.taxes');
    }
}