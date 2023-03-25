@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
   <!-- row -->

   <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Produits non facturés</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{Route('rapports')}}">Rapports</a></li>
               <li class="breadcrumb-item active"><a href="javascript:void(0)"> Produits non facturés</a></li>
            </ol>
         </div>
      </div>

      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example" class="display" style="min-width: 845px">
                        <thead>
                           <tr>
                              <th>BON DE COMMANDE #</th>
                              <th>CLIENT</th>
                              <th>DATE DE LIVRAISON</th>
                              <th>QUANTITÉ </th>
                              <th>QUANTITÉ FACTURÉES</th>
                              <th>QUANTITÉ  RESTANTES</th>
                              <th>RESTANT À PAYER</th>
                              <th>TOTAL</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>S00001</td>
                              <td>khalid</td>
                              <td>16 mars 2023</td>
                              <td>1</td>
                              <td>0</td>
                              <td>1</td>
                              <td>140.00 MAD</td>
                              <td>140.00 MAD</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{-- <div>

</div> --}}
   @endsection