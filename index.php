<?php include "inc/db.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web porject</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="backend.css">
    <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>
</head>
<body id="body" onload="changeImage()">
   
<?php include 'inc/topline.php';?>

<section id="header">
        <a href="index.php"><img src="UrbanImg/logo.png" alt="" width="200px"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a id="lg-log"href="login.php"><i class="fa-solid fa-user"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
</section>

<section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up 70% off! </p>
        <button id="btn_hero" onclick="window.location.href='shop.php';">Shop Now</button>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>

    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
        <?php 
        $query = "SELECT * FROM products";

        if ($result = $con->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["product_id"];
                $field2name = $row["date"];
                $field3name = $row["product_title"];
              
                $field5name = $row["product_img1"]; 
                $field6name = $row["product_img2"]; 
                $field7name = $row["product_img3"]; 
                $field8name = $row["product_img4"];
                $field9name = $row["product_img5"];  
                $field10name = $row["product_price"]; 
                $field11name = $row["product_desc"]; 
                
                echo"<div class='pro'  onclick=\"window.location.href='sproduct.php?id=".$field1name."'\">
                <img src='".$field5name."' alt='tt'>
                   <div class='des'>
                    <span>adidas</span>
                     <h5>".$field3name."</h5>
                       <div class='start'>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                       </div>
                       <h4>".$field10name." MAD</h4>
                   </div>
                   <a href=''><i class='fa fa-cart-shopping cart'></i></a>
                </div>";
            }
        }
     ?>     
    </div>
</section>            

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span> 70% Off </span> - All t-Shirts & Accessoires</h2>
        <button class="normal">Explore More</button>
    </section>
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>New COLLECTION</h2>
            <h3>Spring / Summer 2023</h3>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address">
            <button class="normal">Sign Up</button>

            
            <?php include 'inc/footer.php';?>