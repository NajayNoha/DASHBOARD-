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
    public function devis($id)
    {
        return view('./dashboard/ventes/deivs/devis', ['id'=>$id]);
    }

}
