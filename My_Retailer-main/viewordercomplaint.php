<?php
ob_start();
include 'css/style.css';


include 'connection1.php';
include 'staff_header.php';

    $sql = "select * from orders where id = '".$_GET['id']."' ";
    $result = $conn->query($sql);

?>
<html>


<head> 
<title>products </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    
    <body>
    <a href="showcomplaint.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    
 <div class="div-center"><font color="#0000FF"><b><h1>Order Details</h1></b></font></div>

 <div class="div-center">
          <div class="div-center">
		
		
			<div class="row">
								<div class="col-md-12">
								
							
									<table class="table table-hover" id="list">
        
        
    <tr>
        <th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Phone&nbsp;&nbsp;&nbsp;  </th>
        
        <th>Address&nbsp;&nbsp;&nbsp; </th>
		<th>Product Name&nbsp;&nbsp;&nbsp;  </th>
        <th>Quantity &nbsp;&nbsp;&nbsp; </th>
        <th>Amount</th>
		
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['productname']; ?></td>
        
        
            <td><?php echo $row['quantity']; ?></td>
			 <td><?php echo $row['total']; ?></td>
			  
              
        </tr>						
						
												</div>
		
    <?php            
        }
    }
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            $sql2 = "delete from tbl_containment where id= '$id' ";
            $result = $conn->query($sql2);
            if($result){
				header("Location:staff_view_containment.php");
                echo 'Data Deleted';
            }
        }
            
        ?>
    </table>    
        
        </div>
    
        
        
        
        
    </body>


</html>