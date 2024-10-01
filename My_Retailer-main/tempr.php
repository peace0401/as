<?php 
ob_start();
session_start();
include 'connection1.php';

include 'css/style.css';
include 'staff_header.php';

?>
<html>
    <title>Distributor|Home</title><head>         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
    
    <body>
	 <font color="#0000FF"><b><h4><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome : <?php
							
								$name=$_SESSION['login'];
								echo $name;
								?>
								</span></h4></b>
        <div class="div-center">
            <CENTER><h3 class="display-3">APPROVE USERS</h3></CENTER></font>
        <div class="container">
        <div class="row my-4">
        <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="admin_approve_stockiest.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fas fa-warehouse' style='font-size:88px;color:#0d6efd'></i>
</H2>
                        <BR><BR>
                        <h6 class="card-title"><b>STOCKIEST</h6></B>

                    </div></a>
                    
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="admin_approve_distributor.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fas fa-truck' style='font-size:88px;color:#0d6efd'></i>
</H2>
                        <BR><BR>
                        <h6 class="card-title"><b>DISTRIBUTOR</h6></B>

                    </div></a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="admin_approve_retailer.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fa fa-STORE' style='font-size:88px;color:#0d6efd'></i>
</h2>
                        <BR><BR>
                        <h6 class="card-title"><b>RETAILER</h6></B>

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