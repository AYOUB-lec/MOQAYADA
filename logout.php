<?php

session_start();
$_SESSION['nam']="there";
$_SESSION['logout']="off";

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	
    
}

header("Location: index.php");
die;