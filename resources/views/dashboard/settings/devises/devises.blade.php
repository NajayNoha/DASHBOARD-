@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Devises</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javascript:void(0)">Devises</a></li>
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
            data-target="#creerDevise">
            <i class="fa-solid fa-plus"></i>
            <span class="ms-2">Create</span>
         </button>
         <!--end Button trigger modal -->
         <!--start Modal  -->
         <form action="{{Route('settings.currencies.store')}}" method="POST">
            @csrf
            <div class="modal" id="creerDevise" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                     <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Créer une devise</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">

                        <div class="basic-form">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="" class="text-dark fs-4">Nouvelle devise</label>
                                 <select name="devise" class="form-select rounded-pill w-100"
                                    style="height: 35px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)" onchange="changeDevise(this,{{$currencies}})">
                                    @foreach ($currencies as $currency)
                                       <option value="{{$currency->id}}">{{$currency->name}} ({{$currency->code}})</option>
                                    @endforeach
                                 </select>
                              </div>

                              <div class="form-group col-md-6 d-flex" style="gap:1rem;">
                                 <button class="btn btn-danger"
                                    style="height: 35px;margin-top: 30px;margin-left: 5px;">MAD/<span id="code_Currency"></span> </button>
                                 <div style="width: 100%;">
                                    <label for="" class="text-dark fs-4">Taux de change</label>
                                    <input type="number" class="form-control input-rounded w-100"
                                       placeholder="Taux de change" name="taux_change"
                                       style="border:1px solid rgba(88, 100, 170, 1);">
                                 </div>

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
                  <div class="table-responsive">
                     <table style="min-width: 845px" class="table">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">DEVISE</th>
                              <th style="color:rgb(72, 69, 79)">TAUX DE CHANGE</th>
                              <th style="color:rgb(72, 69, 79)">DÉFAUT </th>
                              <th style="color:rgb(72, 69, 79)">ACTIF</th>
                              <th style="color:rgb(72, 69, 79)">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($devises as $devise)
                           <tr>
                              <td>{{$devise->currency->name}} ({{$devise->currency->code}})</td>
                              <td>(MAD/{{$devise->currency->code}})={{$devise->taux_change}}</td>
                              <td><span style="background: #57ae74;"><i class="fa-regular fa-badge-check"></i></span>
                              </td>
                              <td>
                                 <form action="{{Route('settings.currencies.change-active',$devise->id)}}" method="POST"
                                    class="checkbox">
                                    @csrf
                                    <div class="basic-form" id="taxeProduit_switch">
                                       <div class="btnSwitch">
                                          <label class="toggle">
                                             <input type="checkbox" {{$devise->actif?'checked':''}} onchange='changeActif({{$devise->id}})'>
                                             <span class="slider"></span>
                                          </label>
                                       </div>
                                    </div>
                                    <input type="text" name='actif' value='{{$devise->actif}}' hidden>
                                    <button type="submit" hidden id='btnSubmit{{$devise-> id}}'>Submit</button>
                                 </form>
                              </td>
                              <td class="d-grid gap-4">
                                 <!--start Button trigger modal -->
                                 <button type="button" class="btn text-white" data-toggle="modal"
                                    data-target="#modifierTaxe{{$devise->id}}"
                                    style="background: rgba(88, 100, 170, 1)"><i
                                       class="fa-solid fa-pen-to-square"></i></button>
                                 <!-- end  Button trigger modal -->
                                 <!--start Modal  -->
                                 <form action="{{Route('settings.currencies.edit',$devise->id)}}" method="POST">
                                    @csrf
                                    <div class="modal" id="modifierTaxe{{$devise->id}}" tabindex="-1"
                                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered modal-lg">
                                          <div class="modal-content">
                                             <div class="modal-header" style="background: rgba(88, 100, 170, 1)">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Créer une
                                                   devise
                                                </h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                   aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">

                                                <div class="basic-form">
                                                   <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                         <label for="" class="text-dark fs-4">Nouvelle devise</label>
                                                         <select name="devise" class="form-select rounded-pill w-100"
                                                            style="height: 35px;padding-left: 5px;border:1px solid rgba(88, 100, 170, 1)" onchange="changeDeviseMdfy(this,{{$devise->id}},{{$currencies}})">
                                                            @foreach ($currencies as $currency)
                                                            <option value="{{$currency->id}}"
                                                               {{$devise->currency->name === $currency->name ? 'selected':''}}>
                                                               {{$currency->name}}
                                                               ({{$currency->code}})</option>
                                                            @endforeach
                                                         </select>
                                                      </div>

                                                      <div class="form-group col-md-6 d-flex" style="gap:1rem;">
                                                         <button class="btn btn-danger"
                                                            style="height: 35px;margin-top: 30px;margin-left: 5px;">MAD/<span id="codeCurrency{{$devise->id}}">{{$devise->currency->code}}</span></button>
                                                         <div style="width: 100%;">
                                                            <label for="" class="text-dark fs-4">Taux de change</label>
                                                            <input type="text" class="form-control input-rounded w-100"
                                                               value="{{$devise->taux_change}}" name="taux_change"
                                                               style="border:1px solid rgba(88, 100, 170, 1);">
                                                         </div>

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
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
   <script>
      function changeActif(id) {
         const btnSubmit = document.getElementById('btnSubmit' + id);
         btnSubmit.click();
      }
      function changeDevise(e,currencies){
         const currency = currencies.find((crn)=> crn.id ==  e.value);
         const code = currency.code;
         const codeCurrency = document.getElementById('code_Currency');
         codeCurrency.innerHTML = code;
      }
      function changeDeviseMdfy(e,indexSpan,currencies){
         const currency = currencies.find((crn)=> crn.id ==  e.value);
         const code = currency.code;
         const codeCurrencyMdfy = document.getElementById('codeCurrency'+indexSpan);
         codeCurrencyMdfy.textContent = code;
      }
   </script>
   {{-- <div>

</div> --}}
   @endsection