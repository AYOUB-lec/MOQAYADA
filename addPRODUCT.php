<?php 
session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
  if(isset($_POST['submit'])){   
    $desc=$_POST['desc'];
    $user_id=$user_data['id'];
    $user_name=$user_data['user_name'];
    $product_name=$_POST['product_name'];
    $image= "images/".$_POST['image'] ;
    $cat=$_POST['cat'];
    mysqli_query($con,"insert into user_products values(' ','$user_id','$image',' $product_name','$desc','$user_name',NOW(),'$cat')");
    mysqli_close($con);
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<div class="container">  
  <form id="contact"  method="POST" >
    <h3>Ajouter un produit <?php echo $user_data['user_name']; ?></h3>
    <h4>Entrez la description de votre produit</h4>
    <fieldset>
      <input placeholder="product name" type="text" name="product_name" tabindex="4" required>
     
    </fieldset>
    <fieldset>
      <label for="ig"></label>
     <input  type="file" name="image" id="ig"  required>
    </fieldset>
    <fieldset>
    <select name="cat" >
      <option value="clothes">clothes</option>
      <option value="electronic">electronic</option>
      <option value="decoration">decoration</option>
      <option value="vehicles">vehicles</option>
    </select>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type a short description...." tabindex="5" rows="1" cols="20" name="desc" required></textarea>
    </fieldset>
    <fieldset>
      
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
  
</div>
</body>
</html>