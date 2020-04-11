    <script src="../../assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../../assets/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../../assets/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script src="../../assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="../../assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="../../assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="../../assets/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src='../../assets/plugins/fastclick/fastclick.min.js'></script>
    <script src="../../assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="../../assets/dist/js/demo.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#tablePersonalDetail").dataTable();
            $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
            $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
            $("[data-mask]").inputmask();
            $('#reservation').daterangepicker();
            $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
            $('#daterange-btn').daterangepicker(
                    {
                      ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                        'Last 7 Days': [moment().subtract('days', 6), moment()],
                        'Last 30 Days': [moment().subtract('days', 29), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                      },
                      startDate: moment().subtract('days', 29),
                      endDate: moment()
                    },
            function (start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            );

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
              checkboxClass: 'icheckbox_minimal-red',
              radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
              checkboxClass: 'icheckbox_flat-green',
              radioClass: 'iradio_flat-green'
            });

            //Colorpicker
            $(".my-colorpicker1").colorpicker();
            //color picker with addon
            $(".my-colorpicker2").colorpicker();

            //Timepicker
            $(".timepicker").timepicker({
              showInputs: false
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('.datepicker').datepicker({
              autoclose: true
            });
        });
    </script>