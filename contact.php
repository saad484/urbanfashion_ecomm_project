<?php include "inc/db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="backend.css">
    <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>
</head>
<body>

<style>      
    /*About Page*/
        #page-header.about-header{
        background-image: url("img/about/banner.png");
    }
    #page-header.about-header h2 {
        color: #fff;
    }

    #page-header.about-header p {
        color: #fff;
    }

    #contact-details{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #contact-details .details{
        width: 40%; 
    }

    #contact-details .details span,
    #form-details form span{
        color: gray;
        font-size: 12px;
    }

    #contact-details .details h2,
    #form-details form h2{
        font-size: 26px;
        line-height: 35px;
        padding: 20px 0;  
    }
    #contact-details .details h3{
        font-size: 16px;
        padding-bottom: 15px;  
    }

    #contact-details .details li{
        list-style: none;
        display: flex;
        padding: 10px 0;
    }

    #contact-details .details li i{
        font-size:14px;
        padding-right: 22px;
    }
    #contact-details .details p{
        margin: 0;
        font-size:14px;

    }
    #contact-details .map{
        width: 55%;
        height: 400px;
    }
    #contact-details .map iframe{
        width: 100%;
        height: 100%;
    }

    #form-details{
        display: flex;
        justify-content:space-between;
        margin: 30px;
        padding: 80px;
        border: 1px solid #e1e1e1;
    }
    #form-details form{
        width: 65%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    #form-details form input,
    #form-details form textarea{
        width:100%;
        padding:12px 15px;
        outline: none;
        margin-bottom:20px;
        border: 1px solid #e1e1e1;
    }
    #form-details form button{
        background-color: #041e30;
        color: #fff;
    }


    @media (max-width: 477px) {

    #contact-details {
        flex-direction: column; 
    
    }
    #contact-details .details {
        width: 100%;
        margin-bottom:30px;
    }
    #contact-details .map {
        width: 100%;
    }
    #form-details {
    
        margin: 10px;
        padding: 30px;
        border: 1px solid #e1e1e1;
        flex-wrap:wrap;
    }
    #form-details form{
        width: 100%;
        margin-bottom: 30px;
    }
    }
</style>

<?php include 'inc/topline.php';?>
<section id="header">
 

        <a href="index.php"><img src="UrbanImg/logo.png" alt="" width="200px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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

<section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fa fa-map"></i>
                <p> 730 Harrison Rd.Prattville, AL 36067</p>
            </li>
            <li>
                <i class="fa fa-envelope"></i>
                <p>urbainfashion@2023.com</p>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <p>(+1) 202-918-2132</p>
            </li>
            <li>
                <i class="fa fa-clock"></i>
                <p>Monday to Saturday: 9.00am to 19.00pm</p>
            </li>
        </div>
    </div>
    <div class="map">
    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(urbanfashion)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
</section>

<section id="form-details">
    <form action="" method="post">
      <span>LEAVE A MESSAGE</span>  
      <h2>We love to hear from you</h2>
      <input type="text" placeholder="Your Name" name="name" required>
      <input type="text" placeholder="E-mail" name="email" required>
      <input type="text" placeholder="Subject" name="subject" required>
      <textarea  id="" cols="30" rows="10" placeholder="Your Message" name="message" ></textarea>
      <button class="normal" type="submit" name="submit">Submit</button>
    </form>

    <?php

if(isset($_POST['submit'])){

// Admin receives email through this code
if (isset($_SESSION['customer_name'])) {
$c_name = $_POST['name'];

$c_email = $_POST['email'];

$c_subject = $_POST['subject'];

$c_message = $_POST['message'];

$get_email = "select * from customers where customer_email='$c_email'";
$run_email = mysqli_query($con,$get_email);
$check_email = mysqli_num_rows($run_email);
if($check_email == 1){   
    $insert_customer = "insert into contact_us (contact_name,contact_email,contact_heading,contact_desc) values ('$c_name','$c_email','$c_subject','$c_message')";
    $run_customer = mysqli_query($con,$insert_customer);
   
    if($run_customer == 1){
        echo "<script>alert('Your commment have been Registered Successfully')</script>";
        }
}else{
    echo "<script>alert('wrong email!!!')</script>";
}
}else{
    echo "<script>alert('You must login befor')</script>";
    echo '<script>window.open("login.php", "_self")</script>';
}
}

?>


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


</body>
</html>