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
          
                <li><a class="active" href="index1.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              
            </ul>
        </div>
        <div class="control">
        <a href="cart.php" class="user"><strong><?php echo $_SESSION['username']; ?></strong> </a>
            <a href="./login/login.php">Log out</a>
        </div>
        <div class="mobile">
            <i class="user fa-solid fa-user"></i>
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
   <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <!-- <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button> -->
        </div>
        <div class="banner-box banner-box2">
            <!-- <h4>spring/summer</h4>
            <h2>uncomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button> -->
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <!-- <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3> -->
        </div>

        <div class="banner-box banner-box2">
            <!-- <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring/Summer 2022</h3> -->
        </div>

        <div class="banner-box banner-box3">
            <!-- <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3> -->
        </div>
    </section> 

    <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>New delicious and cheap summer collection</p>
    <div class="pro-container">
        <div class="pro">
            <img src="./anh/sanpham/1.jpg" alt="">
            <div class="des">
                <span>Thương Hiệu Khác</span>
                <h5>Mặt Nạ Giấy Mediheal Mask Sheet 27ml</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="./anh/sanpham/2.jpg" alt="">
            <div class="des">
                <span>Missha</span>
                <h5>Phấn Nước Missha Velvet Cushion 15gr</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>

        </div>
        <div class="pro">
            <img src="./anh/sanpham/3.jpg" alt="">
            <div class="des">
                <span>Thương Hiệu Khác</span>
                <h5>Kem Chống Nắng Cell Fusion C Brightening Tone-Up SPF50+/PA++++ 50ml</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="./anh/sanpham/4.jpg" alt="">
            <div class="des">
                <span>Cocoon</span>
                <h5>Mặt Nạ Bí Đao Cocoon Winter Melon Face Mask 30ml</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>

        </div>
        <div class="pro">
            <img src="./anh/sanpham/5.jpg" alt="">
            <div class="des">
                <span>Thương Hiệu Khác</span>
                <h5>Kem Nền Catrice HD Liquid Coverage Foundation</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>

        </div>
        <div class="pro">
            <img src="./anh/sanpham/6.jpg" alt="">
            <div class="des">
                <span>Thương Hiệu Khác</span>
                <h5>Phấn Nước Trang Điểm April Skin Ultra Slim Cushion SPF50+/PA+++ 15gr</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>

        </div>
        <div class="pro">
            <img src="./anh/sanpham/7.jpg" alt="">
            <div class="des">
                <span> Thương Hiệu Khác</span>
                <h5>Mặt Nạ Giấy Banobagi Vita Jelly Mask 30ml</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>

        </div>
        <div class="pro">
            <img src="./anh/sanpham/8.jpg" alt="">
            <div class="des">
                <span>Thương Hiệu Khác</span>
                <h5>Dung Dịch Loại Bỏ Mụn Obagi Medical Salicylic Acid 2% Acne Treatment 148ml</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>  
            </div>            
           <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>

        </div>
     

    </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Products On Sale</h4>
        <h2>Up to <span>70%Off</span></h2>
        <button class="normal"> Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Products with the most purchases</h2>
        <p>==================</p>
        <div class="pro-container">
            <div class="pro">
                <img src="./anh/sanpham/9.jpg" alt="">
                <div class="des">
                    <span>Thương Hiệu Khác</span>
                    <h5>Nước Cân Bằng Klairs Supple Preparation</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/10.jpg" alt="">
                <div class="des">
                    <span>Cocoon</span>
                    <h5>Tẩy Da Chết Mặt Cà Phê Đắk Lắk Cocoon Coffee Face Polish 150ml/h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/11.jpg" alt="">
                <div class="des">
                    <span>Cocoon</span>
                    <h5>Son Dưỡng Dầu Dừa Bến Tre Cocoon 5gr</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/12.jpg" alt="">
                <div class="des">
                    <span>Thương Hiệu Khác</span>
                    <h5>Bông Tẩy Trang Cotton Ipek Cotton Pads 130 Miếng</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/17.jpg" alt="">
                <div class="des">
                    <span>Thương Hiệu Khác</span>
                    <h5>Bông Tẩy Trang Cotton Towel Cotton Pads 100Pcs</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/14.jpg" alt="">
                <div class="des">
                    <span>Thương Hiệu Khác</span>
                    <h5>Bông Tẩy Trang Cotton Ipek Cotton </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/15.jpg" alt="">
                <div class="des">
                    <span>Thương Hiệu Khác</span>
                    <h5>Son Kem Lì Black Rouge Double Layer Over Velvet 4.1gr</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
            <div class="pro">
                <img src="./anh/sanpham/16.jpg" alt="">
                <div class="des">
                    <span>Thương Hiệu Khác</span>
                    <h5>Son Kem Lì Merzy Noir In The Mellow Tint 4gr</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>  
                </div>            
               <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    
            </div>
         
    
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