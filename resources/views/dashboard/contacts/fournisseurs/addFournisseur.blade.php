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
               <li class="breadcrumb-item"><a href="#">Contacts</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/contacts/fournisseurs')}}">Fournisseurs</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/contacts/fournisseurs/ajouter_fournisseur')}}">Create</a></li>
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


      
         @csrf
         <div class="row">

            <div class="col-md-8">

               {{------------------  Overview   ------------------------}}
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Overview</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label>Supplier name</label>
                                 <input type="text" class="form-control"  placeholder="Supplier name" name="firstName">
                              </div>
                           </div>
                           <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label>Supplier #</label>
                                    <input type="text" class="form-control"  name="supplierId" value="S00001">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="password" class="form-control" placeholder="Email" name="email">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Whebsite</label>
                                    <input type="text" class="form-control" placeholder="whebsite" name="website">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="phone" name="phone">
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
                              <label>Country</label>
                              <select id="inputState" class="form-control">
                                 <option selected>Morroco</option>
                                 <option>Afghanistan</option>
                                 <option>Albania</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                                 <label>Code Postal</label>
                                 <input type="text" class="form-control"  name="postalCode" placeholder="Code Postal">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label>Address 1</label>
                              <input type="text" class="form-control"  name="adresse1" placeholder="Address 1">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label>Address 2</label>
                              <input type="text" class="form-control"  name="adresse2" placeholder="Address 2">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Code Postal</label>
                              <input type="text" class="form-control"  name="postalCode" placeholder="Code Postal">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="">City</label>
                              <input type="text" class="form-control" name="city" placeholder="City">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               {{--------------------- START FILE  ----------------------------}}
               <div class="card" id="file">
                  <div class="card-header">
                     <h4 class="card-title">Files</h4>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form">
                           <div class="form-row">
                              <input class="file-input" type="file" name="file" hidden>
                                 <i class="fas fa-cloud-upload-alt"></i>
                                 <p>Ajouter nouveaux File</p>
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
                              <label>Price Level</label>
                              <input type="text" class="form-control" placeholder="Price Level" name="price_level">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label>Taxes</label>
                              <input type="text" class="form-control"  name="taxes" placeholder="Taxes">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>Currency</label>
                              <select id="inputState" class="form-control" name="currency">
                                 <option selected>MAD</option>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Discount</label>
                              <input type="text" class="form-control"  name="discount" placeholder="Discount">
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
