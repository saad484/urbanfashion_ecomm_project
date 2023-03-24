<?php
session_start();
include("inc/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forget password</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="backend.css">
  <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>
</head>
<body>
  

<style>


#form-details form button{
    background-color: #041e30;
    color: #fff;
    white-space: nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

#form-details input{
    height: 50px;
    padding: 0 20px;
    font-size: 14px;
    width: 30%;
    border: 1px solid ;
    border-radius: 4px;
    outline: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
</style>


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
        <h2>#Forget password</h2>
</section>

<section id="form-details" class="section-p1 section-m1">
    <form action="" method="post" name="forgot_pass">
      <h3>Enter Your Email Below</h3>
      <input type="email" name="c_email" placeholder="Your Email" >
      <button class="normal" type="submit" name="forgot_pass">Submit</button>
    </form>
</section>



<?php
include("inc/footer.php");
?>
</body>
</html>

<?php
if(isset($_POST['forgot_pass'])){

$c_email = $_POST['c_email'];

$sel_c = "select * from customers where customer_email='$c_email'";

$run_c = mysqli_query($con,$sel_c);

$count_c = mysqli_num_rows($run_c);

$row_c = mysqli_fetch_array($run_c);

$c_name = $row_c['customer_name'];

$c_pass = $row_c['customer_pass'];

if($count_c == 0){

echo "<script> alert('Sorry, We do not have your email') </script>";

exit();

}
else{

$message = "
<h1 align='center'> Your Password Has Been Sent To You </h1>

<h2 align='center'> Dear $c_name </h2>

<h3 align='center'>

Your Password is : <span> <b>$c_pass</b> </span>

</h3>

<h3 align='center'>

<a href=''>

Click Here To Login Your Account

</a>

</h3>

";

$from = "urbanfashion@gmail.com";

$subject = "Your Password";

$headers = "From: $from\r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_email,$subject,$message,$headers);

echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";

echo "<script>window.open('login.php','_self')</script>";

}

}

?>
