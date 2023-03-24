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
</head>
<body>

<style>

/*Blog page*/
#page-header.blog-header{
    background-image: url("img/banner/b19.jpg");
    background-repeat: no-repeat;
}

#blog{
    padding:150px 150px 0px 150px;
}

#blog .blog-box{
    display: flex;
    align-items: center;
    width: 100%;
    position: relative;
   
}

#blog .blog-img{
    width: 50%;
    margin-right: 40px;

}


#blog img{
    width: 100%;
    height: 300px;
    object-fit: cover;

}

#blog .blog-img{
    width: 50%;
    margin-right: 40px;
}

.blog-details{
    width: 50%;
}

#blog .blog-details a{
    text-decoration: none;
    font-size: 11px;
    color: #000;
    font-weight: 700;
    position: relative;
    transition: 0.3s;
}

#blog .blog-details a::after{
    content:"";
    width: 50px;
    height: 1px;
    background-color: #000;
    position: absolute;
    top: 4px;
    right: -60px;
}
#blog .blog-details a:hover{
    color: #232d60;
}
#blog .blog-details a:hover::after{
    background-color: #232d60; 
}

#blog .blog-box h1{
    position: absolute;
    top:-40px;
    left: 0;
    font-size: 70px;
    font-weight:700;
    color: #c9cbce;
    z-index: -1;
}

@media (max-width: 477px) {
    #page-header.blog-header {
    background-image: url("img/banner/b19.jpg");
  
}
    #blog .blog-box {
    display: flex;
    flex-direction: column;
    align-items: flex-start; 
   
}
    #blog{
        padding: 100px 20px 0 20px
    }
    
    #blog .blog-img{
        width: 100%;
        margin-right: 0px;
        margin-bottom: 30px;
    }
    #blog .blog-details{
        width: 100%;
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
                <li><a class="active" href="blog.php">Blog</a></li>
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

<section id="page-header" class="blog-header">
        <h2>#readmore</h2>
        <p>Read all case studies about our products! </p>
    </section>

    

<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/blog/b1.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersy Zip-Up Hoodie</h4>
            <p>Kickstorter man braid godard coloring book. Raclette
waistcoat selfes yr wolf chartreuse hexagon irony.
godard...</p>
<a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
</section>
<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/blog/b5.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersy Zip-Up Hoodie</h4>
            <p>Kickstorter man braid godard coloring book. Raclette
waistcoat selfes yr wolf chartreuse hexagon irony.
godard...</p>
<a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
</section><section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/blog/b3.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersy Zip-Up Hoodie</h4>
            <p>Kickstorter man braid godard coloring book. Raclette
waistcoat selfes yr wolf chartreuse hexagon irony.
godard...</p>
<a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
</section><section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/blog/b2.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersy Zip-Up Hoodie</h4>
            <p>Kickstorter man braid godard coloring book. Raclette
waistcoat selfes yr wolf chartreuse hexagon irony.
godard...</p>
<a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
</section><section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/blog/b4.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersy Zip-Up Hoodie</h4>
            <p>Kickstorter man braid godard coloring book. Raclette
waistcoat selfes yr wolf chartreuse hexagon irony.
godard...</p>
<a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
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