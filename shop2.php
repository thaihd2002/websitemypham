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
        <link rel="stylesheet"
            href="./fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <section id="header">
            <a href="" class="logo"><img src="./img/logo.png" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="index1.php">Home</a></li>
                    <li><a class="active" href="shop.php">Shop</a></li>
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
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
        <section id="page-header2">
            <h2></h2>
            <p></p>
        </section>

        <!-- <section id="cart-wrap">
            <div class="cart-list">
                <h4><i class="fa-sharp fa-solid fa-cart-shopping"></i> Giỏ hàng</h4>
                <div class="cart-item">
                    <div class="product-list">
                        <div class="product-list-img"><img
                                src="./img/products/f1.jpg" alt=""></div>
                        <div class="product-info">
                            <h6>Cartoon Astronaut T-Shirts</h6>
                            <span>Số lượng:1</span>
                        </div>
                        <div class="product-price">
                            <span>$78</span>
                            <button class="normal">Xóa</button>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="product-list-img"><img
                                src="./img/products/f1.jpg" alt=""></div>
                        <div class="product-info">
                            <h6>Cartoon Astronaut T-Shirts</h6>
                            <span>Số lượng:1</span>
                        </div>
                        <div class="product-price">
                            <span>$78</span>
                            <button class="normal">Xóa</button>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="product-list-img"><img
                                src="./img/products/f1.jpg" alt=""></div>
                        <div class="product-info">
                            <h6>Cartoon Astronaut T-Shirts</h6>
                            <span>Số lượng:1</span>
                        </div>
                        <div class="product-price">
                            <span>$78</span>
                            <button class="normal">Xóa</button>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="product-list-img"><img
                                src="./img/products/f1.jpg" alt=""></div>
                        <div class="product-info">
                            <h6>Cartoon Astronaut T-Shirts</h6>
                            <span>Số lượng:1</span>
                        </div>
                        <div class="product-price">
                            <span>$78</span>
                            <button class="normal">Xóa</button>
                        </div>
                    </div>

                    <button class="normal"> Xem giỏ hàng</button>
                </div>
            </div>
            <form action="" class="search">
                <input type="text" placeholder="Search product">
                <button class="normal">Search</button>
            </form> -->

        </section>

         <section id="product1" class="section-p1 p-shop">
            <div class="p-category">
                <h4>Danh mục sản phẩm</h4>
                <ul class="category-list">
                    <li><a href="spbanchay.php">Bán chạy nhất</a></li>
                    <li><a href="hangmoive.php">Hàng mới về</a></li>
                    <li><a href="hanggiamgia.php">Hàng giảm giá</a></li>
                    <li>
                        <span>Sản Phẩm Trang Điểm</span>
                        <ul class="nav_menu">
                            <li><a href="xitkhoangam.php">Xịt Khoáng ẩm</a></li>
                            <li><a href="chikechanmay.php">Chì kẻ chân mày</a></li>
                            <li><a href="phantrangdiem.php">Phấn Trang Điểm</a></li>
                            <li><a href="kemtrangdiem.php">Kem Trang Điểm</a></li>
                        </ul>

                    </li>
                    <li>
                        <span>Sản Phẩm Chăm Sóc Da</span>
                        <ul class="nav_menu">
                            <li><a href="nuochoahong.php">Nước Hoa Hồng Dưỡng Ẩm</a></li>
                            <li><a href="sptreda.php">Bộ Sản Phẩm trẻ hoá làn da</a></li>
                            <!-- <li><a href="#">kem Dưỡng Trắng da </a></li>
                            <li><a href="#">Sản Phẩm bổ sung collagen</a></li> -->
                        </ul>

                    </li>
                    <li>
                       Sản Phẩm Hót !!!!!
                        <ul>
                            <li class="hot_pro"><a href="#">
                                <div class="hot_pro--img"><img  src="./anh/sphot/1.jpg" alt=""></div>
                                <span>Kem Dưỡng Trắng</span>
                            </a></li>
                        </ul>
                        <ul>
                            <li class="hot_pro"><a href="#">
                                <div class="hot_pro--img"><img  src="./img/products/f1.jpg" alt=""></div>
                                <span>Kem chống nắng</span>
                            </a></li>
                        </ul>
                        <ul>
                            <li class="hot_pro"><a href="#">
                                <div class="hot_pro--img"><img  src="./img/products/f1.jpg" alt=""></div>
                                <span>Kem thải độc tố trị nám</span>
                            </a></li>
                        </ul>
                        <ul>
                            <li class="hot_pro"><a href="#">
                                <div class="hot_pro--img"><img  src="./img/products/f1.jpg" alt=""></div>
                                <span>Tinh Chất Trắng da</span>
                            </a></li>
                        </ul>
                    
                    </li>
                </ul>

            </div> 
            <div class="pro-container">
                <div class="pro">
                    <img src="./anh/sanpham/32.jpg" alt="">
                    <div class="des">
                        <span>Thương Hiệu Khác</span>
                        <h5>Combo Son Dưỡng - Che Khuyết Điểm Môi -Son Thỏi</h5>
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
                    <img src="./anh/sanpham/31.png" alt="">
                    <div class="des">
                        <span>Thương Hiệu Khác</span>
                        <h5>Phấn Nước Lime Real Cover Pink Cushion</h5>
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
                    <img src="./anh/sanpham/13.png" alt="">
                    <div class="des">
                        <span>Cocoon</span>
                        <h5>Gel Rửa Mặt Cocoon Cà Phê Đắk Lắk 140ml</h5>
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
                    <img src="./anh/sanpham/26.jpg" alt="">
                    <div class="des">
                        <span>G9 Skin</span>
                        <h5>Xịt Khoáng Mặt Nạ G9-Skin Serum Moist</h5>
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
            <div class="pro-container">
                <div class="pro">
                    <img src="./anh/sanpham/27.jpg" alt="">
                    <div class="des">
                        <span>Thương Hiệu Khác</span>
                        <h5>Tinh Chất The Ordinary Hyaluronic Acid 2% + B5 30ml</h5>
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
                    <img src="./anh/sanpham/28.jpg" alt="">
                    <div class="des">
                        <span>Thương Hiệu Khác</span>
                        <h5>Son Shu Uemura Rouge Unlimited Matte - Minisize</h5>
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
                    <img src="./anh/sanpham/29.jpg" alt="">
                    <div class="des">
                        <span>Simple</span>
                        <h5>Nước Hoa Hồng Simple Kind To Skin Soothing Facial Toner 200ml</h5>
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
                    <img src="./anh/sanpham/30.jpg" alt="">
                    <div class="des">
                        <span>Thương Hiệu Khác</span>
                        <h5>Kem Chống Nắng Rohto Skin Aqua Tone Up</h5>
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

        <section id="pagination" class="section-p1" >
            <a href="shop.php" >1</a>
            <a href="shop2.php">2</a>
            <a href="#"><i class="fa-solid fa-right-long"></i></a>
        </section>
        <section id="newletter" class="section-p1">
            <div class="newtext">
                <h4>Sign Up For Newsletters</h4>
                <p>GetE-mail updates about our latest shop and <span>special
                        offers.</span></p>
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
                <p><strong>Address:</strong> 562 Wellington Road, Street 32, San
                    Francisco</p>
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