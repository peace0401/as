<?php
ob_start();
session_start();
include'css/style.css';
include'connection1.php';
include'userheader.php';

?>
<html>
<title>Home</title><head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>


    <?php
        
        $uid = $_SESSION['uid'];
        ?>
    
    <body>
        
	<table> <tr><td><span style='font-size:40px;'></span></td><td>
		<font color="#0000FF"><b><h4><span>&nbsp;&nbsp;Welcome : <?php
							
								$name=$_SESSION['login'];
								echo $name;
                                $_SESSION['rname']=$name;
                                $_SESSION['orderman']=$name;
                                

								
								?>
								</span></h4></b></font> </td></table>
        <div class="div-center">
        <div class="container">
        <div class="row my-4">
        <div class="col-md-4">
                <div class="card text-center h-100"style=" border:2px solid #0d6efd;">
                    <a href="retailbuyproduct.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fas fa-shopping-bag' style='font-size:88px;color:#0d6efd'></i>
</H2>
                        <BR><BR>
                        <h6 class="card-title"><b>BUY PRODUCT</h6></B>

                    </div></a>
                    
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card text-center h-100"style=" border:2px solid #0d6efd;">
                    <a href="retailorderproduct.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
                        <h2><i class='fas fa-dolly-flatbed' style='font-size:88px;color:#0d6efd'></i>
</H2>
                        <BR><BR>
                        <h6 class="card-title"><b>ORDERS</h6></B>

                    </div></a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100" style=" border:2px solid #0d6efd;">
                    <a href="deliveryretail.php" STYLE="text-decoration:none;"><div class="card-block" WIDTH="200PX" HIEGHT="200PX">
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
        <div class="d-flex justify-content-end" style="font-size:44px">
        <a href="bot/bot.php">
        <i class="fas fa-robot swing animated infinite" style="color:blue"></i>
</a></div>

        
    </div>            

       


        </div>
    </body>



</html>