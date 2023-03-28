
@extends('...layouts.app')

@section("content")
<div class="content-body">

    <div class="container-fluid">

      <div class="row page-titles mx-0">
         <div class="col-md-6 p-md-0">
            <div class="welcome-text">
                  <h4>Bons de livraison </h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{route(auth()->user()->role . '/ventes/bons-commande')}}">Bons de livraison</a></li>
               <li class="breadcrumb-item active"><a href="{{route(auth()->user()->role . '/ventes/Bons-livraison/profileBonsLivraison',1)}}">SH0000001</a></li>
            </ol>
         </div>
         <div class="col-md-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex" style="gap:10px;">
               <button type="reset" class="btn px-4 text-white" style="font-weight: bolder;background: #57ae74;">MODIFIER</button>

               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PDF
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route(auth()->user()->role . '/ventes/Bons-livraison/pdf')}}">Voir le PDF</a>
                    <a class="dropdown-item" href="#">Télécharger le PDF</a>
                  </div>
                </div>

              <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  <h5 class="m-0 text-white">Effectuer la livraison</h5>
              </div>

              <div class="bg-primary p-2 text-white mb-2 rounded">
                <h5 class="m-0 text-white ">Créé à partir de</h5>
                <hr class="bg-white">
                <a href="" class="btn text-white w-100" style="background: #6f7ac2">S000004</a>
              </div>

              <div class="bg-primary p-2 text-white  rounded mb-2">
                <h5 class="m-0 text-white ">Modifier le statut du bon de livraison</h5>
                <hr class="bg-white">
                <div class="form-group">
                  <select name="" id="" class="form-select rounded-pill w-100" style="height:30px;">
                    <option value="">En attente</option>
                    <option value="">Effectuer la livraison</option>
                    <option value="">En préparation</option>
                    <option value="">Prêt pour la livraison</option>
                    <option value="">Expédié</option>
                    <option value="">Livré</option>
                  </select>
                </div>
                <button  class="btn text-white w-100" style="background: #6f7ac2">METTRE À JOUR</button>
              </div>

            </div>

            <div class="col-md-9">
              <div class="profile-tab">
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#bonlivraison" data-toggle="tab" class="nav-link active show">BON DE LIVRAISON</a>
                        </li>
                        <li class="nav-item"><a href="#facture" data-toggle="tab" class="nav-link">FACTURES(0)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="bonlivraison" class="tab-pane fade active show">

                          <div class="card mt-3">
                            <div class="card-body">
                              <div class="basic-form">
                                  <div class="form-row">

                                      <div class="col-md-6 d-flex justify-content-between">
                                        <p class="text-dark"> Date de création </p>

                                      </div>
                                      <div class="col-md-6">
                                        <p class="text-dark">07 mars 2023</p>
                                      </div>

                                  </div>

                                </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-body">
                              <div class="basic-form">
                                  <div class="form-row">

                                      <div class="col-md-6 d-flex">
                                        <h5 class="text-dark mr-3"> Livrer à</h5>
                                        <div>
                                          <p class="text-dark">adresse1</p>
                                          <p class="text-dark"> AFGHANISTAN</p>
                                          <p class="text-dark">Téléphone : 0614527812</p>
                                        </div>
                                      </div>
                                      <div class="col-md-6 d-flex justify-content-between">
                                          <p class="text-dark"> Date de création </p>
                                          <p class="text-dark">07 mars 2023</p>
                                      </div>

                                  </div>

                                </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-body">
                              {{-- <div class="table-responsive"> --}}
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th scope="col">SKU</th>
                                            <th scope="col">Produit ou service</th>
                                            <th scope="col">Qté</th>
                                            <th scope="col">Réel</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr scope="row">
                                            <td>
                                              0258341
                                            </td>
                                            <td>
                                              p1
                                            </td>
                                            <td>
                                              2
                                            </td>
                                            <td>
                                              <strong>-</strong>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                              </div>

                              <div style="display: flex;justify-content: flex-end">
                                <div class="col-md-5" style="padding:15px 20px;border:1px solid rgb(186, 192, 224);">
                                  <div class="basic-form">
                                      <div class="form-row" style="">
                                        <div class="form-group d-flex col-md-12">

                                            <label for="" class="text-dark fs-1 col-sm-6 mb-4">Poids total</label>
                                            <div class="col-sm-6">
                                              <input type="text" value="1.00kg" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)">
                                            </div>

                                        </div>
                                        <div class="form-group d-flex col-md-12 mb-4">

                                            <label for="" class="text-dark fs-1 col-sm-6">Quantités totales</label>
                                            <div class="col-sm-6">
                                              <input type="text" value="1" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                            </div>

                                        </div>

                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div id="facture" class="tab-pane fade">

                          <div class="card mt-3">
                            <div class="card-body">
                              <div class="text-center">
                                <h4> Désolé, nous n'avons trouvé aucun résultat</h4>
                              </div>
                            </div>
                          </div>

                        </div>

                    </div>
                </div>
            </div>
            </div>

        </div>
</div>

{{-- <div>

</div> --}}
@endsection



