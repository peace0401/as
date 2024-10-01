<?php
ob_start();
include 'css/style.css';
session_start();
include 'connection1.php';
include 'userheader.php';

$orderguy=$_SESSION['orderman'];


    $sql = "select * from orders where name ='$orderguy' ";
    $result = $conn->query($sql);

?>
<html>


<head> 
<title>products </title>
<style>.material-icons.md-48 { font-size: 48px; }
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    
    <body>
    <a href="userhome.php"><h3> <font color="#0000FF" > <i class="material-icons md-48" >arrow_circle_left</i></font></h3></a>

    
<center> <font color="#0000FF"><b><h1>Delivery Details</h1></b></font></center>

 
          <div class="div-center">
		
		
			<div class="row">
								<div class="col-md-12">
								
							
									<table class="table table-hover" id="list">
        
        
    <tr>  <th>Order No</th>      
		<th>Product Name&nbsp;&nbsp;&nbsp;  </th>
        <th>Quantity &nbsp;&nbsp; </th>
        <th>Cost&nbsp;&nbsp;</th>
        <th>Order Status&nbsp;&nbsp;</th>
        <th>Shipping Status&nbsp;&nbsp;</th>


    
			
        <th>Action&nbsp;&nbsp;&nbsp;&nbsp;</th>
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>            <td><br><?php echo $row['id']; ?></td>

            <td><br><?php echo $row['productname']; ?></td>
            <td><br><?php echo $row['quantity']; ?></td>
            <td><br><?php echo $row['total']; ?></td>
            <td><p style="color:green"><b>
<?php echo $row['shipconfirm']; ?></p></b></td>
        
        
            <td><?php if($row['handdate']=="pending"){ echo $row['ship'];}else{ echo $row['recived'];
 }
       ?><br><?php if($row['ship']>0){echo "on";} ?><br><?php  if($row['handdate']=="pending"){echo $row['shipdate'];}else{ echo $row['handdate'];} ?></td>  
              <td >
              <div class="btn">

           <form method="post">   
<input type="hidden" name="someshit"  value=<?php echo $row['id'];?>>
<input type="hidden" name="quantityless"  value=<?php echo $row['quantity'];?>>
<input type="hidden" name="whiteflash"  value=<?php echo $row['productname'];?>>


					
    <button class="btn btn-success btn-sm " name='add1' type="submit">OrderRecived</button>		
    </a>
     
     <br></form>  
                                          
                                                  
                                                  
    
        



							
 </td>
        </tr>						
						
												</div>
		
    <?php            
        }
    }
        if(isset($_POST['add1'])){
            $id = $_POST['someshit'];
            $naruto = $_POST['quantityless'];
            $kakashi = $_POST['whiteflash'];
            $_SESSION['sakura'] = $naruto;
            $_SESSION['obitto'] = $kakashi;

            $di = date("d/m/Y");
            $bruh = "Recived";
            $sql2 = "update orders set handdate = '$di', recived='$bruh' where id= '$id' ";
            $result = $conn->query($sql2);
            if($result){
				header("Location:changequantity.php");
                
            }
        }
            
        ?>
    </table>    
        
        </div>
    
        
        
        
        
    </body>


</html>