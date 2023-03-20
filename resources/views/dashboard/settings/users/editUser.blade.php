@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      <form action="#" enctype="application/x-www-form-urlencoded">

         <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
               <div class="welcome-text">
                  <h4>ahmed hamdan </h4>
               </div>
               <ol class="breadcrumb mt-3">
                  <li class="breadcrumb-item"><a href="{{Route('ventes.bons-commande')}}">Utilisateurs </a></li>
                  <li class="breadcrumb-item"><a href="#"> ahmed hamdan </a></li>
                  <li class="breadcrumb-item active"><a href="{{Route('settings.users.edit',1)}}">Modifier</a>
                  </li>
               </ol>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
                  <button type="submit" class="btn btn-success text-white px-4"
                     style="font-weight: bolder">ENREGISTRER</button>
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
                              <input type="text" class="form-control input-rounded" placeholder="Prénom" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom</label>
                              <input type="text" class="form-control input-rounded" placeholder="Nom" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">E-mail</label>
                              <input type="text" class="form-control input-rounded" placeholder="E-mail" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom d'affichage</label>
                              <input type="text" class="form-control input-rounded" placeholder="Nom d'affichage"
                                 name="" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Fuseau horaire</label>
                              <select name="" id="" class="form-select rounded-pill w-100"
                                 style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Fuseau horaire 1</option>
                                 <option value="">Fuseau horaire 2</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Langue</label>
                              <select name="" id="" class="form-select rounded-pill w-100"
                                 style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Anglais (English) </option>
                                 <option value="">Français</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Téléphone</label>
                              <input type="text" class="form-control input-rounded" placeholder="Téléphone" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
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
                              <select name="" id="" class="form-select rounded-pill w-100"
                                 style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">taxe 1</option>
                                 <option value="">taxe 2</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Niveau de prix</label>
                              <select name="" id="" class="form-select rounded-pill w-100"
                                 style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Wholesale Price </option>
                                 <option value="">Recommended Retail Price</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Type de taxe</label>
                              <select name="" id="" class="form-select rounded-pill w-100"
                                 style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="">Taxes exclues </option>
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
         <!--start Configuration SMTP-->
         <div class="row">

            <div class="col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <h2 class="card-title dislay-4">Configuration SMTP</h2>
                     <button type="button" class="btn btn-outline-danger px-lg-4">
                        ENREGISTRER
                     </button>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-4">
                              <label class="text-dark fs-4">E-mail</label>
                              <input type="text" class="form-control input-rounded" placeholder="E-mail" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-4">
                              <label class="text-dark fs-4">Mod de passe</label>
                              <input type="text" class="form-control input-rounded" placeholder="Mod de passe" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-4">
                              <label class="text-dark fs-4">Serveur SMTP</label>
                              <input type="text" class="form-control input-rounded" placeholder="Serveur SMTP" name=""
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <!--end Configuration SMTP -->
         <!--start Droits d'accès -->
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4 dislay-4">Droits d'accès</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">

                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end Droits d'accès -->
         <!--start Mot de passe -->
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <h2 class="card-title dislay-4">Mot de passe</h2>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                        data-target="#changePassword">
                        <span style="padding-left:8px;"><i class="fa-solid fa-pen"></i></span>
                        CHANGER LE MOT DE PASSE
                     </button>
                     <!--end Button trigger modal -->
                     <!--start Modal -->
                     <div class="modal" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                           <div class="modal-content">
                              <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                                 <h5 class="modal-title text-white" id="exampleModalLabel">Changer le mot de passe</h5>
                                 <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                 <div class="basic-form">
                                    <div class="form-row">
                                       <div class="form-group col-md-12">
                                          <label for="" class="text-dark fs-4">Mot de passe actuel</label>
                                          <input type="text" placeholder="Mot de passe actuel"
                                             class="form-control input-rounded"
                                             style="border:1px solid rgba(88, 100, 170, 1)">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="" class="text-dark fs-4">Nouveau mot de passe</label>
                                          <input type="text" placeholder="Nouveau mot de passe"
                                             class="form-control input-rounded"
                                             style="border:1px solid rgba(88, 100, 170, 1)">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="" class="text-dark fs-4">Confirmer le Nouveau mot de passe</label>
                                          <input type="text" placeholder="Confirmer le Nouveau mot de passe"
                                             class="form-control input-rounded"
                                             style="border:1px solid rgba(88, 100, 170, 1)">
                                       </div>
                                    </div>

                                 </div>

                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-outline-danger px-4"
                                    data-dismiss="modal">ANNULER</button>
                                 <button type="button" class="btn text-white"
                                    style="background: #57ae74">ENREGISTRER</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--END MODAL -->
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="col-md-6">

                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end Mot de passe -->
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