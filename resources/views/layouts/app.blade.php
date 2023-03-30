@include('layouts.head')
<body>
    <div id="app">

            @if (Auth::user())
            @include('layouts.header')
            @endif
            @if (Auth::check())
                @if (Auth::user() && Auth::user()->role ==  "superAdmin")
                    @include('layouts.superAdmin.sideBar')
                @else
                    @include('layouts.employe.sideBar')
                @endif
            @endif


            <main class="py-2">
                @yield('content')
            </main>
    </div>
{{-- <script src={{asset('vendor/global/global.min.js')}}></script>
<script src={{asset('js/quixnav-init.js')}}"></script>
<script src={{asset('js/custom.min.js')}}></script>


<!-- Vectormap -->
<script src={{asset('vendor/raphael/raphael.min.js')}}></script>
<script src={{asset('vendor/morris/morris.min.js')}}></script>


<script src={{asset('vendor/circle-progress/circle-progress.min.js')}}></script>
<script src={{asset('vendor/chart.js/Chart.bundle.min.js')}}></script>

<script src={{asset('vendor/gaugeJS/dist/gauge.min.js')}}></script>

<!--  flot-chart js -->
<script src={{asset('vendor/flot/jquery.flot.js')}}></script>
<script src={{asset('vendor/flot/jquery.flot.resize.js')}}></script>

<!-- Owl Carousel -->
<script src={{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}></script>

<!-- Counter Up -->
<script src={{ asset('vendor/jqvmap/js/jquery.vmap.min.js')}}></script>
<script src={{asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}></script>
<script src={{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}></script>


<script src={{asset('js/dashboard/dashboard-1.js')}}></script>
<script src={{asset('js/dashboard/dashboard.js')}}></script>
<!-- DATA TABLE -->
<!-- Required vendors -->
<script src={{asset('vendor/global/global.min.js')}}></script>
<script src={{asset('js/quixnav-init.js')}}></script>
<script src={{asset('js/custom.min.js')}}></script>



<!-- Datatable -->
<script src={{asset('vendor/datatables/js/jquery.dataTables.min.js')}}></script>
<script src={{asset('js/plugins-init/datatables.init.js')}}></script>



<script src={{asset('vendor/global/global.min.js')}}></script>
    <script src={{asset('js/quixnav-init.js')}}></script>
    <script src={{asset('js/custom.min.js')}}></script>


    <!-- Vectormap -->
    <script src={{asset('vendor/raphael/raphael.min.js')}}></script>
    <script src={{asset('vendor/morris/morris.min.js')}}></script>


    <script src={{asset('vendor/circle-progress/circle-progress.min.js')}}></script>
    <script src={{asset('vendor/chart.js/Chart.bundle.min.js')}}></script>

    <script src={{asset('vendor/gaugeJS/dist/gauge.min.js')}}></script>

    <!--  flot-chart js -->
    <script src={{asset('vendor/flot/jquery.flot.js')}}></script>
    <script src={{asset('vendor/flot/jquery.flot.resize.js')}}></script>

    <!-- Owl Carousel -->
    <script src={{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src={{asset('vendor/jqvmap/js/jquery.vmap.min.js')}}></script>
    <script src={{asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}></script>
    <script src={{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}></script>


    <script src={{asset('js/dashboard/dashboard-1.js')}}></script>
</body> --}}
@include('layouts.buttom')
{{-- </html> --}}