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

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">

            <?php 
            $product_id = $_GET['id'];

             $stmt = $con->prepare("SELECT * FROM products WHERE product_id = ?");
             $stmt->bind_param("i", $product_id);
             $stmt->execute();
             $result = $stmt->get_result();
         
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
              
              echo "
                <img src=".$field5name."  width='100%' id='MainImg' alt=''>
                <div class='small-img-group'>
                    <div class='small-img-col'>
                        <img src=".$field5name." width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src=".$field6name." width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src=".$field7name." width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src=".$field8name." width='100%' class='small-img' alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src=".$field9name." width='100%' class='small-img' alt=''>
                    </div>
                </div>
            </div>
            
            <div class='single-pro-details'>
                <h6>Home / T-Shirt</h6>
                <form action='cart.php' method='post'> 
                <h4 class='title-product'>".$field3name."</h4>
             <h2 class='price-product'>".$field10name." MAD</h2>
             <select name='size'>
                    <option>Select Size</option>
                    <option value='S' selected>S</option>
                    <option value='M'>M</option>
                    <option value='L'>L</option>
                    <option value='XL'>XL</option>
                    
                </select>
                <input type='number'name='quantity' value= '1'>
             
                <input type='hidden' name='product_id' value='".$product_id."'>
                <input type='hidden' name='product_img' value='".$field5name."'>
                <button class='normal' type='submit' name='add_to_cart'   onclick=window.open('cart.php','_SELF')>Add to Cart</button>
                <h4>Product Details</h4>
                <span class='desc-product'> ".$field11name."</span>             
                </form>
            ";
        }
        ?>
</div>
</section>



        <section id="product1" class="section-p1">
            <h2>Featured Pruducts</h2>
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

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address">
            <button class="normal">Sign Up</button>
       <?php include 'inc/footer.php'?>