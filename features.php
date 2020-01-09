<?php
include("auth.php");
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

<link rel="stylesheet" href="features.css">
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

<section id="Info">
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>The App</b></h1>
      <h1 class="large-font" style="color:rgb(255,150,202);"><b>Why buy it?</b></h1>
      <p><span style="font-size:36px">Get your notes on your phone.</span> </br>You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <button class="button" onclick="window.location.href = 'https://play.google.com/store/';">Download Application</button>
    </div>
    <div class="column-33">
        <img src="Assets/Phone.png" width="200px" height="200px">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:rgb(255,150,202)">
  <div class="row">
    <div class="column-33">
      <img src="Assets/Click.png" alt="App" width="200px" height="200px">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Clarity</b></h1>
      <h1 class="large-font" style="color:White;"><b>Excellent resolution.</b></h1>
      <p><span style="font-size:24px">A revolution in resolution.</span> Sharp and clear photos with the world's best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <button class="button" style="background-color:grey">Read More</button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>The App</b></h1>
      <h1 class="large-font" style="color:rgb(255,150,202);"><b>What more?</b></h1>
      <p><span style="font-size:36px">Take photos and let the app do it's magic.</span> See the magic of this app by lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <button class="button" onclick="window.location.href = 'https://play.google.com/store/';">Download Application</button>
    </div>
    <div class="column-33">
        <img src="Assets/Convert.png" width="200px" height="200px" >
    </div>
  </div>
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
	
