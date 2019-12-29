    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.2-pre
        </div>
    </footer>
    
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    
        <!-- jQuery -->
        <script src="{{ asset('adminPanel/plugins/jquery/jquery.min.js') }}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('adminPanel/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('adminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('adminPanel/plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('adminPanel/plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('adminPanel/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('adminPanel/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('adminPanel/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('adminPanel/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('adminPanel/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('adminPanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('adminPanel/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('adminPanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminPanel/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('adminPanel/dist/js/pages/dashboard.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('adminPanel/dist/js/demo.js') }}"></script>
        <script src="{{ asset('adminPanel/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('adminPanel/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
        {{-- <script src="https://cdn.datatables.net/buttons/1.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.0.0/js/dataTables.buttons.min.js"></script> --}}
        <script src="{{ asset('adminPanel/plugins/datatables-buttons/js/dataTables.buttons.js') }}"></script>
        {{-- <script src="https://cdn.datatables.net/buttons/1.0.1/js/buttons.colVis.js"></script> --}}
        

        @stack('js')
        @stack('css')
    </body>
</html>
    