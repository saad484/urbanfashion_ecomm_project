
<?php include 'admin_inc/header.php';?>

<style>
.dark-theme-variables .dark-form {
    background-color: #333333;
    color: white;
}

form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0 0 20px #ccc;
}


label {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
}

input[type="text"], textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type="file"]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    background-color:  var(--color-primary);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}




input[type="submit"]:hover {
    background-color: #45a049;
}

</style>

<div class="sidebar">
  <a href="index.php" >
    <span class="material-icons-sharp">grid_view</span>
    <h3>Dashboard</h3>
  </a>
  <a href="customer.php">
    <span class="material-icons-sharp">person_outline</span>
    <h3>Customers</h3>
  </a> 
  <a href="messages.php">
    <span class="material-icons-sharp">mail_outline</span>
    <h3>Messages</h3>
    <span class="message-count"><?php echo $message_count; ?></span>
  </a>
  <a href="product.php">
    <span class="material-icons-sharp">inventory</span>
    <h3>Products</h3>
  </a>
  <a href="#">
    <span class="material-icons-sharp">settings</span>
    <h3>Settings</h3>
  </a>
  <a href="#" class="active">
    <span class="material-icons-sharp">add</span>
    <h3>Add Product</h3>
  </a>
  <a href="../logout.php">
    <span class="material-icons-sharp">logout</span>
    <h3>Logout</h3>
  </a>
</div>
</aside>
<!------------------ END OF ASIDE ------------------>
<main>
<h1>Add Products</h1>

  <div class="date">
    <input type="date" value="<?php echo date('Y-m-d'); ?>"/>
  </div>
  
  
  <div class="recent-orders">
  <?php 
  
    // check if the form has been submitted
    if (isset($_POST['submit'])) {
        // retrieve form data
        $product_title = $_POST['product_title'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];
        $product_img4 = $_FILES['product_img4']['name'];
        $product_img5 = $_FILES['product_img5']['name'];
        $target = "../img/products/" .basename($product_img1);
        $target2 = "../img/products/" .basename($product_img2);
        $target3 = "../img/products/" .basename($product_img3);
        $target4 = "../img/products/" .basename($product_img4);
        $target5 = "../img/products/".basename($product_img5);
        // validate form data
        if (empty($product_title) || empty($product_price) || empty($product_desc)) {
            echo "Please fill in all fields";
        } else {
            // sanitize form data
            $product_title = mysqli_real_escape_string($con, $product_title);
            $product_price = mysqli_real_escape_string($con, $product_price);
            $product_desc = mysqli_real_escape_string($con, $product_desc);
            // build SQL query
            $query = "INSERT INTO products (date, product_title, product_img1, product_img2, product_img3, product_img4, product_img5, product_price, product_desc) VALUES (now(), '$product_title', 'img/products/$product_img1', 'img/products/$product_img2', 'img/products/$product_img3', 'img/products/$product_img4', 'img/products/$product_img5', '$product_price', '$product_desc')";
            // execute query
            if (mysqli_query($con, $query)) {
                move_uploaded_file($_FILES['product_img1']['tmp_name'], $target);
                move_uploaded_file($_FILES['product_img2']['tmp_name'], $target2);
                move_uploaded_file($_FILES['product_img3']['tmp_name'], $target3);
                move_uploaded_file($_FILES['product_img4']['tmp_name'], $target4);
                move_uploaded_file($_FILES['product_img5']['tmp_name'], $target5);
                echo "Product added successfully";
                header("Location: product.php"); // redirect to product page
              } else {
                  echo "Error: " . mysqli_error($con);
              }
          }
      }
  ?>
  
      <form  method="post" action="" enctype="multipart/form-data" class="dark-form" >
      <label for="product_title">Product Title:</label>
      <input type="text" name="product_title" id="product_title"> <br><br>
      <label for="product_price">Product Price:</label>
      <input type="text" name="product_price" id="product_price"> <br><br>
      <label for="product_desc">Product Description:</label>
      <textarea name="product_desc" id="product_desc"></textarea> <br><br>
      <label for="product_img1">Product Image 1:</label>
      <input type="file" name="product_img1" id="product_img1"> <br><br>
      <label for="product_img2">Product Image 2:</label>
      <input type="file" name="product_img2" id="product_img2"> <br><br>
      <label for="product_img3">Product Image 3:</label>
      <input type="file" name="product_img3" id="product_img3"> <br><br>
      <label for="product_img4">Product Image 4:</label>
      <input type="file" name="product_img4" id="product_img4"> <br><br>
      <label for="product_img5">Product Image 5:</label>
      <input type="file" name="product_img5" id="product_img5"> <br><br>
      <input type="submit" name="submit" value="Add Product">
      </form>
</div>
</main>
<!----------------- END OF MAIN -------------------->

<div class="right">
<div class="top">
  <button id="menu-btn">
    <span class="material-icons-sharp">menu</span>
  </button>
  <div class="theme-toggler">
    <span class="material-icons-sharp active">light_mode</span>
    <span class="material-icons-sharp">dark_mode</span>
  </div>
  <div class="profile">
    <div class="info">
      <p>Hey, <b>Admin</b></p>
      <small class="text-muted"></small>
    </div>
    <div class="profile-photo">
     
    </div>
  </div>
</div>

</div>
</div>
</div>


<script src="./index.js"></script>
</body>
</html>
