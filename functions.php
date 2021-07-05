<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			
			return $user_data;
		}
	}

	//redirect to login
	//header("Location: acountt.php");
	return 0;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

function check_product($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{   $user_data = mysqli_fetch_assoc($result);
			$_SESSION['id']=$user_data['id'];
			$_SESSION['nam']=$user_data['user_name'];
			$_SESSION['logout']="on";
		   $str="on";
           return $str;
		}
	}
	$_SESSION['nam']=" there";
	$_SESSION['logout']="off";
	$_SESSION['id']=-1;
     return  "off";

}