

@extends('...layouts.app')
@section('title')
Mise à jour des prix
@endsection
@section("ClientContent")
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Mise à jour des prix</h4>
            </div>
            {{-- <ol class="breadcrumb mt-3">
               <li class="breadcrumb-item"><a href="{{Route('/produits-et-services/liste-produits')}}">Produits</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/produits-et-services/produits/edit',1)}}">produit1</a></li>
               <li class="breadcrumb-item active"><a href="{{Route('/produits-et-services/produits/edit',1)}}">Modifier</a></li>
            </ol> --}}
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <div class="btns mb-3 text-right">
                  <a  href="{{Route('/produits-et-services/liste-produits')}}" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</a>
                  <button type="submit" class="btn  text-white px-4" style="font-weight: bolder;background: #57ae74;">ENREGISTRER</button>
               </div>
         </div>
      </div>

        {{-- TABLE --}}
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>
                                          <input type="checkbox" style="margin-right: 10px">
                                          PRODUIT
                                        </th>
                                        <th>SKU</th>
                                        <th>NIVEAU DE PRIX</th>
                                        <th>PRIX</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px" style="border:1px solid rgba(88, 100, 170, 1)">
                                          Herrod Chandler
                                       </td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td class="d-flex gap-2" colspan="2">
                                          <input type="text" class="form-control" value="10" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px">
                                          Rhona Davidson
                                       </td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td class="d-flex gap-2">
                                          <input type="text" class="form-control" value="10" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px">
                                          Colleen Hurst
                                       </td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td class="d-flex gap-2">
                                          <input type="text" class="form-control" value="10" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px">
                                          Sonya Frost
                                       </td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td class="d-flex gap-2">
                                          <input type="text" class="form-control" value="Entrez un prix" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px">
                                          Jena Gaines
                                       </td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td class="d-flex gap-2">
                                          <input type="text" class="form-control" value="10" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px">
                                          Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td class="d-flex gap-2">
                                          <input type="text" class="form-control" value="10" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          <input type="checkbox" style="margin-right: 10px">
                                          Charde Marshall
                                       </td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td class="d-flex gap-2">
                                          <input type="text" class="form-control" value="Entrez un prix" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
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
