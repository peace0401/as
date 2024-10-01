<?php 
session_start();
include 'css/style.css';
include 'connection1.php';
include 'doctorheader.php';
?>
<html>
    <title>stockiest</title>
    <head>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <a href="stockhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    <div class="form-center">
        <form name="firstline" method="post"  >
        <table>
        <tr>
            <td><h1>Add Products</h1></td>
        </tr>
		
        <tr>
            <td><input name="localbody" type="text" placeholder=" Name" required></td>
        </tr>
        
        <tr>
            <td><input name="price" type="text" placeholder="Price" required></td>
			
        <tr>
        <tr>
            <td><input name="description" type="text" placeholder="Description" required></td>
			
        <tr>
       
        <tr>
            <td><input name="stock" type="text" placeholder="Stock" required></td>
			
        <tr>
        
        <tr>
            <td><textarea name="specification" placeholder="Specification" required></textarea></td>
        </tr>
		 
        <tr>
            <td><input name="submit" type="submit" value="Add"></td>
        </tr>
        
        </table>
            <?php
if(isset($_POST['submit'])){
    $name = $_POST['localbody'];
	$price = $_POST['price'];
	$description = $_POST['description'];
    $stock = $_POST['stock'];
    $specification = $_POST['specification'];
	$role = "stock";
    $userS = $_SESSION['login'];

        $sql = "insert into addpdis(name,price,description,stock,specification,type,userS)VALUES ('$name','$price','$description','$stock','$specification','$role','$userS')";
    
        $res = $conn->query($sql);

			if($res) { 
                
                echo '<script type="text/javascript">';
                echo ' alert("Product added Successfully")';  //not showing an alert box.
                echo '</script>';
                
                
			}else{
				echo "Failed to Add Data";
			}
    
    }
?>
        </form>
        </div>
    
    </body>
</html>

 