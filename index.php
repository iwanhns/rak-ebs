<?php
  	session_start();
  	include 'pages/static/current-page.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loker EBS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
	<div class="wrapper">

		<?php 
			if(isset($_SESSION['user'])) {
		?>
		<header class="main-header">
			  <a href="connector.php?page=dashboard" class="logo"><b>Loker EBS</b></a>
			  <nav class="navbar navbar-static-top" role="navigation">
			    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			      <span class="sr-only">Toggle navigation</span>
			    </a>
			    <div class="navbar-custom-menu">
			      <ul class="nav navbar-nav">
			        <li class="dropdown user user-menu">
			          <a href="pages/public/action.php?table=user&&action=logout">
			            <span class="hidden-xs">Sign Out</span>
			          </a>
			        </li>
			      </ul>
			    </div>
			  </nav>
		</header>

		<?php 
		  } else {
		?>
		<header class="main-header">
		  <a href="connector.php?page=dashboard" class="logo"><b>Loker EBS</b></a>
		  <nav class="navbar navbar-static-top" role="navigation">
		    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		      <span class="sr-only">Toggle navigation</span>
		    </a>
		    <div class="navbar-custom-menu">
		      <ul class="nav navbar-nav">
		        <li class="dropdown user user-menu">
		          <a href="connector.php?page=login">
		            <span class="hidden-xs">Login as Administrator</span>
		          </a>
		        </li>
		      </ul>
		    </div>
		  </nav>
		</header>
		<?php
			}
		?>
		<aside class="main-sidebar">
		  <section class="sidebar">
		  	<?php 
				if(isset($_SESSION['user'])) {
			?>
		    <div class="user-panel">
		      <div class="pull-left image">
		        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
		      </div>
		      <div class="pull-left info">
		        <p><?php echo $_SESSION['nama']; ?></p>
		        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		      </div>
		    </div>
		     <?php
				}
			?>
		    <form action="#" method="get" class="sidebar-form">
		      <div class="input-group">
		        <input type="text" name="q" class="form-control" placeholder="Search..."/>
		        <span class="input-group-btn">
		          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
		        </span>
		      </div>
		    </form>
		    <ul class="sidebar-menu">
		      <li class="active">
		        <a href="connector.php?page=dashboard">
		          <i class="fa fa-home"></i> Penyewaan Loker
		        </a>
		      </li>

		      <?php 
				if(isset($_SESSION['user'])) {
			  ?>
			  
		      <li class="treeview">
		        <a href="connector.php?page=kelola-tenant">
		          <i class="fa fa-edit"></i> Kelola Tenant
		        </a>
		      </li>
		  <?php } ?>
		    </ul>
		  </section>
		</aside>
		<div class="content-wrapper">
			<?php include 'homepage.php'; ?>
		</div>
		<?php include 'pages/static/footer.php'; ?>
	</div>
	<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
	<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
	<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
	<script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<script src="assets/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
	<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
	<script src='assets/plugins/fastclick/fastclick.min.js'></script>
	<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
	<script src="assets/dist/js/demo.js" type="text/javascript"></script>
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
</body>
</html>