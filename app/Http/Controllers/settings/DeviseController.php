<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\DeviseSitting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviseController extends Controller
{
    public function getALLDevises(){
        return DeviseSitting::all();
    }
    public function devises(){
        $devises = $this -> getALLDevises() ;
        $currencies =DB::table('currencies')->get();
        return view('./dashboard/settings/devises/devises',[
            'devises'=> $devises,
            'currencies' => $currencies
        ]);
    }
    public function createDeviseSetting(Request $request){
    
        $request ->validate([
            'devise'=>'required',
            'taux_change'=>'required',
        ],[
            'devise.required' => 'Le champ To currency est requis.',
            'taux_change.required' => 'Le champ Taux de change est requis.',
        ]
        );
       
        $deviseSitting = new DeviseSitting();
        $deviseSitting -> taux_change = $request -> taux_change ;
        $deviseSitting ->  id_currency = $request -> devise;

        $save = $deviseSitting -> save();

        if($save)
        {
            return back();
        }

    }
    public function editDeviseSetting(Request $request,$id){
    
        $request ->validate([
            'devise'=>'required',
            'taux_change'=>'required',
        ],[
            'devise.required' => 'Le champ To currency est requis.',
            'taux_change.required' => 'Le champ Taux de change est requis.',
        ]
        );
       
        $deviseSitting = DeviseSitting::find($id);
        $deviseSitting -> taux_change = $request -> taux_change ;
        $deviseSitting ->  id_currency = $request -> devise;

        $save = $deviseSitting -> save();

        if($save)
        {
            return back();
        }

    }
    public function changeActive(Request $request ,  $id){
        $deviseSitting = DeviseSitting::find($id);
        if($request->actif == 0){
            $deviseSitting -> actif = 1 ;
            $deviseSitting ->save();
        }
        if($request->actif == 1){
            $deviseSitting-> actif = 0 ;
            $deviseSitting -> save() ;
        }
        return redirect()->route('settings.currencies');
    }
}