<?php 


 
session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
	$var=check_product($con);





       $m_id=$_POST['m_id'];
    $m_id=$_POST['m_id'];
    mysqli_query($con,"update  message set etat='oui' where id='$m_id' ");
    header("location:message.php");
?>