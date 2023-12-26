<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
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
            <h3>Sản Phẩm Bán Chạy</h3>
        </div>
        <ul class="products">
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/1.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/2.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/3.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/4.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/5.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/6.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/7.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
            <li>
                <div class="product-iteam">
                   <div class="product-top">
                    <a href="" class="product-thumb">
                       <img src="anh/sanpham/8.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    <!-- mua ngay -->
                   </div> 
                   <div class="product-info">
                    <a href="" class="product-cat">1.Bags</a>
                    <a href="" class="product-name">2.thử thôi</a>
                    <div class="product-prince">2.9999$</div>
                   </div>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>