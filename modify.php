<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con); 
  $pid=$_POST['pro_id'];   

  $id=$user_data['id'];
  $result=mysqli_query($con,"select * from user_products where user_id='$id' and product_id='$pid'");
 while($row = mysqli_fetch_row($result)){
   $image=$row['2'];
   $desc=$row['4'];
   $name=$row['3'];
   $cat=$row['7'];
}
mysqli_close($con);

?> 
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="css/modify.css">
</head>
<body>
<div style="margin-top: 10%;box-shadow: 2px 2px;" class="form-style-6">
<h1>Modifier Le Produit</h1>
<form method="POST" action="test.php">
<h3 style="color: black;font-weight:lighter"> Modifier L'image</h3> 
<input  type="file" name="image" id="ig" value="<?php echo $image; ?>" required>
<input type="hidden" name="pro_id2" value="<?php echo $pid; ?>">

<br>
<input placeholder="pname" type="text" value="<?php echo $name; ?>" name="pname"  required>

<select name="cat">
      <option value="<?php echo $cat;?>"><?php echo $cat; ?></option>      
      <option value="clothes">clothes</option>      
      <option value="electronic">electronic</option>
      <option value="decoration">decoration</option>
      <option value="vehicles">vehicles</option>
    </select>
<textarea name="desc" rows="1" cols="20" ><?php echo $desc; ?></textarea>
<input type="submit" name="submit" value="modify" />
</form>
</div>
</body>
</html>
