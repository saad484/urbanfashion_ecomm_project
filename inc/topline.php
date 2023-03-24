   <!-- topline -->
<div class="page-header__topline">
      <div class="container clearfix">
        <div class="currency">
          <a class="currency__change" href="cart.php">
  <?php
          if(!isset($_SESSION['customer_name'])){
          echo "Welcome :Guest"; 
         } 
          else
          { 
              echo "Welcome : " . $_SESSION['customer_name'] . "";
            }

  ?>  
          </a>  


  <?php 
    if(!isset($_SESSION['customer_name'])){
              echo '<a class="currency__change" href="signup.php" >Register</a>';
        } 
           
        
    if(!isset($_SESSION['customer_name'])){
                echo '<a class="currency__change" href="login.php" class="login__link">Sign In</a>';
              } 
               else
                { 
                    echo '<a class="currency__change" href="logout.php" class="login__link">Log out</a>';
                } 

  ?>

    </div>
  </div>
</div>







