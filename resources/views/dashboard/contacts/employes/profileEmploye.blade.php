@extends('...layouts.app')

@section("content")
<div class="content-body">
   <div class="container-fluid">

      <form method="POST" action="/update_employe"  enctype="application/x-www-form-urlencoded" id="formSubmit">
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Employes</h4>
            </div>
            <ol class="breadcrumb mt-2">
               <li class="breadcrumb-item"><a href="{{Route(auth()->user()->role . '/contacts/employes')}}">Employes</a></li>
               <li class="breadcrumb-item active"><a href="{{Route(auth()->user()->role . auth()->user()->role . '/contacts/employes/profile',1)}}">Modifier</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-3 mt-sm-0 d-flex">
               {{-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Contacts</a></li>
                  <li class="breadcrumb-item active"><a href="javascript:void(0)">Employe</a></li>
               </ol> --}}
               <div class="btns mb-3 text-right">
                  <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">CANCEL</button>
                  <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">ENREGISTRER</button>
               </div>
         </div>
      </div>
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
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Nom</label>
                                    <input type="text" class="form-control"  style="border:1px solid rgba(88, 100, 170, 1)" placeholder="Nom" name="lastName" value="{{$data->lastName}}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Prenom</label>
                                    <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" placeholder="Prenom" name="firstName" value="{{$data->firstName}}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    @error('lastName')
                                       <span class="text-danger">
                                          {{$message}}
                                       </span>
                                    @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    @error('firstName')
                                       <span class="text-danger">
                                          {{$message}}
                                       </span>
                                    @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Employee ID</label>
                                    <input type="text" readonly class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" placeholder="E00001" name="id" value="{{$data->id}}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Email</label>
                                    <input type="email" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)"  placeholder="Email" name="email" value="{{$data->email}}">
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
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label class="text-dark fs-4">Phone</label>
                                 <input type="text" class="form-control " style="border:1px solid rgba(88, 100, 170, 1)" placeholder="phone" name="tel" value="{{$data->tel}}">
                              </div>
                              <div class="form-group col-md-12">
                                 @error('tel')
                                    <span class="text-danger">
                                       {{$message}}
                                    </span>
                                 @enderror
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
               {{------------------- End Overview  --------------------------}}
               {{-------------------- START Address -------------------------}}

               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Address</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">

                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Country</label>
                              <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->pays}}" name="pays">
                                 @foreach ($countries as $item)

                                    @if ($item->sortname == $data->pays)
                                       <option value="{{$item->sortname}}" selected>{{$item->name}}</option>
                                    @else
                                       <option value="{{$item->sortname}}">{{$item->name}}</option>
                                    @endif
                                    {{-- <option value="{{$item->sortname}}" @if($item->sortname == $data->pays) selected @endif>{{$item->name}}</option> --}}
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group col-md-12">
                              @error('pays')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Address 1</label>
                              <input type="text" class="form-control"  name="adresse1" placeholder="Address 1" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->adresse1}}">
                           </div>
                           <div class="form-group col-md-12">
                              @error('adresse1')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Address 2</label>
                              <input type="text" class="form-control"  name="adresse2" placeholder="Address 2" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->adresse2}}">
                           </div>
                           <div class="form-group col-md-12">
                              @error('adresse2')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Code Postal</label>
                              <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" name="postalCode" placeholder="Code Postal" value="{{$data->postalCode}}">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">City</label>
                              <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" name="city" placeholder="City" value="{{$data->city}}">
                           </div>
                           <div class="form-group col-md-6">
                              @error('postalCode')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
                           </div>
                           <div class="form-group col-md-6">
                              @error('city')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
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
                     <h2 class="card-title dislay-4">Detailed information</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Employer</label>
                              <input type="text" class="form-control"  placeholder="Employer" name="employer" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->employer}}">
                           </div>
                           <div class="form-group col-md-12">
                              @error('employer')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Position</label>
                              <input type="text" class="form-control" placeholder="Position" name="position" style="border:1px solid rgba(88, 100, 170, 1)" value="{{$data->position}}">
                           </div>
                           <div class="form-group col-md-12">
                              @error('position')
                                 <span class="text-danger">
                                    {{$message}}
                                 </span>
                              @enderror
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
