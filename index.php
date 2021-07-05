<?php
 
session_start();

	include("connection.php");
	include("functions.php");
    
	$var=check_product($con);
    $id_m=$_SESSION['id'];
    $result=mysqli_query($con,"select * from message where user_id='$id_m' and etat='non'");
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
         $_SESSION['row']=$row; 
         
        mysqli_free_result($result); 
    } 
  
    // Connection close  
    mysqli_close($con); 


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
    <div class="row">
        <div class="col-2">
            <h2>Troquer En Toute Securite<br>BARTER </h2>
            <p>
               Ce site web vous permet d'echanger||troquer des articles entre vous en toutes securite et comfort. <br>
               Allez-y qu'est-ce que vous attendez.Inscrivez-Vous 
            </p>
            <a href="productss.php" class="btn" >Explorez &#8594;</a>
           
            <?php  if(isset($_SESSION['nam']))
             echo  "Hello , ".$_SESSION['nam']; ?>
  <br>
  
  
           <div  style='min-height: 120px;'></div>
  
	
        </div>
        <div class="col-2">
           
            <img src="images/premiumlogo/main_image.png" style="width: 1000px; height: 400px;" alt="">
        </div>
    </div>
</div>
</div>
<!--featured categories-->
<!--offer-->
<div class="offer">
     <div class="small-container">
         <div class="row">
            <div class="col-2">
                 <img id="exclu" src="images/exclusive.png" class="offer-img" alt="">
                 
             
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
            <h3>Méliane Grace </h3>
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
                    <img src="images/salah.jpg" alt="">
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
    <p class="copyright">Copyright Projet Langage De Script  Lechkar ayoub , Salahddine Aoussar et Méliane Grace Lauréne AKPA</p>
    </div>
</div>
<!--js for toggle menu-->
<script src="script.js"></script>
</body> 
</html>
