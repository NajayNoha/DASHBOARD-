@extends('...layouts.app')
@section('title')
   Règles de prix
@endsection
@section("content")
<div class="content-body">
   <div class="container-fluid">
      <form action="#"  enctype="application/x-www-form-urlencoded">
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>règle de prix</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('/produits-et-services/regles-de-prix/list')}}">Règles de prix </a></li>
               <li class="breadcrumb-item"><a href="{{Route('/produits-et-services/regles-de-prix/list')}}">Règles 1 </a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}">Modifier</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
                  <button type="submit" class="btn  text-white px-4" style="font-weight: bolder;background: #57ae74;">AJOUTER</button>
               </div>
         </div>
      </div>
         {{-- MESSAGES --}}
         {{-- ERROR --}}
         <div class="alert alert-danger solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> le nom du client ne doit pas etre vide
        </div>
        {{-- MESSAGE SUCCESS --}}
         <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> WOW! Eveything looks OK
         </div>
         <div class="row">
            <div class="col-md-12">
               {{------------------ Créer une règle de prix    ------------------------}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Créer une règle de prix</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                           <div class="form-row">
                              <div class="col-md-6">
                                 <label class="text-dark fs-4">Sélection</label>
                                 <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                    <option>Tous les produits</option>
                                    <option>Variantes de produits sélectionnés</option>
                                    <option>Tags de produit sélectionnés</option>
                                    <option>Attributs sélectionnés</option>
                                 </select>
                              </div>
                              <div class="col-md-6">
                                 <label for="" class="text-dark fs-4">Libellé de la règle</label>
                                 <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                              </div>
                           </div>
                           <div class="form-row mt-2">
                              <div class="form-group col-md-12">
                                 <label for="" class="text-dark fs-4">Niveau de prix</label>
                                 <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            {{--  --}}
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="basic-form">
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <label class="text-dark fs-4">Sélectionnez ensuite le type de prix</label>
                                    <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option>Calculé</option>
                                       <option>Fixe</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <label class="text-dark fs-4">Prix de base</label>
                                    <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option>Dernier prix d'achat</option>
                                       <option>WholeSale Price</option>
                                       <option>Purchase Price </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <div class="d-flex align-items-center mb-2">
                                       <input type="radio" value="" name="plus_fois" style="height: 20px;width: 20px;margin-right: 10px" checked>
                                       <span style="color:rgba(88, 100, 170, 1;font-size: 25px;"><i class="fa-solid fa-plus"></i></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                       <input type="radio" value="" name="plus_fois" style="height: 20px;width: 20px;margin-right: 10px">
                                       <span style="color:rgba(88, 100, 170, 1;font-size: 25px;" ><i class="fa-solid fa-xmark"></i></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <label for="" class="text-dark fs-4">Valeur</label>
                                    <input type="text" class="form-control" name="" placeholder="Valeur" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-header">
                        <p class="text-dark fs-4">Sélectionnez les conditions pour déclencher cette règle de prix</p>
                     </div>
                     <div class="card-body">
                        <div class="basic-form">
                           <div class="form-row mb-3">
                                 <div class="col-md-6">
                                    <input type="checkbox" style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Saisons</label>
                                 </div>
                                 <div class="col-md-6">
                                    <select  class="multi-select form-select" name="states[]" multiple="multiple">
                                       <option value="AL" class="text-dark">Saisons 1</option>
                                       <option value="WY">Saisons 2</option>
                                       <option value="UI">Saisons 3</option>
                                    </select>
                                 </div>
                           </div>
                           <div class="form-row mb-3">
                              <div class="col-md-6">
                                 <input type="checkbox" style="margin-right: 10px">
                                 <label for="" class="text-dark fs-4">Devise</label>
                              </div>
                              <div class="col-md-6">
                                 <select class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="WY">MAD</option>
                                    <option value="UI">USD</option>
                                 </select>
                              </div>
                        </div>
                        <div class="form-row mb-3">
                              <div class="col-md-6">
                                    <input type="checkbox" style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Tags Clients</label>
                              </div>
                              <div class="col-md-6">
                                    <select  class="multi-select" name="states[]" multiple="multiple" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option value="WY">Tag 1</option>
                                       <option value="UI">tag 2</option>
                                    </select>
                              </div>
                        </div>
                        <div class="form-row mb-3">
                           <div class="col-md-6">
                                 <input type="checkbox" style="margin-right: 10px">
                                 <label for="" class="text-dark fs-4">Période</label>
                           </div>
                           <div class="col-md-6">
                              <div class="form-row">
                                 <div class="form-group col">
                                    <label for="" class="text-dark fs-4">Début</label>
                                    <input type="date" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group col">
                                    <label for="" class="text-dark fs-4">Fin</label>
                                    <input type="date" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                              </div>
                           </div>
                     </div>
                              <div class="form-row mb-3">
                                 <div class="col-md-6">
                                    <input type="checkbox" style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Lieux de stockage</label>
                                 </div>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Lieux de stockage" style="border:1px solid rgba(88, 100, 170, 1)">
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

      </form>

   </div>
</div>
@endsection
@section('css')
       {{-- SELECT --}}
       <link rel="stylesheet" href="./../../vendor/select2/css/select2.min.css">
@endsection
@section('scripts')

       <script src="./../../vendor/select2/js/select2.full.min.js"></script>
       <script src="./../../js/plugins-init/select2-init.js"></script>

@endsection
