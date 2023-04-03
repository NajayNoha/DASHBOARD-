@extends('...layouts.app')
@section('css')
       {{-- SELECT --}}
       <link rel="stylesheet" href={{asset("vendor/select2/css/select2.min.css")}}>
@endsection
@section("content")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Services</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Service</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
                </ol>
            </div>
        </div>
        <div class="mb-2">
            <a href="{{route(auth()->user()->role . '/produits-et-services/service/ajouter_service')}}" class="btn px-4 text-white" style="background: #57ae74;">
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
                    <div class="card-header">
                        <h4 class="card-title">List Services</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>référence</th>
                                        <th>Nom</th>
                                        <th>Prix</th>
                                        <th>Taxe</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->reference}}</td>
                                            <td>{{$item->nom}}</td>
                                            <td>{{$item->prix}}</td>
                                            @if ($item->getTaxes != null)
                                                <td>{{$item->getTaxes->taux}}</td>
                                                @else
                                                    <td></td>
                                                @endif
                                            <td>
                                                <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route(auth()->user()->role .'/produits-et-services/services/edit',$item->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{url(auth()->user()->role .'delete-service/'.$item->id)}}" style="text-decoration:none;color:white">
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

{{-- <div>
</div> --}}
@endsection

@section('scripts')
       <!-- Required vendors -->
       <script src={{asset("vendor/global/global.min.js")}}></script>
       <script src={{asset("js/quixnav-init.js")}}></script>
       <script src={{asset("js/custom.min.js")}}></script>


       <script src={{asset("vendor/select2/js/select2.full.min.js")}}></script>
       <script src={{asset("js/plugins-init/select2-init.js")}}></script>

@endsection
