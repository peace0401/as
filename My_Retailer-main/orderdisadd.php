<?php
	 session_start();
	
	 $conn = mysqli_connect("localhost", "root", "", "stocks"); 
     
     
	
	if(!$conn){
		header("location: https://httpstat.us/404");
	}
	
	        $new1 =$_SESSION['pnamefordis'];
			$sql= "select user from addpdis where name ='$new1' ";
			$result =  $conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){

                    $d = $row['user'];
                    $sql123="update orders set orderdis='$d' where productname='$new1'";
                    $result1 =  $conn->query($sql123);
                    
                    header("Location:userhome.php");
                   

                }}
?> 