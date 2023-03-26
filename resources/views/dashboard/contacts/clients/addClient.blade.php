@extends('...layouts.app')

@section("content")
<div class="content-body">
   <div class="container-fluid">
      <form method="POST" action="/sauvegarder_client" enctype="application/x-www-form-urlencoded">
         {{-- @method('HEAD') --}}
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Clients</h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="#">Contacts</a></li>
               <li class="breadcrumb-item active"><a href="{{Route(auth()->user()->role. '/contacts/clients')}}">Client</a></li>
               <li class="breadcrumb-item active"><a href="{{Route(auth()->user()->role. '/contacts/ajouter_client')}}">Create</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">CANCEL</button>
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">AJOUTER</button>
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
                                 <input type="text" class="form-control" placeholder="Nom" name="name" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('name')}}">
                              </div>
                              <div class="form-group col-md-12">
                                 @error('name')
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Numéro client</label>
                                    <input type="text"  class="form-control" placeholder="Numéro client" name="id" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('id')}}>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">E-mails</label>
                                    <input type="email"  class="form-control" placeholder="E-mails" name="email" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('email')}}>
                                 </div>
                                 <div class="form-group col-md-6">
                                    @error('id')
                                       <span class="text-danger">
                                          {{$message}}
                                       </span>
                                    @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    @error('email')
                                       <span class="text-danger">
                                          {{$message}}
                                       </span>
                                    @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Site Web</label>
                                    <input type="text" class="form-control" placeholder="Site Web" name="website" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('website')}}>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Téléphone</label>
                                    <input type="text" class="form-control" placeholder="Téléphone" name="tel" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('tel')}}>
                                 </div>
                                 <div class="form-group col-md-6">
                                    @error('website')
                                       <span class="text-danger">
                                          {{$message}}
                                       </span>
                                    @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    @error('tel')
                                       <span class="text-danger">
                                          {{$message}}
                                       </span>
                                    @enderror
                                 </div>
                           </div>
                           <div class="form-row">
                                 <div class="form-group col-md-4">
                                    <label class="text-dark fs-4">Numéro de taxes</label>
                                    <input type="text" class="form-control" placeholder="Numéro de taxes" name="taxe_number" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('taxe_number')}}>
                                    <div class="row mt-2">
                                       <div class="form-group col-md-12">
                                          @error('taxe_number')
                                              <span class="text-danger">
                                                {{$message}}
                                              </span>
                                          @enderror
                                       </div>
                                    </div>
                                 </div>
                           </div>
                     </div>
                  </div>
               </div>
               {{------------------- End Overview  --------------------------}}
               {{-------------------- START Address -------------------------}}

               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Adresse</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Address Label</label>
                              <input type="text" class="form-control" placeholder="Adress Label" name="adresse_lib" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('adresse_lib')}}>
                              <div class="row mt-1 mx-2">
                                 @error('adresse_lib')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Type d'adresse </label>
                              <select id="inputState" class="form-control" name="adresse_type" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('adresse_type')}}>
                              <option selected>Facturation et Livraison</option>
                                 <option>Livraison</option>
                                 <option>Facturation</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Téléphone de l'adresse</label>
                              <input type="text" class="form-control" placeholder="Address Phone" name="adresse_tel" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('adresse_type')}}>
                              <div class="row mt-1 mx-2">
                                 @error('adresse_tel')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Address 1</label>
                              <input type="text" class="form-control" name="adresse1" placeholder="Address 1" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('adresse1')}}>
                              <div class="row mt-1 mx-2">
                                 @error('adresse1')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Address 2</label>
                              <input type="text" class="form-control" name="adresse2" placeholder="Address 2" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('adresse2')}}>
                              <div class="row mt-1 mx-2">
                                 @error('adresse2')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Pays</label>
                              <select id="inputState" class="form-control" name="pays" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('pays')}}>
                                 <option selected>Select Country</option>
                                 @foreach ($countries as $data)
                                     <option value="{{$data->sortname}}">{{$data->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Code Postal</label>
                                 <input type="text" class="form-control" name="postalCode" placeholder="Code Postal" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('postalCode')}}>
                                 <div class="row mt-1 mx-2">
                                    @error('postalCode')
                                        <label class="text-danger">{{$message}}</label>
                                    @enderror
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="" class="text-dark fs-4">Ville</label>
                                 <input type="text" class="form-control" name="city" placeholder="City" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('city')}}>
                                 <div class="row mt-1 mx-2">
                                    @error('city')
                                        <label class="text-danger">{{$message}}</label>
                                    @enderror
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
                        <h4 class="card-title">Fichiers attachés</h4>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form">
                           <div class="form-row">
                              <input class="file-input" type="file" name="file" hidden>
                              <i class="fas fa-cloud-upload-alt"></i>
                              <p>Ajouter un nouveau fichier </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>

            <div class="col-md-4">
               {{------------------  START Detailed information ----------------------}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Informations détaillées</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Niveau de prix</label>
                              <input type="text" class="form-control" placeholder="Niveau de prix" name="price_level" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('price_level')}}>
                              <div class="row mt-1 mx-2">
                                 @error('price_level')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Devise</label>
                              <select id="inputState" class="form-control" name="devise" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('devise')}}>
                                 <option selected>MAD</option>
                              </select>
                              <div class="row mt-1 mx-2">
                                 @error('devise')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Discount</label>
                              <input type="text" class="form-control" name="discount" placeholder="Discount" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('discount')}}>
                              <div class="row mt-1 mx-2">
                                 @error('discount')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Type de Taxe</label>
                              <input type="text" class="form-control" name="taxe_type" placeholder="Type de Taxe" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('taxe_type')}}>
                              <div class="row mt-1 mx-2">
                                 @error('taxe_type')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Taxes</label>
                              <input type="text" class="form-control" name="taxes" placeholder="Taxes" style="border:1px solid rgba(88, 100, 170, 1)" value={{old('taxes')}}>
                              <div class="row mt-1 mx-2">
                                 @error('taxes')
                                     <label class="text-danger">{{$message}}</label>
                                 @enderror
                              </div>
                           </div>
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
