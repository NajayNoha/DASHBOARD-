
<div class="quixnav" style="position: fixed">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu Principal</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-speedometer"></i>
                <span class="nav-text">Tableau de bord</span></a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Tableau de bord 1</a></li>
                    <li><a href="./index2.html">Tableau de bord 2</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="bi bi-person-rolodex"></i><span class="nav-text">Contacts</span></a>
                <ul aria-expanded="false">
                    <li><a href=" {{route( Auth::user()->role .  '/contacts/clients')}}">Clients</a></li>
                    <li><a href="{{Route( Auth::user()->role . '/contacts/fournisseurs')}}">Fournisseurs</a></li>
                    <li><a href="{{ Route( Auth::user()->role .'/contacts/employes')}}">Employés</a></li>
                    <li><a href="#">Paramètres des contacts</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="bi bi-box-seam"></i><span class="nav-text">Produits</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{Route( Auth::user()->role . '/produits-et-services/liste-produits')}}">Produits</a></li>
                    <li><a href="{{ Route( Auth::user()->role .'/produits-et-services/produits/services')}}">Services</a></li>
                    <li><a href="{{Route( Auth::user()->role . '/produits-et-services/price-update/edit')}}">Mise à jour des prix</a></li>
                    <li><a href="./chart-chartist.html">Lots</a></li>
                    <li><a href="{{Route( Auth::user()->role . '/produits-et-services/regles-de-prix/list')}}">Règles de prix</a></li>
                    <li><a href="{{Route( Auth::user()->role . '/produits-et-services/products-settings/product-tags')}}">Paramètres des produits</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-cart-dash"></i>
                <span class="nav-text">Ventes</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ Route( Auth::user()->role . '/ventes/devis/list')}}">Devis</a></li>
                    <li><a href="{{ Route( Auth::user()->role . '/ventes/bons-commande')}}">Bons de commande</a></li>
                    <li><a href="{{Route( Auth::user()->role . '/ventes/bons-livraison')}}">Bons de livraison</a></li>
                    <li><a href="{{ Route( Auth::user()->role . '/ventes/factures')}}">Factures</a></li>
                    <li><a href="{{Route( Auth::user()->role . '/ventes/product-returns/list')}}">Retours produits</a></li>
                    <li><a href="{{Route(Auth::user()->role . '/ventes/avoirs')}}">Avoirs</a></li>
                            <li><a href="{{Route(Auth::user()->role . '/ventes/refunds')}}">Remboursements</a></li>
                            <li><a href="#">Abonnements</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="{{Route('rapports')}}" aria-expanded="false"><i class="bi bi-bar-chart-fill"></i><span
                                class="nav-text">Rapports</span></a></li> --}}
                    {{-- @if (Auth::user()->role == "admin") --}}
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="bi bi-person-gear"></i><span class="nav-text">Paramètres</span></a>
                            <ul aria-expanded="false">
                                <li><a href="{{Route('setting.company-settings.create')}}">Paramétres de l'entreprise</a></li>
                                <li><a href="{{Route('settings.taxes')}}">Taxes</a></li>
                                <li><a href="{{Route('settings.currencies')}}">Devises</a></li>
                                {{-- <li><a href="./form-editor-summernote.html">Importer des données</a></li> --}}
                                <li><a href="{{Route('settings.payment-methods')}}">Moyens de paiments</a></li>
                                {{-- <li><a href="form-validation-jquery.html">Paramétres PDF</a></li> --}}
                                <li><a href="{{Route('settings.price-levels')}}">Niveaux de prix</a></li>
                                <li><a href="{{Route('settings.users')}}">Utilisateurs</a></li>
                            </ul>
                        </li>
                    {{-- @endif --}}

        </ul>
    </div>


</div> --}}
