<?php 
ob_start();
session_start();
include 'connection.php';
include 'doctorheader.php';
include 'css/style.css';
include('checklogin.php');
check_login();
?>
<html>
    <title>Stockiest|Home</title>
    <head>         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
	<font color="#0000FF"><b><h4><span>&nbsp;Welcome : <?php
							
								$name=$_SESSION['login'];
								echo $name;
								?>
								</span></h4></b></font> 
        <div class="div-center" style="margin-top:50px;">
        <div class="container">
        <div class="row my-6">
            <div class="col-md-6">
                <div class="card text-center h-350" WIDTH="250PX" style=" border:2px solid #0d6efd;">
                    <a href="addproductS.php" STYLE="text-decoration:none;"><div class="card-block ">
                        <h2><i class="fa fa-cart-plus fa-3x"></i></h2>
                        <br><br>
                        <h6 class="card-title"><b>ADD PRODUCTS</b></h6>

                    </div></a>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="myproductS.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class="fa fa-shopping-basket fa-3x"></i></h2>
                        <BR><BR>
                        <h6 class="card-title"><b>PRODUCTS</h6></B>

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