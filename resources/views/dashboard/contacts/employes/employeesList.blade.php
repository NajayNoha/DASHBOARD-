@extends('...layouts.app')

@section("content")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Employes</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Contacts</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Employe</a></li>
                </ol>
            </div>
        </div>
        @if (Session::has('success'))
         <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> {{Session::get('success')}}
         </div>
         @endif
         @if (auth()->user()->role ==  "admin")
            <div class="mb-2">
                <a href="{{Route(auth()->user()->role . '/contacts/employes/ajouter_employe')}}" class="btn btn-success px-4 text-white">
                    <i class="fa-solid fa-plus"></i> <span class="ms-2">Create</span>
                </a>
            </div>
         @endif


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Employes</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $emp)
                                        <tr>
                                            <td>{{$emp->id}}</td>
                                            <td>{{$emp->lastName}}</td>
                                            <td>{{$emp->firstName}}</td>
                                            <td>{{$emp->email}}</td>
                                            <td>{{$emp->tel}}</td>
                                            <td>{{$emp->city}}</td>
                                            <td>
                                                <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{route(auth()->user()->role . '/contacts/employes/profile',$emp->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{url('delete-employe/'.$emp->id)}}" style="text-decoration:none;color:white">
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
