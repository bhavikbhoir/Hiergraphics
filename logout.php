<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
ob_start();	
header("Location:index.php"); // Redirecting To Home Page
echo ob_get_clean();
}
?>
