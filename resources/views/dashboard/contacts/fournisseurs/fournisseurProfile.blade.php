@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      
      <form action="#" method="POST" enctype="application/x-www-form-urlencoded" id="formSubmit">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Fournisseurs</h4>
            </div>
            <ol class="breadcrumb mt-2">
               <li class="breadcrumb-item"><a href="#">Fournisseurs</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/contacts/fournisseurs')}}">khalid</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('contacts/fournisseurs/profile',1)}}">Modifier</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-3 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">CANCEL</button>
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">ENREGISTRER</button>
               </div>
         </div>
      </div>


      
         @csrf
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
                                 <label class="text-dark fs-4">Nom de Fournisseur</label>
                                 <input type="text" class="form-control"  placeholder="Nom de Fournisseur" name="Nom de Fournisseur" style="border:1px solid rgba(88, 100, 170, 1)">
                              </div>
                           </div>
                           <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Numéro Fournisseur #</label>
                                    <input type="text" class="form-control"  name="supplierId" value="S00001" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Email</label>
                                    <input type="password" class="form-control" placeholder="Email" name="email" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Site Web</label>
                                    <input type="text" class="form-control" placeholder="Site Web" name="website" style="border:1px solid rgba(88, 100, 170, 1)">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Téléphone</label>
                                    <input type="text" class="form-control" placeholder="Téléphone" name="phone" style="border:1px solid rgba(88, 100, 170, 1)">
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
                              <label class="text-dark fs-4">Pays</label>
                              <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option selected>Morroco</option>
                                 <option>Afghanistan</option>
                                 <option>Albania</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Code Postal</label>
                                 <input type="text" class="form-control"  name="postalCode" placeholder="Code Postal" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Address 1</label>
                              <input type="text" class="form-control"  name="adresse1" placeholder="Address 1" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Address 2</label>
                              <input type="text" class="form-control"  name="adresse2" placeholder="Address 2" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Code Postal</label>
                              <input type="text" class="form-control"  name="postalCode" placeholder="Code Postal" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">Ville</label>
                              <input type="text" class="form-control" name="Ville" placeholder="City" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

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
                                 <p>Ajouter un  nouveau fichier</p>
                           </div>
                     </div>
                  </div>
                  </div>
               </div>
               {{-------------------- START Address -------------------------}}

               {{-- <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4">CANCEL</button>
                  <button type="submit" class="btn btn-success text-white px-4">AJOUTER</button>
               </div> --}}

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
                              <input type="text" class="form-control" placeholder="Niveau de prix" name="price_level" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Taxes</label>
                              <input type="text" class="form-control"  name="taxes" placeholder="Taxes" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Currency</label>
                              <select id="inputState" class="form-control" name="currency" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option selected>MAD</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Discount</label>
                              <input type="text" class="form-control"  name="discount" placeholder="Discount" style="border:1px solid rgba(88, 100, 170, 1)">
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
