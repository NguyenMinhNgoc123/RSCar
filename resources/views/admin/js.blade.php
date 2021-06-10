
<!-- jQuery -->
<script src="{{('/AdminLTE-master/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{('/AdminLTE-master/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap Switch -->
<script src="{{asset('/AdminLTE-master/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<script>
    $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
    $.widget.bridge('uibutton', $.ui.button)
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 10000);
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $(document).ready(function() {
        $(".add").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click",".remove",function(){
            $(this).parents(".control-group").remove();
        });
    });
    var loader = function() {
        setTimeout(function() {
            $('#loader').css({ 'opacity': 0, 'visibility':'hidden' });
        }, 1000);
    };
    $(function(){
        loader();
    });
</script>
<script src="https://code.jquery.com/jquery-latest.js"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('/AdminLTE-master/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/AdminLTE-master/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('/AdminLTE-master/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/AdminLTE-master/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/AdminLTE-master/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/AdminLTE-master/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/AdminLTE-master/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{('/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script
    src="{{asset('/AdminLTE-master/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/AdminLTE-master/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/AdminLTE-master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/AdminLTE-master/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/AdminLTE-master/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/AdminLTE-master/dist/js/pages/dashboard.js')}}"></script>
<!-- Ekko Lightbox -->
<script src="{{asset('/AdminLTE-master/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>


<!-- AdminLTE App -->
<script src="{{asset('/AdminLTE-master/dist/js/adminlte.min.js')}}" ></script>

<script src="{{('/AdminLTE-master/plugins/moment/moment.min.js')}}"></script>
<script src="{{('/AdminLTE-master/plugins/fullcalendar/main.js')}}"></script>
@stack('js')

