<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con); 
  $pid=$_POST['pro_id'];     
   echo $pid;
  
?>
<?php
if(isset($_POST['submit'])){   
    $desc=$_POST['desc'];
    $product_name=$_POST['pname'];
    $image= "images/".$_POST['image'] ;
    $cat=$_POST['cat'];
    $p_id=$_POST['pro_id2'];
    echo $p_id;
    mysqli_query($con,"update user_products set image='$image' , description_p='$desc' , designation='$product_name' , CAT='$cat' where product_id='$p_id'");
    mysqli_close($con);
    header("location:products.php");
}
?>