<?php
ob_start();
session_start();
include 'css/style.css';


include 'connection1.php';
include 'staff_header.php';
$user = $_SESSION['login'];

$sql = "select * from addpdis where user = '$user' or type='stock' ";
$result = $conn->query($sql);

?>
<html>


<head> 
<title>products </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    
    <body>
    <a href="distributorhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    
 <center><font color="#0000FF"><b><h1>Product Details</h1></b></font></div></center>

          <div class="div-center">
		
		
			<div class="row">
								<div class="div-center">
							
									<table class="table table-hover" id ="list" >
        
        
    <tr>
        <th>Image</th>
        <th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Price</th>
        <th>Offer</th>

        <th>Description&nbsp;&nbsp;&nbsp; </th>
        <th>Stock &nbsp;&nbsp;&nbsp; </th>
        <th>Specification</th>
        <th>Shipping Days</th>

        <th>Shipping Charge</th>

		
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>    <td><?php
echo '
				<img src="data:image/jpeg;base64,'.base64_encode($row['filename']).'" style="width: 200px hight: 200px;">
				';
 ?>  </td>
            <td><br><br><?php echo $row['name']; ?></td>
            <td><br><br><?php echo $row['price']; ?></td>
            <td><br><br><?php echo $row['offer']; ?></td>

            <td><br><br><?php echo $row['description']; ?></td>
            <td><br><br><?php echo $row['stock']; ?></td>
			  <td><br><br><?php echo $row['specification']; ?></td>
              <td><br><br><?php echo $row['shippingdays']; ?></td>
              <td><br><br><?php echo $row['charges']; ?></td>

             
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
				header("Location:myproductSs.php");
                echo 'Data Deleted';
            }
        }
            
        ?>
    </table>    
        
        </div>
    
        
        
        
        
    </body>


</html>