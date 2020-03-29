<?php
  	session_start();
  	include 'pages/static/current-page.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rak EBS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="assets/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap time Picker -->
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Theme style -->
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
	<div class="wrapper">

		<?php 
			if(isset($_SESSION['user'])) {
		?>
		<header class="main-header">
			  <a href="connector.php?page=dashboard" class="logo"><b>Mahasiswa</b></a>
			  <nav class="navbar navbar-static-top" role="navigation">
			    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			      <span class="sr-only">Toggle navigation</span>
			    </a>
			    <div class="navbar-custom-menu">
			      <ul class="nav navbar-nav">
			        <li class="dropdown user user-menu">
			          <a href="pages/public/action.php?table=user&&action=logout" class="dropdown-toggle" data-toggle="dropdown">
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
		  <a href="connector.php?page=dashboard" class="logo"><b>Mahasiswa</b></a>
		  <nav class="navbar navbar-static-top" role="navigation">
		    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		      <span class="sr-only">Toggle navigation</span>
		    </a>
		    <div class="navbar-custom-menu">
		      <ul class="nav navbar-nav">
		        <li class="dropdown user user-menu">
		          <a href="connector.php?page=login">
		            <span class="hidden-xs">Login</span>
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
		          <i class="fa fa-dashboard"></i> Dashboard
		        </a>
		      </li>

		      <?php 
				if(isset($_SESSION['user'])) {
			  ?>
			  
		      <li class="treeview">
		        <a href="connector.php?page=kelola-personal-details">
		          <i class="fa fa-user"></i> Profile
		        </a>
		      </li>
		    
		      <li class="treeview">
		        <a href="#">
		          <i class="fa fa-edit"></i>
		          <span>Kelola Data</span>
		          <i class="fa fa-angle-left pull-right"></i>
		        </a>
		        <ul class="treeview-menu">
		          <li><a href="connector.php?page=kelola-education"><i class="fa fa-circle-o"></i> Rak 1</a></li>
		          <li><a href="connector.php?page=kelola-project-experience"><i class="fa fa-circle-o"></i> Rak 2</a></li>
		          <li><a href="connector.php?page=kelola-leadership-experience"><i class="fa fa-circle-o"></i> Rak 3</a></li>
		          <li><a href="connector.php?page=kelola-writing-experience"><i class="fa fa-circle-o"></i> Rak 4</a></li>
		          <li><a href="connector.php?page=kelola-research-outcome"><i class="fa fa-circle-o"></i> Rak 5</a></li>
		          <li><a href="connector.php?page=kelola-professional-certification"><i class="fa fa-circle-o"></i> Rak 6</a>
		          <li><a href="connector.php?page=kelola-skill-experience"><i class="fa fa-circle-o"></i> Rak 7</a></li>
				  <li><a href="connector.php?page=kelola-working-internship"><i class="fa fa-circle-o"></i> Rak 8</a></li>
				  <li><a href="connector.php?page=kelola-training-workshop-seminar"><i class="fa fa-circle-o"></i>Rak 9</a></li>
		        </ul>
		      </li>
		  <?php } ?>
		    </ul>
		  </section>
		</aside>
		<div class="content-wrapper">
			<?php include 'pages/static/content-header.php'; ?>
			<?php include 'homepage.php'; ?>
		</div>
		<?php include 'pages/static/footer.php'; ?>
	</div>
	<!-- jQuery 2.1.3 -->
	<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- jQuery UI 1.11.2 -->
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	    $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
	<!-- Morris.js charts -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="assets/plugins/morris/morris.min.js" type="text/javascript"></script>
	<!-- Sparkline -->
	<script src="assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
	<!-- jvectormap -->
	<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
	<sczipt src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
	<!-- jQuery Knob Chart -->
	<script src="assets/plugins/knob/jquery.knob.js" type="text/javascript"></script>
	<!-- daterangepicker -->
	<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<!-- datepicker -->
	<script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
	<!-- iCheck -->
	<script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
	<!-- Slimscroll -->
	<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- FastClick -->
	<script src='../../assets/plugins/fastclick/fastclick.min.js'></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="assets/dist/js/pages/dashboard.js" type="text/javascript"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/dist/js/demo.js" type="text/javascript"></script>
</body>
</html>