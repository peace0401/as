<?php
	 
	
	 $conn = mysqli_connect("localhost", "root", "", "stocks"); 
     
     
	
	if(!$conn){
		header("location: https://httpstat.us/404");
	}
	
	
			$sql= "select productname from orders ";
			$result =  $conn->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){

                    $d = array($row['productname']);
                    echo $d;
                }}
?> 