<?php include 'admin_inc/header.php';
if(isset($_POST['delete'])){
  $customer_id = $_POST['customer_id'];
  $delete = "DELETE FROM customers WHERE customer_id = $customer_id";
  $con->query($delete);
  header("Location: customer.php");
}

?>

        <div class="sidebar">
          <a href="index.php">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>
          <a href="#" class="active">
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
        <h1>Customers</h1>

        <div class="date">
          <input type="date" value="<?php echo date('Y-m-d'); ?>"/>
        </div>
        
        <div class="recent-orders">
          <h2>Our Customers</h2>
          <table>
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Country</th>
                <th>Customer City</th>
                <th>Customer Address</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php 
        $query = "SELECT * FROM customers  WHERE customer_name != 'admin'";

        if ($result = $con->query($query)) {
          while ($row = $result->fetch_assoc()) {
              $field1name = $row["customer_id"];
              $field2name = $row["customer_name"];
              $field3name = $row["customer_email"];
              $field5name = $row["customer_country"]; 
              $field6name = $row["customer_city"]; 
              $field7name = $row["customer_address"]; 
              
              echo' <tr>
              <td> '.$field2name.' </td>
              <td>'.$field3name.'</td>
              <td> '.$field5name.' </td>
              <td>'.$field6name.' </td>
              <td> '.$field7name.' </td>
              <td>
              <form action="" method="post">
              <input type="hidden" name="customer_id" value="'.$field1name.'">
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
