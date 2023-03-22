

@extends('...layouts.app')

@section("content")
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Paramètres des produits  </h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Paramètres des produits</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
                </ol>
            </div>
        </div>

        <!-- BUTTON CREATE  -->

        <div class="mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn text-white px-4 text-white"  style="background: #57ae74;"   data-toggle="modal" data-target="#basicModal1">
               <i class="fa-solid fa-plus"></i>
               <span class="ms-2">Create</span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="basicModal1">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header" style="background: rgba(88, 100, 170, 1)" >
                           <h5 class="modal-title text-white">Créer une marque</h5>
                           <button type="button" class="close text-white fs-4" data-dismiss="modal"><span>&times;</span>
                           </button>
                     </div>
                     <div class="modal-body">
                        <form action="#">
                           <div class="basic-form">
                              <div class="form-row">
                                 <div class="form-group col-md-12 text-left">
                                    <label for="" class="text-dark fs-4">Libellé</label>
                                    <input type="text" value="Libellé" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </form>
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

       <!--END  BUTTON CREATE  -->

        {{-- TABLE --}}
        <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <h4 class="text-center">Paramètres des produits</h4>
                     <div class="list-group list-group-flush mt-2">
                        <button type="button" class="list-group-item list-group-item-action">Marques</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-8 col-sm-12">
               <div class="card">
                  <div class="card-body">
                      <div class="table-responsive">
                          <table id="example" class="display" style="min-width: 700px">
                              <thead>
                                  <tr>
                                      <th style="width: 50%;">Nome</th>
                                      <th style="width: 50%;" class="text-right">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Nom</td>
                                      <td class="text-right">
                                       <!-- Button trigger modal -->
                                       <button type="button" class="btn text-white"  style="background: rgba(88, 100, 170, 1)"   data-toggle="modal" data-target="#basicModal"><i class="fa-solid fa-pen-to-square"></i></button>
                                       <!-- Modal -->
                                       <div class="modal fade" id="basicModal">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header" style="background: rgba(88, 100, 170, 1)" >
                                                      <h5 class="modal-title text-white">Modifier une marque</h5>

                                                      <button type="button" class="close text-white fs-4" data-dismiss="modal"><span>&times;</span>
                                                      </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form action="#">
                                                      <div class="basic-form">
                                                         <div class="form-row">
                                                            <div class="form-group col-md-12 text-left">
                                                               <label for="" class="text-dark fs-4">Libellé</label>
                                                               <input type="text" value="dell" class="form-control">
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </form>
                                                </div>
                                                <div class="modal-footer">
                                                      <button type="button" class="btn btn-outline-danger px-4"   data-dismiss="modal">ANNULER</button>
                                                      <button type="button" class="btn text-white" style="background: #57ae74">ENREGISTRER</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
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

