
<?php

session_start();

include("inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Form Page </title> 
     <link rel="stylesheet" href="style.css"> 
        <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>
    </head>
<style>
    
#btn_login {
    background-repeat: no-repeat;
    
}

</style>
    <body class="login_page">

        <section id="header">
            <a href="index.php"><img src="UrbanImg/logo.png" alt="" width="200px"></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <li id="lg-log"><a href="#"><i class="fa-solid fa-user"></i></a></li>
                    <a href="#" id="close"><i class="fa fa-times"></i></a>
    
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                <a href="#"><i class="fa-solid fa-user"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
       

        <section class="section-m1">
            <div class="center">
        <form id="login_form" action="" method="post"  enctype="multipart/form-data">
            
            <h2>Sign Up</h2>
        
                <div class="txt_field">
                    <input type="text" name="c_name" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="email"  name="c_email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="c_pass" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Confirme Password</label>
                </div>
                <div class="txt_field">
                    <input type="text"  name="c_country" required>
                    <span></span>
                    <label>Country</label>
                </div>
                <div class="txt_field">
                    <input type="text"  name="c_city" required>
                    <span></span>
                    <label>City</label>
                </div>
                <div class="txt_field">
                    <input type="text"  name="c_address" required>
                    <span></span>
                    <label>Address</label>
                </div>
            <button id="btn_login" type="submit" name="signup">Signup</button>
            <div class="signup_link">
               Aleardy a member? <a href="login.php">Login</a>
            </div>
        </form>    
    </div>
       

    <div id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address">
            <button class="normal">Sign Up</button>
        </div>
    </div>
    </section>
    
    <?php include 'inc/footer.php'?>


    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST['signup'])){

$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_pass = $_POST['c_pass'];
$c_country = $_POST['c_country'];
$c_city = $_POST['c_city'];
$c_address = $_POST['c_address'];

$get_email = "select * from customers where customer_email='$c_email'";
$run_email = mysqli_query($con,$get_email);
$check_email = mysqli_num_rows($run_email);

if($check_email == 1){
echo "<script>alert('This email is already registered, try another one')</script>";
exit();
}

$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_address) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_address')";
$run_customer = mysqli_query($con,$insert_customer);

if($run_customer == 1){
echo "<script>alert('You have been Registered Successfully')</script>";
echo "<script>window.open('index.php','_self')</script>";
}
}
}
?>