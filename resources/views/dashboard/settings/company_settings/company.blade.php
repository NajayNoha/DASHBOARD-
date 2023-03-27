@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      <form @if (isset($companyInfo)) action="{{Route('setting.company-settings.edit',$companyInfo->id)}}" @else
         action="{{Route('setting.company-settings.store')}}" @endif enctype="multipart/form-data" method="POST">
         @csrf
         <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
               <div class="welcome-text">
                  <h4>Paramètres de l'entreprise</h4>
               </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <button type="submit" class="btn btn-success text-white px-4"
                     style="font-weight: bolder">ENREGISTRER</button>
               </div>
            </div>
         </div>

         <!-- -->
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
         <!--start message succes -->
         @if(Session::has('success'))
         <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                     class="mdi mdi-close"></i></span>
            </button>
            {{Session::get('success')}}
         </div>
         @endif
         <!--end message succes -->
         <div class="row">

            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4 dislay-4">Aperçu</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Nom</label>
                              <input type="text" class="form-control input-rounded" placeholder="Nom" name="nom"
                                 @isset($companyInfo)value="{{$companyInfo->nom}}" @endisset
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Email</label>
                              <input type="text" class="form-control input-rounded" placeholder="Email" name="email"
                                 @isset($companyInfo)value="{{$companyInfo->email}}" @endisset
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>

                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Téléphone</label>
                              <input type="text" class="form-control input-rounded" placeholder="Téléphone" name="tel"
                                 @isset($companyInfo)value="{{$companyInfo->tel}}" @endisset
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Site web</label>
                              <input type="text" class="form-control input-rounded" placeholder="Site web"
                                 @isset($companyInfo)value="{{$companyInfo->web_site}}" @endisset name="web_site"
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">

            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Adresse</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <select name="country" id="" class="form-select rounded-pill w-100"
                                 style="height: 35px;border:1px solid rgba(88, 100, 170, 1);padding-left: 8px;">
                                 @foreach ($countreis as $country)
                                 <option value={{$country->id}}>{{$country->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Address 1</label>
                              <input type="text" class="form-control input-rounded" placeholder="Adress 1"
                                 @isset($companyInfo)value="{{$companyInfo->address1}}" @endisset name="address1"
                                 style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>

                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Address 2</label>
                              <input type="text" class="form-control input-rounded" placeholder="Adress 2"
                                 name="address2" style="border:1px solid rgba(88, 100, 170, 1)"
                                 @isset($companyInfo)value="{{$companyInfo->address2}}""  @endisset>
                           </div>
                        </div>

                        <div class=" form-row">
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Code Postal</label>
                                 <input type="text" class="form-control input-rounded" placeholder="Code Postal"
                                    name="codePostal" style="border:1px solid rgba(88, 100, 170, 1)"
                                    @isset($companyInfo)value="{{$companyInfo->codePostal}}" @endisset>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Ville</label>
                                 <input type="text" class="form-control input-rounded" placeholder="Ville" name="ville"
                                    style="border:1px solid rgba(88, 100, 170, 1)" @isset($companyInfo)
                                    value="{{$companyInfo->ville}}" @endisset>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>

            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card" id="file">
                     <div class="card-header">
                        <h2 class="card-title text-dark dislay-4">Valeurs par défaut</h2>
                     </div>
                     <div class="card-body">
                        <div class="basic-form">

                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Taxes</label>
                                 <select name="" id="" class="form-select rounded-pill w-100"
                                    style="height: 40px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="">Taxe 1</option>
                                    <option value="">Taxe 2</option>
                                 </select>
                              </div>

                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Type de taxe</label>
                                 <select name="" id="" class="form-select rounded-pill w-100"
                                    style="height: 40px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="">Taxes exclues</option>
                                    <option value="">Taxes incluses </option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Niveau de prix pour les ventes</label>
                                 <select name="" id="" class="form-select rounded-pill w-100"
                                    style="height: 40px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="">Wholesale Price</option>
                                    <option value="">Recommended Retail Price </option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Niveau de prix pour les achats</label>
                                 <select name="" id="" class="form-select rounded-pill w-100"
                                    style="height: 40px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="">Purchase Price</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Jours avant l'expiration d'un devis</label>
                                 <input type="text" class="form-control input-rounded" value="40000" name="adresse_lib"
                                    style="border:1px solid rgba(88, 100, 170, 1);height: 40px;">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Delais de paiement</label>
                                 <select name="" id="" class="form-select rounded-pill w-100"
                                    style="height: 40px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)">
                                    <option value="">Net</option>
                                    <option value="">Fin de mois</option>
                                 </select>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">

               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <h2 class="card-title dislay-4">Réseaux sociaux</h2>
                     </div>
                     <div class="card-body">
                        <div class="basic-form">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Facebook</label>
                                 <input type="text" class="form-control input-rounded" placeholder="Facebook"
                                    name="facebook" style="border:1px solid rgba(88, 100, 170, 1)" @isset($companyInfo)
                                    value={{$companyInfo->facebook}} @endisset>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="text-dark fs-4">Twitter</label>
                                 <input type="text" class="form-control input-rounded" placeholder="Twitter"
                                    name="twitter" style="border:1px solid rgba(88, 100, 170, 1)"
                                    @isset($companyInfo)value="{{$companyInfo->twitter}}""  @endisset>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

         <div class=" row">
               <div class="col-md-12">
                  <div class="card" id="file">
                     <div class="card-header">
                        <h2 class="card-title text-dark dislay-4">Logo de l'entreprise</h2>
                     </div>
                     <div class="card-body">
                        <div class="basic-form">
                           <p class="text-dark" style="margin-bottom: -20px;">Logo de l'entreprise</p>
                           <div class="form" style="height:200px;">
                              @if(isset($companyInfo->logo) && !empty($companyInfo->logo))
                                 <img  style="height:150px" width="150px" src="{{asset('storage/images/logos/'.$companyInfo->logo)}}" alt="">
                              @else
                                 <div class="form-row">
                                    <input class="file-input" type="file" name="logo" hidden>
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>Logo de l'entreprise</p>
                                 </div> 
                              @endif

                           </div>
                         </div>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                              <div class="row">

                                 <div class="col-md-12">
                                    <div class="card">

                                       <div class="card-body">
                                          <div class="basic-form">
                                             <div class="form-row">
                                                <div class="form-group col-md-12 d-flex justify-content-between">
                                                   <div>
                                                      <h4 class="text-dark">Supprimer mes données </h4>
                                                      {{-- <span style="border: red;"><i class="fa-thin fa-circle-info"></i></span> --}}
                                                   </div>
                                                   <button type="reset" class="btn btn-outline-danger px-3">Supprimer
                                                      mes données</button>
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

@endsection