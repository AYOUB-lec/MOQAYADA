<?php 

 
session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
	$var=check_product($con);




?>
<?php
  if(isset($_POST['submit_p'])){
    $pro_id=$_POST['pro_id'];
     mysqli_query($con,"insert into panier select * from user_products where product_id='$pro_id'");
     mysqli_close($con);
     header("location:cart.php");
 }

?>



<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HayDora||Troc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
     
    
    <div class="container">
    <?php
    include('header.php');?>
</div>
<!--featured categories-->
<center>
<form  method="POST">
<select style="border-radius: 10px; background-color : orange ; border-color:orange" name="trier" >
      <option value="DATE">Date</option>
      <option value="category">Category</option>
</select>
<input type="submit" style="width: 120px;" class="btn" name="tri">
</form></center>
<center>
<table border="0" cellpadding=10  width=80% >
   <tr> 
    <th colspan="2" style="background-color:orange ;" > <center><H2>All products</H2></center> </th>
    
</tr>

<?PHP  
if(isset($user_data['id'])){


     $result=0;
     $id=$user_data['id'];
    if(isset($_POST['tri'])){
        if($_POST['trier']=="DATE")
        $result=mysqli_query($con,"select * from user_products where user_id != '$id' order by date_aj");
        else 
        $result=mysqli_query($con,"select * from user_products where user_id != '$id' order by CAT");
    }
    else{
        $result=mysqli_query($con,"select * from user_products where user_id != '$id' order by date_aj");

    }
   if ($result===0){
              echo "no products to be shown";
   }
   else {
   while($row = mysqli_fetch_row($result) ){
       $image=$row['2'];
       $desc=$row['4'];
       $name=$row['3'];
       $width="200";                                                                    
       $height="200";
       $owner_name=$row['5'];
       $user_id=$row['1'];
       $product_id=$row['0'];   
       echo "<tr  >
             <td rowspan=2> 
             <form method='POST' action='product_info.php'>
             <center><button style='border:none;cursor:pointer;' type='submit' name='product_info'><input type='hidden' name='pro_id'  value='$product_id'><img src='$image' width=$width height=$height style='border-radius: 30px;'></button></center><br>
             <center> </form>
             <form style='width : 200px ;'  method='POST'><input type='hidden' name='pro_id'  value='$product_id'><button type='submit' class='btn btn-primary'  name='submit_p' >Ajouter au panier</button></form>
             <form style='width : 220px ;' action='send.php' method='POST'><input type='hidden' name='owner_id'  value='$user_id'><input type='hidden' name='owner_name'  value='$owner_name'><input type='hidden' name='pro_id'  value='$product_id'><button type='submit' class='btn btn-primary'  name='submit_p' >Envoyer un message</button></form>
             </center>
             </td> <td> <center>
             <h2>$owner_name</h2> <br>
              </center>
             </td></tr> <tr><td>  <center>
             <h3>$name</h3>
             <p>$desc</p></center>
           </td> </tr> </br> ";
   }
mysqli_close($con);
}}
else
{
    $result=0;
   if(isset($_POST['tri'])){
       if($_POST['trier']=="DATE")
       $result=mysqli_query($con,"select * from user_products  order by date_aj");
       else 
       $result=mysqli_query($con,"select * from user_products  order by CAT");
   }
   else{
       $result=mysqli_query($con,"select * from user_products order by date_aj");

   }
  if ($result===0){
             echo "no products to be shown";
  }
  else {
  while($row = mysqli_fetch_row($result) ){
      $image=$row['2'];
      $desc=$row['4'];
      $name=$row['3'];
      $width="200";                                                                    
      $height="200";
      $owner_name=$row['5'];
      $user_id=$row['1'];
      $product_id=$row['0'];   
      echo "<tr  >
            <td rowspan=2> 
            <center><img src='$image' width=$width height=$height style='border-radius: 30px;'> </center><br>
            </td> <td> <center>
            <h2>$owner_name</h2> <br>
             </center>
            </td></tr> <tr><td>  <center>
            <h3>$name</h3>
            <p>$desc</p></center>
          </td> </tr> </br> ";
  }
mysqli_close($con);
}}   

?>
</table></center>
<!--featured products-->

<!--offer-->

<!--footer-->
<div id="about" class="footer">
    <div class="container">
        <div class="row">
      <div class="footer-col-1">
          <h3>telechargez notre application</h3>
          <p> MOQAYADA
              </p>
              <div class="app-logo">
                  <img src="images/play-store.png" alt="">
                  <img src="images/app-store.png" alt="">
              </div>
      </div>
      <div class="footer-col-2">
        <a href="index.php">  <h2>Moqa<span><font color="red">Yada</font></span></h2></a>
        <p>La meilleure application de troc en ce moment <br>
            </p>
    </div>
    
    <div class="footer-col-4">
        <h3>Follow Us</h3>
        <ul>
            <p style="color:blueviolet">mo9ayada</p>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
        </ul>
        </div>
    </div>
    <hr>
    <p class="copyright">Copyright Projet Langage De Script </p>
    </div>
</div>
<!--js for toggle menu-->
<script src="script.js"></script>
</body> 
</html>