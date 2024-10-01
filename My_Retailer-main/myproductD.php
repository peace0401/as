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

    
 <div class="div-center"><font color="#0000FF"><b><h1>Product Details</h1></b></font></div>

 <div class="div-center">
          <div class="div-center">
		
		
			<div class="row">
								<div class="col-md-12">
								
							
									<table class="table table-hover" id="list">
        
        
    <tr>
        <th>Id</th>
        <th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Price&nbsp;&nbsp;&nbsp;  </th>
        
        <th>Description&nbsp;&nbsp;&nbsp; </th>
		<th>Offer&nbsp;&nbsp;&nbsp;  </th>
        <th>Stock &nbsp;&nbsp;&nbsp; </th>
        <th>Specification</th>
			<th>Shipping Days</th>
		<th>Shipping Charges</th>
        <th>action&nbsp;&nbsp;&nbsp;&nbsp;</th>
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
           <td class="center"><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['offer']; ?></td>
        
        
            <td><?php echo $row['stock']; ?></td>
			 <td><?php echo $row['specification']; ?></td>
			  <td><?php echo $row['shippingdays']; ?></td>
			  <td><?php echo $row['charges']; ?></td>
              <td >
              <div class="btn-group-vertical">

              
<a href="upload.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you want to add image?')">
					
    <button class="btn btn-warning btn-xs" name='add1' type="submit"><i class="material-icons">addimage</i></button>		
    </a>
     
     <br><form></form>  

<a href="editproductdi.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you want to edit?')">

    <button class="btn btn-info btn-xs" name='edit' type="submit"><i class="material-icons">edit</i></button></a>
     
    <br><form></form>
    <form method="post">		
    <button class="btn btn-danger btn-xs" type="submit" name='prescribe1'><i class="material-icons">delete</i></button>			
    <input type='hidden' name='prescribe1' value="<?php echo $row['id'];?>" >

<?php     if(isset($_POST['prescribe1'])){
    
         $sl=$_POST['prescribe1'];
         //echo $sl;
         
     $_SESSION['sl']= $sl;
     $sql= "delete from addpdis where id ='$sl' ";
      $result1 = $conn->query($sql);
      if($result1){
        header("Location:myproductD.php");
      }
     }                                             
                                                  
                                                  
     ?>
        
 </form>


							
 </td>
        </tr>						
						
												</div>
		
    <?php            
        }
    }
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            
           
        }
            
        ?>
    </table>    
        
        </div>
    
        
        
        
        
    </body>


</html>