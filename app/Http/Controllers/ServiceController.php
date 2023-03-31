<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Taxe;

class ServiceController extends Controller
{
    public function services()
    {
        $data = Service::with('getTaxes')->get();
        return view('./dashboard/produits/services/servicesList',compact('data'));
    }
    public function add_service()
    {
        $taxes = Taxe::get();
        return view('./dashboard/produits/services/addService' , compact('taxes'));
    }
    public function save_service(Request $request){
        $request->validate(
            [
                'nom' =>'required',
                'reference'=>'required',
                'prix'=>'required'
            ],
            [
                'nom.required' =>'ce champ est obligatoire',
                'reference.required' =>'ce champ est obligatoire',
                'prix.required' =>'ce champ est obligatoire'
            ]
        );
        $service = new Service();
        $service->nom = $request->nom;
        $service->reference = $request->reference;
        $service->prix = $request->prix;
        $service->devise_prix = $request->devise_prix;
        $service->description = $request->description;
        $service->taxe_id = $request->tax;
        $service->save();
        return redirect()->back()->with('success' , "Service ajouté avec succés");
    }
    public function service_profile($id)
    {
        $data = Service::where('id',$id)->first();
        $taxes = Taxe::get();
        return view('./dashboard/produits/services/serviceProfile', compact('data','taxes'));
    }
    public function update_service(Request $request)
    {
        $service = Service::where('id',$request->id)->first();
        // dd($service);
        $request->validate(
            [
                'nom' =>'required',
                'reference'=>'required',
                'prix'=>'required'
            ],
            [
                'nom.required' =>'ce champ est obligatoire',
                'reference.required' =>'ce champ est obligatoire',
                'prix.required' =>'ce champ est obligatoire'
            ]
        );
        $nom = $request->nom;
        $reference = $request->reference;
        $prix = $request->prix;
        $devise_prix = $request->devise_prix;
        $description = $request->description;
        $taxe_id = $request->tax;
        $service->update([
            'nom' => $nom,
            'reference'=>$reference,
            'prix' => $prix,
            'devise_prix'=>$devise_prix,
            'description' => $description,
            'taxe_id'=>$taxe_id
        ]);
        return redirect()->back()->with('success' , "Service modifié avec succés");
    }
    public function delete_service($id){
        Service::where('id',$id)->delete();
        return redirect()->back()->with('success' , "Service supprimé avec succés");
    }
}
