<?php
include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is your dashboard.</p>
<p><a href="index.html">Home</a></p>
<p><a href="index.html">About</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />
        <div class="copyright">
            <p class="text-center">&copy; 2019 <a href="#">Hiergraphics</a>. <br>All Rights Reserved.<br>Design
                by <a href="#" target="_blank">Bhavik Bhoir</a>.</p>
        </div>

</div>
</body>
</html>
