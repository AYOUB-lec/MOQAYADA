<?php 

 
session_start();

	include("connection.php");
	include("functions.php");
    
	$var=check_product($con);
    /*if($_SESSION['test']==="on")
	echo "<script>alert('retype the same password');</script>";*/

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous Les Produits || HayDora || Troc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <div class="container">
    <?php
    include('header.php');?>
    
</div>
<!-- Account  -->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/premiumlogo/main_image.png"  width="100%" alt="">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="Login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="login.php" method="GET">
                        <input type="text" placeholder="Username" name="user_name" required>
                        <input type="password" placeholder="Password" name="password" required >
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot password ?</a>
                    </form>
                    <form id="RegForm" action="signup.php" method="GET">
                        <input type="text" placeholder="Username" name="user_name" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <input type="password" placeholder="Retype the Password" name="rpw" required>
                        <button type="submit" class="btn">Register</button>
                        
                        
                     </form>
                </div>
            </div>
        </div>
    </div>

</div>



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
    <p class="copyright">Copyright Projet Langage De Script</p>
    </div>
</div>
<!--js for toggle menu-->
<script src="script.js"></script>
</body> 
</html>