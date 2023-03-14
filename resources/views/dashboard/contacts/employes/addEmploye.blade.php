@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      
      <form method="POST" action="/save_employe" enctype="application/x-www-form-urlencoded" id="formSubmit">
         @csrf
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Employes</h4>
            </div>
            <ol class="breadcrumb mt-2">
               <li class="breadcrumb-item"><a href="#">Contacts</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/contacts/employes')}}">Employe</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/contacts/employes/ajouter_employe')}}">Create</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-3 mt-sm-0 d-flex">
               {{-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Contacts</a></li>
                  <li class="breadcrumb-item active"><a href="javascript:void(0)">Employe</a></li>
               </ol> --}}
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
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Nom</label>
                                    <input type="text" class="form-control"  style="border:1px solid rgba(88, 100, 170, 1)" placeholder="Nom" name="lastName" value="{{old('lastName')}}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Prenom</label>
                                    <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" placeholder="Prenom" name="firstName" value="{{old('firstName')}}">
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
                                    <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" placeholder="E00001" name="id" value="{{old('id')}}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Email</label>
                                    <input type="email" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)"  placeholder="Email" name="email" value="{{old('email')}}">
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
                                 <input type="text" class="form-control " style="border:1px solid rgba(88, 100, 170, 1)" placeholder="phone" name="tel" value="{{old('tel')}}">
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
                              <select id="inputState" name="pays" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('pays')}}">
                                 <option>Country</option>
                                 {{-- <option value="Morocco">Morroco</option>
                                 <option value="Afghanistan">Afghanistan</option>
                                 <option value="Albania">Albania</option> --}}
                                 @foreach ($countries as $data)
                                     <option value="{{$data->sortname}}">{{$data->name}}</option>
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
                              <input type="text" class="form-control"  name="adresse1" placeholder="Address 1" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('adresse1')}}">
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
                              <input type="text" class="form-control"  name="adresse2" placeholder="Address 2" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('adresse2')}}">
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
                              <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" name="postalCode" placeholder="Code Postal" value="{{old('postalCode')}}">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">City</label>
                              <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" name="city" placeholder="City" value="{{old('city')}}">
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
                              <input type="text" class="form-control"  placeholder="Employer" name="employer" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('employer')}}">
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
                              <input type="text" class="form-control" placeholder="Position" name="position" style="border:1px solid rgba(88, 100, 170, 1)" value="{{old('position')}}">
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
