<?php 
ob_start();
session_start();
include 'connection1.php';

include 'css/style.css';
include 'staff_header.php';

?>
<html>
    <title>Distributor|Home</title><head>         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    
    <body>
	 <font color="#0000FF"><b><h4><span>&nbsp;Welcome : <?php
							
								$name=$_SESSION['login'];
								echo $name;
								?>
								</span></h4></b></font>   
        <div class="div-center">
        <div class="container">
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card text-center h-350" WIDTH="250PX" style=" border:2px solid #0d6efd;">
                    <a href="addproductD.php" STYLE="text-decoration:none;"><div class="card-block ">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg></h2>
                        <br><br>
                        <h6 class="card-title"><b>ADD PRODUCTS</b></h6>

                    </div></a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="myproductD.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
</svg></h2>
                        <BR><BR>
                        <h6 class="card-title"><b>PRODUCTS</h6></B>

                    </div></a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="myproduct.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg></i></h2>
                        <BR><BR>
                        <h6 class="card-title"><b> ALL PRODUCTS</h6></B>

                    </div></a>
                    
                </div>
            </div> <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="Ordershipping.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fas fa-dolly-flatbed' style='font-size:88px;color:#0d6efd'></i>
</H2>
                        <BR><BR>
                        <h6 class="card-title"><b>ORDERS</h6></B>

                    </div></a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="deliveryD.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fas fa-shipping-fast' style='font-size:88px;color:#0d6efd'></i>
</h2>
                        <BR><BR>
                        <h6 class="card-title"><b>DELIVERY STATUS</h6></B>

                    </div></a>
                    
                </div>
            </div>            
                    
                </div>
            </div>
        </div>
    </div>
       
        </div>
    </body>

</html>