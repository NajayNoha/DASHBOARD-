
@extends('...layouts.app')

@section("content")
<div class="content-body">
   <div class="container-fluid">
      <form action="#"  enctype="application/x-www-form-urlencoded">
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Produits</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('/produits-et-services/liste-produits')}}">Produits</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/produits-et-services/produits/ajouter-produit')}}">Creer</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">AJOUTER</button>
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
                                 <input type="text" class="form-control"  placeholder="Nom" name="name" style="border:1px solid rgba(88, 100, 170, 1)">
                              </div>
                           </div>
                           <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">SKU</label>
                                    <input type="text" class="form-control"  placeholder="SKU" name="name"  style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Code-barres</label>
                                    <input type="email" class="form-control" placeholder="Code-barres" name="email" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label class="text-dark fs-4">Description</label>
                                 <textarea class="form-control" rows="4" id="comment" style="border:1px solid rgba(88, 100, 170, 1)" ></textarea>
                              </div>
                           </div>
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
                           <div class="form-group col-md-6">
                              <div class="form-row d-flex">
                                 <div class="form-group col">
                                    <label class="text-dark fs-4">Wholesale Price</label>
                                    <input type="text" class="form-control"  name="discount" placeholder="Wholesale Price" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group mt-2" style="margin-left: 5px;">
                                    <label class="text-dark fs-4"></label>
                                    <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                       <option selected style="background:#ffffff;color: black">MAD</option>
                                       <option style="background:#ffffff;color: black">USD</option>
                                    </select>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group col-md-6">
                              <div class="form-row d-flex">
                                 <div class="form-group col">
                                    <label class="text-dark fs-4">Recommended Retail Price</label>
                                    <input type="text" class="form-control" placeholder="Recommended Retail Price" name="adresse_tel" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>

                                 <div class="form-group mt-2" style="margin-left: 5px;">
                                    <label class="text-dark fs-4"></label>
                                    <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                       <option selected style="background:#ffffff;color: black">MAD</option>
                                       <option style="background:#ffffff;color: black">USD</option>
                                    </select>
                                 </div>
                              </div>

                           </div>
                        </div>
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
                           <div class="form-group col-md-6">
                              <div class="form-row d-flex">
                                 <div class="form-group col">
                                    <label class="text-dark fs-4">Purchase Price</label>
                                    <input type="text" class="form-control"  name="discount" placeholder="Purchase Price" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group mt-2" style="margin-left: 5px;">
                                    <label class="text-dark fs-4"></label>
                                    <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                       <option selected style="background:#ffffff;color: black">MAD</option>
                                       <option style="background:#ffffff;color: black">USD</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-------------------- START Address -------------------------}}

               {{--------------------- START FILE  ----------------------------}}
               <div class="card" id="file">
                  <div class="card-header">
                        <h4 class="card-title">Images </h4>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form">
                           <div class="form-row">
                              <input class="file-input" type="file" name="file" hidden>
                              <i class="fas fa-cloud-upload-alt"></i>
                              <p>Images</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


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
                        " href="{{Route('/contacts/fournisseurs/ajouter_fournisseur')}}"
                        >
                        <i class="fa-solid fa-plus" style="font-size: 1.2rem;"></i>
                  </a>
                  <div class="card-header d-flex">
                     <h2 class="card-title dislay-4">Fournisseur</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                     <div class="form-row">
                        <div class="form-group col-md-6">

                           <label class="text-dark fs-4">Fournisseur</label>
                           <input type="text" class="form-control"  placeholder="Fournisseur" name="name" style="border:1px solid rgba(88, 100, 170, 1)">
                        </div>
                        <div class="form-group col-md-6">
                              <label class="text-dark fs-4">SKU Fournisseur</label>
                              <input type="text" class="form-control"  placeholder="SKU fournisseur" name="name"  style="border:1px solid rgba(88, 100, 170, 1)">
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-12">
                           <label class="text-dark fs-4">Description fournisseur</label>
                           <textarea class="form-control" rows="4" id="comment" style="border:1px solid rgba(88, 100, 170, 1)" ></textarea>
                        </div>
                     </div>

                     </div>
                  </div>
               </div>
               {{------------------- End Fournisseur --------------------------}}


            </div>


            <div class="col-md-4">

               {{-- Type Produit --}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Type</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form" id="typeProduit">
                        <div class="col">
                           <span class="display-4"><i class="fa-solid fa-bicycle"></i></span>
                           <p class="text-dark fs-4 align-self-center ms-1">Produit simple</p>
                        </div>
                     </div>
                  </div>
               </div>
               {{------------------  End  Type Produit ----------------}}


               {{-- APPLIQUE TAXE --}}

               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Taxes</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form" id="taxeProduit_switch">
                        <div class="btnSwitch">
                           <label class="toggle">
                              <input type="checkbox">
                              <span class="slider"></span>
                           </label>
                           <p class="text-dark fs-4">Appliquer des raxes sur ce produit</p>
                        </div>

                     <div class="form-row">
                           <div class="col-md-12">
                              <label class="select2-label text-dark fs-4 " for="id_label_multiple">
                                 Taxes par defaut </label>
                                 <select class="select2-with-label-multiple js-states" id="id_label_multiple"
                                    multiple="multiple" style="border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="AL" class="text-dark">taxe 1</option>
                                    <option value="WY" class="text-dark">taxe 2</option>
                                 </select>

                           </div>
                     </div>
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
                              <label class="text-dark fs-4">Saison</label>
                              <input type="text" class="form-control"  placeholder="Saison" name="saison" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Marque</label>
                              <input type="text" class="form-control" placeholder="Marque" name="sarque" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Pays d'origine</label>
                              <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option selected>Pays d'origine</option>
                                 <option>Morroco</option>
                                 <option>Afghanistan</option>
                                 <option>Albania</option>
                              </select>
                           </div>
                        </div>

                        <div class="form-row d-flex">
                           <div class="form-group col">
                              <label class="text-dark fs-4">Poids</label>
                              <input type="text" class="form-control"  name="discount" placeholder="Poids" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group mt-2" style="margin-left: 8px;">
                              <label class="text-dark fs-4"></label>
                              <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ; ">
                                 <option selected style="background:#ffffff;color: black">kg</option>
                                 <option style="background:#ffffff;color: black">g</option>
                                 <option style="background:#ffffff;color: black">lb</option>
                                 <option style="background:#ffffff;color: black">oz</option>
                              </select>
                           </div>
                        </div>
                        <div class="fomr-rom">
                           <div>
                              <label class="text-dark fs-4">Code SH</label>
                              <input type="text" class="form-control"  name="discount" placeholder="Poids" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
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
