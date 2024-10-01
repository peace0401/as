<?php 
session_start();

include 'css/style.css';
include 'connection1.php';
include 'staff_header.php';

?>
<html>
    <title>distributer</title>
    <head>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <a href="distributorhome.php"><h3> <font color="#0000FF" > <span class="material-icons" >arrow_circle_left</span></font></h3></a>

    <div class="form-center">
        <form name="firstline" method="post"  >
        <table>
        <tr>
            <td id="center"><h1>Add Products</h1></td>
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
            <td><input name="offer" type="text" placeholder="offer" required></td>
			
        <tr>
        <tr>
            <td><input name="stock" type="text" placeholder="Stock" required></td>
			
        <tr>
        
        <tr>
            <td><textarea name="specification" placeholder="Specification" required></textarea></td>
        </tr>
		 <tr>
            <td><input name="shippingdays" type="text" placeholder="shipping days" required></td>
</tr>
<tr>
            <td><input name="charges" type="text" placeholder="Shipping Charges" required></td>
			
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
    $offer= $_POST['offer'];
    $stock = $_POST['stock'];
    $specification = $_POST['specification'];
    $shippingdays = $_POST['shippingdays'];
	$charges = $_POST['charges'];
    $um= $_SESSION['login'];
	

        $sql = "insert into addpdis(name,price,description,offer,stock,specification,shippingdays,charges,user)VALUES ('$name','$price','$description','$offer','$stock','$specification','$shippingdays','$charges','$um')";
    
        $res = $conn->query($sql);

			if($res) { 
                
                echo '<script type="text/javascript">';
                echo ' alert("Product Added successfully")';  //not showing an alert box.
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

 