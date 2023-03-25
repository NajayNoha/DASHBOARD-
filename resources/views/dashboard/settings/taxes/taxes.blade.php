@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Taxes</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javascript:void(0)">Taxes</a></li>
               <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
            </ol>
         </div>
      </div>
      <!--start errors -->
      @if($errors->any())
      <div class="alert alert-danger solid alert-dismissible fade show">
         <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                  class="mdi mdi-close"></i></span></button>
         <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <!--end errors -->

      <div class="mb-2">
         <!-- Button trigger modal -->
         <button type="button" class="btn px-4 text-white" style="background: #57ae74;" data-toggle="modal"
            data-target="#creerTaxe">
            <i class="fa-solid fa-plus"></i>
            <span class="ms-2">Create</span>
         </button>
         <!--end Button trigger modal -->
         <!-- Modal -->
         <form action="{{Route('settings.taxes.store')}}" method="POST">
            @csrf
            <div class="modal" id="creerTaxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                     <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Créer une taxe</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <div class="basic-form">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="" class="text-dark fs-4">Nom</label>
                                 <input type="text" placeholder="Nom" class="form-control input-rounded"
                                    style="border:1px solid rgba(88, 100, 170, 1)" name="nom">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="" class="text-dark fs-4">Abréviation</label>
                                 <input type="text" placeholder="Abréviation" class="form-control input-rounded"
                                    style="border:1px solid rgba(88, 100, 170, 1)" name="abreviation">
                              </div>
                           </div>

                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="" class="text-dark fs-4">Taux de taxe</label>
                                 <input type="number" class="form-control input-rounded"
                                    style="border:1px solid rgba(88, 100, 170, 1)" name="taux">
                              </div>
                           </div>

                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger px-4" data-dismiss="modal">ANNULER</button>
                        <button type="submit" class="btn text-white" style="background: #57ae74">ENREGISTRER</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <!--END MODAL -->
      </div>

      <div class="row">
         <div class="col-12">
            <div class="card">

               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">NOM</th>
                              <th style="color:rgb(72, 69, 79)">ABRÉVIATION</th>
                              <th style="color:rgb(72, 69, 79)">TAUX DE TAXE</th>
                              <th style="color:rgb(72, 69, 79)">ACTIF</th>
                              <th style="color:rgb(72, 69, 79)">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($taxes as $taxe)
                           <tr>
                              <td>{{$taxe -> nom}}</td>
                              <td>{{$taxe -> abreviation}}</td>
                              <td>{{$taxe -> taux}},00</td>
                              <td>
                                 <form action="{{Route('settings.taxes.change-active',$taxe->id)}}" method="POST"
                                    class="checkbox">
                                    @csrf
                                    <div class="basic-form" id="taxeProduit_switch">
                                       <div class="btnSwitch">
                                          <label class="toggle">
                                             <input type="checkbox" {{ $taxe->actif ? 'checked' : '' }}
                                                onchange='changeActif({{$taxe->id}})'>
                                             <span class="slider"></span>
                                          </label>
                                       </div>
                                       <input type="text" name='actif' value='{{$taxe->actif}}' hidden>
                                       <button type="submit" hidden id='btnSubmit{{$taxe -> id}}'>Submit</button>
                                    </div>
                                 </form>

                              </td>
                              <td class="d-grid gap-4">
                                 <!--start Button trigger modal -->
                                 <button type="button" class="btn text-white" data-toggle="modal"
                                    data-target="#modifierTaxe{{$taxe->id}}"
                                    style="background: rgba(88, 100, 170, 1)"><i
                                       class="fa-solid fa-pen-to-square"></i></button>
                                 <!-- end  Button trigger modal -->
                                 <!--start Modal  -->
                                 <form action="{{Route('settings.taxes.updatet',$taxe->id)}}" method="POST">
                                    @csrf
                                    <div class="modal" id="modifierTaxe{{$taxe->id}}" tabindex="-1"
                                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered modal-lg">
                                          <div class="modal-content">
                                             <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Modifier une
                                                   taxe
                                                </h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                   aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="basic-form">
                                                   <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                         <label for="" class="text-dark fs-4">Nom</label>
                                                         <input type="text" value={{$taxe -> nom}}
                                                            class="form-control input-rounded"
                                                            style="border:1px solid rgba(88, 100, 170, 1)" name="nom">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                         <label for="" class="text-dark fs-4">Abréviation</label>
                                                         <input type="text" value={{$taxe -> abreviation}}
                                                            class="form-control input-rounded"
                                                            style="border:1px solid rgba(88, 100, 170, 1)"
                                                            name="abreviation">
                                                      </div>
                                                   </div>

                                                   <div class="form-row">
                                                      <div class="form-group col-md-12">
                                                         <label for="" class="text-dark fs-4">Taux de taxe</label>
                                                         <input type="number" class="form-control input-rounded"
                                                            style="border:1px solid rgba(88, 100, 170, 1)" name="taux"
                                                            value={{$taxe -> taux}}>
                                                      </div>
                                                   </div>

                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger px-4"
                                                   data-dismiss="modal">ANNULER</button>
                                                <button type="submit" class="btn text-white"
                                                   style="background: #57ae74">ENREGISTRER</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </td>
                           </tr>

                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <script>
            function changeActif(id) {
               const btnSubmit = document.getElementById('btnSubmit' + id);
               btnSubmit.click();
            }
         </script>
      </div>
   </div>

   {{-- <div>

</div> --}}

   @endsection