
@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      <form method="POST" action="/save_service"  enctype="application/x-www-form-urlencoded">
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Services</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('/produits-et-services/produits/services')}}">Service</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/produits-et-services/service/ajouter_service')}}">Créer</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">ENREGISTRER</button>
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
                                 <input type="text" class="form-control"  placeholder="Nom" name="nom" style="border:1px solid rgba(88, 100, 170, 1)">
                              </div>
                           </div>
                           @error('nom')
                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 </div>
                              </div>
                           @enderror

                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Référence</label>
                                 <input type="text" class="form-control"  name="reference" placeholder="Référence" style="border:1px solid rgba(88, 100, 170, 1)">
                              </div>
                              <div class="form-group col-md-6">
                                 <div class="form-row d-flex">
                                    <div class="form-group col">
                                       <label class="text-dark fs-4">Prix</label>
                                       <input type="text" class="form-control"  name="prix" placeholder="Prix" style="border:1px solid rgba(88, 100, 170, 1)">
                                    </div>
                                    <div class="form-group mt-2" style="margin-left: 5px;">
                                       <label class="text-dark fs-4"></label>
                                       <select id="inputState" class="form-control" name="devise_prix" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                          <option selected value="MAD" style="background:#ffffff;color: black">MAD</option>
                                          <option value="USD" style="background:#ffffff;color: black">USD</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 @error('reference')
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 @enderror
                              </div>
                              <div class="form-group col-md-6">
                                 @error('prix')
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 @enderror
                              </div>
                           </div>

                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label class="text-dark fs-4">Description</label>
                                 <textarea class="form-control" rows="4" name="description" id="comment" style="border:1px solid rgba(88, 100, 170, 1)" ></textarea>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
               {{------------------- End Overview  --------------------------}}

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
                              <span class="slider"></span>
                           </label>
                           <p class="text-dark fs-4">Appliquer des taxes sur ce produit</p>
                        </div>
                     
                     <div class="form-row">
                           <div class="col-md-12">
                              <label class="select2-label text-dark fs-4 " for="id_label_multiple">
                                 Taxes par defaut </label>
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