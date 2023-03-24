
<?php
include '../inc/db.php';
session_start();
if(!isset($_SESSION['customer_name']) || $_SESSION['customer_name'] !== 'admin'){
echo "<script>window.open('../login.php','_self')</script>";
}

$query = "SELECT COUNT(*) as total FROM contact_us";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$message_count = $data['total'];



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"/>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/8a64c61570.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <aside>
        <div class="top">
          <div>
            <img src="../UrbanImg/logo.png" alt="" width="150px"/>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>