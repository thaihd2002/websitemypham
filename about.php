<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section id="header">
        <a href="" class="logo"><img src="./img/logo.png" alt=""></a>
        
        <div>
            <ul id="navbar">
                <li><a  href="index1.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                
            </ul>
        </div>
        <div class="control">
        <a class="user"><strong><?php echo $_SESSION['username']; ?></strong> </a>
            <a href="./login/login.php">Log out</a>
        </div>

        <div class="mobile">
            <i class="user fa-solid fa-user"></i>
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">     
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet, consectertur</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="./img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labories nisi ut aliquiip ex ea commodo consequat. Duis auteirure dolor in reprehenderit in voluptate velit esse cillum dolore eu  fugiat nulla pariatur. Excepteur sint occaecat cuupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or litter control as you like thanks to a choice of Basic and Creative modes </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
     
    </section>

  
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="./img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f5.png" alt="">
            <h6>Happy sell</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    
    <section id="newletter" class="section-p1">
        <div class="newtext">
            <h4>Sign Up For Newsletters</h4>
            <p>GetE-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="./img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>                  
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Pricacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="./img/pay/app.jpg" alt="">
                <img src="./img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="./img/pay/pay.png" alt="">
        </div>      

        <div class="copyright">
            <p>@ 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script src="./scrip.js"></script>
</body>
</html>