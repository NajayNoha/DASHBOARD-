@extends('...layouts.app')
@section("ClientContent")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Fournisseurs</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Contacts</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Fournisseur</a></li>
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
            <a href="{{Route('/contacts/fournisseurs/ajouter_fournisseur')}}" class="btn btn-success px-4 text-white">
                <i class="fa-solid fa-plus"></i> <span class="ms-2">Create</span></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Fournisseurs</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Numéro Fournisseur</th>
                                        <th>Nom de Fournisseur</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Pays</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                {{$item->id}}
                                            </td>
                                            <td>
                                                {{$item->name}}
                                            </td>
                                            <td>
                                                {{$item->email}}
                                            </td>
                                            <td>
                                                {{$item->tel}}
                                            </td>
                                            <td>
                                                {{$item->pays}}
                                            </td>
                                            <td>
                                                <a href="{{Route('contacts/fournisseurs/profile',$item->id)}}" style="text-decoration:none;color:white">
                                                    <button class="btn text-white" style="background: rgba(88, 100, 170, 1)">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                                <a href="{{url('delete-fournisseur/'.$item->id)}}" style="text-decoration:none;color:white">
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
