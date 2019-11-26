<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
ob_start();	
header("Location:index.html"); // Redirecting To Home Page
echo ob_get_clean();
}
?>