<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<?php
  if(isset($_POST['submit_p'])){
    $pro_id=$_POST['pro_id'];
     mysqli_query($con,"insert into panier select * from user_products where product_id='$pro_id'");
     mysqli_close($con);
     header("location:indexx.php");
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
    <div class="navbar">
        <div class="logo">
         <a href="indexx.php"><h2>Moqa<span><font>Yada</font></span></h2></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="indexx.php">Accueill</a></li>
                <li><a href="products.php">Vos Produits</a></li>
                <li><a href="productss.php">Produits</a></li>
                <li><a href="#about">Infos</a></li>
                <li><a href="#about">Contactez-nous</a></li>
                <li><a href="message.php">Chat</a></li>
                <li><a href="account.php">compte</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" alt="" width="30px" height="30px" ></a>
        <img src="images/menu.png" onclick="menutoggle()" class="menu-icon" >
    </div>
    <div class="row">
        <div class="col-2">
            <h2>Troquer En Toute Securite<br>BARTER </h2>
            <p>
               Ce site web vous permet d'echanger||troquer des articles entre vous en toutes securite et comfort. <br>
               Allez-y qu'est-ce que vous attendez.Inscrivez-Vous 
            </p>
            <a href="products.php" class="btn" >Explorez &#8594;</a>
            Hello, <?php echo $user_data['user_name']; ?>
  <br>
	<a href="logout.php" class="btn">Logout</a>
        </div>
        <div class="col-2">
            <img src="images/premiumlogo/main_image.png" style="width: 1000px; height: 400px;" alt="">
        </div>
    </div>
</div>
</div>
<!--featured categories-->
<center>
<form  method="POST">
<select name="trier" >
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
             <center><img src='$image' width=$width height=$height style='border-radius: 30px;'> </center><br>
             <center> 
             <form style='width : 200px ;'  method='POST'><input type='hidden' name='pro_id'  value='$product_id'><button type='submit' class='btn btn-primary'  name='submit_p' >Ajouter au panier</button></form>
             <form style='width : 220px ;' action='send.php' method='POST'><input type='hidden' name='owner_id'  value='$user_id'><input type='hidden' name='owner_name'  value='$owner_name'><button type='submit' class='btn btn-primary'  name='submit_m' >Envoyer un message</button></form>
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
}
?>
</table></center>
<!--featured products-->

<!--offer-->
<div class="offer">
     <div class="small-container">
         <div class="row">
            <div class="col-2">
                 <img src="images/exclusive.png" class="offer-img" alt="">
            </div>
            <div class="col-2">
               <p>Produits exclusif sur notre site</p>
               <h1>Smat Brand 4</h1>
               <small>
               Essayez  la toute nouvelle smart watch extraordinaire
               </small>
               <br>
               <a href="" class="btn">Achetez maintenant &#8594</a>

            </div>

         </div>
     </div>
</div>
<!-- testimonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
            <p>
               Le service est extraordinaire ,if faudrait juste ameliorer la rapidité 
               de reponse du site.
            </p>
            <i class="fa fa-quote-left"></i>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o"> </i>
                <i class="fa fa-star-o" ></i>    
            </div>
            <img src="images/user-1.png" alt="">
            <h3>Jane Doe </h3>
            </div>
            <div class="col-3">
                <p>
                    Ce site qui ,vient de debarquer sur marcher, est vraiment entrain de realiser 
                    des folies. Travaillez encore le futur est a vous.Bravo à l'équipe.
                </p>
                <i class="fa fa-quote-left"></i>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o"> </i>
                    <i class="fa fa-star-o" ></i>    
                </div>
                <img src="images/user-2.png" alt="user2">
                <h3>Ayoub Lechkar</h3>
                </div>
                <div class="col-3">
                    <p>
                       Tres tres  bon travail .Rien a dire.
                    </p>
                    <i class="fa fa-quote-left"></i>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>

                   
                    </div>
                    <img src="images/AZZOUZ.jpg" alt="">
                    <h3>Salahddine Aoussar </h3>
                    </div>
        </div>
    </div>
</div>
<!--brands-->
<h2 class="title">Partenariats</h2>

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/jaouda.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/sultan.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/EL-KEF-Savon-citron-200G-X5-1.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/lesieur-professionnel.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/cosumar.gif" alt="">
            </div>
        </div>
    </div>
</div>
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
        <a href="indexx.php">  <h2>Moqa<span><font color="red">Yada</font></span></h2></a>
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
    <p class="copyright">Copyright Projet Langage De Script</p>
    </div>
</div>
<!--js for toggle menu-->
<script src="script.js"></script>
</body> 
</html>