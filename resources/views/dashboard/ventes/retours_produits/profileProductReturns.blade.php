
@extends('...layouts.app')

@section("content")
<div class="content-body">

    <div class="container-fluid">

      <div class="row page-titles mx-0">
         <div class="col-md-6 p-md-0">
            <div class="welcome-text">
                  <h4>Retours produits</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('ventes.product-returns.list')}}">Retours produits </a></li>
               <li class="breadcrumb-item active"><a href="#"> PR0000001</a></li>
            </ol>
         </div>
         <div class="col-md-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex" style="gap:10px;">
               <button type="reset" class="btn px-4 text-white" style="font-weight: bolder;background: #57ae74;">MODIFIER</button>

               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PDF
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{Route('ventes.Bons-livraison.pdf')}}">Voir le PDF</a>
                    <a class="dropdown-item" href="#">Télécharger le PDF</a>
                  </div>
                </div>

              <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 ACTIONS
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="#">Envoyer par e-mail</a>
                 <a class="dropdown-item" href="#">Annuler</a>
               </div>
             </div>

         </div>
      </div>

        <div class="row">

            <div class="col-md-3">

              <div class="bg-warning text-white p-2 rounded mb-2">
                  <h5 class="m-0 text-white">En attente</h5>
              </div>

               <div class="bg-primary p-2 text-white mb-2 rounded">
                  <h5 class="m-0 text-white ">Recevoir les produits</h5>
                  <hr class="bg-white">
                  <button class="btn text-white w-100" style="background: #6f7ac2">Recevoir les produits</button>
               </div>

               <div class="bg-primary p-2 text-white mb-2 rounded">
                  <h5 class="m-0 text-white ">Gérer les avoirs</h5>
                  <hr class="bg-white">
                  <p class="text-white">
                     Vous n'avez pas encore créé d'avoir. Pour créer un avoir, cliquez sur le bouton ci-dessous.
                  </p>
                  <button class="btn text-white w-100" style="background: #6f7ac2">CRÉER UN AVOIR</button>
               </div>

               <div class="bg-primary p-2 text-white mb-2 rounded">
                  <h5 class="m-0 text-white ">Gérer les remboursements</h5>
                  <hr class="bg-white">
                  <p class="text-white">
                     Vous n'avez encore créé de remboursement. Pour créer un remboursement, cliquez sur le bouton ci-dessous.
                  </p>
                  <button class="btn text-white w-100" style="background: #6f7ac2">CRÉER UN REMBOURSEMENT</button>
               </div>



            </div>


            <div class="col-md-9">
               <!-- start RETOUR PRODUITS -->
               <div>
                  <h4 class="text-primary fs-3">RETOUR PRODUITS</h4>
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
                              </div>

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
                              <th scope="col">Coût</th>
                              <th scope="col">Qté</th>
                          </tr>
                        </thead>

                        <tbody>
                           <tr scope="row">
                              <td>0258341</td>
                              <td>p1</td>
                              <td>140</td>
                              <td> 2</td>
                           </tr>
                        </tbody>
                     </table>

                     <div style="display: flex;justify-content: flex-end">
                        <div class="col-md-5" style="padding:15px 20px;border:1px solid rgb(186, 192, 224);">
                           <div class="basic-form">
                              <div class="form-row" style="">

                                 <div class="form-group d-flex col-md-12">
                                    <label for="" class="text-dark fs-1 col-sm-6">Quantités totales</label>
                                    <div class="col-sm-6">
                                       <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end RETOUR PRODUITS -->

               <!-- start AVOIRS -->
               <div>
                  <h4 class="text-primary fs-3">AVOIRS(1)</h4>
                  <hr>
                  <div class="card">
                     <div class="card-body">

                        <table class="table">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col">AVOIR #</th>
                                 <th scope="col">TOTAL</th>
                                 <th scope="col">QUANTITÉS</th>
                                 <th scope="col">STATUTS</th>
                           </tr>
                           </thead>
                           <tbody>
                              <tr scope="row">
                                 <td>0258341</td>
                                 <td>p1</td>
                                 <td>1</td>
                                 <td><span class="badge badge-success text-white fs-3">Crédité</span> </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- end AVOIRS -->

               <!-- start REMBOURSEMENTS  -->
               <div>
                  <h4 class="text-primary fs-3">REMBOURSEMENTS (0)</h4>
                  <hr>
                  <div class="card">
                     <div class="card-body">
                        <div class="basic-form">
                           <div class="form-row d-flex justify-content-center">
                              <h3 class="text-dark ">Désolé, nous n'avons trouvé aucun résultat</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end REMBOURSEMENTS  -->
            </div>

         </div>
</div>

{{-- <div>

</div> --}}
@endsection




