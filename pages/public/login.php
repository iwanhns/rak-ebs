<?php
  session_start();
  include '../static/current-page.php'; 
?>
<!DOCTYPE html>
<html>
  <?php include '../static/template-top.php'; ?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../connector.php?page=dashboard"><b>Administrator Loker</b></a>
      </div>
      <?php include '../static/alerts.php'; ?>
      <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') { ?>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Email atau Password Salah!
      </div>
      <?php } ?>
      <div class="login-box-body">
        <p class="login-box-msg">Login as Administrator</p>
        <form action="action.php?table=user&&action=login" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email" name="email" autocomplete="off">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              <br>
              <div class="text-center"><a href="../../connector.php?page=dashboard">Back to Dashboard</a></div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php include '../static/template-bot.php'; ?>
  </body>
</html>