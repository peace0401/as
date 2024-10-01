<?php 
ob_start();
include 'css/style.css';
include 'connection1.php';
include 'doctorheader.php';
$id=$_GET["id"];
 $sql = "select * from addpdis where id='$id'";
    $result = $conn->query($sql);

?>
<html>
<?php

	  if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){  
   
    
?>
    <title>EDIT PRODUCTS</title>
    <head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	
    <script></script>
    </head>
    <body>
	<br>
    <a href="myproductS.php"><h3> <font color="#0000FF" size="12px"> <span class="material-icons" style="12px" >arrow_circle_left</span></font></h3></a>

    <div class="form-center">
        <form name="registration" method="post" action="editproductstock.php">
        <table>
        <tr>
            <td id="center"><h1>Product Details</h1></td>
            <input type="hidden" name ="he" value="<?php echo $row['id']; ?>">
        </tr>
		 <tr>
            <td><label >Name</label>
			<input name="name" type="text" value="<?php echo $row['name']; ?>"></td>
		</td>
        </tr>
        <tr>
            <td><label >Price</label><input name="price" type="text" value="<?php echo $row['price']; ?>" ></td>
        </tr>
		 <tr>
            <td><label >Description</label><input name="description" type="text" value="<?php echo $row['description']; ?>" ></td>
        </tr>
       
        <tr>
            <td><label >Stock</label><input name="stock" type="text" value="<?php echo $row['stock']; ?>"></td>
        </tr>
        <tr>
            <td><label >Specification</label><input name="specification" type="text" value="<?php echo $row['specification']; ?>"></td>
        </tr>
      s
        <tr><center>
            <td>  <input name="submit" type="submit" value="Add"></td></center>
        </tr>
        
        </table>
        </form>
         

        </div>
    
    </body>
</html>
       
          <?php     
        }
    }
       




