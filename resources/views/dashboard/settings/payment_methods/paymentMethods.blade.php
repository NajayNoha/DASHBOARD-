@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Moyens de paiement</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javascript:void(0)">Moyens de paiement</a></li>
               <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
            </ol>
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
      <div class="mb-2">
         <!-- Button trigger modal -->
         <button type="button" class="btn text-white px-4 text-white" style="background: #57ae74;" data-toggle="modal"
            data-target="#creerPaymentMethod">
            <i class="fa-solid fa-plus"></i>
            <span class="ms-2">Create</span>
         </button>
         <!--end Button trigger modal -->
         <!--start Modal  -->
         <form action="{{Route('settings.payment-methods.create')}}" method="POST">
            @csrf
            <div class="modal" id="creerPaymentMethod" tabindex="-1" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                     <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Créer un moyen de paiement</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">

                        <div class="basic-form">
                           <div class="form-row">

                              <div class="form-group col-md-12">
                                 <label for="" class="text-dark fs-4">Nom</label>
                                 <input type="text" class="form-control input-rounded w-100" placeholder="Nom"
                                    name="nom" style="border:1px solid rgba(88, 100, 170, 1);">
                              </div>

                           </div>

                        </div>

                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger px-4" data-dismiss="modal">ANNULER</button>
                        <button type="submit" class="btn text-white" style="background: #57ae74">ENREGISTRER</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <!--END MODAL -->
      </div>

      <div class="row">
         <div class="col-12">
            <div class="card">

               <div class="card-body">
                  {{-- <div class="table-responsive"> --}}
                     <table  class="table">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)" scope="col">NOM</th>
                              <th style="color:rgb(72, 69, 79)" scope="col">ACTIF</th>
                              <th style="color:rgb(72, 69, 79)" scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($paymentMethods as $paymentMethod)
                           <tr>
                              <td scope='row'>{{$paymentMethod -> nom}}</td>
                              <td>
                                 <form action="{{Route('settings.payment-methods.change-active',$paymentMethod->id)}}" method="POST">
                                    @csrf
                                 <div class="basic-form" id="taxeProduit_switch">
                                    <div class="btnSwitch">
                                       <label class="toggle">
                                          <input type="checkbox" {{$paymentMethod->actif? 'checked':''}} onchange='changeActif({{$paymentMethod->id}})'>
                                          <span class="slider"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <input type="text" name='actif' value='{{$paymentMethod->actif}}' hidden>
                                 <button type="submit" hidden id='btnSubmit{{$paymentMethod->id}}'>Submit</button>
                              </form>
                              </td>
                              <td>
                                 <!--start Button trigger modal -->
                                 <button type="button" class="btn text-white" data-toggle="modal"
                                    data-target="#modifierPaymentMethod{{$paymentMethod->id}}" style="background: rgba(88, 100, 170, 1)"><i
                                       class="fa-solid fa-pen-to-square"></i></button>
                                 <!-- end  Button trigger modal -->
                                 <!--start Modal  -->
                                 <form action="{{Route('settings.payment-methods.edit',$paymentMethod ->id)}}" method="POST">
                                    @csrf
                                    <div class="modal" id="modifierPaymentMethod{{$paymentMethod->id}}" tabindex="-1"
                                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered modal-lg">
                                          <div class="modal-content">
                                             <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Créer un moyen de
                                                   paiement</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                   aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">

                                                <div class="basic-form">
                                                   <div class="form-row">

                                                      <div class="form-group col-md-12">
                                                         <label for="" class="text-dark fs-4">Nom</label>
                                                         <input type="text" class="form-control input-rounded w-100"
                                                            name="nom"
                                                            style="border:1px solid rgba(88, 100, 170, 1);" value="{{{$paymentMethod ->nom}}}">
                                                      </div>

                                                   </div>

                                                </div>

                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger px-4"
                                                   data-dismiss="modal">ANNULER</button>
                                                <button type="submit" class="btn text-white"
                                                   style="background: #57ae74">ENREGISTRER</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                                 <!--END Modal  -->
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  {{-- </div> --}}
               </div>
            </div>

         </div>

      </div>
   </div>

   {{-- <div>

</div> --}}
<script>
   function changeActif(id){
      const btnSubmit = document.getElementById('btnSubmit'+id);
      btnSubmit.click();
   }
</script>
   @endsection