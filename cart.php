<?php include "inc/db.php";
session_start();

if(isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity =  $_POST['quantity'];
    $size = $_POST['size'];
    $product_img =  $_POST['product_img'];
   
    
 if(isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(in_array($product_id, $item_array_id)) {
            echo '<script>alert("Product is already added to the cart")</script>';
            echo '<script>window.location="cart.php?id='.$product_id.'"</script>';
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $product_id,
                'quantity' => $quantity,
                'size' => $size,
                'img' => $product_img
            );
            $_SESSION['cart'][$count] = $item_array;
    
echo '<script>alert("Product is added to the cart")</script>';
echo '<script>window.location="cart.php?id='.$product_id.'"</script>';
}
} else {
$item_array = array(
    'product_id' => $product_id,
    'quantity' => $quantity,
    'size' => $size,
    'img' => $product_img
);
$_SESSION['cart'][0] = $item_array;
echo '<script>alert("Product is added to the cart")</script>';
echo '<script>window.location="cart.php?id='.$product_id.'"</script>';
}
}

if(isset($_GET['action'])) {
if($_GET['action'] == 'delete') {
foreach($_SESSION['cart'] as $keys => $values) {
if($values['product_id'] == $_GET['id']) {
unset($_SESSION['cart'][$keys]);
echo '<script>alert("Product is removed from the cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

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

#cart  table td{
   width: 50px;
}

    #cart table{
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        white-space: nowrap;
    }
    #cart table img{
        width: 70px;
    }
    #cart table td:nth-child(1){
        width: 20%;
        text-align: center;
    }
    #cart table td:nth-child(2){
        width: 30%;
        text-align: center;
    }
    
    #cart table td:nth-child(3){
        width:40%;
        text-align: center;
    }
    
    #cart table td:nth-child(4),
    #cart table td:nth-child(5),
    #cart table td:nth-child(6){
        width: 40%;
        text-align: center;
    }
    
    #cart table td:nth-child(5) input{
        width: 70px;
        padding: 10px 5px 10px 15px;        
    }  

    #cart table thead{
        border: 1px solid #e2e9e1;
        border-left: none;
        border-right: none;
    }
    #cart table thead td{
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        padding: 18px 0px;
    }
    #cart table tbody tr td{
        padding-top: 15px;
    }
    #cart table tbody td{
        font-size: 13px;
    }
    #cart-add{
      display: flex;
       flex-wrap: wrap;
       justify-content: space-between; 
    }
    #coupon{
        width: 50%;
        margin-bottom: 30px;
    }

    #coupon h3,
    #subtotal h3{
        padding-bottom: 15px;
    }
    #coupon input{
        padding: 10px 20px;
        outline: none;
        width: 60%;
        margin-right: 10px;
        border: 1px solid #e2e9e1;
    }
    #coupon button,
    #subtotal button{
        color: #fff;
        background-color: #041e30; 
        padding: 12px 20px;
    }

    #subtotal{
        width: 50%;
        margin-bottom: 30px;
        border: 1px solid #e2e9e1;
        padding: 30px;
    }
    #subtotal table{
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }
    #subtotal table td{
        width: 50%;
        border: 1px solid #e2e9e1;
        padding: 10px;
        font-size: 13px;
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
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
        <h2>#Your Cart</h2>
        <p>Review Your Purchases and Checkout</p>
    </section>


<section id="cart" class="cart section-p1">
<table width="100%">
    <thead>
        <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Size</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
    </thead>
    <tbody>
    <?php
     $total = 0;

                if(!empty($_SESSION['cart'])) {
                   
                    foreach($_SESSION['cart'] as $keys => $values) {
                        $subtotal = 0;
                        $stmt = $con->prepare("SELECT * FROM products WHERE product_id = ?");
                        $stmt->bind_param("i", $values['product_id']);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while($row = $result->fetch_assoc()) {
                            $subtotal = $row['product_price']*$values['quantity'];
                            $total += $subtotal;
                            
                            echo "
                            <tr>
                            <td><a href='cart.php?action=delete&id=".$values['product_id']."'><i class='far fa-times-circle'></i></a></td>
                            <td><img src=".$values['img']."  width='50% alt='tt' '</td>
                            <td>".$row['product_title']."</td>
                            <td>".$values['size']."</td>   
                            <td>".$row['product_price']." MAD</td>
                            <td>".$values['quantity']."</td>
                            <td>".$subtotal." MAD</td>
                           
                            </tr>";
                        }
                    }
                }            
                    ?>  
                    
       
    </tbody>
</table>
</section>


<section id='cart-add' class='section-p1'>
    <div id='coupon'>
        <h3>Apply Coupon</h3>
        <div>
            <input type='text' placeholder='Enter Your Coupon'>
            <button class='normal'>Apply</button>
        </div>
    </div>
    <div id='subtotal'>
        <h3>Cart Total</h3>
        
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td> <?php echo $total ;?>  MAD</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <td><strong>Total</strong></td>
            <td><strong> <?php echo $total ;?> MAD</strong></td>
        </table>
        <button class='normal' onclick=window.open('checkout.php','_SELF')> Proceed to checkout</button>
    </div>
</section>";




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