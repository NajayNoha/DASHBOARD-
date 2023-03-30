<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Counter Up -->
    <script src={{asset("vendor/jqvmap/js/jquery.vmap.min.js")}}></script>
    <script src={{asset("vendor/jqvmap/js/jquery.vmap.usa.js")}}></script>
    <script src={{asset("vendor/jquery.counterup/jquery.counterup.min.js")}}></script>


    <!-- Vectormap -->
    <script src={{asset("vendor/raphael/raphael.min.js")}}></script>
    <script src={{asset("vendor/morris/morris.min.js")}}></script>
    <!--**********************************
        Scripts
    ***********************************--
    
        <!--  flot-chart js -->
    <script src= {{asset("vendor/circle-progress/circle-progress.min.js")}}></script>
    <script src={{asset("vendor/flot/jquery.flot.js")}}></script>
    <script src={{asset("vendor/flot/jquery.flot.resize.js")}}></script>
    <!-- Owl Carousel -->
    <script src={{asset("vendor/owl-carousel/js/owl.carousel.min.js")}}></script>
    <script src={{asset("vendor/chart.js/Chart.bundle.min.js")}}></script>

    <script src={{asset("vendor/gaugeJS/dist/gauge.min.js")}}></script>

    <script src={{asset("js/dashboard/dashboard-1.js")}}></script>
    <script src={{asset("js/dashboard/dashboard.js")}}></script>

    {{-- DATA TABLE  --}}
    ***********************************-->
    <!-- Required vendors -->
    <script src={{asset("vendor/global/global.min.js")}}></script>
    <script src={{asset("js/quixnav-init.js")}}></script>
    <script src={{asset("js/custom.min.js")}}></script>
    


    <!-- Datatable -->
    <script src={{asset("vendor/datatables/js/jquery.dataTables.min.js")}}></script>
    <script src={{asset("js/plugins-init/datatables.init.js")}}></script>
    @yield('scripts')
    <script src={{asset("vendor/select2/js/select2.full.min.js")}}></script>
    <script src={{asset("js/plugins-init/select2-init.js")}}></script>

    <!-- Summernote -->
    <script src={{asset("vendor/summernote/js/summernote.min.js")}}></script>
    <!-- Summernote init -->
    <script src={{asset("js/plugins-init/summernote-init.js")}}></script>
</body>

</html>
