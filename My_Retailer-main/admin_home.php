<?php 
ob_start();
session_start();
include 'connection1.php';
include 'header.php';
include 'css/style.css';
include('checklogin.php');
check_login();
?>
<html>
    <title>Admin|Home</title>
    
    <body>
	
	 <?php include 'back_btn.php'; ?>
	  <font color="#0000FF"><b><h4><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome : <?php
							
								$name=$_SESSION['login'];
								echo $name;
								?>
								</span></h4></b></font> 
	   <div class="div-center"><font color="#0000FF"><b><h1>Approve Users</h1></b></font></div>
        <div class="div-center">
          <div class="div-center">
		  <table>
		<tr>

		<td><div><img src="images/stock.jpg"/></div></td>
		<td><div><img src="images/Distributor.jpg"/></div></td>
		<td><div><img src="images/retail.jpg"/></div></td>
		</tr>
        <tr>
		
         <td><a href="admin_approve_stockiest.php"><center><font color="#0000FF"><b>STOCKIEST</b></font></center></a></td> <td><a href="admin_approve_distributor.php"><center><font color="#0000FF"><b>DISTRIBUTOR</b></font></center></a></td> <td><a href="admin_approve_retailer.php"><center><font color="#0000FF"><b> RETAILER</b></font></center></a></td>
        </tr>
        </tr>
        
        </table>
		</div>
        </div>
    </body>

</html>