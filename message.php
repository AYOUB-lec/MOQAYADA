<?php
 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

        $var=check_product($con);
    
    
    
    

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

<center>
<table border="0"  width=80% >
   <tr> 
    <th  style="background-color:orange ;" > <center><H2>Messages</H2></center> </th>
    
</tr>


<?PHP
   $user=$user_data['user_name'];
   $result=mysqli_query($con,"select * from message where sender != '$user' and user_name='$user' and etat='non'");
   while($row = mysqli_fetch_row($result)){
        $m_id=$row[0];
        $sender=$row[3];
        
        
        $date=$row[5];
        $body=$row[4];
        $sql=mysqli_query($con,"select * from users where user_name ='$sender'");
        while($req = mysqli_fetch_row($sql)){

    
        $user_id=$req[0];
        $user_name=$req[1];
       echo "<tr>
             <td> 
             <center><h2>$sender</h2>
             <h3>$date</h3>
             <p>$body</p>
             <form style='width : 220px ;' action='send.php' method='POST'><input type='hidden' name='response'  value='O'><input type='hidden' name='owner_id'  value='$user_id'><input type='hidden' name='m_id'  value='$m_id'><input type='hidden' name='owner_name'  value='$user_name'><button type='submit_r' class='btn btn-primary'  name='submit_m' >Repondre a $sender</button></form>
              </center><br>
             </td> </tr> <br>
             ";
        }
   }
   
mysqli_close($con);

?>

</table></center>

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