  <aside class="main-sidebar">
    <section class="sidebar">
      <?php 
      if(isset($_SESSION['user'])) {
    ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../assets/dist/img/user2-160x160.jpeg" class="img-circle" alt="User Image" />
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
            <i class="fa fa-dashboard"></i> Dashboard
          </a>
        </li>
        <li class="active">
            <a href="../../connector.php?page=kelola-personal-details">
              <i class="fa fa-user"></i> Personal Details
            </a>
        </li>
        <?php
          if($_SESSION['page']=='kelola') {
            echo "<li class='treeview active'>";
          } else { 
            echo "<li class='treeview'>";
          }
        ?>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Kelola Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <?php
              if($_SESSION['subpage']=='education') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-education'><i class='fa fa-circle-o'></i> Data Education</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-education'><i class='fa fa-circle-o'></i> Data Education</a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='project-experience') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-project-experience'><i class='fa fa-circle-o'></i> Data Project Experience</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-project-experience'><i class='fa fa-circle-o'></i> Data Project Experience</a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='leadership-experience') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-leadership-experience'><i class='fa fa-circle-o'></i> Data Leadership Experience</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-leadership-experience'><i class='fa fa-circle-o'></i> Data Leadership Experience</a></li>";
              }
            ?>
             <?php
              if($_SESSION['subpage']=='writing-experience') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-writing-experience'><i class='fa fa-circle-o'></i> Data Writing Experience</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-writing-experience'><i class='fa fa-circle-o'></i> Data Writing Experience</a></li>";
              }
            ?>
             <?php
              if($_SESSION['subpage']=='research-outcome') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-research-outcome'><i class='fa fa-circle-o'></i> Data Research Outcome</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-research-outcome'><i class='fa fa-circle-o'></i> Data Research Outcome </a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='professional-certification') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-professional-certification'><i class='fa fa-circle-o'></i> Data Professional Certification</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-professional-certification'><i class='fa fa-circle-o'></i> Data Professional Certification </a></li>";
              }
            ?>
             <?php
              if($_SESSION['subpage']=='skill-experience') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-skill-experience'><i class='fa fa-circle-o'></i> Data Skill Experience</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-skill-experience'><i class='fa fa-circle-o'></i> Data Skill Experience</a></li>";
              }
            ?>
			 <?php  
              if($_SESSION['subpage']=='working-internship') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-working-internship'><i class='fa fa-circle-o'></i> Data Working & internship</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-working-internship'><i class='fa fa-circle-o'></i> Data Working & internship</a></li>";
              }
            ?>
			 <?php  
              if($_SESSION['subpage']=='training-workshop-seminar') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-training-workshop-seminar'><i class='fa fa-circle-o'></i> Training,Workshop,Seminar</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-training-workshop-seminar'><i class='fa fa-circle-o'></i> Training,Workshop,Seminar</a></li>";
              }
            ?>

          </ul>
           </li>
      </ul>
    </section>
  </aside>