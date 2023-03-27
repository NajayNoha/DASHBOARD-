@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      <form action="{{Route('settings.users.store')}}" enctype="application/x-www-form-urlencoded" method='post'>
         @csrf
         <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
               <div class="welcome-text">
                  <h4>Utilisateurs</h4>
               </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="submit" class="btn btn-success text-white px-4"
                     style="font-weight: bolder">ENREGISTRER</button>
               </div>
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
         <!--start Profile -->
         <div class="row">

            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">Profil</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Prénom</label>
                              <input type="text" class="form-control input-rounded" placeholder="Prénom" name="prenom"
                                 style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('prenom')}}">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom</label>
                              <input type="text" class="form-control input-rounded" placeholder="Nom" name="nom"
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">E-mail</label>
                              <input type="text" class="form-control input-rounded" placeholder="E-mail" name="email"
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom d'affichage</label>
                              <input type="text" class="form-control input-rounded" placeholder="Nom d'affichage"
                                 name="nom_affichage" style="border:1px solid rgba(88, 100, 170, 1)">
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
                              <select name="langue" id="" class="form-select rounded-pill w-100"
                                 style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                                 <option value="anglais">Anglais (English) </option>
                                 <option value="français">Français</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Téléphone</label>
                              <input type="text" class="form-control input-rounded" placeholder="Téléphone" name="tele"
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
                     <h2 class="card-title">Valeurs par défaut</h2>
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

         <!--start Droits d'accès et Droits d’accès pour le logiciel de caisse -->
         <div class="row">

            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">Type d'utilisateur</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <label class="text-dark fs-4">Type d'utilisateur</label>
                           <select name="type_user" id="" class="form-select rounded-pill w-100"
                              style="border:1px solid rgba(88, 100, 170, 1);height: 35px;padding-left: 10px;">
                              <option value="0">employé</option>
                              <option value="1">admin</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">Droits D'accès Pour les sociétés</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">

                        <div class="form-row mt-2" style="display: flex;gap: 2rem;flex-direction: column">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <h5 class="form-check-label" for="defaultCheck1">
                                s1
                              </h5>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <h5 class="form-check-label" for="defaultCheck1">
                                 s2
                              </h5>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <h5 class="form-check-label" for="defaultCheck1">
                                 s3
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