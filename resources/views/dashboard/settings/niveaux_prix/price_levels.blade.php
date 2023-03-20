@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Niveaux de prix</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javascript:void(0)">Niveaux de prix</a></li>
               <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
            </ol>
         </div>
      </div>
      <div class="mb-2">
         <!-- Button trigger modal -->
         <button type="button" class="btn text-white px-4 text-white" style="background: #57ae74;" data-toggle="modal"
            data-target="#creerPriceLevel">
            <i class="fa-solid fa-plus"></i>
            <span class="ms-2">Create</span>
         </button>
         <!--end Button trigger modal -->
         <!--start Modal  -->
         <div class="modal" id="creerPriceLevel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
               <div class="modal-content">
                  <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                     <h5 class="modal-title text-white" id="exampleModalLabel">Créer un niveau de prix</h5>
                     <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                     <div class="basic-form">
                        <div class="form-row">

                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">Nom</label>
                              <input type="text" class="form-control input-rounded w-100" placeholder="Nom" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1);">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">Type</label>
                              <select name="" id="" class="form-select rounded-pill w-100"
                                 style="height: 35px;border:1px solid rgba(88, 100, 170, 1)">
                                 <option value="">Niveau de prix pour les ventes</option>
                                 <option value="">Niveau de prix pour les achats</option>
                              </select>
                           </div>

                        </div>

                     </div>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-outline-danger px-4" data-dismiss="modal">ANNULER</button>
                     <button type="button" class="btn text-white" style="background: #57ae74">ENREGISTRER</button>
                  </div>
               </div>
            </div>
         </div>

         <!--END MODAL -->
      </div>

      <div class="row">
         <div class="col-12">
            <div class="card">

               <div class="card-body">
                  <div class="table-responsive">
                     <table style="min-width: 845px" class="table">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">NOM</th>
                              <th style="color:rgb(72, 69, 79)">TYPE</th>
                              <th style="color:rgb(72, 69, 79)">ACTIF</th>
                              <th style="color:rgb(72, 69, 79)">Action</th>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <td>Purchase Price</td>
                              <td>Achat</td>
                              <td>
                                 <div class="basic-form" id="taxeProduit_switch">
                                    <div class="btnSwitch">
                                       <label class="toggle">
                                          <input type="checkbox">
                                          <span class="slider"></span>
                                       </label>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <!--start Button trigger modal -->
                                 <button type="button" class="btn text-white" data-toggle="modal"
                                    data-target="#modifierPriceLevel" style="background: rgba(88, 100, 170, 1)"><i
                                       class="fa-solid fa-pen-to-square"></i></button>
                                 <!-- end  Button trigger modal -->
                                 <!--start Modal  -->
                                 <div class="modal" id="modifierPriceLevel" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                       <div class="modal-content">
                                          <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                                             <h5 class="modal-title text-white" id="exampleModalLabel">Créer un niveau
                                                de prix</h5>
                                             <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">

                                             <div class="basic-form">
                                                <div class="form-row">

                                                   <div class="form-group col-md-6">
                                                      <label for="" class="text-dark fs-4">Nom</label>
                                                      <input type="text" class="form-control input-rounded w-100"
                                                         value="Purchase Price" name=""
                                                         style="border:1px solid rgba(88, 100, 170, 1);">
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                      <label for="" class="text-dark fs-4">Type</label>
                                                      <select name="" id="" class="form-select rounded-pill w-100"
                                                         style="height: 35px;border:1px solid rgba(88, 100, 170, 1)">
                                                         <option value="">Niveau de prix pour les ventes</option>
                                                         <option value="">Niveau de prix pour les achats</option>
                                                      </select>
                                                   </div>

                                                </div>

                                             </div>

                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-outline-danger px-4"
                                                data-dismiss="modal">ANNULER</button>
                                             <button type="button" class="btn text-white"
                                                style="background: #57ae74">ENREGISTRER</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--END Modal  -->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

   {{-- <div>

</div> --}}
   @endsection