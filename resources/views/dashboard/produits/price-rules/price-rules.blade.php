

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
            <a href="{{Route('/produits-et-services/regles-de-prix/create')}}" class="btn px-4 text-white" style="background: #57ae74;">
                <i class="fa-solid fa-plus"></i> <span class="ms-2">Create</span></a>
        </div>

        {{-- TABLE --}}
        
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
                                        <th>Nome</th>
                                        <th>TYPE DE SÉLECTION</th>
                                        <th>NIVEAU DE PRIX</th>
                                        <th>PRIX DE BASE</th>
                                        <th> VALEUR</th>
                                        <th>ACTIF</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
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
                                          <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
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
                                          <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
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
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
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
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
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
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
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
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
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
                                            <a class="btn text-white" style="background: rgba(88, 100, 170, 1)" href="{{Route('/produits-et-services/regles-de-prix/edit',1)}}"><i class="fa-solid fa-pen-to-square"></i></a>
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
