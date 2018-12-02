<!--   Core JS Files   -->
<script src="{!! asset('assets/js/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/js/material.min.js') !!}"></script>

<!-- DataTables JavaScript -->
<script src="{!! asset('assets/datatables/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('assets/datatables-plugins/dataTables.bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/datatables-responsive/dataTables.responsive.js') !!}"></script>


<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
<!-- <script src="{!! asset('assets/js/moment.min.js') !!}"></script>-->

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
<!-- <script src="{!! asset('assets/js/nouislider.min.js') !!}" type="text/javascript"></script>-->

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
<!-- <script src="{!! asset('assets/js/bootstrap-datetimepicker.js') !!}" type="text/javascript"></script>-->

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
<!-- <script src="{!! asset('assets/js/bootstrap-selectpicker.js') !!}" type="text/javascript"></script>-->

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
<!-- <script src="{!! asset('assets/js/bootstrap-tagsinput.js') !!}"></script>-->

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
<!-- <script src="{!! asset('assets/js/jasny-bootstrap.min.js') !!}"></script>-->

<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
<script src="{!! asset('assets/js/material-kit.js?v=1.2.1') !!}" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function(){
        materialKitDemo.initContactUs2Map();
    });
</script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>