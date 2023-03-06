@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">
      
      <form action="#" method="POST" enctype="application/x-www-form-urlencoded" id="formSubmit">
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
         <div class="alert alert-danger solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> le nom du client ne doit pas etre vide
        </div>
        {{-- MESSAGE SUCCESS --}}
         <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> WOW! Eveything looks OK
         </div>

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
                                    <input type="text" class="form-control"  style="border:1px solid rgba(88, 100, 170, 1)" placeholder="Nom" name="firstName">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Prenom</label>
                                    <input type="email" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" placeholder="Prenom" name="lastName">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Employee ID</label>
                                    <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" placeholder="E00001" name="employeeID" value="E00001">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="text-dark fs-4">Email</label>
                                    <input type="password" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)"  placeholder="Email" name="email">
                                 </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label class="text-dark fs-4">Phone</label>
                                 <input type="text" class="form-control " style="border:1px solid rgba(88, 100, 170, 1)" placeholder="phone" name="phone">
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

                           <div class="form-group col-md-6">
                              <label class="text-dark fs-4">Country</label>
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
                              <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" name="postalCode" placeholder="Code Postal">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="" class="text-dark fs-4">City</label>
                              <input type="text" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" name="city" placeholder="City">
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
                              <input type="text" class="form-control"  placeholder="Employer" name="employer" style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label class="text-dark fs-4">Position</label>
                              <input type="text" class="form-control" placeholder="Position" name="position" style="border:1px solid rgba(88, 100, 170, 1)">
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
