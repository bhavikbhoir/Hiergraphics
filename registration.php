<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>

<style>
    body{
    background-color: rgb(250,250,210);
}
    .container{
    margin-top: auto;
    margin-bottom: auto;
    background-color: white;
    font-family: cursive;
    border: 2px solid rgb(255,150,202);;
    }
</style>

<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username']))

    {
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);


		//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
        	echo "<div class='duplicate' justify-content-center><h3>User Exists</h3><br/>Click here to go back to <a href='registration.php'>Registration</a></div>";
        }else{

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
			echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }        	
        }
    }else{
?>
<div class="form">
    <div class="container">

<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<p>Already have an account? <a href='login.php'>Log In Here</a></p>
<br /><br />
        <div class="copyright">
            <p class="text-center">&copy; 2019 <a href="#">Hiergraphics</a>. <br>All Rights Reserved.<br>Design
                by <a href="#" target="_blank">Bhavik Bhoir</a>.</p>
        </div>
</div>

</div>
<?php } ?>
</body>
</html>
