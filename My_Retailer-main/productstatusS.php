<?php
ob_start();
include 'css/style.css';


include 'connection1.php';
include 'doctorheader.php';

    $sql = "select * from addpdis where type='stock'" ;
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
    <a href="stockhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    
 <center><font color="#0000FF"><b><h1>Product Details</h1></b></font></div></center>

          <div class="div-center">
		
		
			<div class="row">
								
							
									<table class="table table-hover" id="list">
        
        
    <tr>
        <th>Image</th>
        <th>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Price&nbsp;&nbsp;&nbsp;  </th>
        
        <th>Description&nbsp;&nbsp;&nbsp; </th>
        <th>Stock &nbsp;&nbsp;&nbsp; </th>
        <th>Specification</th>
		
        <th>action&nbsp;&nbsp;&nbsp;&nbsp;</th>
        

      
		
        </tr>
        <tr  >
        <?php
            if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
   ?>    <td><?php
echo '
				<img src="data:image/jpeg;base64,'.base64_encode($row['filename']).'" style="width: 100px ;">
				';
 ?>  </td>
            <td><br><br><?php echo $row['name']; ?></td>
            <td><br><br><?php echo $row['price']; ?></td>
            <td><br><br><?php echo $row['description']; ?></td>
            <td><br><br><?php echo $row['stock']; ?></td>
			  <td><br><br><?php echo $row['specification']; ?></td>
              <td >
              <div class="btn-group-vertical">

              
<a href="uploadS.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you want to add image?')">
					
    <button class="btn btn-warning btn-xs" name='add1' type="submit"><i class="material-icons">addimage</i></button>		
    </a>
     
     <br><form></form>  

<a href="editmyproductS.php?id=<?php echo $row['id']?>" onClick="return confirm('Are you sure you want to edit?')">

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
        header("Location:myproductS");
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
				header("Location:myproductSs.php");
                echo 'Data Deleted';
            }
        }
            
        ?>
    </table>    
        
        </div>
    
        
        
        
        
    </body>


</html>