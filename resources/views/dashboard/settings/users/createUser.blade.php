
@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      <form action="#"  enctype="application/x-www-form-urlencoded">

         <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
               <div class="welcome-text">
                  <h4>Utilisateurs</h4>
               </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">ENREGISTRER</button>
               </div>
            </div>
         </div>
         <!--start Profile -->
         <div class="row">
            
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4 dislay-4">Profil</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Prénom</label>
                              <input type="text" class="form-control input-rounded"  placeholder="Prénom" name="" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom</label>
                              <input type="text" class="form-control input-rounded"  placeholder="Nom" name="" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">E-mail</label>
                              <input type="text" class="form-control input-rounded"  placeholder="E-mail" name="" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom d'affichage</label>
                              <input type="text" class="form-control input-rounded"  placeholder="Nom d'affichage" name="" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Fuseau horaire</label>
                              <select name="" id="" class="form-select rounded-pill w-100" style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Fuseau horaire 1</option>
                                 <option value="">Fuseau horaire 2</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Langue</label>
                              <select name="" id="" class="form-select rounded-pill w-100" style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Anglais (English) </option>
                                 <option value="">Français</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Téléphone</label>
                              <input type="text" class="form-control input-rounded"  placeholder="Téléphone" name="" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
         <!--end Profile -->

         <!--start Valeurs par défaut -->
         <div class="row">
            
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4 dislay-4">Valeurs par défaut</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Taxes</label>
                              <select name="" id="" class="form-select rounded-pill w-100" style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">taxe  1</option>
                                 <option value="">taxe  2</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Niveau de prix</label> 
                              <select name="" id="" class="form-select rounded-pill w-100" style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Wholesale Price </option>
                                 <option value="">Recommended Retail Price</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Type de  taxe</label>
                              <select name="" id="" class="form-select rounded-pill w-100" style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Taxes exclues  </option>
                                 <option value="">Taxes incluses</option>
                              </select>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
         <!--end Valeurs par défaut -->

         <!--start Droits d'accès et Droits d’accès pour le logiciel de caisse -->
         <div class="row">

            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4 dislay-4">Droits d'accès</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <label class="text-dark fs-4">Type d'utilisateur</label>
                           <select name="" id="" class="form-select rounded-pill w-100" style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                              <option value="">utilisateu Normal </option>
                           </select>
                        </div>

                        <div class="form-row mt-4 pt-4" style="display: flex;gap: 2rem;flex-direction: column">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Contacts
                                 </h5>
                               </div> 
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Produits 
                                 </h5>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Ventes
                                 </h5>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Rapports
                                 </h5>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Paramètres
                                 </h5>
                               </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4 dislay-4">Droits d’accès pour le logiciel de caisse</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">

                        <div class="form-row mt-2" style="display: flex;gap: 2rem;flex-direction: column">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Autorisation de modifier le niveau de prix
                                 </h5>
                               </div> 
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Autorisation de changer le type de taxe
                                 </h5>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Autorisation de modifier les taxes
                                 </h5>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <h5 class="form-check-label" for="defaultCheck1">
                                    Autorisation d'ajouter des remises
                                 </h5>
                               </div>

                        </div>

                     </div>
                  </div>
               </div>
            </div>

         </div>
         <!--end Droits d'accès et Droits d’accès pour le logiciel de caisse -->
      </form>
   </div>
</div>
@endsection
@section('css')
       {{-- SELECT --}}
       <link rel="stylesheet" href="./../../vendor/select2/css/select2.min.css">
@endsection
@section('scripts')

@endsection