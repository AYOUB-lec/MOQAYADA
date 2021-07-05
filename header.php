<?php 


$row=$_SESSION['row'];?>

<div class="navbar">
        <div class="logo">
         <a href="index.php"><h2>Moqa<span><font>Yada</font></span></h2></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Accueill</a></li>
                <li><a href="productss.php">Produits</a></li>
                <?php 
                  if($var=="on")
                 echo "<li><a href='products.php'>Vos Produits</a></li>"; ?>  
                 <?php 
                  if($var=="on")
                 echo "<li><a href='message.php'>Chat</a> "; 
               if($row>0 and $var=="on")
               echo"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'  fill='blue' class='bi bi-bell' viewBox='0 0 16 16'>
                 <path d='M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z'/>
               </svg> <font color='blue'>$row</font> </li>" ; 
               ?>  
                <li><a href="#about">Infos</a></li>
                <li><a href="#about">Contactez-nous</a></li>
                <li><a href="accountt.php">compte</a></li>
                <?php  if($_SESSION['logout']=="on")
           echo "<a href='logout.php' style='margin-right: 10px;'>Logout</a>" ?>
            <?php if($var=="on")
                 echo "<li><a href='addPRODUCT.php'>Mettre en ligne</a></li>"; ?>  
            </ul>
        </nav>
      <?php  if($var=="on")
        echo "<a href='cart.php'><img src='images/cart.png' alt='' width='30px' height='30px' ></a>
        <img src='images/menu.png' onclick='menutoggle()' class='menu-icon' >" ?>
    </div>