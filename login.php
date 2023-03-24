<?php include 'inc/db.php';
session_start();

if(isset($_SESSION['customer_name'])){
    echo '<script>window.open("index.php", "_self")</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Form Page </title> 
     <link rel="stylesheet" href="style.css"> 
        <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>
    </head>

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
        <form id="login_form" method="post">
            
            <h2>Login</h2>
        
                <div class="txt_field">
                    <input type="text" name="c_name" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="c_pass"required>
                    <span></span>
                    <label>Password</label>
                </div>
            <div class="pass"><a href="forgot_pass.php" style="text-decoration: none; color: #474551; margin: -5px 0 20px 5px;  display: flex; justify-content: center; ">Forgot Password?</a></div>
            <button id="btn_login" type="submit" name="login">Login</button>
            <div class="signup_link">
               Not a member? <a href="signup.php">signup</a>
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
if(isset($_POST['login'])){

$customer_name = $_POST['c_name'];
$customer_email = $_POST['c_name'];
$customer_pass = filter_var($_POST['c_pass'], FILTER_SANITIZE_STRING);

$select_customer = "select * from customers where customer_name='$customer_name' AND customer_pass='$customer_pass'";

$run_customer = mysqli_query($con,$select_customer);

$check_customer = mysqli_num_rows($run_customer);


if($check_customer==0){

    echo "<script>alert('password or Username is wrong')</script>";
    exit();
}else if($check_customer==1 && $customer_name == 'admin') {
    $_SESSION['customer_name']=$customer_name;
echo "<script>alert('You are Logged In')</script>";
echo "<script>window.open('admin_area/index.php','_self')</script>";
}
else {  
$_SESSION['customer_name']=$customer_name;
echo "<script>alert('You are Logged In')</script>";
echo "<script>window.open('index.php','_self')</script>";
} 
}
}
?>

