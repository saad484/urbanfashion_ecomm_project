<?php include "inc/db.php";
session_start();?>

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

  <!-- MAIN -->
 
<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->


<div class="col-md-12" ><!-- col-md-12 Starts -->

<?php
    if (!isset($_SESSION['customer_name'])) {
        echo '<script>window.open("login.php", "_self")</script>';
    } else {
        echo '<script>window.open("payment_options.php", "_self")</script>';
    }
?>





</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("inc/footer.php");

?>


</body>
</html>
