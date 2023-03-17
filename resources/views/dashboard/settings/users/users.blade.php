

@extends('...layouts.app')

@section("ClientContent")
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Utilisateurs</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateurs</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
                </ol>
            </div>
        </div>
        <div class="mb-2">
            <!-- Button trigger modal -->
            <a href="{{Route('settings.users.create')}}" class="btn text-white px-4"  style="background: #57ae74;">
               <i class="fa-solid fa-plus"></i> 
               <span class="ms-2">Create</span>
            </a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table table-bordered table-hover" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="color:rgb(72, 69, 79)">NOM COMPLET</th>
                                        <th style="color:rgb(72, 69, 79)">E-MAIL</th>
                                        <th style="color:rgb(72, 69, 79)">TÉLÉPHONE</th>
                                        <th style="color:rgb(72, 69, 79)">ACTIF</th>
                                        <th style="color:rgb(72, 69, 79)">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>khalid lafhal</td>
                                        <td>lafhalkhalid22@gmail.com</td>
                                        <td>0616105263</td>
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
                                          <a href="{{Route('settings.users.edit',1)}}" class="btn text-white" style="background: rgba(88, 100, 170, 1)"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">

               <div class="card">
                  <div class="card-header">
                     <h4>Utilisateurs actifs</h4>
                  </div>
                  <div class="card-body">
                     <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                           <h6 class="text-dark fs-4">Utilisateurs actifs</h6>
                           <strong>1</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                           <h6 class="text-dark fs-4">Nombre d'utilisateur</h6>
                           <strong>2</strong>
                        </li>
                     </ul>
                  </div>
               </div>

            </div>
        </div>
</div>

{{-- <div>

</div> --}}
@endsection
