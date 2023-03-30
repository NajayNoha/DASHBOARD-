@extends('...layouts.app')
@section("content")
<div class="content-body">
   <div class="container-fluid">
      <form action="/sauvegarder_produit" method="POST" enctype="multipart/form-data">
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Produits</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{route(auth()->user()->role . '/produits-et-services/liste-produits')}}">Produits</a></li>
               <li class="breadcrumb-item active"><a href="{{route(auth()->user()->role . '/produits-et-services/produits/ajouter-produit')}}">Creer</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">AJOUTER</button>
               </div>
         </div>
      </div>
      @if (Session::has('success'))
         <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> {{Session::get('success')}}
         </div>
      @endif
         <div class="row">
            <div class="col-md-8">

               {{------------------  Overview   ------------------------}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Aperçu</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label class="text-dark fs-4">Nom</label>
                                 <input type="text" class="form-control"  placeholder="Nom" name="name" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('name')}}">
                              </div>
                           </div>
                           @error('name')
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 </div>
                              </div>
                           @enderror
                           <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <label class="text-dark fs-4">SKU</label>
                                    <input type="text" class="form-control"  placeholder="SKU" name="sku"  style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('sku')}}">
                                 </div>
                           </div>
                           @error('sku')
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 </div>
                              </div>
                           @enderror
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label class="text-dark fs-4">Description</label>
                                 <textarea class="form-control" rows="4" id="comment" name="description" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('description')}}" ></textarea>
                              </div>
                           </div>
                           @error('description')
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 </div>
                              </div>
                           @enderror
                     </div>
                  </div>
               </div>
               {{------------------- End Overview  --------------------------}}
               {{-------------------- START Address -------------------------}}

               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Prix de vente</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <div class="form-row d-flex">
                                 <div class="form-group col">
                                    <label class="text-dark fs-4">Prix de vente</label>
                                    <input type="number" class="form-control"  name="price" placeholder="prix de gros" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('price')}}">
                                 </div>
                                 <div class="form-group mt-2" style="margin-left: 5px;">
                                    <label class="text-dark fs-4"></label>
                                    <select id="inputState" class="form-control" name="devise1" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                       <option selected style="background:#ffffff;color: black">MAD</option>
                                       <option style="background:#ffffff;color: black">USD</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @error('price')
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              </div>
                           </div>
                        @enderror
                     </div>
                  </div>
               </div>

               {{-- Prix d'achat  --}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Prix d'achat</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <div class="form-row d-flex">
                                 <div class="form-group col">
                                    <label class="text-dark fs-4">Prix d'achat</label>
                                    <input type="number" class="form-control"  name="buying_price" placeholder="Prix d'achat" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group mt-2" style="margin-left: 5px;">
                                    <label class="text-dark fs-4"></label>
                                    <select id="inputState" name="devise2" class="form-control" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                       <option selected style="background:#ffffff;color: black">MAD</option>
                                       <option style="background:#ffffff;color: black">USD</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           @error('buying_price')
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              </div>
                           </div>
                           @enderror
                        </div>
                     </div>
                  </div>
               </div>
               {{-------------------- START Address -------------------------}}

               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Niveau de prix</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <div class="form-row d-flex">
                                 <div class="form-group col">
                                    <label class="text-dark fs-4">Niveau de prix</label>
                                    <input type="number" class="form-control"  name="price_level" placeholder="Niveau de prix" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               {{--------------------- START FILE  ----------------------------}}
               <div class="card" id="file">
                  <div class="card-header">
                        <h4 class="card-title">Images </h4>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form">
                           <div class="form-row">
                              <input class="file-input" type="file" name="image" hidden onchange="loadFile(event)"/>
                              <i class="fas fa-cloud-upload-alt">
                              </i>
                              <p>Images</p>
                           </div>
                        </div>
                        <img class="img-fluid" src="" id="output" alt="" width="200" height="200" style="margin-left: 100px" hidden>
                     </div>
                  </div>
               </div>

               <script>
                  let loadFile = (event)=>{
                     var output = document.getElementById("output");
                     output.removeAttribute("hidden");
                     output.src = URL.createObjectURL(event.target.files[0]);
                  }
               </script>

                        
               {{------------------  Fournisseur   ------------------------}}
               <div class="card" style="position: relative">
                  <a
                  style="background: rgba(88, 100, 170, 1);padding:8px
                        ;border-radius: 50%;
                        cursor: pointer;
                        color:#ffffff ;
                        max-width: max-content;
                        position: absolute;
                        transform: translate(-50% ,50%);
                        top: -12%;
                        left: 50%;
                        " href="{{route(auth()->user()->role . '/contacts/fournisseurs/ajouter_fournisseur')}}"
                        >
                        <i class="fa-solid fa-plus" style="font-size: 1.2rem;"></i>
                  </a>
                  <div class="card-header d-flex">
                     <h2 class="card-title dislay-4">Fournisseur</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                     <div class="form-row">
                        <div class="form-group col-md-12">
                           <label class="text-dark fs-4">Fournisseur</label>
                           {{-- <input type="text" class="form-control"  placeholder="Fournisseur" name="name" style="border:1px solid rgba(88, 100, 170, 1)"> --}}
                           <select id="inputState" name="fournisseur" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                              @foreach ($fournisseurs as $item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
               {{------------------- End Fournisseur --------------------------}}


            </div>

   
            <div class="col-md-4">
               {{-- APPLIQUE TAXE --}}

               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Taxes</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form" id="taxeProduit_switch">
                        <div class="btnSwitch">
                           <label class="toggle">
                              <input type="checkbox" id="apply_tax">
                              <span class="slider">
                              </span>
                           </label>
                           <p class="text-dark fs-4">Appliquer des taxes sur ce produit</p>
                        </div>

                        
                     
                        <div class="form-row">
                           <div class="col-md-12">
                              <label class="select2-label text-dark fs-4 " for="id_label_multiple">
                                 Taxes par defaut 
                              </label>
                              <select class="select2-with-label-multiple js-states" id="id_label_multiple"
                                 style="border:1px solid rgba(88, 100, 170, 1)" name="tax" disabled>
                                 <option selected></option>
                                 @foreach ($taxes as $item)
                                     <option value="{{$item->id}}">{{$item->nom}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <script>
                           let toggle_apply = document.getElementById("apply_tax");
                           let taxe_input = document.getElementById("id_label_multiple");
                           toggle_apply.addEventListener('change', e => {
                              if(e.target.checked === true) {
                                 // console.log("Checkbox is checked - boolean value: ", e.target.checked)
                                 taxe_input.removeAttribute("disabled");
                              }
                              if(e.target.checked === false) {
                                 // console.log("Checkbox is not checked - boolean value: ", e.target.checked);
                                 taxe_input.setAttribute("disabled", "true");
                              }
                           });
                        </script>
                  </div>
                  </div>
               </div>

               {{--END APPLIQUE TAXE --}}

               {{------------------  START Detailed information ----------------------}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Information</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Marque</label>
                              <input type="text" class="form-control" placeholder="Marque" name="marque" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        @error('marque')
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              </div>
                           </div>
                        @enderror
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Pays d'origine</label>
                              <select id="inputState" class="form-control" name="pays_origine" style="border:1px solid rgba(88, 100, 170, 1)">
                                 @foreach ($countries as $data)
                                     <option value="{{$data->sortname}}">{{$data->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>

                        <div class="form-row d-flex">
                           <div class="form-group col">
                              <label class="text-dark fs-4">Poids</label>
                              <input type="text" class="form-control"  name="poids" placeholder="Poids" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group mt-2" style="margin-left: 8px;">
                              <label class="text-dark fs-4"></label>
                              <select id="inputState" class="form-control" name="poids_unit" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                 <option selected style="background:#ffffff;color: black">kg</option>
                                 <option style="background:#ffffff;color: black">g</option>
                                 <option style="background:#ffffff;color: black">lb</option>
                                 <option style="background:#ffffff;color: black">oz</option>
                              </select>
                           </div>
                        </div>
                        @error('poids')
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              </div>
                           </div>
                        @enderror
                     </div>
                     <div>
                  </div>
                     </div>
            
            
                  </div>
               </div>
               {{-------------------- END Detailed information--------------------------}}


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
       <!-- Required vendors -->
       <script src="./../../vendor/global/global.min.js"></script>
       <script src="./../../js/quixnav-init.js"></script>
       <script src="./../../js/custom.min.js"></script>
       
   
       <script src="./../../vendor/select2/js/select2.full.min.js"></script>
       <script src="./../../js/plugins-init/select2-init.js"></script>

@endsection