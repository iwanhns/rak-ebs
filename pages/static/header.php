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
          <a href="../public/action.php?table=user&&action=logout">
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
  <a href="../../connector.php?page=dashboard" class="logo"><b>Mahasiswa</b></a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="../../connector.php?page=login">
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