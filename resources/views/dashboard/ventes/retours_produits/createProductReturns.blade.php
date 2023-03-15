


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
               <li class="breadcrumb-item active"><a href="#">CRÉER</a></li>
            </ol>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <div class="btns mb-3 text-right">
               <button type="reset" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</button>
               <button type="submit" class="btn btn-success text-white px-4" style="font-weight: bolder">ENREGISTRER</button>
            </div>
         </div>
      </div>

      <!-- start Client_retourProduit -->
      <div class="row">

         <div class="col-md-12">
            
            <div class="card">
               <div class="card-body">
                  <div class="basic-form">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="" class="text-dark fs-4">Client</label>
                           <div class="d-flex">
                              <select class="form-control select-pill"  data-style="btn-primary" data-width="100%" style="border:1px solid rgba(88, 100, 170, 1)">
                                 <option selected>Client</option>
                                 <option>khalid</option>
                              </select>
                              <a href="{{Route('/contacts/ajouter_client')}}" title="Ajouter Client" class="btn  text-dark fs-4" style="border:1px solid rgba(88, 100, 170, 1);margin-left: 5px;">
                                 <i class="fa-solid fa-plus" style="font-size: 1.2rem;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="" class="text-dark fs-4">Retour produit #</label>
                           <input type="text" class="form-control" value="SH0000002" readonly style="border: none;border-bottom:1px solid #7f4df4">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>

      </div>
      <!--end Client_retourProduit-->

      <!--start produit et service -->
      <div class="row">
         <div class="col-md-12">

            <div class="card">
               <div class="card-body">

                  <div class="table-responsive">
                     <table class="table"  style="min-width: 845px">
                        <thead class="thead-primary">
                            <tr>
                                <th scope="col">Produit ou service</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Qté</th>
                                <th scope="col">Disponible</th>
                                <th scope="col">Rem.</th>
                                <th scope="col">Taxes</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr scope="row">
                                <td>
                                   <input type="text" value="E012120" class="form-control" name="">
                                </td>
                                <td>
                                   <input type="text" value="14" class="form-control" name="">
                                </td>
                                <td>
                                   <input type="text" value="1" class="form-control" name="">
                                </td>
                                <td>
                                   <input type="text" value="-" class="form-control" name="">
                                </td>
                                <td>
                                   <input type="text" value="0" class="form-control" name="">
                                </td>
                                <td>
                                   <input type="text" value="taxe1" class="form-control" name="" style="width: 100%;">
                                </td>
                                <td>
                                   <input type="text" value="14.40" class="form-control" name="">
                                </td>
                                <td>
                                   <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                     </table>
                  </div>

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
                              <button class="btn btn-primary text-white" >AJOUTER PRODUITS</button>
                              <button class="btn btn-primary text-white" style="margin-left: 5px;">
                                 <span style="margin-right: 5px;"><i class="fa-light fa-scanner-gun"></i></span>
                                 SCANNER
                              </button>
                              <button class="btn btn-primary text-white" style="margin-left: 5px;">
                                 <span style="margin-right: 5px;"><i class="fa-solid fa-plus"></i></span>
                                 CRÉER
                              </button>
                              <button class="btn btn-primary text-white" style="margin-left: 5px;">
                                 <span style="margin-right: 5px;"><i class="fa-light fa-arrow-rotate-right"></i></span>
                                 RAFRAICHIR
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!--start Remise Gloal -->
                  <div style="display: flex;justify-content: flex-end"> 
                     <div class="col-md-5" style="padding:15px 20px;border:1px solid rgb(186, 192, 224);">
                        <div class="basic-form">

                              <div class="form-group d-flex col-md-12">
                                 <label for="" class="text-dark fs-1 col-sm-6 mb-4">Remise globale</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)">
                                 </div>
                              </div>

                              <div class="form-group d-flex col-md-12 mb-4">
                                 <label for="" class="text-dark fs-1 col-sm-6">Quantités totales</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                 </div>
                              </div>

                              <div class="form-group d-flex col-md-12 mb-4">
                                 <label for="" class="text-dark fs-1 col-sm-6">Sous-total</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                 </div>
                              </div>

                              <div class="form-group d-flex col-md-12">
                                 <label for="" class="text-dark fs-1 col-sm-6">Total</label>
                                 <div class="col-sm-6">
                                    <input type="text" value="0.00 MAD" class="form-control form-control-sm" style="border: 0px;border-bottom: 1px dotted rgba(88, 100, 170, 1)" readonly>
                                 </div>
                              </div>

                        </div>
                     </div>
                  </div>
                  <!--end  Remise Gloal -->
               </div>
            </div>
         </div>
      </div>
      <!--end  produit et service -->

      <!--START Notes internes-->
      <div class="row">
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
      </div>
      <!--end Notes internes-->

      <!--START Fichiers attachés -->
      <div class="row">
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
         </div>
      </div>
      <!--END Fichiers attachés -->
   </div>
</div>
@endsection





