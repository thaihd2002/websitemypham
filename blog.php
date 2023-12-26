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
                <li><a class="active" href="blog.php">Blog</a></li>
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

    <section id="page-header" class="blog-header">     
        <h2></h2>
        <p></p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="./anh/blog/locon.jpg" alt="">
            </div>
            <div class="box-details">
                <h4>Son Môi Innisfree Có Chì Không?</h4>
                <p>Nếu bạn là một cô nàng đam mê skincare theo xu hương “khoa học hoá”, nếu bạn yêu thích sự tối giản – giống như tôi, thì The Ordinary là một thương hiệu dành cho bạn! Serum dưỡng da căn bóng “thần thánh” The Ordinary Alpha Arbutin 2% + HA Serum sẽ trả lại cho bạn làn da bóng khỏe chỉ sau vài tuần sử dụng sản phẩm.</p>
                <a href="#">CONTINUE READING</a>
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="./anh/blog/docsach.jpg" alt="">
            </div>
            <div class="box-details">
                <h4>Top 5 Cách Vừa Làm Đẹp Da, Vừa Phòng Ngừa Dịch Bệnh “Cô Výt”</h4>
                <p>Bí quyết vừa giúp làm đẹp da lại phòng ngừa dịch bệnh "Cô Výt" hữu hiệu, cùng nhau tìm hiểu và khám phá trong bài viết ngay sau đây!...</p>
                <a href="#">CONTINUE READING</a>
            </div>      
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="./anh/blog/kemat.jpg" alt="">
            </div>
            <div class="box-details">
                <h4>Có Bao Giờ Bạn Nghe Đến Phấn Mắt Của Maybelline Chưa? Điểm Qua Các Loại Phấn Mắt Maybelline</h4>
                <p>Phấn mắt Maybelline nay đã có mặt trên kệ của Beauty Garden và đang được chị em mình tin dùng rất nhiều. Bạn đã biết gì về phấn mắt Maybelline và có các loại phấn mắt Maybelline nào? Hãy cùng shop tham khảo bài viết sau đây nhé....</p>
                <a href="#">CONTINUE READING</a>
            </div>
        
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="./anh/blog/mat.jpg" alt="">
            </div>
            <div class="box-details">
                <h4>3 Cách Trang Điểm Mắt Một Mí Thành Hai Mí Tự Nhiên Mà Không Cần Đụng Đến Dao Kéo</h4>
                <p>Ngày nay, do quá tự ti với đôi mắt một mí nên không ít người đã đến thẩm mỹ viện để cắt mắt hai mí. Điều này không chỉ gây đau, tổn hại vùng da mắt mà còn tiềm ẩn nguy cơ mù mắt do một số cơ sở không có chuyên môn thực hiện. Vậy làm thế nào để “biến” mắt một mí thành hai mí mà không cần đụng đến dao kéo? Beauty Garden sẽ chỉ cho các bạn 3 cách trang điểm mắt một mí thành hai mí “nhanh như chớp”....</p>
                <a href="#">CONTINUE READING</a>
            </div>
           
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="./anh/blog/moi.jpg" alt="">
            </div>
            <div class="box-details">
                <h4>Top 5 Dòng Son Màu Đỏ Cam Hàn Quốc “Đốn Gục” Tín Đồ Mê Son</h4>
                <p>Son Hàn có rất nhiều loại với nhiều bảng khác nhau, để chọn cho mình một thỏi son ở Hàn không khó nhưng phải biết lựa chọn sao cho hợp ý với mình. Dạo một vòng xem có những loại son nào nha....</p>
                <a href="#">CONTINUE READING</a>
            </div>
            
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="./anh/blog/goidau.jpg" alt="">
            </div>
            <div class="box-details">
                <h4>Cách Làm Mặt Nạ Sữa Tươi Nha Đam Đơn Giản Ngay Tại Nhà</h4>
                <p>Có vô vàn cách dưỡng da, làm trắng da hiệu quả với nha đam. Tuy nhiên, cách mà được các chị em tin tưởng nhiều nhất lại là công thức làm mặt nạ nha đam với sữa tươi. Vậy công thức làm mặt nạ sữa tươi như thế nào chuẩn nhất, tỉ lệ ra sao? Bài viết này sẽ hướng dẫn chi tiết cách thực hiện đắp nha đam sữa tươi làm trắng da toàn thân ngay tại nhà.....</p>
                <a href="#">CONTINUE READING</a>
            </div>
            
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-right-long"></i></a>
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