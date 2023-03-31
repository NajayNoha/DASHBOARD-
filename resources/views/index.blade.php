@extends('layouts.app')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Clients</div>
                            <div class="stat-digit">{{$clients}}</div>
                            <a class="btn btn-success text-white" href=" {{route( Auth::user()->role .  '/contacts/ajouter_client')}}">Ajouter</a>
                            <a class="btn btn-primary text-white" href="{{route( Auth::user()->role .  '/contacts/clients')}}" >Liste</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Employes</div>
                            <div class="stat-digit">{{$employes}}</div>
                            <a class=" btn btn-primary text-white" href="{{Route( Auth::user()->role . '/contacts/employes')}}" >Liste</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Fournisseurs</div>
                            <div class="stat-digit">{{$fournisseurs}}</div>
                            <a class="btn btn-success text-white" href="{{Route(Auth::user()->role . '/contacts/fournisseurs/ajouter_fournisseur')}}">Ajouter</a>
                            <a class="btn btn-primary text-white" href="{{Route( Auth::user()->role . '/contacts/fournisseurs')}}" >Liste</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Produits</div>
                            <div class="stat-digit"> {{$products}}</div>
                            <a class="btn btn-success text-white" href="{{Route(Auth::user()->role . '/produits-et-services/produits/ajouter-produit')}}">Ajouter</a>
                            <a class="btn btn-primary text-white" href="{{Route( Auth::user()->role . '/produits-et-services/liste-produits')}}" >Liste</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Services</div>
                            <div class="stat-digit"> {{$services}}</div>
                            <a class="btn btn-success text-white" href="{{Route(Auth::user()->role . '/produits-et-services/service/ajouter_service')}}">Ajouter</a>
                            <a class="btn btn-primary text-white" href="{{ Route( Auth::user()->role .'/produits-et-services/produits/services')}}" >Liste</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        

    </div>
</div>
@endsection