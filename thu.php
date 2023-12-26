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
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
	<header>
		<!-- Thêm nội dung khối header -->
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
            <a class="user"><strong><?php echo $_SESSION['username']; ?></strong> </a>
            <a href="./login/login.php">Log out</a>
            </div>

            <div class="mobile">
                <i class="user fa-solid fa-user"></i>
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
	</header>

	<main>
		<!-- Thêm nội dung chi tiết sản phẩm ở đây -->
	<div>
		<img src="./anh/sanpham/2.jpg" alt="Hình ảnh sản phẩm">
	</div>
	<div>
        
		<h1>Phấn Nước Missha Velvet Cushion 15gr</h1>
		<p>
            - Chống oxi hóa cho môi mềm mại, mượt mà.<br>
            - Giúp các tế bào chết bong tróc được hòa tan và làm sạch một cách nhẹ nhàng trong đêm.<br>
            - Giảm tình trạng da khô, bong tróc và nứt nẻ.<br>
            - Chứa nhiều dưỡng chất và vitamin giúp môi luôn được cấp ẩm, khỏe mạnh.<br>
            - Làm sạch những tế bào chết trên môi trong thời gian ngủ.</p>
		<ul>
			<li>Tính năng 1</li>
			<li>Tính năng 2</li>
			<li>Tính năng 3</li>
		</ul>
	</div>

	</main>

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

</body>
</html>
<style>
    /* Định dạng phần tử khối header */
/* header {
	background-color: #333;
	color: #fff;
	padding: 10px;
} */

/* Định dạng phần tử khối main */
main {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin: 50px;
}

/* Định dạng phần tử hình ảnh sản phẩm */
main img {
	width: 300px;
	height: auto;
	margin-right: 50px;
}

/* Định dạng phần tử thông tin sản phẩm */
main div:last-child {
	flex: 1;
}

/* Định dạng phần tử nút mua hàng */
/* main button {
	background-color: #ff9900;
	color: #fff;
	border: none;
	padding: 10px 20px;
	font-size: 16px;
	cursor: pointer;
} */

</style>
