<?php include 'admin_inc/header.php';
if(isset($_POST['delete'])){
  $product_id = $_POST['product_id'];
  $delete = "DELETE FROM products WHERE product_id = $product_id";
  $con->query($delete);
  header("Location: product.php");
}

?>

        <div class="sidebar">
          <a href="index.php">
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
          <a href="#" class="active">
            <span class="material-icons-sharp">inventory</span>
            <h3>Products</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
          </a>
          <a href="add_product.php">
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
        <h1>Products</h1>

        <div class="date">
          <input type="date" value="<?php echo date('Y-m-d'); ?>"/>
        </div>

       

        <div class="recent-orders">
          <h2>Our Product</h2>
          <table>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product image</th>
                <th>Product Price</th>
                <th>Product description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
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

              echo' <tr>
                            <td> '.$field3name.' </td>
                            <td> <img  src="../'.$field5name.'"  style="width: 70px;" /></td>
                            <td> '.$field10name.' </td>
                            <td>'.$field11name.' </td>
                            <td>
            <form action="" method="post">
                <input type="hidden" name="product_id" value="'.$field1name.'">
                <button class="btn btn-danger" type="submit" name="delete" value="Delete"><i class="far fa-times-circle"></i></button>
            </form>
        </td>
                        </tr>';
          }
        }
        ?>
            </tbody>
          </table>

          <a href="#">Show All</a>
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
