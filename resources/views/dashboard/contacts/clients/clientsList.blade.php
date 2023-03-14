@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Clients</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Contacts</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Client</a></li>
                </ol>
            </div>
        </div>
        @if (Session::has('success'))
         <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> {{Session::get('success')}}
         </div>
         @endif
        <div class="mb-2">
            <a href="{{Route('/contacts/ajouter_client')}}" class="btn btn-success px-4 text-white">
                <i class="fa-solid fa-plus"></i> <span class="ms-2">Create</span></a>
        </div>

        {{-- TABLE --}}
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Numéro client</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $client )
                                        <tr>
                                            <td>{{$client->id}}</td>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->tel}}</td>
                                            <td>{{$client->city}}</td>
                                            <td>
                                                <a href="{{url('/contacts/clients/'.$client->id)}}" style="text-decoration:none;color:white">
                                                    <button class="btn text-white" style="background: rgba(88, 100, 170, 1)">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                                <a href="{{url('delete-client/'.$client->id)}}" style="text-decoration:none;color:white">
                                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
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