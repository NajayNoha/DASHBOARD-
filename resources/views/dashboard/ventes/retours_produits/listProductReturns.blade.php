


@extends('...layouts.app')

@section("content")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Retours produits</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Retours produits</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
                </ol>
            </div>
        </div>
        <div class="mb-2">
            <a href="{{route(auth()->user()->role . '/ventes/product-returns/create')}}" class="btn px-4 text-white" style="background: #57ae74;">
                <i class="fa-solid fa-plus"></i> <span class="ms-2" style="margin-left: 5px;text-transform: uppercase">CRÉER</span></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                           <!--start form -->
                           <form action="#" >
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                       <td colspan="6">
                                          <!-- START BUTTON -->
                                          <div class="mt-2 mb-2">
                                             <span class="btn btn-light">sélectionner une opération</span>
                                             <button class="btn btn-outline-danger px-3" style="margin: 0 10px;">Supprimer</button>
                                             <a class="btn btn-outline-primary px-3" href="{{route(auth()->user()->role . '/ventes/product-returns/Pdf')}}">Telecharger le PDF</a>
                                          </div>
                                          <!-- START BUTTON -->
                                       </td>
                                    </tr>
                                    <tr>

                                       <th>
                                          <input type="checkbox" style="margin-right: 5px;">
                                          RETOUR PRODUIT #
                                       </th>
                                        <th>CLIENT</th>
                                        <th>DATE DE CRÉATION</th>
                                        <th>QUANTITÉS</th>
                                        <th>STATUT</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 5px;">
                                          415222
                                       </td>
                                        <td>Sales Assistant</td>
                                        <td>01/02/2022</td>
                                        <td>2</td>
                                        <td>
                                          <span class="badge badge-warning text-white px-4 py-2 fs-3 ">Non payé</span>
                                        </td>
                                        <td class="d-flix gap-4">
                                          <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/ventes/product-returns/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                          <a class="btn text-white" style="background:  #57ae74;" href="{{route(auth()->user()->role . '/ventes/product-returns/profile',1)}}">show</a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                           </form>
                           <!--end form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

{{-- <div>

</div> --}}
@endsection
