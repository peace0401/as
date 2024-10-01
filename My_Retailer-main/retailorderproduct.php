<?php
ob_start();
session_start();
include 'css/style.css';


include 'connection1.php';
include 'userheader.php';
    $s21 = $_SESSION['login'];
    $sql = "select * from orders where name ='$s21'";
    $result = $conn->query($sql);

?>
<html>


<head> 
<title>products </title>
<style>.material-icons.md-48 { font-size: 48px; }
    </style>
<link rel="icon" href="test.png" sizes="96x96" type="image/png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    
    <body>
        <h1>
  <a href="userhome.php"><h3> <font color="#0000FF" > <i class="material-icons md-48" >arrow_circle_left</i></font></h3></a>
</h1>
 <div class="div-center"><font color="#0000FF"><b><h1>My Orders</h1></b></font></div>
 <div class="div-center">
        
								<div class="col-md-12">
								
							
									<table class="table table-hover" id="list">
        
        
    <tr>
        
        <th>Product Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Quantity&nbsp;&nbsp;&nbsp;  </th>
        
        <th>Total Amount&nbsp;&nbsp;&nbsp; </th>
		
        <th>action&nbsp;&nbsp;&nbsp;&nbsp;</th>
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>
            <td><?php echo $row['productname']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td>&#8377;<?php echo $row['total']; ?></td>
              <td >
              <div class="btn-group-vertical">
    <form method="post">		
    <button class="btn btn-danger btn-xs" type="submit" name='prescribe1'><i class="material-icons">delete</i></button>			
    <input type='hidden' name='prescribe1' value="<?php echo $row['id'];?>" >

<?php     if(isset($_POST['prescribe1'])){
    
         $sl=$_POST['prescribe1'];
         //echo $sl;
         
     $_SESSION['sl']= $sl;
     $sql= "delete from orders where id ='$sl' ";
      $result1 = $conn->query($sql);
      if($result1){
        header("Location:retailorderproduct.php");
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