<?php
include("auth.php"); 
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Hiergraphics</title> 
	
<meta charset="utf-8"> 	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta
      name="description"
      content="Hiergraphics - Image to Text AI App"
/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="style.css">
</head> 

<body> 
	
<div class="header">  
        <div class="logo">
		<img src="logo.png" style="align-content: center;width: 200px;">
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark"> 		
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
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['username']; ?>!
	                </a>
		            	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		              		<a class="dropdown-item" href="login.php"> Switch Account </a>
		              		<a class="dropdown-item" href="logout.php"> Log Out </a>
		            	</div>
                        </li>
			</ul> 
		</div>
	</nav> 
</div> 

<!-- Grid Section -->        
<div class="container-fluid" id="grid">
	<div class="grid"> 
        <div class="row"> 
            <div class="col-sm-6"> 
               <div class="title1">
               	<h1><b>About</b></h1>
               	<br>
               	<video width="240" height="240" autoplay loop>
  					<source src="About.mp4" type="video/mp4">
				</video>
               	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               	cillum dolore eu fugiat nulla pariatur...</br>
               <button class="button" onclick="window.location.href = 'about.html';">Read more</button>
             </p>
               </div>
            </div> 
            <div class="col-sm-6"> 
                <div class="title2">
               	<h1><b>Research</b></h1>
               	<br>
               	<video width="240" height="240" autoplay loop>
  					<source src="Research.mp4" type="video/mp4">
				</video>
               	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               	cillum dolore eu fugiat nulla pariatur...</br>
               <button class="button" onclick="window.location.href = 'research.html';">Read more</button>
             </p>
               </div>
            </div> 
        </div> 
    </div> 	
</div>

<!-- Steps Section -->
<div class="Steps">
		<h1><b>Steps</b></h1>
	<div class="card-deck">
    <div class="card bg-white">
      <div class="card-body text-center">
      	<h2><b>1.</b></h2>
      	<br><img src="Notes.png" width="200px" height="200px"><br>
        <p class="card-text">Assemble your handwritten notes.</p>
      </div>
    </div>
    <div class="card bg-white">
      <div class="card-body text-center">
      	<h2><b>2.</b></h2>
      	<br><img src="Click.png" width="200px" height="200px"><br>
        <p class="card-text">Click a picture of your notes<br>with your phone's camera.</p>
      </div>
    </div>
    <div class="card bg-white">
      <div class="card-body text-center">
      	<h2><b>3.</b></h2>
      	<br><img src="Convert.png" width="200px" height="200px"><br>
        <p class="card-text">Let the App convert your<br>notes into text.</p>
      </div>
    </div>
    <div class="card bg-white">
      <div class="card-body text-center">
      	<h2><b>4.</b></h2>
      	<br><img src="Phone.png" width="200px" height="200px"><br>
        <p class="card-text">Get your handwritten notes in<br>text form on your phone.<br>Save them in your notes tab<br>
        or Share them via Email.</p>
      </div>
    </div>  
  </div>
</div>

<!-- Stay Updated -->
<div class="Stay_Updated">
  <div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
        <h2 class="text-center">Stay Updated</h2>
        <p class="text-center mt-2">Sign up for our newsletter to receive the latest news and event postings.</p>
        <div class="input-group mt-4 mx-auto" style="max-width: 640px">
            <input type="email" class="form-control" placeholder="YOUR EMAIL ADDRESS">
            <div class="">
                <button class="btn btn-success ml-2" type="submit">SIGN UP</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container-fluid">
    <div class="container">
        <div class="logo">
			<img src="logo.png" style="align-content: center;width: 200px;">
		</div>
        <div class="icons">
            <li class="footer-item">
                <a class="footer-link" href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="footer-item">
                <a class="footer-link" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
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
            <p class="text-center">&copy; 2019 <a href="#">Hiergraphics</a>. All Rights Reserved. Design by <a href="#" target="_blank">Bhavik Bhoir</a>.</p>
        </div>
    </footer>
</body> 
</html>					 

