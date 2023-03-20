@extends('layouts.app')

@section("ClientContent")
<div class="content-body">

   <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Tableau de bord</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  PERSONNALISER
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 200px;">
                  <h5 class="text-center p-2" style="background: #c8dae6;margin-top: -10px;">Widgets</h5>
                  <div class="dropdown-item" style="display: flex; gap: 2rem">
                     <input type="checkbox" class="form-check-input">
                     <p class="text-dark font-weight-bold">Expédié ce mois-ci</p>
                  </div>
                  <div class="dropdown-item" style="display: flex; gap: 2rem">
                     <input type="checkbox" class="form-check-input">
                     <p class="text-dark font-weight-bold">Expédié le mois dernier</p>
                  </div>
                  <div class="dropdown-item" style="display: flex; gap: 2rem">
                     <input type="checkbox" class="form-check-input">
                     <p class="text-dark font-weight-bold">Facture cette année</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--start row -->
      <div class="row">
         <div class="col-md-3">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex" style="gap: 1.2rem;">
                     <div class="rounded-circle bg-warning d-flex justify-content-center align-items-center"
                        style="height: 60px;width: 60px;">
                        <span style="font-size: 2rem;color: white;"><i class="fa-solid fa-cube"></i></span>
                     </div>
                     <div>
                        <h3 style="margin: 0;">2</h3>
                        <p class="text-muted" style="margin: 0;">Expédié ce mois-ci</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-3">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex" style="gap: 1.2rem;">
                     <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center"
                        style="height: 60px;width: 60px;">
                        <span style="font-size: 2rem;color: white;"><i class="fa-solid fa-cube"></i></span>
                     </div>
                     <div>
                        <h3 style="margin: 0;">0.00 MAD</h3>
                        <p class="text-muted" style="margin: 0;">Facturé ce mois-ci</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-3">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex" style="gap: 1.2rem;">
                     <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center"
                        style="height: 60px;width: 60px;">
                        <span style="font-size: 2rem;color: white;"><i class="fa-solid fa-cube"></i></span>
                     </div>
                     <div>
                        <h3 style="margin: 0;">0.00 MAD</h3>
                        <p class="text-muted" style="margin: 0;">Facturé le mois dernier</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-3">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex" style="gap: 1.2rem;">
                     <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center"
                        style="height: 60px;width: 60px;">
                        <span style="font-size: 2rem;color: white;"><i class="fa-solid fa-cube"></i></span>
                     </div>
                     <div>
                        <h3 style="margin: 0;">483.20 MAD</h3>
                        <p class="text-muted" style="margin: 0;">Facturé cette semaine</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end row -->

      <!-- strat row -->
      <div class="row">
         <!--start Commandes a expedier -->
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Commandes a expedier</h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)"> BON DE COMMANDE</th>
                              <th style="color:rgb(72, 69, 79)">CLIENT</th>
                              <th style="color:rgb(72, 69, 79)">DATE DE LIVRAISON</th>
                              <th style="color:rgb(72, 69, 79)">QUANTITÉS</th>
                              <th style="color:rgb(72, 69, 79)">EXPÉDIÉ</th>
                              <th style="color:rgb(72, 69, 79)">TOTAL</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr style="cursor: pointer">
                              <td>1000001</td>
                              <td>KHALID</td>
                              <td>15 mars 2023</td>
                              <td>2</td>
                              <td>0</td>
                              <td>209,00 MAD</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--end Commandes a expedier -->
         <!--start Nouvelles factures -->
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Nouvelles factures</h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">FACTURE # </th>
                              <th style="color:rgb(72, 69, 79)">CLIENT</th>
                              <th style="color:rgb(72, 69, 79)">ÉCHÉANCE</th>
                              <th style="color:rgb(72, 69, 79)">TOTAL</th>
                              <th style="color:rgb(72, 69, 79)">PAYÉ</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1000001</td>
                              <td>KHALID</td>
                              <td>15 mars 2023</td>
                              <td>
                                 209,00 MAD
                              </td>
                              <td>0</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--end Nouvelles factures -->
      </div>
      <!-- end row -->
      <!-- start row -->
      <div class="row">
         <!--start Nouveaux clients -->
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Nouveaux clients</h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">NOM</th>
                              <th style="color:rgb(72, 69, 79)">IDENTIFIANT CLIENT</th>
                              <th style="color:rgb(72, 69, 79)">E-MAILS</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>khalid</td>
                              <td>A0000001</td>
                              <td>lafhalkhalid@gmail.com</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--end Nouveaux clients -->
         <!--start Factures en retard-->
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Factures en retard</h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">FACTURE # </th>
                              <th style="color:rgb(72, 69, 79)">CLIENT</th>
                              <th style="color:rgb(72, 69, 79)">ÉCHÉANCE</th>
                              <th style="color:rgb(72, 69, 79)">TOTAL</th>
                              <th style="color:rgb(72, 69, 79)">PAYÉ</th>
                              <th style="color:rgb(72, 69, 79)">TOTAL</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1000001</td>
                              <td>KHALID</td>
                              <td>15 mars 2023</td>
                              <td>209,00 MAD</td>
                              <td>0</td>
                              <td>274.20 MAD</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--end Factures en retard -->
         <!--start Nouveaux bons de commande -->
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Nouveaux bons de commande</h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)"> BON DE COMMANDE</th>
                              <th style="color:rgb(72, 69, 79)">CLIENT</th>
                              <th style="color:rgb(72, 69, 79)">DATE DE LIVRAISON</th>
                              <th style="color:rgb(72, 69, 79)">QUANTITÉS</th>
                              <th style="color:rgb(72, 69, 79)">EXPÉDIÉ</th>
                              <th style="color:rgb(72, 69, 79)">TOTAL</th>
                              <th style="color:rgb(72, 69, 79)">FACTURÉS</th>

                           </tr>
                        </thead>
                        <tbody>
                           <tr style="cursor: pointer">
                              <td>1000001</td>
                              <td>KHALID</td>
                              <td>15 mars 2023</td>
                              <td>2</td>
                              <td>0</td>
                              <td>209,00 MAD</td>
                              <td>209</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--end Nouveaux bons de commande-->
         <!--start Factures en retard -->
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Bons de livraison en attente</h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th style="color:rgb(72, 69, 79)">Bons de livraison #</th>
                              <th style="color:rgb(72, 69, 79)">CLIENT</th>
                              <th style="color:rgb(72, 69, 79)">DATE DE LIVRAISON</th>
                              <th style="color:rgb(72, 69, 79)">QUANTITÉS</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1000001</td>
                              <td>KHALID</td>
                              <td>15 mars 2023</td>
                              <td>0</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--end Factures en retard-->
      </div>
      <!-- end row-->
   </div>

</div>
@endsection