@extends('...layouts.app')
@section("content")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Produits</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Produits</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
                </ol>
            </div>
        </div>
        <div class="mb-2">
            <a href="{{Route('/produits-et-services/produits/ajouter-produit')}}" class="btn px-4 text-white" style="background: #57ae74;">
                <i class="fa-solid fa-plus"></i> <span class="ms-2">Create</span></a>
        </div>

        {{-- TABLE --}}
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Produits</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th>Fournisseur</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->sku}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->getFournisseur->name}}</td>
                                            <td>
                                                <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/produits/edit',$item->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{url('delete-produit/'.$item->id)}}" style="text-decoration:none;color:white">
                                                    <button class="btn btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>

@endsection
