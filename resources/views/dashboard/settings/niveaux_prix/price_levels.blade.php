@extends('...layouts.app')

@section("content")
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
         <button type="button" class="btn text-white px-4 text-white" style="background: #57ae74;" data-toggle="modal"
            data-target="#creerPriceLevel">
            <i class="fa-solid fa-plus"></i>
            <span class="ms-2">Create</span>
         </button>
         <!--end Button trigger modal -->
         <!--start Modal  -->
         <form action="{{Route('settings.price-levels.store')}}" method="POST">
            @csrf
            <div class="modal" id="creerPriceLevel" tabindex="-1" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
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
                                 <input type="text" class="form-control input-rounded w-100" placeholder="Nom"
                                    name="nom" style="border:1px solid rgba(88, 100, 170, 1);">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="" class="text-dark fs-4">Type</label>
                                 <select name="type" id="" class="form-select rounded-pill w-100"
                                    style="height: 35px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="Vente">Niveau de prix pour les ventes</option>
                                    <option value="Achat">Niveau de prix pour les achats</option>
                                 </select>
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
                           @foreach($priceLevels as $priceLevel)
                           <tr>
                              <td>{{$priceLevel->nom}}</td>
                              <td>{{$priceLevel->type_niveau}}</td>
                              <td>
                                 <form action="{{Route('setting.price-levels.change-active',$priceLevel->id)}}" method="POST"
                                    class="checkbox">
                                    @csrf
                                    <div class="basic-form" id="taxeProduit_switch">
                                       <div class="btnSwitch">
                                          <label class="toggle">
                                             <input type="checkbox" {{$priceLevel-> actif ? 'checked':''}} onchange='changeActif({{$priceLevel->id}})'>
                                             <span class="slider"></span>
                                          </label>
                                       </div>
                                    </div>
                                    <input type="text" name='actif' value='{{$priceLevel->actif}}' hidden>
                                    <button type="submit" hidden id='btnSubmit{{$priceLevel -> id}}'>Submit</button>
                                 </form>
                              </td>
                              <td>
                                 <!--start Button trigger modal -->
                                 <button type="button" class="btn text-white" data-toggle="modal"
                                    data-target="#modifierPriceLevel{{$priceLevel->id}}"
                                    style="background: rgba(88, 100, 170, 1)"><i
                                       class="fa-solid fa-pen-to-square"></i></button>
                                 <!-- end  Button trigger modal -->
                                 <!--start Modal  -->
                                 <form action="{{Route('settings.price-levels.edit',$priceLevel->id)}}" method="POST">
                                    @csrf
                                    <div class="modal" id="modifierPriceLevel{{$priceLevel->id}}" tabindex="-1"
                                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered modal-lg">
                                          <div class="modal-content">
                                             <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Créer un
                                                   niveau de prix</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                   aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">

                                                <div class="basic-form">
                                                   <div class="form-row">

                                                      <div class="form-group col-md-6">
                                                         <label for="" class="text-dark fs-4">Nom</label>
                                                         <input type="text" class="form-control input-rounded w-100"
                                                            value="{{$priceLevel->nom}}" name="nom"
                                                            style="border:1px solid rgba(88, 100, 170, 1);">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                         <label for="" class="text-dark fs-4">Type</label>
                                                         <select name="type" id=""
                                                            class="form-select rounded-pill w-100"
                                                            style="height: 35px;border:1px solid rgba(88, 100, 170, 1)">
                                                            <option
                                                               {{$priceLevel->type_niveau == 'Vente' ?'selected':''}}
                                                               value="Vente">Niveau de prix pour les ventes</option>
                                                            <option
                                                               {{$priceLevel->type_niveau == 'Achat' ?'selected':''}}
                                                               value="Achat">Niveau de prix pour les achats</option>
                                                         </select>
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
                                 <!--END Modal  -->
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