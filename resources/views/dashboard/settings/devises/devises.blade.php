

@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Devises</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Devises</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
                </ol>
            </div>
        </div>
        <div class="mb-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn text-white px-4 text-white"  style="background: #57ae74;"   data-toggle="modal" data-target="#creerDevise">
               <i class="fa-solid fa-plus"></i> 
               <span class="ms-2">Create</span>
            </button>
            <!--end Button trigger modal -->
            <!--start Modal  -->
            <div class="modal" id="creerDevise" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                     <div class="modal-header" style="background: rgba(88, 100, 170, 1)" >
                        <h5 class="modal-title text-white" id="exampleModalLabel">Créer une devise</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">

                        <div class="basic-form">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="" class="text-dark fs-4">Nouvelle devise</label>
                                 <select name="" id="" class="form-select rounded-pill w-100" style="height: 35px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="">Euro (EUR)</option>
                                    <option value="">US Dollar (USD)</option> 
                                 </select>
                              </div>

                              <div class="form-group col-md-6 d-flex" style="gap:1rem;">
                                 <button class="btn btn-danger" style="height: 35px;margin-top: 30px;margin-left: 5px;">MAD/EUR</button>
                                 <div style="width: 100%;">
                                    <label for="" class="text-dark fs-4">Taux de change</label>
                                    <input type="text" class="form-control input-rounded w-100"  value="20" name="adresse_lib" style="border:1px solid rgba(88, 100, 170, 1);">
                                 </div>

                              </div>

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
                                          
            <!--END MODAL -->
        </div>

        
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table   style="min-width: 845px" class="table">
                                <thead>
                                    <tr>
                                        <th style="color:rgb(72, 69, 79)">DEVISE</th>
                                        <th style="color:rgb(72, 69, 79)">TAUX DE CHANGE</th>
                                        <th style="color:rgb(72, 69, 79)">DÉFAUT </th>
                                        <th style="color:rgb(72, 69, 79)">ACTIF</th>
                                        <th style="color:rgb(72, 69, 79)">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                       <td>Moroccan Dirham (MAD)</td>
                                       <td>(MAD/EUR)=20</td>
                                       <td><span style="background: #57ae74;"><i class="fa-regular fa-badge-check"></i></span></td>
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
                                       <td class="d-grid gap-4">
                                         <!--start Button trigger modal -->
                                         <button type="button" class="btn text-white" data-toggle="modal" data-target="#modifierTaxe" style="background: rgba(88, 100, 170, 1)"><i class="fa-solid fa-pen-to-square"></i></button>
                                         <!-- end  Button trigger modal -->
                                         <!--start Modal  -->
                                         <div class="modal" id="modifierTaxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                               <div class="modal-header" style="background: rgba(88, 100, 170, 1)" >
                                                  <h5 class="modal-title text-white" id="exampleModalLabel">Créer une devise</h5>
                                                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                               </div>
                                               <div class="modal-body">

                                                  <div class="basic-form">
                                                     <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                           <label for="" class="text-dark fs-4">Nouvelle devise</label>
                                                           <select name="" id="" class="form-select rounded-pill w-100" style="height: 35px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                                              <option value="">Euro (EUR)</option>
                                                              <option value="">US Dollar (USD)</option> 
                                                           </select>
                                                        </div>

                                                        <div class="form-group col-md-6 d-flex" style="gap:1rem;">
                                                           <button class="btn btn-danger" style="height: 35px;margin-top: 30px;margin-left: 5px;">MAD/EUR</button>
                                                           <div style="width: 100%;">
                                                              <label for="" class="text-dark fs-4">Taux de change</label>
                                                              <input type="text" class="form-control input-rounded w-100"  value="20" name="adresse_lib" style="border:1px solid rgba(88, 100, 170, 1);">
                                                           </div>

                                                        </div>

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
