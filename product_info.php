
<?php 

 
session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
	$var=check_product($con);

    $product_id=$_POST['pro_id']


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_info.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>


<div id="test">
    <?php 
    echo"<h2 style='text-align:center'>Product Card</h2>";
     echo "<div class='card'>";
      $result=mysqli_query($con,"select * from user_products where product_id='$product_id' ");
      $row=mysqli_fetch_array($result);
      echo "<img  src='{$row['image']}' alt='Denim Jeans' style='width:50%'>";
      echo "<h1 style='position:relative;margin-left:80px;color:white'>{$row['designation']}</h1>";
      echo "<p style='position:absolute;top:300px;left:730px;font-size:x-large;color:lightblue'>{$row['description_p']}</p>";
      echo" </div>";
    
    ?>
    <a href="productss.php"><span id="x">X</span> </a> 
</div>
</body>
</html>