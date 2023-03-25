<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\MoyenPaiement;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PaymentMethodController extends Controller
{
    //
    public function getPaymentMethods(){
        return MoyenPaiement::all();
    }
    public function paymentMethods(){
        $paymentMethods = $this -> getPaymentMethods();
        return view('./dashboard/settings/payment_methods/paymentMethods',compact('paymentMethods'));
    }
    public function createPaymentMethod(Request $request){
        $request->validate([
            'nom'=>'required'
        ],[
            'nom.required' => 'Le champ Nom est requis.'
        ]) ;

        $paymentMethod = new MoyenPaiement();
        $paymentMethod -> nom = $request -> nom;
        $save = $paymentMethod ->save();

        if($save){
            return back()->with('success','Moyen de paiement a été ajoutée avec succès');
        }else{
            return back()->with('fail','');
        }
    }
    public function editPaymentMethod(Request $request,$id){
        $request->validate([
            'nom'=>'required'
        ],[
            'nom.required' => 'Le champ Nom est requis.'
        ]) ;

        $paymentMethod  =MoyenPaiement::find($id);

        $paymentMethod -> nom = $request -> nom;
        $save = $paymentMethod ->save();
        if($save){
            return redirect()->route('settings.payment-methods');
        }
    }

    
    public function changeActive(Request $request ,  $id){
        $paymentMethod = MoyenPaiement::find($id);
        if($request->actif == 0){
            $paymentMethod -> actif = 1 ;
            $paymentMethod ->save();
        }
        if($request->actif == 1){
            $paymentMethod -> actif = 0 ;
            $paymentMethod -> save() ;
        }
        return redirect()->route('settings.payment-methods');
    }
}