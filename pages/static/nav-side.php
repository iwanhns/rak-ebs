  <aside class="main-sidebar">
    <section class="sidebar">
      <?php 
      if(isset($_SESSION['user'])) {
    ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <?php
      }
    ?>
      <ul class="sidebar-menu">
        <li>
          <a href="../../connector.php?page=dashboard">
            <i class="fa fa-home"></i> Penyewaan Loker
          </a>
        </li>
        <li class="active">
            <a href="../../connector.php?page=kelola-tenant">
              <i class="fa fa-edit"></i> Kelola Tenant
            </a>
        </li>
      </ul>
    </section>
  </aside>