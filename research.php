<?php
include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Hiergraphics</title> 
	
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="research.css">
</head> 

<body> 
<div class="header">  
	<div class="logo">
		<img src="logo.png" style="align-content: center;width: 200px;">
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark"> 	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_Navbar" > 
			<span class="navbar-toggler-icon"></span> 
		</button> 
			
		<div class="collapse navbar-collapse justify-content-center" id="collapse_Navbar"> 
			<ul class="navbar-nav"> 
				  <li class="nav-item"> 
            			    <a class="nav-link" href="index.php">Home</a> 
				  </li> 

				  <li class="nav-item"> 
				    <a class="nav-link" href="features.php">Features</a> 
				  </li> 

				  <li class="nav-item"> 
				    <a class="nav-link" href="about.php">About</a> 
				  </li> 

				  <li class="nav-item"> 
				    <a class="nav-link" href="research.php">Research</a> 
				  </li> 

				  <li class="nav-item dropdown" id="dropdown">
				    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['username']; ?>!</a>
				      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="login.php"> Switch Account </a>
					<a class="dropdown-item" href="logout.php"> Log Out </a>
				      </div>
				  </li>
			</ul> 
		</div>
	</nav> 
</div> 

<section id="timeline">

<div class="container">
    <div class="page-header">
        <h1 id="timeline">Timeline</h1>
    </div>
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">The future</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Updated 11 hours ago</small></p>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Current work</h4>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">The progress</h4>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">First achievement</h4>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">The Plan</h4>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">First steps</h4>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Birth of the idea</h4>
            </div>
            <div class="timeline-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </li>
    </ul>
</div>
	
</section>

<!-- Footer -->
    <footer class="container-fluid">
        <div class="container">
            <div class="logo">
				<img src="logo.png" style="align-content: center;width: 200px;">
			</div>
            <div class="icons">
                <li class="footer-item">
                    <a class="footer-link" href="https://facebook.com/" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="footer-item">
                    <a class="footer-link" href="#" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="footer-item">
                    <a class="footer-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="footer-item">
                    <a class="footer-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
            </div>
        </div>
        <div class="copyright">
            <p class="text-center">&copy; 2019 <a href="#">Hiergraphics</a>. All Rights Reserved. Design
                by <a href="#" target="_blank">Bhavik Bhoir</a>.</p>
        </div>
    </footer>

</body> 
</html>					 
	
