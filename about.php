<?php include "inc/db.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="backend.css">
    <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>


<style>
 #about-story {
    padding: 100px;
    background-color: #f7f7f7;
    text-align: center;
}

#about-story h3 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
}

#about-story p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
    text-align: justify;
}

#about-story img {
    max-width: 100%;
    height: auto;
    margin: 0 auto;
    display: block;
    margin-bottom: 20px;
}

</style>


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

</style>

<?php include 'inc/topline.php';?>

<section id="header">
    
        <a href="index.php"><img src="UrbanImg/logo.png" alt="" width="200px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
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

<section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>UrbanFashion is more than just a fashion brand</p>
</section>

<section id="about-story">

    <p>We are a community of like-minded individuals who believe in using fashion as a force for good. We believe that by shopping with us, you are not only investing in your own personal style, but you are also investing in a better future for everyone.</p>
    <p>Our mission is to create fashion that is not only trendy and fashionable, but also sustainable and ethically made. We use only the highest quality materials and work with suppliers who share our values. We are committed to reducing our environmental impact and being transparent about our production processes.</p>
    <p>In addition to creating sustainable and ethically made clothes, we also give back to the community through various charitable initiatives. We believe that it is our responsibility to use our platform to make a difference in the world and we are constantly looking for new ways to give back.</p>

</section>
    
<?php include 'inc/footer.php';?>