@extends('...layouts.app')
@section('title')
   Règles de prix
@endsection
@section("content")
<div class="content-body">
   <div class="container-fluid">
      <form method="POST" action="/update_priceRule"  enctype="application/x-www-form-urlencoded">
         @csrf
         <input type="text" hidden name="id" value="{{$data->id}}">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>règle de prix</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{route(auth()->user()->role . '/produits-et-services/regles-de-prix/list')}}">Règles de prix </a></li>
               <li class="breadcrumb-item"><a href="{{route(auth()->user()->role . '/produits-et-services/regles-de-prix/list')}}">Règles 1 </a></li>
               <li class="breadcrumb-item active"><a href="{{route(auth()->user()->role . '/produits-et-services/regles-de-prix/edit',1)}}">Modifier</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
                  <button type="submit" class="btn  text-white px-4" style="font-weight: bolder;background: #57ae74;">ENREGISTRER</button>
               </div>
         </div>
      </div>
         {{-- MESSAGES --}}
         {{-- ERROR --}}
         {{-- <div class="alert alert-danger solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> le nom du client ne doit pas etre vide
         </div> --}}
         {{-- MESSAGE SUCCESS --}}
         {{-- <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> WOW! Eveything looks OK
         </div> --}}
         @if (Session::has('success'))
            <div class="alert alert-success solid alert-dismissible fade show">
               <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
               </button> {{Session::get('success')}}
            </div>
         @endif
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
                                 <select id="inputState" name="selection" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="Tous les produits"  {{($data->selection == "Tous les produits") ? 'selected' : ''}}>Tous les produits</option>
                                    <option value="Variantes de produits sélectionnés" {{($data->selection == "Variantes de produits sélectionnés") ? 'selected' : ''}}>Variantes de produits sélectionnés</option>
                                    <option value="Tags de produit sélectionnés" {{($data->selection == "Tags de produit sélectionnés") ? 'selected' : ''}}>Tags de produit sélectionnés</option>
                                    <option value="Attributs sélectionnés" {{($data->selection == "Attributs sélectionnés") ? 'selected' : ''}}>Attributs sélectionnés</option>
                                 </select>
                              </div>
                              <div class="col-md-6">
                                 <label for="" class="text-dark fs-4">Libellé de la règle</label>
                                 <input type="text" name="libelle" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->libelle}}">
                              </div>
                           </div>
                           <div class="form-row mt-2">
                              <div class="form-group col-md-12">
                                 <label for="" class="text-dark fs-4">Niveau de prix</label>
                                 <select name="price_level" class="form-control" id="price_level" style="border:1px solid rgba(88,100,170,1)">
                                    <option value=""></option>
                                    @foreach ($priceLevels as $item)
                                    @if ($item->id == $data->price_level)
                                    <option value="{{$item->id}}" selected>{{$item->type_niveau}}</option>
                                    @else
                                       <option value="{{$item->id}}">{{$item->type_niveau}}</option>
                                    @endif
                                    @endforeach
                                 </select>
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
                                    <select id="inputState" name="price_type" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option value="calculated" {{($data->price_type == "calculated") ? 'selected' : ''}}>Calculé</option>
                                       <option {{($data->price_type == "fixed") ? 'selected' : ''}}>Fixe</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <label class="text-dark fs-4">Prix de base</label>
                                    <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option value="Dernier prix d'achat" {{($data->base_price == "Dernier prix d'achat") ? 'selected' : ''}}>Dernier prix d'achat</option>
                                       <option value="WholeSale Price" {{($data->base_price == "WholeSale Price") ? 'selected' : ''}}>WholeSale Price</option>
                                       <option value="Purchase Price" {{($data->base_price == "Purchase Price") ? 'selected' : ''}}>Purchase Price </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <div class="d-flex align-items-center mb-2">
                                       <input type="radio" value="addition" name="operation" {{($data->operation == "addition") ? 'checked' : ''}} style="height: 20px;width: 20px;margin-right: 10px">
                                       <span style="color:rgba(88, 100, 170, 1;font-size: 25px;"><i class="fa-solid fa-plus"></i></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                       <input type="radio" value="multiplication" name="operation" {{($data->operation == "multiplication") ? 'checked' : ''}} style="height: 20px;width: 20px;margin-right: 10px">
                                       <span style="color:rgba(88, 100, 170, 1;font-size: 25px;" ><i class="fa-solid fa-xmark"></i></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <label for="" class="text-dark fs-4">Valeur</label>
                                    <input type="text" class="form-control" name="valeur" placeholder="Valeur" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->valeur}}">
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
                              @if ($data->saison != null)
                                 <div class="col-md-6">
                                    <input type="checkbox" checked style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Saisons</label>
                                 </div>
                                 <div class="col-md-6">
                                        
                                    <select id="seasons" class="form-control" name="saison" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option value=""></option>
                                       <option value="saison 1" {{($data->saison == "saison 1") ? 'selected' : ''}} class="text-dark">Saison 1</option>
                                       <option value="saison 2" {{($data->saison == "saison 2") ? 'selected' : ''}}>Saison 2</option>
                                       <option value="saison 3" {{($data->saison == "saison 3") ? 'selected' : ''}}>Saison 3</option>
                                    </select>
                                 </div>
                              </div>
                                 <script>
                                 let season_input = document.getElementById('seasons');
                                 let season_toggle = document.getElementById('season_toggle');
                                 season_toggle.addEventListener('change',e=>{
                                    if(season_toggle.checked == true){
                                       season_input.removeAttribute('hidden');
                                    }else if(season_toggle.checked == false){
                                       season_input.setAttribute('hidden','true');
                                    }
                                 })
                                 </script>
                              @else
                              <div class="col-md-6">
                                 <input type="checkbox" style="margin-right: 10px">
                                 <label for="" class="text-dark fs-4">Saisons</label>
                              </div>
                              <div class="col-md-6">
                                     
                                 <select id="seasons" hidden class="form-control" name="saison" style="border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="" selected></option>
                                    <option value="saison 1"class="text-dark">Saison 1</option>
                                    <option value="saison 2">Saison 2</option>
                                    <option value="saison 3">Saison 3</option>
                                 </select>
                              </div>
                           </div>
                              <script>
                              let season_input = document.getElementById('seasons');
                              let season_toggle = document.getElementById('season_toggle');
                              season_toggle.addEventListener('change',e=>{
                                 if(season_toggle.checked == true){
                                    season_input.removeAttribute('hidden');
                                 }else if(season_toggle.checked == false){
                                    season_input.setAttribute('hidden','true');
                                 }
                              })
                              </script>
                              @endif
                           </div>
                           <div class="form-row mb-3">
                              @if ($data->devise != null)
                                 <div class="col-md-6">
                                    <input type="checkbox" checked style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Devise</label>
                                 </div>
                                 <div class="col-md-6">
                                    <select class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option value=""></option>
                                       <option value="MAD" {{($data->devise == "MAD") ? 'selected' : ''}}>MAD</option>
                                       <option value="USD" {{($data->devise == "USD") ? 'selected' : ''}}>USD</option>
                                    </select>
                                 </div>
                              @else
                                 <div class="col-md-6">
                                    <input type="checkbox" name="devise_toggle" id="devise_toggle" style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Devise</label>
                                 </div>
                                 <div class="col-md-6">
                                    <select class="form-control"  name="devise" id="devise" style="border:1px solid rgba(88, 100, 170, 1)" hidden>
                                       <option value=""></option>
                                       <option value="MAD">MAD</option>
                                       <option value="USD">USD</option>
                                    </select>
                                 </div>
                              @endif
                              <script>
                                 let devise_toggle = document.getElementById('devise_toggle');
                                 let devise_input = document.getElementById('devise');
                                 devise_toggle.addEventListener('change',e=>{
                                    if(devise_toggle.checked == true){
                                       devise_input.removeAttribute('hidden');
                                    }else if(devise_toggle.checked == false){
                                       devise_input.setAttribute('hidden','true');
                                    }
                                 })
                              </script>
                           </div>
                        <div class="form-row mb-3">
                           @if ($data->tag_client != null)
                               <div class="col-md-6">
                                 <input type="checkbox" name="clientTag_toggle" id="clientTag_toggle" style="margin-right: 10px">
                                 <label for="" class="text-dark fs-4">Tags Clients</label>
                              </div>
                              <div class="col-md-6">
                                    <select  class="form-control" name="clientTag" id="clientTag" style="border:1px solid rgba(88, 100, 170, 1)">
                                       <option value="Tag 1" {{($data->tag_client == "Tag 1") ? 'selected' : ''}}>Tag 1</option>
                                       <option value="Tag 2" {{($data->tag_client == "Tag 1") ? 'selected' : ''}}>tag 2</option>
                                    </select>
                              </div>
                           @else
                           <div class="col-md-6">
                              <input type="checkbox" name="clientTag_toggle" id="clientTag_toggle" style="margin-right: 10px">
                              <label for="" class="text-dark fs-4">Tags Clients</label>
                           </div>
                           <div class="col-md-6">
                                 <select  class="form-control" hidden name="clientTag" id="clientTag" style="border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="Tag 1">Tag 1</option>
                                    <option value="Tag 2">tag 2</option>
                                 </select>
                           </div>
                           @endif
                           
                        </div>
                        <script>
                           let clientTag_toggle = document.getElementById('clientTag_toggle');
                           let clientTag = document.getElementById('clientTag');
                           clientTag_toggle.addEventListener('change',e=>{
                              if(clientTag_toggle.checked == true){
                                 clientTag.removeAttribute('hidden');
                              }else if(clientTag_toggle.checked == false){
                                 clientTag.setAttribute('hidden','true');
                              }
                           })
                        </script>
                        <div class="form-row mb-3">
                           @if ($data->date_debut != null || $data->date_fin != null)
                               <div class="col-md-6">
                              <input type="checkbox" name="toggle_period" checked id="toggle_period" style="margin-right: 10px">
                              <label for="" class="text-dark fs-4">Période</label>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-row">
                                    <div class="form-group col" id="date_debut">
                                       <label for="" class="text-dark fs-4">Début</label>
                                       <input type="date"  name="date_debut"  class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->date_debut}}">
                                    </div>
                                    <div class="form-group col" id="date_fin">
                                       <label for="" class="text-dark fs-4" >Fin</label>
                                       <input type="date"  name="date_fin"  class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->date_fin}}">
                                    </div>
                                 </div>
                           </div>
                           @else
                           <div class="col-md-6">
                              <input type="checkbox" name="toggle_period" id="toggle_period" style="margin-right: 10px">
                              <label for="" class="text-dark fs-4">Période</label>
                           </div>
                           <div class="col-md-6">
                              <div class="form-row">
                                 <div class="form-group col" id="date_debut" hidden>
                                    <label for="" class="text-dark fs-4">Début</label>
                                    <input type="date"  name="date_debut"  class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group col" id="date_fin" hidden>
                                    <label for="" class="text-dark fs-4" >Fin</label>
                                    <input type="date"  name="date_fin"  class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                              </div>
                           </div>
                           @endif
                           <script>
                              let toggle_period = document.getElementById('toggle_period');
                              let date_debut = document.getElementById('date_debut');
                              let date_fin = document.getElementById('date_fin');
                              toggle_period.addEventListener('change',e=>{
                                 if(toggle_period.checked == true){
                                    date_debut.removeAttribute('hidden');
                                    date_fin.removeAttribute('hidden');
                                 }else if(toggle_period.checked == false){
                                    date_debut.setAttribute('hidden','true');
                                    date_fin.setAttribute('hidden','true');
                                 }
                              })
                           </script>
                        </div> 
                              <div class="form-row mb-3">
                                 @if ($data->lieu_stockage != null)
                                 <div class="col-md-6">
                                    <input type="checkbox" checked id="toggle_lieu" name="toggle_lieu" style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Lieux de stockage</label>
                                 </div>
                                 <div class="col-md-6">
                                    <input type="text" id="lieu" name="lieu_stockage" class="form-control" placeholder="Lieux de stockage" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 @else
                                 <div class="col-md-6">
                                    <input type="checkbox" id="toggle_lieu" name="toggle_lieu" style="margin-right: 10px">
                                    <label for="" class="text-dark fs-4">Lieux de stockage</label>
                                 </div>
                                 <div class="col-md-6">
                                    <input type="text" id="lieu" hidden name="lieu_stockage" class="form-control" placeholder="Lieux de stockage" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 @endif
                                 <script>
                                    let toggle_lieu = document.getElementById('toggle_lieu');
                                    let lieu = document.getElementById('lieu');
                                    toggle_lieu.addEventListener('change',e=>{
                                       if(toggle_lieu.checked == true){
                                          lieu.removeAttribute('hidden');
                                       }else if(toggle_lieu.checked == false){
                                          lieu.setAttribute('hidden','true');
                                       }
                                    })
                                 </script>
                        
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
