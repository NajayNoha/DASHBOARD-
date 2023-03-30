@extends('...layouts.app')
@section('title')
Mise à jour des prix
@endsection
@section("content")
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
      <div class="row page-titles mx-0">
         <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                  <h4>Mise à jour des prix</h4>
            </div>
         </div>
         <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               {{-- <div class="btns mb-3 text-right">
                  <a href="{{Route('/produits-et-services/liste-produits')}}" class="btn btn-danger px-4" style="font-weight: bolder">ANNULER</a>
                  <button type="submit" class="btn  text-white px-4" style="font-weight: bolder;background: #57ae74;">ENREGISTRER</button>
               </div> --}}
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
                                          
                                          PRODUIT
                                        </th>
                                        <th>SKU</th>
                                        <th>NIVEAU DE PRIX</th>
                                        <th>PRIX</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                      <form action="/save_update" method="POST" enctype="application/x-www-form-urlencoded">
                                        @csrf
                                        <td>
                                          <input type="text" name="id" value="{{$item->id}}" hidden>
                                          {{$item->name}}
                                        </td>
                                        <td>
                                          {{$item->sku}}
                                        </td>
                                        <td>
                                          {{$item->price_level}}
                                        </td>
                                        <td class="d-flex gap-2" colspan="2">
                                          <input type="text" name="price" class="form-control" value="{{$item->price}}" style="border:1px solid rgba(88, 100, 170, 1)">
                                          <select id="inputState" name="devise1" class="form-control" style="margin-left: 5px; border:1px solid rgba(88, 100, 170, 1);background: rgba(88, 100, 170, 1);color:#ffff ;width: 80px; ">
                                             <option selected style="background:#ffffff;color: black">MAD</option>
                                             <option style="background:#ffffff;color: black">USD</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="submit" class="btn btn-success text-white px-4"><i class="fa-solid fa-check"></i></button>
                                          <button type="reset" class="btn btn-danger text-white px-4"><i class="fa-solid fa-xmark"></i></button>
                                        </td>
                                      </form>
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