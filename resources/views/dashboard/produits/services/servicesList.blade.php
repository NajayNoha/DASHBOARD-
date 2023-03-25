


@extends('...layouts.app')

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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td class="d-grid gap-4">
                                          <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td class="d-grid gap-4">
                                          <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td class="d-grid gap-4">
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td class="d-grid gap-4">
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td class="d-grid gap-4">
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td class="d-grid gap-4">
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td class="d-grid gap-4">
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/produits-et-services/services/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> --}}
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
