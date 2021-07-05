<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$_SESSION['test']="off";
 
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		//something was posted
		$user_name = $_GET['user_name'];
		$password = $_GET['password'];
		/*$rpw=$_POST['rpw'];
		if ($password!=$rpw){
		    $_SESSION['test']="on";
			header("location:accountt.php");

			exit;
		}
		$_SESSION['test']="off";*/

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			
			$user_id = random_num(20);
			$query = "insert into users  values (' ','$user_name','$password',NOW(),'$user_id')";

			mysqli_query($con, $query);

			header("Location: accountt.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

