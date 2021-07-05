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
    <div class="navbar">
        <div class="logo">
        <a href="indexx.php">  <h2>Moqa<span><font color="red">Yada</font></span></h2></a>
        </div>
        <nav>
            <ul id="MenuItems">
            <li><a href="indexx.php">Accueill</a></li>
                <li><a href="products.php">Produits</a></li>
                <li><a href="#about">Infos</a></li>
                <li><a href="#about">Contactez-nous</a></li>
                <li><a href="account.php">compte</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" alt="" width="30px" height="30px" ></a>
        <img src="images/menu.png" onclick="menutoggle()" class="menu-icon" >
    </div>
    
</div>
<!-- single product details  -->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/gallery-1.jpg" alt="" id="ProductImg" width="100%">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/gallery-1.jpg" width="100%" alt="" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-2.jpg" width="100%" alt="" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-3.jpg" width="100%" alt="" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-4.jpg" width="100%" alt="" class="small-img">
                </div>
            </div>



        </div>
        <div class="col-2">
            <p>Accueill/T-Shirt</p>
            <h1>T-shirt rouge</h1>
            <h4>50.00 dhs</h4>
            <select name="" id="">
                <option value="">selectioner la taille</option>
                <option value="">XXL</option>
                <option value="">XL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Ajouter au panier</a>
            <h3>Details Du Produit <i class="fa fa-indent"></i>
            </h3>
            <br>
            <p>T-shirt Puma ultra comfort future is loading
                  </p>

        </div>
    </div>
</div>
<!-- title-->
<div class="small-container">
    <div class="row row2">
        <h2>suggestions</h2>
        <p>voir encore</p>
        
    </div>
</div>

 
<!--produits-->
<div class="small-container">
<div class="row">
        <div class="col-4">
            <img src="images/product-9.jpg" alt="">
            <h4>roadster watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"> </i>
                <i class="fa fa-star-o" ></i>    
            </div>
            <p>550.00 dhs</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg" alt="">
                <h4>black trainers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star-half-o" ></i>    
                </div>
                <p>800.00 dhs</p>
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg" alt="">
            <h4>medical gray trainers</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"> </i>
                <i class="fa fa-star-o" ></i>    
            </div>
            <p>1050.00 dhs</p>
    </div> 
    <div class="col-4">
        <img src="images/product-12.jpg" alt="">
        <h4>black nike pants</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o"> </i>
            <i class="fa fa-star-o" ></i>    
        </div>
        <p>599.00 dhs</p>
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