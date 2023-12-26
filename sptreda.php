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
            <a class="user"><strong><?php echo $_SESSION['username']; ?></strong> </a>
            <a href="./login/login.php">Log out</a>
            </div>

            <div class="mobile">
                <i class="user fa-solid fa-user"></i>
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
    <style>
#header {
display: flex;
justify-content:space-evenly;
align-items: center;
padding: 20px 80px;
background-color: #E3E6F3;
box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
z-index: 999;
position: sticky;
top: 0;
left: 0;
}
#navbar {
display: flex;
justify-content: center;
align-items: center;
}

#navbar li {
list-style: none;
padding: 0 20px;
position: relative;
}

#navbar li a,
.control a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3 ease;
}

#navbar li a:hover,
#navbar li a.active {
    color: #088178;
}

#navbar li a.active::after,
#navbar li a:hover::after,
#navbar .control p:hover::after {
    content: "";
    position: absolute;
    width: 30%;
    height: 2px;
    background-color: #088178;
    bottom: -4px;
    left: 20px;
}
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');
        *{
            padding:0;
            margin:0;
        }
        body{
              font-family:'Open Sans',sans-serif;
              font-size:14px;
              color:#111;
              line-height:1.15;
        }
       
        #wrap{
            max-width: 1170px;
            margin: 0 auto;
        }
        .headline{
            text-align:center;
            margin:40px 0px;
        }
        h3{
            font-size:18px;
            color:#111;
            padding:10px 20px;
            text-transform:uppercase;
            border:1px solid #bebebe;
            display:inline-block;
            color:#555;
            font-weight:800;
        }
        ul.products{
            list-style: none;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
        }
        ul.products li{
            flex-basis:25%;
            padding-left:15px;
            padding-right:15px;
            box-sizing:border-box;
            margin-bottom:30px;
        }
        ul.products li img{
            max-width:100%;
            height:auto;
        }
        ul.products li .product-top{
            position:relative;
            overflow:hidden;
        }
        ul.products li .product-top .product-thumb{
            display:block;
        }
        ul.products li:hover .product-top .product-thumb img{
            filter:opacity(100%);
        }
        ul.products li .product-top .product-thumb img{
            display:block;
        }
        ul.products li .product-top a.buy-now{
            text-transform:uppercase;
            text-decoration:none;
            text-align:center;
            background-color: #446084;
            display:block;
            color:#fff;
            padding:10px 0px;
            position:absolute;
            bottom:-36px;
            width:100%;
            transition:0.25s ease-in-out;
            opacity:0.85;

        }
        ul.products li:hover a.buy-now{
            bottom:0px;

        }
        ul.products li .product-info{
            padding: 10px 0px;
        }
        ul.products li .product-info a{
            display:block;
            text-decoration:none;
        }
        ul.products li .product-info a.product-cat{
            font-size:11px;
            color:#9e9e9e;
            text-transform:uppercase;
            padding:3px 0px;
        }
        ul.products li .product-info a.product-name{
            color:#334862;
            padding:3px 0px;

        }
        ul.products li .product-info .product-prince{
            color:#111;
            padding: 2px 0px;
            font-weight:800;

        }
    </style>
    <div id="wrapper">
        <div class="headline">
            <h3>Phấn Trang Điểm</h3>
        </div>
        <ul class="products">
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/1.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Kem Dưỡng Bioderma Cicabio Soothing Repairing Cream 40ml</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/2.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Mặt Nạ Giấy Banobagi Super Collagen Mask</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/3.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Tinh Chất Sur.Medic Super Glutathione</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/4.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Huyết Thanh Cấp Ẩm Và Phục Hồi Re:P Nutrinature</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/7.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Tinh Chất GoodnDoc Hydra B5 Serum 30ml</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/5.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 

                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Tinh Chất Kyung Lab Cấp Ẩm, Phục Hồi Da HA Plus HA+B5 50ml</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/8.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Tinh Chất Dưỡng AHC Capture Solution Signature 50ml</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sptreda/6.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">Thương Hiệu Khác</a>
                    <a href="" class="product-name">Chấm Mụn Derladie Tràm Trà Khô Cồi Sau 72H Herbal Ampoule For Blemish 10ml</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>