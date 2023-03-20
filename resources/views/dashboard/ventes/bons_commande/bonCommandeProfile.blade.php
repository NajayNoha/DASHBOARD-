@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">

   <div class="container-fluid">

      <div class="row page-titles mx-0">
         <div class="col-md-6 p-md-0">
            <div class="welcome-text">
               <h4>Bons de livraison </h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('ventes.bons-commande')}}">Bons de livraison</a></li>
               <li class="breadcrumb-item active"><a
                     href="{{Route('ventes.Bons-livraison.profileBonsLivraison',1)}}">SH0000001</a></li>
            </ol>
         </div>
         <div class="col-md-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex" style="gap:10px;">
            <button type="reset" class="btn px-4 text-white"
               style="font-weight: bolder;background: #57ae74;">MODIFIER</button>

            <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  PDF
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{Route('ventes.Bons-livraison.pdf')}}">Voir le PDF</a>
                  <a class="dropdown-item" href="#">Télécharger le PDF</a>
               </div>
            </div>

            <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ACTIONS
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                  <a class="dropdown-item" href="#">Liste de prélèvement</a>
                  <a class="dropdown-item" href="#">Annuler</a>
               </div>
            </div>

         </div>
      </div>

      <div class="row">

         <div class="col-md-3">

            <div class="bg-warning text-white p-2 rounded mb-2">
               <h5 class="m-0 text-white">Actif</h5>
            </div>

            <div class="bg-primary p-2 text-white mb-2 rounded">
               <h5 class="m-0 text-white ">Gérer les livraisons</h5>
               <hr class="bg-white">
               <p>Statut de livraison : <strong>Non livrés</strong></p>
               <p>Facturé : <strong>0,00 MAD </strong></p>
               <p>Restant : 138,00 MAD</p>
               <p>Vous n'avez pas encore créé de bon de livraison. Commencez en cliquant sur le bouton ci-dessous.</p>
               <a href="{{Route('ventes.Bons-livraison.ajouter-bon-livraison')}}" class="btn text-white w-100"
                  style="background: #6f7ac2">CRERR UN BON DE LIVRAISON</a>
            </div>

            <div class="bg-primary p-2 text-white mb-2 rounded">
               <h5 class="m-0 text-white ">Gérer les factures</h5>
               <hr class="bg-white">
               <p class="">Statut du paiement : <strong>Non payé</strong></p>
               <p>Dans des bons de livraison : <strong>0</strong></p>
               <p>Restant : 1</p>
               <p>Vous n'avez pas encore créé de bon de livraison. Commencez en cliquant sur le bouton ci-dessous.</p>
               <a href="{{Route('ventes.factures.ajouter-facture')}}" class="btn text-white w-100"
                  style="background: #6f7ac2">CRÉER UNE FACTURE</a>
            </div>

         </div>

         <div class="col-md-9">

            <!-- 
                  ----- BON DE COMMANDE----
               -->
            <div>
               <h4 class="text-primary fs-3">BON DE COMMANDE</h4>
               <hr>

               <div class="card mt-3">
                  <div class="card-body">
                     <div class="basic-form">
                        <h5><a href="#" class="text-dark"><u>khalid </u></a></h5>
                        <div class="form-row">
                           <div class="col-md-6">
                              <div class="d-flex justify-content-between">
                                 <p class="text-dark" style="margin: 0;"> Date de création </p>
                                 <p class="text-dark" style="margin: 0;">07 mars 2023</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                 <p class="text-dark" style="margin: 0;">Devise</p>
                                 <p class="text-dark" style="margin: 0;">MAD</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                 <p class="text-dark" style="margin: 0;">Niveau de prix</p>
                                 <p class="text-dark" style="margin: 0;">Wholesale Price</p>
                              </div>

                           </div>
                           <div class="col-md-6">

                              <div class="d-flex justify-content-between">
                                 <p class="text-dark" style="margin: 0;">Type de livraison </p>
                                 <p class="text-dark" style="margin: 0;">Lieu de stockage</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                 <p class="text-dark" style="margin: 0;">Type de taxe</p>
                                 <p class="text-dark" style="margin: 0;">Taxes exclues</p>
                              </div>

                           </div>
                        </div>

                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="col-md-6 d-flex justify-content-between">
                              <div class="">
                                 <h5 class="text-dark">Facturer à</h5>
                                 <div style="margin-left: 10px;">

                                    <p style="margin: 0;">marrakech</p>
                                    <p style="margin: 0;">marrakech, 40000</p>
                                    <p style="margin: 0;">MOROCCO</p>
                                    <p style="margin: 0;">Téléphone : 0614526314</p>

                                 </div>
                              </div>
                              <div class="">
                                 <h5 class="text-dark">Livrer à</h5>
                                 <div style="margin-left: 10px;">

                                    <p style="margin: 0;">marrakech</p>
                                    <p style="margin: 0;">marrakech, 40000</p>
                                    <p style="margin: 0;">MOROCCO</p>
                                    <p style="margin: 0;">Téléphone : 0614526314</p>

                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 d-flex justify-content-between">
                              <p class="text-dark" style="margin: 0;">Date de livraison</p>
                              <p class="text-dark" style="margin: 0;">15 mars 2023</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-body">
                     <table class="table">
                        <thead class="thead-primary">
                           <tr>
                              <th scope="col">SKU</th>
                              <th scope="col">Produit ou service</th>
                              <th scope="col">Prix</th>
                              <th scope="col">Qté</th>
                              <th scope="col">Total</th>
                           </tr>
                        </thead>

                        <tbody>
                           <tr scope="row">
                              <td>0258341</td>
                              <td>p1</td>
                              <td>140</td>
                              <td> 2</td>
                              <td>140,00MAD</td>
                           </tr>
                        </tbody>
                     </table>

                     <div style="display: flex;justify-content: flex-end">
                        <div class="col-md-5" style="padding:15px 20px;border:1px solid rgb(186, 192, 224);">
                           <div class="basic-form">
                              <div class="form-row" style="">
                                 <div class="form-group d-flex col-md-12">

                                    <label for="" class="text-dark fs-1 col-sm-6 mb-4">Remise globale</label>
                                    <div class="col-sm-6">
                                       <input type="text" value="0" class="form-control form-control-sm"
                                          style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)">
                                    </div>

                                 </div>
                                 <div class="form-group d-flex col-md-12 mb-4">

                                    <label for="" class="text-dark fs-1 col-sm-6">Quantités totales</label>
                                    <div class="col-sm-6">
                                       <input type="text" value="0.00 MAD" class="form-control form-control-sm"
                                          style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                    </div>

                                 </div>
                                 <div class="form-group d-flex col-md-12 mb-4">

                                    <label for="" class="text-dark fs-1 col-sm-6">Sous-total</label>
                                    <div class="col-sm-6">
                                       <input type="text" value="0.00 MAD" class="form-control form-control-sm"
                                          style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                    </div>

                                 </div>
                                 <div class="form-group d-flex col-md-12">

                                    <label for="" class="text-dark fs-1 col-sm-6">Total</label>
                                    <div class="col-sm-6">
                                       <input type="text" value="0.00 MAD" class="form-control form-control-sm"
                                          style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- 
                  -----END BON DE COMMANDE----
                  -----START BONS DE LIVRAISON---
               -->
            <div>
               <h4 class="text-primary fs-3">BONS DE LIVRAISON</h4>
               <hr>

               <div class="card mt-3">
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row d-flex justify-content-center">
                           <h3 class="text-dark ">Désolé, nous n'avons trouvé aucun résultat</h3>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- 
                  ----- END BONS DE LIVRAISON----
                  ----- START FACTURES----
               -->
            <div>
               <h4 class="text-primary fs-3">FACTURES (0)</h4>
               <hr>

               <div class="card mt-3">
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row d-flex justify-content-center">
                           <h3 class="text-dark ">Désolé, nous n'avons trouvé aucun résultat</h3>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- 
                  ----- END FACTURES----
                  ----- START RETOURS PRODUITS(0)----
               -->
            <div>
               <h4 class="text-primary fs-3">START RETOURS PRODUITS(0)</h4>
               <hr>

               <div class="card mt-3">
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row d-flex justify-content-center">
                           <h3 class="text-dark ">Désolé, nous n'avons trouvé aucun résultat</h3>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- 
                  ----- END RETOURS PRODUITS(0)----
               -->
         </div>

      </div>
   </div>

   {{-- <div>

</div> --}}
   @endsection