<?php
ob_start();
include('checklogin.php');
include'css/header.css';
?>
<html>
    
<body>
    <div class="header">
  <a href="userhome.php" class="logo">My Retailer</a>
  <div class="header-right">
    <a class="active" href="userhome.php">Home</a>
    <a href="makecomplaint.php">Complaints</a>
    <a href="profileretail.php">Profile</a>

    <a href="logout.php">Logout</a>
  </div>
</div>
   
    </body>
</html>