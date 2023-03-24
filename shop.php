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
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li id="lg-log"><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
</section>

    <section id="page-header">
        <h2>#Welcome to our Shop page</h2>
        <p>Save more with coupons & up 70% off! </p>
    </section>



    <section id="product1" class="section-p1">
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


    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
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