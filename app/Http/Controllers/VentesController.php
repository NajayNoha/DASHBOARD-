<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentesController extends Controller
{
    // juste pour l'Admin
    public function all_bons_commande($admin)
    {
        return view('./dashboard/ventes/bons_commande');
    }
    public function avoirs($id)
    {
        return view('./dashboard/ventes/avoirs/avoirs', ['id'=>$id]);
    }
    public function bons_commande($societe)
    {
        return view('./dashboard/ventes/bons_commande', ['societe'=>$societe]);
    }
    public function bon_commande_profile($societe, $idBon)
    {
        return view('./dashboard/ventes/bons_commande/bonCommandeProfile', ['societe'=>$societe, 'idBon'=>$idBon]);
    }
    // DEVIS
    public function create_devis(){
        return view('./dashboard/ventes/devis/createDevis');
    }
    public function list_devis(){
        return view('./dashboard/ventes/devis/listDevis');
    }
    public function devisProfile($id)
    {
        return view('./dashboard/ventes/devis/devisEdite', ['id'=>$id]);
    }

    public function imprimerPdf(){
        return view('./dashboard/ventes/devis/pdf');
    }

    //Bons de commande
    public function bonsCommande(){
        return view('./dashboard/ventes/bons_commande/bonsCommande');
    }
    public function bonCommandeProfile($id)
    {
        return view('./dashboard/ventes/bons_commande/bonCommandeProfile', ['id'=>$id]);
    }

    public function createBonCommande(){
        return view('./dashboard/ventes/bons_commande/createBonCommande');
    }

    public function imprimerPdfBonCommande()
    {
        return view('./dashboard/ventes/bons_commande/bonCommandePdf');
    }
}



