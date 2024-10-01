<?php
    
 	// Connection Config 
	 
	 session_start();

	 $id=$_GET["id"];
	 $name1=$_SESSION['login'];
								
	
	 $conn = mysqli_connect("localhost", "root", "", "stocks"); 
     
     
	
	if(!$conn){
		header("location: https://httpstat.us/404");
	}
	         $d =  date("d/m/Y");
             $p1 = "Order Confirmed";
             $p2 = "Shipped";
             $p3 = "pending";

			$sql= "update orders set shipconfirm = '$p1',ship ='$p2',shipdate='$d',handdate='$p3',orderdis='$name1' where id = '$id' ";
			mysqli_query($conn,$sql);
            header("location: deliveryD.php");
				
	?>