@extends('layouts.app')

@section("content")
<div class="content-body">

   <div class="container-fluid">
      {{-- <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
               <h4>Rapports</h4>
            </div>
         </div>
      </div> --}}
      <!--start Paiements et factures -->
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Paiements et factures</h3>
               </div>
               <div class="card-body">
                  <!--start row -->
                  <div class="row" style="margin: 8px;">
                     <div class="col-md-4 p-3  col-md-offset-1" style="box-shadow: 5px 5px 10px rgb(212, 212, 212)">
                        <a href="#" class="d-flex" style="gap: 1.2rem;height: 100%;align-items: center">
                           <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                              style="height: 60px;width: 60px;">
                              <span style="font-size: 1.5rem;color: white;">
                                 <i class="fa-solid fa-money-bill"></i></span>
                           </div>
                           <div>
                              <p class="text-muted" style="margin: 0;font-size: 1.2rem">Paiements</p>
                           </div>
                        </a>
                     </div>

                     <div class="col-md-4 p-3 col-md-offset-1" style="box-shadow: 5px 5px 10px rgb(212, 212, 212)">
                        <a href="#" class="d-flex" style="gap: 1.2rem;height: 100%;align-items: center">
                           <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                              style="height: 60px;width: 60px;">
                              <span style="font-size: 1.5rem;color: white;">
                                 <i class="fa-solid fa-money-bill"></i></span>
                           </div>
                           <div>
                              <p class="text-muted" style="margin: 0;font-size: 1.2rem">Factures impayées</p>
                           </div>
                        </a>
                     </div>

                     <div class="col-md-4 p-3 col-md-offset-1" style="box-shadow: 5px 5px 10px rgb(212, 212, 212)">
                        <a href="#" class="d-flex" style="gap: 1.2rem;height: 100%;align-items: center">
                           <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                              style="height: 60px;width: 60px;">
                              <span style="font-size: 1.5rem;color: white;">
                                 <i class="fa-solid fa-money-bill"></i></span>
                           </div>
                           <div>
                              <p class="text-muted" style="margin: 0;font-size: 1.2rem">Factures en retard</p>
                           </div>
                        </a>
                     </div>

                     <div class="col-md-4 p-3 col-md-offset-1" style="box-shadow: 5px 5px 10px rgb(212, 212, 212)">
                        <a href="#" class="d-flex" style="gap: 1.2rem;height: 100%;align-items: center">
                           <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                              style="height: 60px;width: 60px;">
                              <span style="font-size: 1.5rem;color: white;">
                                 <i class="fa-solid fa-money-bill"></i></span>
                           </div>
                           <div>
                              <p class="text-muted" style="margin: 0;font-size: 1.2rem">Taxes facturées</p>
                           </div>
                        </a>
                     </div>

                  </div>
                  <!--end row -->

               </div>
            </div>
         </div>
      </div>
      <!--end Paiements et factures-->
      <!--start Bons de commande -->
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3 style="margin: 0;">Bons de commande</h3>
               </div>
               <div class="card-body">
                  <!--start row -->
                  <div class="row" style="margin: 8px;">
                     <div class="col-md-4 p-3  col-md-offset-1" style="box-shadow: 5px 5px 10px rgb(212, 212, 212)">
                        <a href="{{Route('intelligence.sales-orders.reserved-products')}}" class="d-flex" style="gap: 1.2rem;height: 100%;align-items: center">
                           <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center"
                              style="height: 60px;width: 60px;">
                              <span style="font-size: 1.5rem;color: white;"><i
                                    class="fa-solid fa-cart-shopping"></i></span>
                           </div>
                           <div>
                              <p class="text-muted" style="margin: 0;font-size: 1.2rem">Produits réservés</p>
                           </div>
                        </a>
                     </div>

                     <div class="col-md-4 p-3 col-md-offset-1" style="box-shadow: 5px 5px 10px rgb(212, 212, 212)">
                        <a href="{{Route('intelligence.sales-orders.uninvoiced-products')}}" class="d-flex" style="gap: 1.2rem;height: 100%;align-items: center">
                           <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center"
                              style="height: 60px;width: 60px;">
                              <span style="font-size: 1.5rem;color: white;"><i
                                    class="fa-solid fa-cart-shopping"></i></span>
                           </div>
                           <div>
                              <p class="text-muted" style="margin: 0;font-size: 1.2rem">Produits non factures</p>
                           </div>
                        </a>
                     </div>

                  </div>
                  <!--end row -->

               </div>
            </div>
         </div>
      </div>
      <!--end Bons de commande -->
   </div>
</div>
@endsection