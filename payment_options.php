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

  
    <style>
    /* Container for the entire page */
    .container {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }

    /* Style for the heading */
    h1 {
        font-size: 36px;
        font-weight: bold;
        margin-top: 40px;
        color: #3498db;
        text-align: center;
    }

    /* Style for the "Pay Off Line" link */
    .lead {
        font-size: 18px;
        margin-bottom: 40px;
        text-align: center;
    }

    .lead a {
        text-decoration: none;
        color: #3498db;
        border: 1px solid #3498db;
        padding: 10px 20px;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
    }
    .lead a:hover{
        background-color: #3498db;
        color: #fff;
    }

    /* Style for the PayPal form */
    form {
        margin-top: 40px;
        text-align: center;
    }

    form input[type="image"] {
        width: 200px;
        height: auto;
    }

    /* Style for the PayPal image */
    input[type="image"] {
        width: 200px;
        height: auto;
        display: inline-block;
        margin: auto;
    }
</style>
</head>


<body id="body">

<?php include 'inc/topline.php';?>

    <section id="header">
        <a href="index.php"><img src="UrbanImg/logo.png" alt="" width="200px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li  id="lg-bag"><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
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

<?php

$session_name = $_SESSION['customer_name'];

$select_customer = "select * from customers where customer_name='$session_name'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

?>




<h1>Payment Options For You</h1>
<p class="lead text-center"><a  href="index.php?c_id=<?php echo $customer_id; ?>">Pay Off line</a></p>


<form action="https://www.paypal.com/ma/home" method="" target="">
  <input  type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
  <img alt=""  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"><br>
  <input type="image" name="submit" width="500" height="270" src="images/paypal.png" >
  </form>







<section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address">
            <button class="normal">Sign Up</button>
       <?php include 'inc/footer.php'?>