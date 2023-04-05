@extends('...layouts.app')
@section("content")
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Règles de prix</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Règles de prix</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
                </ol>
            </div>
        </div>
        <div class="mb-2">
            <a href="{{route(auth()->user()->role . '/produits-et-services/regles-de-prix/create')}}" class="btn px-4 text-white" style="background: #57ae74;">
                <i class="fa-solid fa-plus"></i> <span class="ms-2">Create</span></a>
        </div>

        {{-- TABLE --}}
        @if (Session::has('success'))
            <div class="alert alert-success solid alert-dismissible fade show">
               <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
               </button> {{Session::get('success')}}
            </div>
         @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4 class="card-title">List Produits</h4>
                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Libelle</th>
                                        <th>TYPE DE SÉLECTION</th>
                                        <th>NIVEAU DE PRIX</th>
                                        <th>PRIX DE BASE</th>
                                        <th> VALEUR</th>
                                        <th>STATUS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->libelle}}</td>
                                            <td>{{$item->selection}}</td>
                                            <td>{{$item->getPriceLevels->type_niveau}}</td>
                                            <td>{{$item->prix_base}}</td>
                                            <td>{{$item->valeur}}</td>
                                            <td>@if ($item->actif == 0)
                                                Inactif
                                                @else
                                                    Actif
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route(auth()->user()->role ."/produits-et-services/regles-de-prix/edit",$item->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{url(auth()->user()->role .'delete-pricerule/'.$item->id)}}" style="text-decoration:none;color:white">
                                                    <button class="btn btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>
                                        <div class="basic-form" id="taxeProduit_switch">
                                            <div class="btnSwitch">
                                                <label class="toggle">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>
                                        </td>
                                        <td class="d-grid gap-4">
                                        <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr> --}}
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
