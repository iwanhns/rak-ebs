<section class="content-header">
  <h1>
    <?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "Dashboard";
	    	}
	    	else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='education') {
	    			echo "Kelola Data Education";
	    		}
	    		else if($_SESSION['subpage']=='project-experience') {
	    			echo "Kelola Data Project Experience";
	    		}
	    		else if($_SESSION['subpage']=='leadership-experience') {
	    			echo "Kelola Data Leadership Experience";
	    		}
	    		else if($_SESSION['subpage']=='personal-details') {
	    			echo "Kelola Data Personal Details";
	    		}
	    		else if($_SESSION['subpage']=='writing-experience') {
	    			echo "Kelola Data Writing Experience";
	    		}
	    		else if($_SESSION['subpage']=='research-outcome') {
	    			echo "Kelola Data Research Outcome";
	    		}
	    		else if($_SESSION['subpage']=='professional-certification') {
	    			echo "Kelola Data Professional Certification";
	    		}
	    		else if($_SESSION['subpage']=='skill-experience') {
	    			echo "Kelola Data Skill Experience";
	    		}
				else if($_SESSION['subpage']=='working-internship') {
	    			echo "Kelola Data Working Internship";
	    		}
				else if($_SESSION['subpage']=='training-workshop-seminar') {
	    			echo "Kelola Training,Workshop,Seminar";
	    		}
	    	}
	    	else if($_SESSION['page']=='education') {
	    		echo "Education";
	    	}
	    	else if($_SESSION['page']=='leadership-experience') {
	    		echo "Leadership Experience";
	    	}
	    	else if($_SESSION['page']=='personal-details') {
	    		echo "Personal Details";
	    	}
	    	else if($_SESSION['page']=='project-experience') {
	    		echo "Project Experience";
	    	}
	    	else if($_SESSION['page']=='writing-experience') {
	    		echo "Writing Experience";
	    	}
	    	else if($_SESSION['page']=='research-outcome') {
	    		echo "Research Outcome";
	    	}
	    	else if($_SESSION['page']=='professional-certification') {
	    		echo "Professional Certification";
	    	}
	    	else if($_SESSION['page']=='skill-experience') {
	    		echo "Skill Experience";
	    	}
			else if($_SESSION['page']=='working-internship') {
	    		echo "Working Internship";
	    	}
			else if($_SESSION['page']=='training-workshop-seminar') {
	    		echo "Training,Workshop,Seminar";
	    	}

	    } else {
	    	echo "Dashboard";
	    }
    ?>
  </h1>
  <ol class="breadcrumb">
  	<?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "<li><i class='fa fa-dashboard'></i> Dashboard</li>";
	    	}
	    	else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='education') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Education</li>";
	    		}
	    		else if($_SESSION['subpage']=='project-experience') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Project Experience</li>";
	    		}
	    		else if($_SESSION['subpage']=='leadership-experience') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Leadership Experience</li>";
	    		}
	    		else if($_SESSION['subpage']=='personal-details') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Personal Details</li>";
	    		}
	    		else if($_SESSION['subpage']=='writing-experience') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Writing Experience</li>";
	    		}
	    		else if($_SESSION['subpage']=='skill-experience') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Skill Experience</li>";
	    		}
	    		else if($_SESSION['subpage']=='research-outcome') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Research Outcome</li>";
	    		}
	    		else if($_SESSION['subpage']=='professional-certification') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Professional Certification</li>";
	    		}
				else if($_SESSION['subpage']=='working-internship') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Working Internship</li>";
	    		}
				else if($_SESSION['subpage']=='training-workshop-seminar') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Training,Workshop,Seminar</li>";
	    		}
	    	}
	    	else if($_SESSION['page']=='education') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Education</li>";
	    	}
	    	else if($_SESSION['page']=='leadership-experience') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Leadership Experience</li>";
	    	}
	    	else if($_SESSION['page']=='personal-details') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Personal Details</li>";
	    	}
	    	else if($_SESSION['page']=='project-experience') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Project Experience</li>";
	    	}
	    	else if($_SESSION['page']=='writing-experience') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Writing Experience</li>";
	    	}
	    	else if($_SESSION['page']=='skill-experience') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Skill Experience</li>";
	    	}
	    	else if($_SESSION['page']=='research-outcome') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Research Outcome</li>";
	    	}
	    	else if($_SESSION['page']=='professional-certification') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>professional-certification</li>";
	    	}
			else if($_SESSION['page']=='working-internship') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>working-internship</li>";
	    	}
			else if($_SESSION['page']=='training-workshop-seminar') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>training-workshop-seminar</li>";
	    	}
	    	
	    } else {
	    	echo "<li><i class='fa fa-dashboard'></i> Dashboard</li>";
	    }
    ?>
  </ol>
</section>