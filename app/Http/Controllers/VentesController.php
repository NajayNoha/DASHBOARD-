<?php

namespace App\Http\Controllers;

use App\Models\Bon_commande;
use App\Models\Client;
use Illuminate\Http\Request;

class VentesController extends Controller
{
    // juste pour l'Admin
    public function all_bons_commande($admin)
    {
        $data = [];
        $data = Bon_commande::all();
        return view('./dashboard/ventes/bons_commande', $data);
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
        $data = [];
        $data = Bon_commande::all();
        return view('./dashboard/ventes/bons_commande/bonsCommande', [ "data" => $data]);
    }
    public function bonCommandeProfile($id)
    {
        return view('./dashboard/ventes/bons_commande/bonCommandeProfile', ['id'=>$id]);
    }

    public function createBonCommande(){
        $clients = Client::all();
        $id =  Bon_commande::all()->count() +1 ;
        // $taxes = Ta
        return view('./dashboard/ventes/bons_commande/createBonCommande', ["clients" => $clients, "id"=>$id]);
    }
    public function editBoncommande($id){
        return view('./dashboard/ventes/bons_commande/editBonCommande');
    }
    public function imprimerPdfBonCommande()
    {
        return view('./dashboard/ventes/fatures/bonCommandePdf');
    }

    //Factures
    public function factures(){
        return view('./dashboard/ventes/factures/listeFactures');
    }
    public function factureProfile($id)
    {
        return view('./dashboard/ventes/factures/factureProfile', ['id'=>$id]);
    }

    public function createFacture(){
        return view('./dashboard/ventes/factures/createFacture');
    }

    public function imprimerPdffacture()
    {
        return view('./dashboard/ventes/factures/facturePdf');
    }
    //Bons livraison

    public function bonslivraison(){
        return view('./dashboard/ventes/bons_livraison/listeBonsLivraison');
    }
    public function editBonLivraison(){
        return view('./dashboard/ventes/bons_livraison/editbonLivraison');
        return 'editBonLivraison';
    }
    public function profileBonLivraison(){
        return view('./dashboard/ventes/bons_livraison/bonLivraisonProfile');
    }
    public function bonsLivrainsonPdf(){
        return view('./dashboard/ventes/bons_livraison/bonsLivrainsonPdf');
    }
    public function createBonLivraison(){
        return view('./dashboard/ventes/bons_livraison/createBonLivraison');
    }
    /**
     * Product Returns
     */
    public function productReturns(){
        return view('./dashboard/ventes/retours_produits/listProductReturns');
    }
    public function createProductReturn(){
        return view('./dashboard/ventes/retours_produits/createProductReturns');
    }
    public function editProductReturn($id){
        return view('./dashboard/ventes/retours_produits/editProductReturns');
    }
    public function profileProductReturn($id){
        return view('./dashboard/ventes/retours_produits/profileProductReturns');
    }
    public function productReturnPdf(){
        return view('./dashboard/ventes/retours_produits/productReturnsPdf');
    }
    /**
     * Avoirs
    */
    public function listAvoirs(){
        return view('./dashboard/ventes/avoirs/avoirs');
    }
    public function editAvoir($id){
        return view('./dashboard/ventes/avoirs/editAvoirs');
    }
    public function profiletAvoir($id){
        return view('./dashboard/ventes/avoirs/profileAvoirs');
    }
    public function avoirPdf(){
        return view('./dashboard/ventes/avoirs/avoirPdf');
    }
    /**
     * Remboursements
    */
    public function listRefunds(){
        return view('./dashboard/ventes/refunds/listRefunds');
    }
    public function editRefunds($id){
        return view('./dashboard/ventes/refunds/create');
    }
    public function profileRefunds($id){
        return view('./dashboard/ventes/refunds/profileRefunds');
    }
    public function refundsPdf(){
        return view('./dashboard/ventes/refunds/refundsPdf');
    }

}
