@extends('...layouts.app')

@section("content")
<div class="content-body">
   <div class="container-fluid">
      <form action="#"  enctype="application/x-www-form-urlencoded" onsubmit="event.preventDefault()">

      <div class="row page-titles mx-0">
         <div class="col-md-6 p-md-0">
            <div class="welcome-text">
                  <h4>Bons de livraison </h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{route(auth()->user()->role . '/ventes/bons-commande')}}">Bons de livraison</a></li>
               <li class="breadcrumb-item active"><a href="{{route(auth()->user()->role . 'ventes/Bons-livraison/profileBonsLivraison',1)}}">SH0000001</a></li>
            </ol>
         </div>
         <div class="col-md-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex" style="gap:10px;">
               <button type="reset" class="btn px-4 text-white" style="font-weight: bolder;background: #57ae74;">MODIFIER</button>

               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PDF
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route(auth()->user()->role . 'ventes/Bons-livraison/pdf')}}">Voir le PDF</a>
                    <a class="dropdown-item" href="#">Télécharger le PDF</a>
                  </div>
               </div>
               <!--**********************************
                     end   Client_Devis
               ***********************************-->

               <!--**********************************
                     start  Aperçu
               ***********************************-->
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Aperçu</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">Date d'expiration</label>
                              <input type="date" class="form-control" value="01/03/10" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">A l'attention de </label>
                              <input type="text" class="form-control" placeholder="A l'attention de" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <label for="" class="text-dark fs-4">Référence externe</label>
                           <input type="text" placeholder="Référence externe" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" >
                        </div>
                     </div>
                  </div>
               </div>
               <!--**********************************
                     end  Aperçu
               ***********************************-->
            </div>
            <!--**********************************
               start facturation
            ***********************************-->
            <div class="col-md-3">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Facturation</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <p class="text-dark">Facturer à</p>
                        <div class="form-row">
                           <!-- Button trigger modal -->
                           <button class="btn btn-primary col-md-12" data-toggle="modal" data-target="#basicModal1">MODIFIER L'ADRESSE</button>
                           <!--**********************************
                                 start modal Facturation
                           ***********************************-->

                           <!--**********************************
                                 start modal Facturation
                           ***********************************-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--**********************************
                     start facturation
            ***********************************-->
            <!--**********************************
                     start  Livraison 
            ***********************************-->
            <div class="col-md-3">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Livraison</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="" class="text-dark fs-4">Date de livraison</label>
                              <input type="date" class="form-control"  style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="" class="text-dark fs-4">coût de livraison et de manutention</label>
                              <input type="text" class="form-control" placeholder="coût de livraison et de manutention" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="" class="text-dark fs-4">Taxes</label>
                              <select class="js-example-theme-multiple" name="states[]" multiple="multiple" style="border:1px solid rgba(88, 100, 170, 1)" >
                                 <option value="taxe1">taxe 1</option>
                                 <option value="taxe2">taxe 2</option>
                             </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <!-- Button trigger modal -->
                           <button class="btn btn-primary col-md-12" data-toggle="modal" data-target="#basicModal1">MODIFIER L'ADRESSE</button>
                           <!--**********************************
                                    start Modal 
                           ***********************************-->
                           <div class="modal fade" id="basicModal1" style="min-width: 500px;">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header" style="background: rgba(88, 100, 170, 1)" >
                                          <h5 class="modal-title text-white">Adresse de livraison</h5>
                                          <button type="button" class="close text-white fs-4" data-dismiss="modal"><span>&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">

                                          <div class="basic-form">
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                   <label class="text-dark fs-4">Libellé de l'adresse</label>
                                                   <input type="text" class="form-control"  placeholder="Libellé de l'adresse" name="adresse_lib" style="border:1px solid rgba(88, 100, 170, 1)">
                                                </div>

              <div class="bg-primary p-2 text-white mb-2 rounded">
                <h5 class="m-0 text-white ">Gérer les livraisons</h5>
                <hr class="bg-white">
                <p>Statut de livraison : <strong>Non livrés</strong></p>
                <p>Facturé :  <strong>0,00 MAD </strong></p>
                <p>Restant : 138,00 MAD</p>
                <p>Vous n'avez pas encore créé de bon de livraison. Commencez en cliquant sur le bouton ci-dessous.</p>
                <a href="{{route(auth()->user()->role . 'ventes/Bons-livraison/ajouter-bon-livraison')}}" class="btn text-white w-100" style="background: #6f7ac2">CRERR UN BON DE LIVRAISON</a>
              </div>

              <div class="bg-primary p-2 text-white mb-2 rounded">
               <h5 class="m-0 text-white ">Gérer les factures</h5>
               <hr class="bg-white">
               <p class="">Statut du paiement : <strong>Non payé</strong></p>
               <p>Dans des bons de livraison : <strong>0</strong></p>
               <p>Restant : 1</p>
               <p>Vous n'avez pas encore créé de bon de livraison. Commencez en cliquant sur le bouton ci-dessous.</p>
               <a href="{{route(auth()->user()->role . 'ventes/factures/ajouter-facture')}}" class="btn text-white w-100" style="background: #6f7ac2">CRÉER UNE FACTURE</a>
             </div>

                                          <div class="form-row">
                                             <div class="form-group col-md-12">
                                                <label class="text-dark fs-4">Address 2</label>
                                                <input type="text" class="form-control"  name="adresse1" placeholder="Address 2" style="border:1px solid rgba(88, 100, 170, 1)">
                                             </div>
                                          </div>

                                          
                                          <div class="form-row">
                                             <div class="form-group col-md-6">
                                                <label class="text-dark fs-4">Code Postal</label>
                                                <input type="text" class="form-control"  name="postalCode" placeholder="Code Postal" style="border:1px solid rgba(88, 100, 170, 1)">
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label for="" class="text-dark fs-4">Ville</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" style="border:1px solid rgba(88, 100, 170, 1)">
                                             </div>
                                          </div>

                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-danger px-4"  data-dismiss="modal">ANNULER</button>
                                          <button type="button" class="btn text-white" style="background: #57ae74">ENREGISTRER</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--**********************************
                                    end Modal 
                           ***********************************-->
                        </div>
                     </div>
                  </div>
               </div>


            </div>
            <!--**********************************
                     end  Livraison 
            ***********************************-->
         </div>
         {{-- end row --}}
         <!--**********************************
               start   row 
         ***********************************-->
         {{-- <div class="row"> --}}
            <!--**********************************
                  start Configuration
            ***********************************-->
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Configuration </h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-3">
                              <label for="" class="text-dark fs-4">Devise</label>
                              <select class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option value="client 1">MAD</option>
                                 <option value="client 2">USD</option>
                              </select>
                           </div>
                           <div class="form-group col-md-3">
                              <label for="" class="text-dark fs-4">Remise </label>
                              <input type="text" class="form-control" placeholder="Remise" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group col-md-3">
                              <label for="" class="text-dark fs-4">Type de remise</label>
                              <input type="text" class="form-control" placeholder="Type de remise" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group col-md-3">
                              <label for="" class="text-dark fs-4">Taxes</label>
                              <select class="js-example-theme-multiple" name="states[]" multiple="multiple" style="border:1px solid rgba(88, 100, 170, 1)" >
                                 <option value="taxe1">taxe 1</option>
                                 <option value="taxe2">taxe 2</option>
                           </select>
                           </div>
                           <div class="form-group col-md-3"> 
                              <label for="" class="text-dark fs-4">Niveau de prix</label>
                              <select class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option value="Whole Price">Whole Price</option>
                                 <option value="">Recommended Retail Price/option>
                              </select>
                           </div>
                           <div class="form-group col-md-3 d-flex align-items-center pt-3">
                              <div class="basic-form" id="taxeProduit_switch" style="margin-right: 5px;">
                                 <div class="btnSwitch">
                                    <label class="toggle">
                                       <input type="checkbox">
                                       <span class="slider"></span>
                                    </label>
                                 </div>
                              </div>
                              <label for="" class="text-dark fs-4">Inclure les taxes dans les prix unitaires</label>
                           </div>
                           <div class="form-group col-md-3"> 
                              <label for="" class="text-dark fs-4">Taux de change</label>
                              <input type="text" value="10" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--**********************************
                  end Configuration
            ***********************************-->
         {{-- </div> --}}
         <!--**********************************
               end   row
         ***********************************-->

         <!--**********************************
            start   Produit ou service
         ***********************************-->
         {{-- <div class="row" > --}}
            <div class="col-md-12">

               <div class="card">
                  <div class="card-body">

                     <div class="table-responsive">
                        <table class="table"  style="min-width: 845px">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">Produit ou service</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Qté</th>
                                    <th scope="col">Disponible</th>
                                    <th scope="col">Rem.</th>
                                    <th scope="col">Taxes</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr scope="row">
                                    <td>
                                       <input type="text" value="E012120" class="form-control" name="">
                                    </td>
                                    <td>
                                       <input type="text" value="14" class="form-control" name="">
                                    </td>
                                    <td>
                                       <input type="text" value="1" class="form-control" name="">
                                    </td>
                                    <td>
                                       <input type="text" value="-" class="form-control" name="">
                                    </td>
                                    <td>
                                       <input type="text" value="0" class="form-control" name="">
                                    </td>
                                    <td>
                                       <input type="text" value="taxe1" class="form-control" name="" style="width: 100%;">
                                    </td>
                                    <td>
                                       <input type="text" value="14.40" class="form-control" name="">
                                    </td>
                                    <td>
                                       <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <hr>
                    <div>
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <select class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option value="">produit 1</option>
                                 <option value="">produit 2</option>
                                 <option value="">produit 3</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary text-white" >AJOUTER PRODUITS</button>
                              <button class="btn btn-primary text-white" style="margin-left: 5px;">
                                 <span style="margin-right: 5px;"><i class="fa-light fa-scanner-gun"></i></span>
                                 SCANNER
                              </button>
                              <button class="btn btn-primary text-white" style="margin-left: 5px;">
                                 <span style="margin-right: 5px;"><i class="fa-solid fa-plus"></i></span>
                                 CRÉER
                              </button>
                              <button class="btn btn-primary text-white" style="margin-left: 5px;">
                                 <span style="margin-right: 5px;"><i class="fa-light fa-arrow-rotate-right"></i></span>
                                 RAFRAICHIR
                              </button>
                           </div>
                        </div>
                    </div>
                    <hr>

                    <!--Remise Gloal -->
                    <div style="display: flex;justify-content: flex-end"> 
                     <div class="col-md-5" style="padding:15px 20px;border:1px solid rgb(186, 192, 224);">
                        <div class="basic-form">
                           <div class="form-row" style="">
                              <div class="form-group d-flex col-md-12">

                                 <label for="" class="text-dark fs-1 col-sm-6 mb-4">Remise globale</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)">
                                 </div>

                              </div>
                              <div class="form-group d-flex col-md-12 mb-4">

                                 <label for="" class="text-dark fs-1 col-sm-6">Quantités totales</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                 </div>

                              </div>
                              <div class="form-group d-flex col-md-12 mb-4">

                                 <label for="" class="text-dark fs-1 col-sm-6">Sous-total</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                 </div>

                              </div>
                              <div class="form-group d-flex col-md-12">

                                 <label for="" class="text-dark fs-1 col-sm-6">Total</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                 </div>

                              </div>
                           </div>
                        </div>
                    </div>
                    </div>

                    <!-- end Remise Gloal -->

                  </div>
               </div>

            </div>
         {{-- </div> --}}
         <!--**********************************
            end Produit ou service
         ***********************************-->
         <!--**********************************
            start start Note 
         ***********************************-->
         </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Notes</h4>
                  </div>
                  <div class="card-body">
                      <div class="summernote"></div>
                  </div>
              </div>
            </div>
         </div>
         <!--**********************************
            end start Note 
         ***********************************-->
         <!--**********************************
            start Fichiers attachés
         ***********************************-->
   
         <div class="row">
            <!-- start File -->
            <div class="col-md-12">
               <div class="card" id="file">
                  <div class="card-header">
                        <h4 class="card-title">Fichiers attachés</h4>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form">
                           <div class="form-row">
                              <input class="file-input" type="file" name="file" hidden>
                              <i class="fas fa-cloud-upload-alt"></i>
                              <p>Ajouter un nouveau fichier</p>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            </div>

            <!-- end File -->
         </div>
         <!--**********************************
            end Fichiers attachés
         ***********************************-->


      </form>
   </div>
</div>
@endsection

@section('css')
       {{-- SELECT --}}
       <link rel="stylesheet" href="./../../vendor/select2/css/select2.min.css">
@endsection
@section('scripts')
       <!-- Required vendors -->
@endsection


