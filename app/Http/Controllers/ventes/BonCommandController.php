<?php

namespace App\Http\Controllers\ventes;

use App\Http\Controllers\Controller;
use App\Models\Bon_commande;
use App\Models\Client;
use Illuminate\Http\Request;

class BonCommandController extends Controller
{
    // admin
    public function all_bons_commande($admin)
    {
        $data = [];
        $data = Bon_commande::all();
        return view('./dashboard/ventes/bons_commande', $data);
    }
    
    public function bons_commande($societe)
    {
        return view('./dashboard/ventes/bons_commande', ['societe'=>$societe]);
    }
    public function bon_commande_profile($societe, $idBon)
    {
        return view('./dashboard/ventes/bons_commande/bonCommandeProfile', ['societe'=>$societe, 'idBon'=>$idBon]);
    }
    // employe
    
    //Bons de commande
    public function bonsCommande(){
        $data = [];
        $data = Bon_commande::all();
        return view('./dashboard/ventes/bons_commande/bonsCommande', [ "data" => $data]);
    }
    public function bonCommandeProfile($id)
    {
        return view('./dashboard/ventes/bons_commande/bonCommandeProfile', ['id'=>$id]);
    }

    public function createBonCommande(Request $request){
        $clients = Client::all();
        $id =  Bon_commande::all()->count() +1 ;
        // $taxes = Taxes::all();
        

        return view('./dashboard/ventes/bons_commande/createBonCommande', ["clients" => $clients, "id"=>$id]);
    }
    public function editBoncommande($id){
        return view('./dashboard/ventes/bons_commande/editBonCommande');
    }
    public function imprimerPdfBonCommande()
    {
        return view('./dashboard/ventes/fatures/bonCommandePdf');
    }

}
