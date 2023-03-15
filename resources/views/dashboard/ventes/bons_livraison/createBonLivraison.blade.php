


@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <div class="container-fluid">

      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Bons de livraison </h4>
            </div>
            <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('ventes.bons-commande')}}">Bons de livraison </a></li>
               <li class="breadcrumb-item"><a href="#">SH0000002</a></li>
               <li class="breadcrumb-item active"><a href="#">Modifier</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <div class="btns mb-3 text-right">
               <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
               <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">ENREGISTRER</button>
            </div>
         </div>
      </div>

      <div class="alert alert-dismissible alert-alt solid fade show" style="background: #7f4df4">
         <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
         </button>
         <p style="margin:0;" class="text-white">Cliquez sur le bouton "Enregistrer" pour terminer la création de la commande d'expédition SH0000002.</p>
      </div>

      <div class="row">

         <div class="col-md-8">
            <!-- start Bon de livraison # -->
            <div class="card">
               <div class="card-body">
                  <div class="basic-form">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="" class="text-dark fs-4">SH0000002</label>
                           <input type="text" class="form-control" value="SH0000002" readonly style="border: none;border-bottom:1px solid #7f4df4">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--end Bon de livraison # -->

            <!-- start Aperçu # -->
            <div class="card">
               <div class="card-header">
                  <h2 class="card-title dislay-4">Aperçu</h2>
               </div>
               <div class="card-body">
                  <div class="basic-form">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="" class="text-dark fs-4">Référence externe</label>
                           <input type="text" placeholder="Référence externe" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)" >
                        </div>
                        <div class="form-group col-md-6">
                           <label for="" class="text-dark fs-4">A l'attention de </label>
                           <input type="text" class="form-control" placeholder="A l'attention de" style="border:1px solid rgba(88, 100, 170, 1)">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end  Aperçu # -->
         </div>

         <div class="col-md-4">

            <!-- start Livraison   -->
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title dislay-4">Livraison</h2>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="" class="text-dark fs-4">Date de livraison</label>
                              <input type="date" class="form-control"  style="border:1px solid rgba(88, 100, 170, 1)">
                           </div>
                        </div>

                        <!-- start  Livrer à -->
                        <div class="form-row">
                           <div class="col-md-12">
                              <h4>Livrer à </h4>

                              <p style="margin: 0;" class="text-dark">marrakech</p>
                              <p style="margin: 0;" class="text-dark">marrakech, 40000</p>
                              <p style="margin: 0;" class="text-dark">MOROCCO</p>
                              <p style="margin: 0;margin-bottom: 10px;" class="text-dark">Téléphone : 0614526314</p>

                           </div>
                        </div>
                        <!-- end  Livrer à -->
                        <div class="form-row">
                           <!-- Button trigger modal -->
                           <button class="btn btn-primary col-md-12" data-toggle="modal" data-target="#basicModal1">MODIFIER L'ADRESSE</button>
                           <!--**********************************
                                    start Modal 
                           ***********************************-->
                           <div class="modal fade" id="basicModal1" style="min-width: 500px;">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header" style="background: rgba(88, 100, 170, 1)" >
                                          <h5 class="modal-title text-white">Adresse de livraison</h5>
                                          <button type="button" class="close text-white fs-4" data-dismiss="modal"><span>&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">

                                          <div class="basic-form">
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                   <label class="text-dark fs-4">Libellé de l'adresse</label>
                                                   <input type="text" class="form-control"  placeholder="Libellé de l'adresse" name="adresse_lib" style="border:1px solid rgba(88, 100, 170, 1)">
                                                </div>

                                                <div class="form-group col-md-6">
                                                   <label class="text-dark fs-4">Téléphone</label>
                                                   <input type="text" class="form-control" placeholder="Téléphone" name="adresse_tel" style="border:1px solid rgba(88, 100, 170, 1)">
                                                </div>
                                          </div>
                                          <div class="form-row">
                                             <div class="form-group col-md-12">
                                                <label class="text-dark fs-4">Pays</label>
                                                <select id="inputState" class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                                                   <option selected>Morroco</option>
                                                   <option>Afghanistan</option>
                                                   <option>Albania</option>
                                                </select>
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
                                                <input type="text" class="form-control"  name="adresse1" placeholder="Address 2" style="border:1px solid rgba(88, 100, 170, 1)">
                                             </div>
                                          </div>

                                          
                                          <div class="form-row">
                                             <div class="form-group col-md-6">
                                                <label class="text-dark fs-4">Code Postal</label>
                                                <input type="text" class="form-control"  name="postalCode" placeholder="Code Postal" style="border:1px solid rgba(88, 100, 170, 1)">
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label for="" class="text-dark fs-4">Ville</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" style="border:1px solid rgba(88, 100, 170, 1)">
                                             </div>
                                          </div>

                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-danger px-4"  data-dismiss="modal">ANNULER</button>
                                          <button type="button" class="btn text-white" style="background: #57ae74">ENREGISTRER</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--**********************************
                                    end Modal 
                           ***********************************-->
                        </div>
                     </div>
                  </div>
               </div>
            <!-- end Livraison   -->

         </div>

      </div>

      <!--START 	Produit ou service-->
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">

                <table class="table">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col" colspan="6">Produit ou service</th>
                            <th scope="col">Qté</th>
                            <th scope="col">Réel</th>
                            <th scope="col"><input type="checkbox"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr scope="row">
                            <td colspan="6"><input type="text" class="form-control" value="451263-p1"></td>
                            <td><input type="text" class="form-control" value="2"></td>
                            <td><input type="text" class="form-control" value="-" readonly ></td>
                            <td><input type="checkbox"></td>
                        </tr>

                    </tbody>
                </table>

                <hr>
                <div>
                  <div class="basic-form">

                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <select class="form-control" style="border:1px solid rgba(88, 100, 170, 1)">
                              <option value="">produit 1</option>
                              <option value="">produit 2</option>
                              <option value="">produit 3</option>
                           </select>
                        </div>

                        <div class="form-group">
                           <button class="btn btn-primary text-white" style="margin-left: 5px;">
                              <span style="margin-right: 5px;"><i class="fa-light fa-scanner-gun"></i></span>
                              SCANNER
                           </button>
                        </div>
                     </div>
                 </div>
               </div>
              <div style="display: flex;justify-content: flex-end"> 
                <div class="col-md-5" style="padding:15px 20px;border:1px solid rgb(186, 192, 224);">
                  <div class="basic-form">
                      <div class="form-row" style="">
                        <div class="form-group d-flex col-md-12">

                            <label for="" class="text-dark fs-1 col-sm-6 mb-4">Poids total</label>
                            <div class="col-sm-6">
                              <input type="text" value="1.00kg" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)">
                            </div>

                        </div>
                        <div class="form-group d-flex col-md-12 mb-4">

                            <label for="" class="text-dark fs-1 col-sm-6">Quantités totales</label>
                            <div class="col-sm-6">
                              <input type="text" value="1" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                            </div>

                        </div>

                      </div>
                  </div>
              </div>
            </div>
          </div>
          </div>
      </div>
      <!--end 	Produit ou service-->

      <!--START Notes internes-->
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
                <h4 class="card-title">Notes internes</h4>
            </div>
            <div class="card-body">
                <div class="summernote"></div>
            </div>
        </div>
      </div>
      <!--end Notes internes-->

      <!--START Fichiers attachés -->
      <div class="col-md-12">
         <div class="card" id="file">
            <div class="card-header">
                     <h4 class="card-title">Fichiers attachés</h4>
            </div>
            <div class="card-body">
               <div class="basic-form">
                  <div class="form">
                     <div class="form-row">
                        <input class="file-input" type="file" name="file" hidden>
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Ajouter un nouveau fichier</p>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <!--END Fichiers attachés -->
   </div>
</div>
@endsection



